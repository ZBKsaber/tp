<?php /* Smarty version Smarty-3.1.6, created on 2017-03-09 16:12:01
         compiled from "D:/wamp64/www/tp/shop/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2508858c10e518a5421-43367222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b462127c5fd6a288020a51b13698983d04e1eacd' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Admin/View\\Manager\\login.html',
      1 => 1488790628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2508858c10e518a5421-43367222',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c10e519e1af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c10e519e1af')) {function content_58c10e519e1af($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>后台登录</title>
    <link href="<?php echo @BOWER_URL;?>
bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo @BOWER_URL;?>
metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo @DIST_URL;?>
css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo @BOWER_URL;?>
font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">请登录</h3>
                    </div>
                    <div class="panel-body">
                        <form id="cms_form" role="form" url="<?php echo @__SELF__;?>
" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="用户名" name="admin_user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="admin_psd" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" style="width:150px;display:inline;" placeholder="验证码" name="verify" type="text" autofocus>
                                    <img id="verifyImg" src="<?php echo @__CONTROLLER__;?>
/verifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()" alt="" />
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">记住我
                                    </label>
                                </div>
                                <button id="tijiao" type="button" class="btn btn-success">登录</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo @BOWER_URL;?>
jquery/dist/jquery.min.js"></script>
    <script src="<?php echo @BOWER_URL;?>
bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo @BOWER_URL;?>
metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?php echo @DIST_URL;?>
js/sb-admin-2.js"></script>
    <script src="/Public/js/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
    <script src="/Public/js/common.js"></script>
</body>
</html>
<?php }} ?>