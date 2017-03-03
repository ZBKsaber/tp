<?php /* Smarty version Smarty-3.1.6, created on 2016-12-08 16:58:59
         compiled from "D:/wamp64/www/tp/shop/Home/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:2169258295debc11d82-53943352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e2f22d86e6d7a7e09b6e6dc789331355e753527' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\User\\register.html',
      1 => 1481187534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2169258295debc11d82-53943352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58295dec01f40',
  'variables' => 
  array (
    'userinfo' => 0,
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58295dec01f40')) {function content_58295dec01f40($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>会员注册</title>

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
flexslider/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo @PLUGINS_URL;?>
parallax-slider/css/parallax-slider.css" type="text/css" />
    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
themes/default.css" id="style_color" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
<!--=== Style Switcher ===-->
<i class="style-switcher-btn icon-cogs"></i>
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
            <li><i class="icon-globe"></i><a>Languages <i class="icon-sort-up"></i></a>
            	<ul class="nav-list">
                	<li class="active"><a href="#">English</a> <i class="icon-ok"></i></li>
                	<li><a href="#">Spanish</a></li>
                	<li><a href="#">Russian</a></li>
                	<li><a href="#">German</a></li>
                </ul>
            </li>
            <li class="devider">&nbsp;</li>
            <li><a href="page_faq.html" class="login-btn">Help</a></li>
            <li class="devider">&nbsp;</li>
            <li><a href="page_login.html" class="login-btn">Login</a></li>
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
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Option1: Landing Page</a></li>
                                <li><a href="page_home.html">Option2: Header Option</a></li>
                                <li><a href="page_home4.html">Option3: Revolution Slider</a></li>
                                <li><a href="page_home5.html">Option4: Amazing Content</a></li>
                                <li><a href="page_home1.html">Option5: Mixed Content</a></li>
                                <li><a href="page_home2.html">Option6: Content with Sidebar</a></li>
                                <li><a href="page_home3.html">Option7: Aplle Style Slider</a></li>
                                <li><a href="page_home_all.html">Home All In One</a></li>
                            </ul>
                            <b class="caret-out"></b>
                        </li>
                        <li class="active">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Pages
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="page_about.html">About Us</a></li>
                                <li><a href="page_services.html">Services</a></li>
                                <li><a href="page_pricing.html">Pricing</a></li>
                                <li><a href="page_coming_soon.html">Coming Soon</a></li>
                                <li><a href="page_faq.html">FAQs</a></li>
                                <li><a href="page_search.html">Search Result</a></li>
                                <li><a href="page_gallery.html">Gallery</a></li>
                                <li class="active"><a href="page_registration.html">Registration</a></li>
                                <li><a href="page_login.html">Login</a></li>
                                <li><a href="page_404.html">404</a></li>
                                <li><a href="page_clients.html">Clients</a></li>
                                <li><a href="page_privacy.html">Privacy Policy</a></li>
                                <li><a href="page_terms.html">Terms of Service</a></li>
                                <li><a href="page_column_left.html">2 Columns (Left)</a></li>
                                <li><a href="page_column_right.html">2 Columns (Right)</a></li>
                            </ul>
                            <b class="caret-out"></b>
                        </li>
                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Features
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="feature_grid.html">Grid Layout</a></li>
                                <li><a href="feature_typography.html">Typography</a></li>
                                <li><a href="feature_thumbnail.html">Thumbnails</a></li>
                                <li><a href="feature_component.html">Components</a></li>
                                <li><a href="feature_navigation.html">Navigation</a></li>
                                <li><a href="feature_table.html">Tables</a></li>
                                <li><a href="feature_form.html">Forms</a></li>
                                <li><a href="feature_icons.html">Icons</a></li>
                                <li><a href="feature_button.html">Buttons</a></li>
                            </ul>
                            <b class="caret-out"></b>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio_item.html">Portfolio Item</a></li>
                                <li><a href="portfolio_2columns.html">Portfolio 2 Columns</a></li>
                                <li><a href="portfolio_3columns.html">Portfolio 3 Columns</a></li>
                                <li><a href="portfolio_4columns.html">Portfolio 4 Columns</a></li>
                            </ul>
                            <b class="caret-out"></b>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog_item.html">Blog Item</a></li>
                                <li><a href="blog_left_sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog_item_left_sidebar.html">Blog Item Left Sidebar</a></li>
                            </ul>
                            <b class="caret-out"></b>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="page_contact.html">Contact Default</a></li>
                                <li><a href="page_contact1.html">Contact Boxed Map</a></li>
                            </ul>
                            <b class="caret-out"></b>
                        </li>
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