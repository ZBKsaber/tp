<?php /* Smarty version Smarty-3.1.6, created on 2017-03-07 16:52:52
         compiled from "D:/wamp64/www/tp/shop/Home/View\Index\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2733458be2360b10008-20966715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c89762202f0276e15fcb4ab81965e1f3b3e77489' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\Index\\header.html',
      1 => 1488876770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2733458be2360b10008-20966715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58be2360cfc38',
  'variables' => 
  array (
    'topCate' => 0,
    'v' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be2360cfc38')) {function content_58be2360cfc38($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Unify | Welcome...</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="<?php echo @PLUGINS_URL;?>
bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css" />
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
headers/header1.css" />
    <link rel="stylesheet" href="<?php echo @PLUGINS_URL;?>
bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
style_responsive.css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo @PLUGINS_URL;?>
font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo @PLUGINS_URL;?>
portfolioSorting/css/sorting.css" />
    <link rel="stylesheet" href="<?php echo @PLUGINS_URL;?>
flexslider/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo @PLUGINS_URL;?>
parallax-slider/css/parallax-slider.css" type="text/css" />
    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
themes/default.css" id="style_color" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<div class="style-switcher">
    <div class="theme-close"><i class="icon-remove"></i></div>
    <div class="theme-heading">Theme Colors</div>
    <ul class="unstyled">
        <li class="theme-default theme-active" data-style="default" data-header="light"></li>
        <li class="theme-blue" data-style="blue" data-header="light"></li>
        <li class="theme-orange" data-style="orange" data-header="light"></li>
        <li class="theme-red" data-style="red" data-header="light"></li>
        <li class="theme-light" data-style="light" data-header="light"></li>
    </ul>
</div><!--/style-switcher-->
<!--=== End Style Switcher ===-->

<!--=== Top ===-->
<div class="top">
    <div class="container">
        <ul class="loginbar pull-right">
            <li><a href="<?php echo @__MODULE__;?>
/user/register" class="login-btn">注册</a></li>
            <li class="devider">&nbsp;</li>
            <li><a href="<?php echo @__MODULE__;?>
/user/login" class="login-btn">登录</a></li>
        </ul>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
<div class="header">
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="index.html"><img id="logo-header" src="<?php echo @IMG_URL;?>
logo1-default.png" alt="Logo" /></a>
        </div><!-- /logo -->
        <!-- Menu -->
        <div class="navbar">
            <div class="navbar-inner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a><!-- /nav-collapse -->
                <div class="nav-collapse collapse">
                    <ul class="nav top-2">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topCate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>

                                <b class="caret"></b>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['two_cate']){?>
                                <ul class="dropdown-menu">
                                    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['two_cate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
                                    <li><a href="page_contact.html"><?php echo $_smarty_tpl->tpl_vars['j']->value['cat_name'];?>
</a></li>
                                    <?php } ?>
                                </ul>
                                <b class="caret-out"></b>
                            <?php }?>
                        </li>
                        <?php } ?>
                        <li><a class="search"><i class="icon-search search-btn"></i></a></li>
                    </ul>
                    <div class="search-open">
                        <div class="input-append">
                            <form />
                                <input type="text" class="span3" placeholder="Search" />
                                <button type="submit" class="btn-u">Go</button>
                            </form>
                        </div>
                    </div>
                </div><!-- /nav-collapse -->
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->
    </div><!-- /container -->
</div><!--/header -->
<!--=== End Header ===-->
<?php }} ?>