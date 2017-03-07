<?php /* Smarty version Smarty-3.1.6, created on 2017-03-07 16:14:13
         compiled from "D:/wamp64/www/tp/shop/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1563758be67a366aaf8-46943187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50814f58c69a5c76ffb8e57779e521cb8c424862' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\User\\login.html',
      1 => 1488874450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1563758be67a366aaf8-46943187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58be67a39e55c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be67a39e55c')) {function content_58be67a39e55c($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left">Login</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li><a href="">Pages</a> <span class="divider">/</span></li>
            <li class="active">Login</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
	<div class="row-fluid">
        <form class="log-page" />
            <h3>Login to your account</h3>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input class="input-xlarge" type="text" placeholder="Username" />
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span>
                <input class="input-xlarge" type="text" placeholder="Username" />
            </div>
            <div class="controls form-inline">
                <label class="checkbox"><input type="checkbox" /> Stay Signed in</label>
                <button class="btn-u pull-right" type="submit">Login</button>
            </div>
            <hr />
            <h4>Forget your Password ?</h4>
            <p>no worries, <a class="color-green" href="#">click here</a> to reset your password.</p>
        </form>
    </div><!--/row-fluid-->
</div><!--/container-->
<!--=== End Content Part ===-->
<?php echo $_smarty_tpl->getSubTemplate ("Index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>