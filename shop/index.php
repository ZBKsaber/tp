<?php
    // 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
    define('APP_DEBUG',True);

    // 给系统静态资源设置常量
    define('SITE_URL','http://tp.com/');
    define('CSS_URL','/Home/Public/css/');
    define('IMG_URL','/Home/Public/img/');
    define('JS_URL','/Home/Public/js/');
    define('PLUGINS_URL','/Home/Public/plugins/');

    // (后台)给系统静态资源设置常量
    define('BOWER_URL','/Admin/Public/bower_components/');
    define('DIST_URL','/Admin/Public/dist/');
    define('ADMIN_JS_URL','/Admin/Public/js/');

    // 引入TP的接口文件
    include('../ThinkPHP/ThinkPHP.php');
 ?>
