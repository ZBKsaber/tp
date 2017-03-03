<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    //用户登录系统
    public function login(){
        //展现模板
        //display()是父类Controller的方法
        $this->display();
    }

    // 用户注册
    public function register(){
        $user = new \Model\UserModel;
        // 展示表单或者提交表单
        if (!empty($_POST)) {
            // 把爱好的数组变成字符串
            // $_POST['user_hobby'] = implode(',',$_POST['user_hobby']);
            // $z = $user->add($_POST);
            // dump($z);
            $data = $user->create(); // 收集信息 表单自动验证
            if ($data) {
                // 验证成功 就会通过$data体现收集到的信息
                $data['user_hobby'] = implode(',',$data['user_hobby']);
                $z = $user->add($data);
                if($z){
                    $this->redirect('Index/index');
                }
            } else {
                // 验证失败,查看错误信息
                $this->assign('errorInfo',$user->getError());
                $this->assign('userinfo',$_POST);
                $this->display();
            }

        }else {
            $this->display();
        }
    }
}
