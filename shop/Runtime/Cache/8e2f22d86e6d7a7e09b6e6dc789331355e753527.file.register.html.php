<?php /* Smarty version Smarty-3.1.6, created on 2017-03-06 16:45:49
         compiled from "D:/wamp64/www/tp/shop/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:1713558bd21bdd6c940-15728991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e2f22d86e6d7a7e09b6e6dc789331355e753527' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\User\\register.html',
      1 => 1487347078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1713558bd21bdd6c940-15728991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userinfo' => 0,
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bd21be12be7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bd21be12be7')) {function content_58bd21be12be7($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--=== Content Part ===-->
<div class="body">
	<div class="breadcrumbs margin-bottom-50">
    	<div class="container">
            <h1 class="color-green pull-left">注册</h1>
            <ul class="pull-right breadcrumb">
                <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                <li><a href="">Pages</a> <span class="divider">/</span></li>
                <li class="active">Registration</li>
            </ul>
        </div><!--/container-->
    </div><!--/breadcrumbs-->

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
        </div><!--/row-fluid-->
	</div><!--/container-->
</div><!--/body-->
<!--=== End Content Part ===-->

<!--=== Footer ===-->
<div class="footer">
	<div class="container">
		<div class="row-fluid">
			<div class="span4">
                <!-- About -->
		        <div class="headline"><h3>About</h3></div>
				<p class="margin-bottom-25">Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals.</p>

	            <!-- Monthly Newsletter -->
		        <div class="headline"><h3>Monthly Newsletter</h3></div>
				<p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
				<form class="form-inline" />
					<div class="input-append">
						<input type="text" placeholder="Email Address" class="input-medium" />
						<button class="btn-u">Subscribe</button>
					</div>
				</form>
			</div><!--/span4-->

			<div class="span4">
                <div class="posts">
                    <div class="headline"><h3>Recent Blog Entries</h3></div>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="<?php echo @IMG_URL;?>
sliders/elastislide/6.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="<?php echo @IMG_URL;?>
sliders/elastislide/10.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="<?php echo @IMG_URL;?>
sliders/elastislide/11.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                </div>
			</div><!--/span4-->

			<div class="span4">
	            <!-- Monthly Newsletter -->
		        <div class="headline"><h3>Contact Us</h3></div>
                <address>
					25, Lorem Lis Street, Orange <br />
					California, US <br />
					Phone: 800 123 3456 <br />
					Fax: 800 123 3456 <br />
					Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                </address>

                <!-- Stay Connected -->
		        <div class="headline"><h3>Stay Connected</h3></div>
                <ul class="social-icons">
                    <li><a href="#" data-original-title="Feed" class="social_rss"></a></li>
                    <li><a href="#" data-original-title="Facebook" class="social_facebook"></a></li>
                    <li><a href="#" data-original-title="Twitter" class="social_twitter"></a></li>
                    <li><a href="#" data-original-title="Goole Plus" class="social_googleplus"></a></li>
                    <li><a href="#" data-original-title="Pinterest" class="social_pintrest"></a></li>
                    <li><a href="#" data-original-title="Linkedin" class="social_linkedin"></a></li>
                    <li><a href="#" data-original-title="Vimeo" class="social_vimeo"></a></li>
                </ul>
			</div><!--/span4-->
		</div><!--/row-fluid-->
	</div><!--/container-->
</div><!--/footer-->
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">
	            <p>2013 &copy; Unify. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
			</div>
			<div class="span4">
				<a href="index.html"><img id="logo-footer" src="<?php echo @IMG_URL;?>
logo2-default.png" class="pull-right" alt="" /></a>
			</div>
		</div><!--/row-fluid-->
	</div><!--/container-->
</div><!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="<?php echo @JS_URL;?>
jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo @JS_URL;?>
modernizr.custom.js"></script>
<script type="text/javascript" src="<?php echo @PLUGINS_URL;?>
bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?php echo @PLUGINS_URL;?>
flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo @PLUGINS_URL;?>
parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo @PLUGINS_URL;?>
parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="<?php echo @PLUGINS_URL;?>
back-to-top.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="<?php echo @JS_URL;?>
app.js"></script>
<script type="text/javascript" src="<?php echo @JS_URL;?>
pages/index.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/js/respond.js"></script>
<![endif]-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29166220-1']);
  _gaq.push(['_setDomainName', 'htmlstream.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
<?php }} ?>