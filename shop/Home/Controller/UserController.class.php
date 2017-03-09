<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
class UserController extends Controller {
    //用户登录系统
    public function login(){
        //展现模板
        //display()是父类Controller的方法
        if (!empty($_POST)) {
            // 检测验证码
            $vry = new Verify();
            if(!$vry->check($_POST['verify'])){
                return show(0,'验证码错误');
            }
            // 验证用户名和密码
            $userpwd = array(
                'username'=>trim($_POST['username']),
                'password'=>md5(C('MD5_PRE').trim($_POST['password'])),
            );

            $info = D('User')->where($userpwd)->field('user_id,username')->find();
            if (!$info || !isset($info)) {
                return show(0,'用户名或者密码错误');
            }
            // session持久化用户信息,页面跳转
            session('user_name',$info['username']);
            session('user_id',$info['user_id']);
            return show(1,'登陆成功',array('jumpUrl'=>'/Index/index'));
        }else{
            $this->display();
        }
    }
    /**
     * 登陆验证码
     */
     public function verifyImg(){
         $cfg = array(
             'imageH'    =>  30,              // 验证码图片高度
             'imageW'    =>  120,             // 验证码图片宽度
             'fontSize'  =>  16,              // 验证码字体大小(px)
             'length'    =>  4,               // 验证码位数
             'fontttf'   =>  '4.ttf',         // 验证码字体，不设置随机获取
         );
         // 实例化verify对象
         $very = new Verify($cfg);
         $very -> entry();
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
                $data['password'] = md5(C('MD5_PRE').$data['password']);
                $z = $user->add($data);
                if($z){
                    $this->redirect('User/login',array(),2,'注册成功');
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
    /**
     * 退出登录
     */
     public function quit(){
         // 清除用户session
         session('user_name',null);
         session('user_id',null);
         $this -> redirect('/',array(),0);
     }
}
