<?php
namespace Admin\Controller;
// use Think\Controller;
use Tools\AdminController;
class GoodsController extends AdminController {
    public function showlist(){
        // 对goods的model进行操作
        // 实例化model对象
        // $goods = new \Model\GoodsModel();
        // dump($goods);
        // $english = new \Model\EnglishModel();
        // dump($english);
        // $g = D('User');
        // dump($g);

        // 实例化对象,查询数据,展示数据
        // $info = D('Goods')->select();
        // 根据主键ID查询
        // $info = D('Goods')->select(9);
        // $info = D('Goods')->select('9,2');

        // 条件限制
        // D('Goods')->where('goods_price > 1000');
        // $info = D('Goods') -> select();
        //
        // D('Goods')->limit(5);
        // $info = D('Goods') -> select();
        //
        // D('Goods')->field('goods_id,goods_name');
        // $info = D('Goods') -> select();
        //
        // D('Goods')->order('goods_price desc');
        // $info = D('Goods') -> select();

        // 连贯操作
        // $info = D('Goods')->where('goods_price > 1000')->field('goods_id,goods_name')->limit(5)->select();
        $info = D('Goods')->select();
        // 测试自定义工具类
        // echo \Tools\Page::$name;

        // 实现数据分页效果
        // 1 获取总条数,每页显示条数设置
        // $cnt = D('Goods') -> count();// 获取总条数 sum() max() avg() min()
        // $per = 7;
        // 2 实例化分页类对象
        // $page_obj = new \Tools\Page($cnt,$per);
        // 3 制作一条sql语句,获得每页显示的数据
        // $sql = "select * from sw_goods order by goods_id desc ".$page_obj->limit;
        // $info = D('Goods') -> query($sql);
        // 4 制作页码列表
        // $pagelist = $page_obj -> fpage();
        // $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        // 把数据传递给模板
        $this->assign('info',$info); // 这个assign是父类的assign
        // $this->assign('pagelist',$pagelist);
        // 把获取的权限信息传递给模板
        $this -> assign('auth_infoA',session('auth_infoA'));
        $this -> assign('auth_infoB',session('auth_infoB'));
        $this->display();
    }

    public function tianjia1(){
        $goods = D('Goods');
        // 以数组的方式添加数据
        // $arr = array(
        //     'goods_name'=>'白梅手机',
        //     'goods_price'=>3600,
        //     'goods_number'=>15,
        //     'goods_weight'=>105,
        // );
        // $z = $goods -> add($arr);
        // dump($z);

        // AR方式添加数据
        $goods -> goods_name = '小米手机';
        $goods -> goods_price = 1000;
        $goods -> goods_weight = 109;
        $z = $goods -> add();
        dump($z);
        $this->display();
    }

    public function tianjia(){
        $goods = D('Goods');
        // 判断是提交表单还是显示表单
        if(!empty($_POST)){
            // 商品图片处理
            // dump($_FILES);DIE;
            if($_FILES['goods_pic']['error']==0){
                // 设置附件的存储位置
                $cfg = array(
                    'rootPath'      =>  './Public/Upload/', //保存根路径
                );
                $up = new \Think\Upload($cfg);
                // 上传附件
                // 如果附件上传成功,可以通过uploadOne的返回值查看到附件在服务器的存储情况
                $z = $up -> uploadOne($_FILES['goods_pic']);
                // 附件保存到数据库中,保存路径名
                $bigpicname = $up->rootPath. $z['savepath'].$z['savename'];
                $_POST['goods_big_img'] = substr($bigpicname,2); // 去除./

                // 给上传好的图片制作缩略图
                $im = new \Think\Image();
                // 打开原图片
                $im -> open($bigpicname);
                // 为原图片制作缩略图
                $im -> thumb(125,125); // 这个是等比例缩放的
                // 把制作好的缩略图保存到服务器上
                // 缩略图和原图在同一个目录位置
                $smallpicname = $up->rootPath. $z['savepath'].'small_'.$z['savename'];
                $im -> save($smallpicname);
                // 把缩略图保存到数据库中
                $_POST['goods_small_img'] = substr($smallpicname,2);// 去除./
            }
            // create()自动接收$_POST
            $data = $goods -> create();
            $z = $goods -> add($data);
            if($z){
                // $this -> redirect(地址,参数,间隔时间,提示信息);
                $this -> redirect('showlist',array(),2,'商品添加成功');
            }else{
                $this -> redirect('tianjia',array(),2,'商品添加失败');
            }
        }else{
            // 把获取的权限信息传递给模板
            $this -> assign('auth_infoA',session('auth_infoA'));
            $this -> assign('auth_infoB',session('auth_infoB'));
            $this->display();
        }
    }

    public function upd1(){
        $goods = D('Goods');
        // 以AR方式修改数据
        $goods -> goods_name = '坚果手机';
        $goods -> goods_price = 1200;
        $goods -> goods_weight = 120;
        $z = $goods ->where('goods_id = 166') -> save();
        dump($z);
        $this->display();
    }

    public function upd($goods_id){
        $goods = D('Goods');
        // 展示表单和更新表单的逻辑
        if(!empty($_POST)){
            $z = $goods->save($_POST);
            // if($z){
            //     // $this -> redirect(地址,参数,间隔时间,提示信息);
            //     $this -> redirect('showlist',array(),2,'商品修改成功');
            // }else{
            //     $this -> redirect('upd',array('goods_id'=>$goods_id),2,'商品修改失败');
            // }
        }else{
            // 根据id查找制定的商品
            // $info = D('Goods') -> select($goods_id);
            // 数据查询find方法,通过一维数据返回一条信息
            $info = $goods -> find($goods_id);
            $this->assign('info',$info);
            // 把获取的权限信息传递给模板
            $this -> assign('auth_infoA',session('auth_infoA'));
            $this -> assign('auth_infoB',session('auth_infoB'));
            $this->display();
        }
    }
}
