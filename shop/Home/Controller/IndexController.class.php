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

    /**
     * 抓取测试数据
     */
    public function curl(){
        $info = array();
        $info['goods_weight'] = 100;
        $info['goods_price'] = 2000;
        $info['goods_category_id'] = 1;
        $info['goods_brand_id'] = 0;
        $info['goods_create_time'] = time();
        for ($i=800; $i < 900; $i++) {
          $curl = curl_init();
          $url = 'http://mall.snail.com/item/'.$i.'-0-0.html';
          curl_setopt($curl, CURLOPT_URL, $url);
          curl_setopt($curl, CURLOPT_HEADER, 1);
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//这个是重点。
          $data = curl_exec($curl);
          //检查是否404（网页找不到）
          $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
          if($httpCode == 404) {
              continue;
          }
          // 获取抓取的内容
          $regex1 = '/<title>(.*?)<\/title>.*?<div class="imgshow">.*?<img src="(.*?)" alt="".*?<div class="item3">(.*?)<\/div>/ism';
          $res = preg_match_all($regex1, $data, $matches);
          if (!$res) {
              continue;
          }
          $info['goods_name'] = $matches['1']['0'];
          $info['goods_small_img'] = $matches['2']['0'];
          $info['goods_introduce'] = $matches['3']['0'];
          $info['goods_number'] = $i;
        // var_dump($info);exit;
        $jieguo = D('Goods') -> add($info);
          if ($jieguo) {
              echo '完成'.$i.'<br>';
          }
        }
        curl_close($curl);
    }

}
