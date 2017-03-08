<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // // 获取所有的顶级分类
        // $topCate = D('Category')->where('pid=0 and status=1')->field('cat_id,cat_name')->select();
        // // 通过顶级分类的id值,获取顶级分类下的二级分类
        // foreach ($topCate as $k => &$v) {
        //     $res = D('Category')->where('status=1 and pid='.$v['cat_id'])->field('cat_id,cat_name')->select();
        //     if ($res) {
        //         $v['two_cate'] = $res;
        //     }
        // }
        // $this -> assign('topCate',$topCate);
        $this->display();
    }
}
