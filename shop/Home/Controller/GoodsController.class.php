<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function index(){
        echo 'index';
    }
    //商品列表
    public function showlist(){
        $this->display();
    }

    // 商品详情
    public function detail(){
        $this->display();
    }
}
