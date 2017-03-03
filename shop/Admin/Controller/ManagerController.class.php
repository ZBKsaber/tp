<?php
namespace Admin\Controller;
// use Think\Controller;
use Tools\AdminController;
use Think\Verify;
class ManagerController extends AdminController {
    public function login(){
        // 展示页面和收集表单的逻辑区分
        if(!empty($_POST)){
            // 检验验证码
            $vry = new Verify();
            if($vry->check($_POST['verify'])){
                // 检验用户名和密码
                $userpwd = array(
                    'mg_name'=>$_POST['admin_user'],
                    'mg_pwd'=>$_POST['admin_psd']
                );
                // 以下数据操作是对用户名和密码进行校验
                // 成功:把用户名和密码所在的记录信息都返回
                // 失败:接收到null信息
                $info = D('Manager')->where($userpwd)->find();
                if($info){
                    // session持久化用户信息,页面跳转
                    session('admin_name',$info['mg_name']);
                    session('admin_id',$info['mg_id']);
                    $this -> redirect('Index/index');
                }else{
                    echo '用户名或者密码错误';
                }
            }else{
                echo '验证码错误';
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