<?php
namespace Admin\Controller;
// use Think\Controller;
use Tools\AdminController;
use Think\Verify;
class ManagerController extends AdminController {
    public function showlist(){
        $data = D('Manager') -> select();
        $role = D('Role') -> select();
        foreach ($data as $k => &$v) {
            foreach ($role as $j => $k) {
                if ($v['mg_role_id'] == $k['role_id']) {
                    $v['mg_role_name'] = $k['role_name'];
                }elseif ($v['mg_role_id'] == 0) {
                    $v['mg_role_name'] = '超级管理员';
                }
            }
        }
        $this -> assign('info',$data);
        $this->display();
    }
    /**
     * 添加管理员
     */
    public function add(){
        if ($_POST) {
            if (!is_numeric($_POST['mg_role_id'])) {
                return show(0,'非法数据');
            }
            // 检测角色id是否存在
            $res = D('Role')->find($_POST['mg_role_id']);
            if (!$res) {
                return show(0,'角色ID不存在');
            }
            $data = D('Manager') -> create($_POST);
            if (!$data) {
                // 拼接错误信息
                $error = '';
                foreach (D('Manager') -> getError() as $k => $v) {
                    $error .= $v.'<br>';
                }
                return show(0,$error);
            }
            // 给密码加密
            $data['mg_pwd'] = md5(C('MD5_PRE').trim($data['mg_pwd']));
            $data['create_time'] = time();
            // 验证通过,进行数据库写入
            $info = D('Manager') -> add($data);
            if (!$info) {
                return show(0,'添加失败');
            }
            return show(1,'添加成功',array('jumpUrl'=>'showlist'));
        }else{
            // 获取角色表
            $juese = D('Role')->field('role_id,role_name')->select();
            $this -> assign('juese',$juese);
            $this -> display();
        }
    }
    public function login(){
        // 展示页面和收集表单的逻辑区分
        if(!empty($_POST)){
            // 检验验证码
            $vry = new Verify();
            if($vry->check($_POST['verify'])){
                // 检验用户名和密码
                $userpwd = array(
                    'mg_name'=>$_POST['admin_user'],
                    'mg_pwd'=>md5(C('MD5_PRE').trim($_POST['admin_psd']))
                );
                // 以下数据操作是对用户名和密码进行校验
                // 成功:把用户名和密码所在的记录信息都返回
                // 失败:接收到null信息
                $info = D('Manager')->where($userpwd)->find();
                if($info){
                    // 判断是否被禁止登陆
                    if ($info['status'] != 1 && $info['mg_name'] != 'admin') {
                        return show(0,'暂时无法登陆');
                    }
                    // session持久化用户信息,页面跳转
                    session('admin_name',$info['mg_name']);
                    session('admin_id',$info['mg_id']);
                    return show(1,'登陆成功',array('jumpUrl'=>'/index.php/admin/index'));
                }else{
                    return show(0,'用户名或密码错误');
                }
            }else{
                return show(0,'验证码错误');
            }
        }else{
            $this->display();
        }
    }

    // 退出后台登录
    public function logout(){
        // 清除session,跳转到登录界面
        session(null);
        $this -> redirect('Manager/login');

    }
    // 显示验证码的方法
    public function verifyImg(){
        $cfg = array(
            'imageH'    =>  35,              // 验证码图片高度
            'imageW'    =>  120,             // 验证码图片宽度
            'fontSize'  =>  16,              // 验证码字体大小(px)
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',         // 验证码字体，不设置随机获取
        );
        // 实例化verify对象
        $very = new Verify($cfg);
        $very -> entry();
    }
}
