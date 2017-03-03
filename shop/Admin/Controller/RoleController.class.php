<?php
namespace Admin\Controller;
// use Think\Controller;
use Tools\AdminController;
use Think\Verify;

class RoleController extends AdminController {
    public function showlist(){
        $this->checkLogin();
        // 获取角色数据,展示数据
        $info = D('Role')->select();
        $this->assign('info',$info);
        $this -> assign('auth_infoA',session('auth_infoA'));
        $this -> assign('auth_infoB',session('auth_infoB'));
        $this->display();
    }
    public function distribute($role_id){
        $role = new \Model\RoleModel();
        // 收集表单和显示表单
        if(!empty($_POST)){
            // $_POST数据需要二期制作才可以写入数据库
            // 在自定义RoleModel里面制作一个方法saveAuth,实现数据制作和存储
            $z = $role -> saveAuth($role_id,$_POST['auth_id']);
            if($z){
                $this -> redirect('showlist',array(),2,'分配权限成功');
            }else{
                $this -> redirect('distribute',array('role_id'=>$role_id),2,'分配权限失败');
            }
        }else{
            // 查询被分配角色的信息
            $role_info = D('Role')->find($role_id);

            // 角色已经拥有的权限信息(变为数组)
            $have_auth = explode(',',$role_info['role_auth_ids']);
            $this -> assign('auth_infoA',session('auth_infoA'));
            $this -> assign('auth_infoB',session('auth_infoB'));
            // 获取所有顶级权限和次顶级权限
            $auth_infoC = D('auth')->where('auth_level=0')->select();
            $auth_infoD = D('auth')->where('auth_level=1')->select();
            $this -> assign('auth_infoC',$auth_infoC);
            $this -> assign('auth_infoD',$auth_infoD);
            $this -> assign('role_info',$role_info);
            $this -> assign('have_auth',$have_auth);
            $this->display();
        }
    }
    public function checkLogin(){
        // 判断用户有没有登录
        if (empty(session('admin_id'))) {
            $this -> redirect('Manager/login','',2,'请先登录');
            exit;
        }
    }
}
