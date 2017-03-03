<?php
// 后台普通控制器的父类
    namespace Tools;
    use Think\Controller;
    class AdminController extends Controller{
        // 构造方法
        function __construct(){
            // 为了避免覆盖父类的构造方法,先执行父类的构造方法
            parent::__construct();
            // 用户访问权限控制
            // 获得当前正在访问的控制器和操作方法 nowc
            // 判断nowac是否在用户的角色权限列表里面存在
            // 当前请求的控制器-操作方法
            $nowac = CONTROLLER_NAME.'-'.ACTION_NAME;
            // 获得当前用户对应角色的权限列表信息
            // 用户 -- 组别 -- 权限
            // 获取用户信息
            $admin_id = session('admin_id');

            // 用户没有登录系统,就使其退出并进入到登录页面
            // 有一些操作,允许在"退出的状态"也让访问\
            $default_ac = "Manager-login,Manager-verifyImg";
            if(empty($admin_id) && strpos($default_ac,$nowac) === false){
                $js = "<script>
                    window.location.href='/index.php/Admin/Manager/login';
                </script>";
                echo $js;
            }
            $admin_name = session('admin_name');
            $admin_info = D('Manager') -> find($admin_id);
            // 获取角色信息
            $role_id = $admin_info['mg_role_id'];
            $role_info = D('Role') -> find($role_id);
            // 获取用户拥有的权限信息
            $auth_ac = $role_info['role_auth_ac'];
            // 设置默认运行访问的权限
            $allowac = "Manager-login,Manager-logout,Manager-verifyImg,Index-index";
            // 判断: $nowac是否在$auth_ac中存在
            // strpos();// 在一个大的字符串中判断小字符串从左边开始第一次出现的位置
            // 1 当前访问的权限没有在 角色对应的权限列表
            // 2 当前访问的权限也没有在 默认允许列表里面
            // 3 当前用户还不能是超级管理员
            if(strpos($auth_ac,$nowac) === false && strpos($allowac,$nowac) === false && $admin_name != 'admin'){
                echo "<script>alert('没有权限');</script>";
                exit;
            }
        }
    }
