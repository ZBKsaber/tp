<?php
// 后台权限控制器
namespace Admin\Controller;
// use Think\Controller;
use Tools\AdminController;
class AuthController extends AdminController {
    public function showlist(){
        // 获取全部权限信息,展示给模板
        $info = D('Auth') -> order('auth_path') -> select();
        $this -> assign('auth_infoA',session('auth_infoA'));
        $this -> assign('auth_infoB',session('auth_infoB'));
        $this -> assign('info',$info);
        $this->display();
    }

    public function tianjia(){
        $auth = new \Model\AuthModel();
        if(!empty($_POST)){
            $data = $auth -> create();
            if ($data == false) {
                $this -> assign('post',$_POST);
                $this -> assign('errorInfo',$auth -> getError());
                // 把获取的权限信息传递给模板
                $auth_infoC = $auth -> where('auth_level=0') -> select();
                $this -> assign('auth_infoA',session('auth_infoA'));
                $this -> assign('auth_infoB',session('auth_infoB'));
                $this -> assign('auth_infoC',$auth_infoC);
                return $this->display();
            }
            // 全路径和等级字段数据需要二期制作
            $z = $auth -> saveData($_POST);
            if($z){
                $this -> redirect('showlist',array(),2,'添加权限成功');
            }else{
                $this -> redirect('tianjia',array(),2,'添加权限失败');
            }
        }else{
            // 获取用于选择的顶级权限
            $auth_infoC = $auth -> where('auth_level=0') -> select();
            $this -> assign('auth_infoA',session('auth_infoA'));
            $this -> assign('auth_infoB',session('auth_infoB'));
            $this -> assign('auth_infoC',$auth_infoC);
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
