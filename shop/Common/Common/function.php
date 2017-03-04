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
