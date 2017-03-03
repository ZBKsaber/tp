<?php
namespace Admin\Controller;
// use Think\Controller;
use Tools\AdminController;

class IndexController extends AdminController {
    public function index(){
        $this->checkLogin();
        // 用户id
        $admin_id = session('admin_id');
        $admin_name = session('admin_name');
        // 根据用户id获取用户信息
        $admin_info = D('Manager')->find($admin_id);
        // 获取角色id
        $role_id = $admin_info['mg_role_id'];
        // 获取角色信息
        $role_info = D('Role')->find($role_id);
        // 获取权限的ids信息
        $auth_ids = $role_info['role_auth_ids'];
        // 获取全部权限数据
        // 顶级权限 区分是否是超级管理员
        if($admin_name === 'admin'){
            $auth_infoA = D('Auth')->where("auth_level=0")->select();
            session('auth_infoA',$auth_infoA);
            // 次顶级权限
            $auth_infoB = D('Auth')->where("auth_level=1")->select();
            session('auth_infoB',$auth_infoB);
        }else{
            $auth_infoA = D('Auth')->where("auth_level=0 and auth_id in ($auth_ids)")->select();
            session('auth_infoA',$auth_infoA);
            // 次顶级权限
            $auth_infoB = D('Auth')->where("auth_level=1 and auth_id in ($auth_ids)")->select();
            session('auth_infoB',$auth_infoB);
        }

        // 把获取的权限信息传递给模板
        $this -> assign('auth_infoA',session('auth_infoA'));
        $this -> assign('auth_infoB',session('auth_infoB'));
        $this->display();
    }

    public function checkLogin(){
        // 判断用户有没有登录
        if (empty(session('admin_id'))) {
            $this -> redirect('Manager/login','',2,'请先登录');
            exit;
        }
    }

}
