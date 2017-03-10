<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){
        $this->display();
    }
    //商品列表
    public function showlist(){
        // 获取二级分类的id值
        $cateId = intval(trim($_GET['cate_id']));
        // 查询所有在该分类下的子分类
        $cate = D('Category')->where('pid='.$cateId)->field('cat_id,cat_name')->select();
        if (!$cate) {
            return $this->error('暂无商品','',1);
        }
        // 获取子分类的id数组
        $arr = array();
        foreach ($cate as $k => $v) {
            $arr[] = $v['cat_id'];
        }
        $where = array(
            'goods_category_id' => array('in',$arr),
        );
        $goods = D('Goods')->where($where) -> limit(20) -> select();
        foreach ($goods as $k => &$v) {
            foreach ($cate as $i => $j) {
                if ($v['goods_category_id'] == $j['cat_id']) {
                    $v['cat_name'] = $j['cat_name'];
                }
            }
        }
        $this -> assign('cate',$cate);
        $this -> assign('catename',$_GET['cate_name']);
        $this -> assign('goods',$goods);
        $this->display();
    }

    // 商品详情
    public function detail(){
        // 获取当前要查询的商品的id值
        $goods_id = intval(trim($_GET['goods_id']));
        // 通过id查询商品
        $goods = D('Goods') -> find($goods_id);
        if (!$goods || !isset($goods)) {
            // 如果查询不到商品,跳到首页
            return $this->redirect('/',array(),0);
        }
        // 获取八个最新的商品当做展示
        $newGoods = D('Goods') -> order('goods_id desc') -> limit(8) -> select();
        $this -> assign('goods',$goods);
        $this -> assign('newGoods',$newGoods);
        $this->display();
    }
}
