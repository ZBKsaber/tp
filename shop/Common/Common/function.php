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
