<?php
/**
 * 公用的函数
 */
 function show($status,$message,$data=array()){
     $result = array(
         'status' => $status,
         'message' => $message,
         'data' => $data,
     );
     exit(json_encode($result));
 }

 function Status($status = ''){
     switch ($status) {
         case '1':
             echo '正常';
             break;
         case '0':
             echo '关闭';
             break;
         case '-1':
             echo '删除';
             break;
     }
 }
 /**
  * 获取并且格式化前端公共头部的导航
  */
  function getTopCate(){
      // 获取所有的顶级分类
      $topCate = D('Category')->where('pid=0 and status=1')->field('cat_id,cat_name')->select();
      // 通过顶级分类的id值,获取顶级分类下的二级分类
      foreach ($topCate as $k => &$v) {
          $res = D('Category')->where('status=1 and pid='.$v['cat_id'])->field('cat_id,cat_name')->select();
          if ($res) {
              $v['two_cate'] = $res;
          }
      }
      return $topCate;
  }
