<?php /* Smarty version Smarty-3.1.6, created on 2017-03-09 10:35:44
         compiled from "D:/wamp64/www/tp/shop/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:748758c0bf807224a8-60019350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50814f58c69a5c76ffb8e57779e521cb8c424862' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\User\\login.html',
      1 => 1488941273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '748758c0bf807224a8-60019350',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c0bf807ed6d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0bf807ed6d')) {function content_58c0bf807ed6d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left">Login</h1>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
	<div class="row-fluid">
        <form id="cms_form" class="log-page" ac="<?php echo @__SELF__;?>
" />
            <h3>登陆账号</h3>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input class="input-xlarge" type="text" name="username" placeholder="用户名" />
            </div>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span>
                <input class="input-xlarge" type="password" name="password" placeholder="密码" />
            </div>
			<div class="input-prepend">
                <input style="width:100px;margin-right:10px;" class="input-xlarge" type="text" name="verify" placeholder="验证码" />
			<img id="verifyImg" src="<?php echo @__CONTROLLER__;?>
/verifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()" alt="" />
            </div>
            <div class="controls form-inline">
                <button id="tijiao" class="btn-u pull-right" type="button">登陆</button>
            </div>
            <hr />
            <h5>忘记密码 ?</h5>
            <p>别担心, <a class="color-green" href="#">点击这里</a>重置您的密码</p>
        </form>
    </div><!--/row-fluid-->
</div><!--/container-->
<!--=== End Content Part ===-->
<?php echo $_smarty_tpl->getSubTemplate ("Index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>