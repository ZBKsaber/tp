<?php /* Smarty version Smarty-3.1.6, created on 2017-03-07 16:15:01
         compiled from "D:/wamp64/www/tp/shop/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:2330158be676dd15783-66686355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e2f22d86e6d7a7e09b6e6dc789331355e753527' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\User\\register.html',
      1 => 1488874500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2330158be676dd15783-66686355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58be676e0964a',
  'variables' => 
  array (
    'userinfo' => 0,
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be676e0964a')) {function content_58be676e0964a($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="body">
	<div class="breadcrumbs margin-bottom-50">
    	<div class="container">
            <h1 class="color-green pull-left">注册</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                <li><a href="">Pages</a> <span class="divider">/</span></li>
                <li class="active">Registration</li>
            </ul>
        </div>
    </div>
	<div class="container">
		<div class="row-fluid margin-bottom-10">
        	<form class="reg-page" action="<?php echo @__SELF__;?>
" method="post" />
            	<h3>用户注册</h3>
                <div class="controls">
                    <label>用户名</label>
                    <input type="text" class="span12" name="username" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
" />
                    <span style="color:#c00;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['username'];?>
</span>
                </div>
                <div class="controls">
                    <div class="span6">
                        <label>密码 <span class="color-red" style="font-size:13px;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['password'];?>
</span></label>
                        <input type="password" class="span12" name="password" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['password'];?>
" />
                    </div>
                    <div class="span6">
                        <label>重复密码 <span class="color-red" style="font-size:13px;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['password2'];?>
</span></label>
                        <input type="password" class="span12" name="password2" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['password2'];?>
" />
                    </div>
                </div>
                <div class="controls">
                    <label>邮箱</label>
                    <input type="text" class="span12" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_email'];?>
" />
                    <span style="color:#c00;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['user_email'];?>
</span>
                </div>
                <div class="controls">
                    <label>QQ</label>
                    <input type="text" class="span12" name="user_qq" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_qq'];?>
" />
                    <span style="color:#c00;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['user_qq'];?>
</span>
                </div>
                <div class="controls">
                    <label>电话</label>
                    <input type="text" class="span12" name="user_tel" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_tel'];?>
" />
                    <span style="color:#c00;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['user_tel'];?>
</span>
                </div>
                <div class="controls" style="padding:5px 0px;">
                    <span style="font-size:14px;">性别　</span>
                    <label class="radio inline">
                        <input type="radio" checked name="user_sex"/ value="1">
                        男
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="user_sex"/ value="2">
                        女
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="user_sex"/ value="0">
                        人妖
                    </label>
               </div>
               <div class="controls" style="padding:5px 0px;">
                   <span style="font-size:14px;">学历　</span>
                    <select class="span3" name="user_xueli">
                        <option value="1" />小学
                        <option value="2" />初中
                        <option value="3" />高中
                        <option value="4" />大专
                        <option value="5" />本科
                    </select>
                    <span style="color:#c00;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['user_xueli'];?>
</span>
                </div>
                <div class="controls" style="padding:5px 0px;">
                    <span style="font-size:14px;">爱好　</span>
                   <label class="checkbox inline">
    	                <input type="checkbox" name="user_hobby[]" value="youxi"/> 游戏
                    </label>
                   <label class="checkbox inline">
    	                <input type="checkbox" name="user_hobby[]" value="yinyue"/> 音乐
                    </label>
                   <label class="checkbox inline">
    	                <input type="checkbox" name="user_hobby[]" value="youyong"/> 游泳
                    </label>
                   <label class="checkbox inline">
    	                <input type="checkbox" name="user_hobby[]" value="xiaqi"/> 下棋
                    </label>
               </div>
               <span style="color:#c00;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['user_hobby'];?>
</span>
               <label>简介</label>
                   <textarea class="span12 border-radius-none" rows="3" name="user_introduce"><?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_introduce'];?>
</textarea>
                <div class="controls form-inline">
                    <button class="btn-u pull-right" type="submit">注册</button>
                </div>
                <hr />
				<p>已有账号? 点击 <a href="page_login.html" class="color-green">登录</a> 您的账号</p>
            </form>
        </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>