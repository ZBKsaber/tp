<?php /*%%SmartyHeaderCode:1816858c0bf9ec68d23-63854383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7849d364ad609d17681a67e65db41102e36fde25' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\Goods\\showlist.html',
      1 => 1489026314,
      2 => 'file',
    ),
    'c89762202f0276e15fcb4ab81965e1f3b3e77489' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\Index\\header.html',
      1 => 1489026214,
      2 => 'file',
    ),
    '2e466ff1589cfaca8c1bdf5112dcc5356a92b1e3' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\Index\\footer.html',
      1 => 1488941083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1816858c0bf9ec68d23-63854383',
  'variables' => 
  array (
    'catename' => 0,
    'cate' => 0,
    'v' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c0bf9ed91b6',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c0bf9ed91b6')) {function content_58c0bf9ed91b6($_smarty_tpl) {?><!DOCTYPE html>
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
    <link rel="stylesheet" href="/Home/Public/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/Home/Public/css/style.css" />
    <link rel="stylesheet" href="/Home/Public/css/headers/header1.css" />
    <link rel="stylesheet" href="/Home/Public/plugins/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="/Home/Public/css/style_responsive.css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/Home/Public/plugins/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="/Home/Public/plugins/portfolioSorting/css/sorting.css" />
    <link rel="stylesheet" href="/Home/Public/plugins/flexslider/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/Home/Public/plugins/parallax-slider/css/parallax-slider.css" type="text/css" />
    <!-- CSS Theme -->
    <link rel="stylesheet" href="/Home/Public/css/themes/default.css" id="style_color" />
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
                            <li><a href="/index.php/home/user/register" class="login-btn">注册</a></li>
                <li class="devider">&nbsp;</li>
                <li><a href="/index.php/home/user/login" class="login-btn">登录</a></li>
                    </ul>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
<div class="header">
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <a href="/"><img id="logo-header" src="/Home/Public/img/logo1-default.png" alt="Logo" /></a>
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">家用电器
                                <b class="caret"></b>
                            </a>
                                                            <ul class="dropdown-menu">
                                                                        <li><a href="/goods/showlist?cate_id=2&cate_name=电视">电视</a></li>
                                                                        <li><a href="/goods/showlist?cate_id=3&cate_name=空调">空调</a></li>
                                                                    </ul>
                                <b class="caret-out"></b>
                                                    </li>
                                                <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">手机
                                <b class="caret"></b>
                            </a>
                                                    </li>
                                                <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">汽车
                                <b class="caret"></b>
                            </a>
                                                    </li>
                                                <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">家居
                                <b class="caret"></b>
                            </a>
                                                    </li>
                                                <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">食品
                                <b class="caret"></b>
                            </a>
                                                    </li>
                                                <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">服装
                                <b class="caret"></b>
                            </a>
                                                    </li>
                                            </ul>
                    <div class="search-open">
                        <div class="input-append">
                            <form />
                                <input type="text" class="span3" placeholder="Search" />
                                <button type="submit" class="btn-u">Go</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left">电视</h1>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
	<div class="row-fluid">
        <div id="w">
            <div class="sort" id="sort">
				<ul class="unstyled inline">
                	<li><a href="#" class="all selected">所有</a></li>
                                    	<li><a href="#" class="合资电视">合资电视</a></li>
                                    	<li><a href="#" class="国产电视">国产电视</a></li>
                                    </ul>
            </div>

            <ul class="portfolio recent-work clearfix">
                                <li data-id="id-2" class="国产电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://tp.com/Public/Upload/2017-03-07/small_58be5dbe3bb9e.jpeg" alt="" /></em>
                        <span>
                            <strong>三洋电视</strong>
                            <i>2300.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-10" class="合资电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160627091921381.jpg" alt="" /></em>
                        <span>
                            <strong>血海蝶恋礼包</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-11" class="合资电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160624132557930.jpg" alt="" /></em>
                        <span>
                            <strong>逐月鹿锦礼包</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-12" class="合资电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160622143917902.jpg" alt="" /></em>
                        <span>
                            <strong>吞金雪玉刀</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-13" class="合资电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160721135512439.jpg" alt="" /></em>
                        <span>
                            <strong>“如意手（刀）“礼花</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-14" class="合资电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160721135704842.jpg" alt="" /></em>
                        <span>
                            <strong>“如意手（棍）“礼花</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-15" class="合资电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160803193640289.jpg" alt="" /></em>
                        <span>
                            <strong>“彤霞星绮套装”礼花</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-16" class="国产电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160804095846458.jpg" alt="" /></em>
                        <span>
                            <strong>“云竹轿“礼花</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-17" class="国产电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160804095800605.jpg" alt="" /></em>
                        <span>
                            <strong>“果果“礼花</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-18" class="国产电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160808160136186.jpg" alt="" /></em>
                        <span>
                            <strong>红尘漫步礼包</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-19" class="国产电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160816110906590.jpg" alt="" /></em>
                        <span>
                            <strong>中元节礼包</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-20" class="国产电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160831103011853.jpg" alt="" /></em>
                        <span>
                            <strong>"引龙追凤环"礼花</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-21" class="国产电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20160908113013201.jpg" alt="" /></em>
                        <span>
                            <strong>”薇云披风 蓝“礼花</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                                <li data-id="id-86" class="合资电视">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="http://attachments.snail.com/snail-app/goods/20150910114435250.jpg" alt="" /></em>
                        <span>
                            <strong>“弥尊棍套”礼花</strong>
                            <i>2000.00</i>
                        </span>
                    </a>
                </li>
                            </ul>
        </div>
    </div><!--/row-fluid-->
</div><!--/container-->
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
                        <dt><a href="#"><img src="/Home/Public/img/sliders/elastislide/6.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="/Home/Public/img/sliders/elastislide/10.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="/Home/Public/img/sliders/elastislide/11.jpg" alt="" /></a></dt>
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
			</div>
		</div>
	</div>
</div>

<!--=== Copyright ===-->
<div class="copyright">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">
	            <p>2013 &copy; Unify. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
			</div>
			<div class="span4">
				<a href="index.html"><img id="logo-footer" src="/Home/Public/img/logo2-default.png" class="pull-right" alt="" /></a>
			</div>
		</div><!--/row-fluid-->
	</div><!--/container-->
</div><!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="/Home/Public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/Home/Public/js/modernizr.custom.js"></script>
<script type="text/javascript" src="/Home/Public/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="/Home/Public/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/Home/Public/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="/Home/Public/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="/Home/Public/plugins/back-to-top.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="/Home/Public/plugins/portfolioSorting/js/jquery.quicksand.js"></script>
<script type="text/javascript" src="/Home/Public/plugins/portfolioSorting/js/sorting.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="/Home/Public/js/app.js"></script>
<script type="text/javascript" src="/Home/Public/js/pages/index.js"></script>
<script src="/Public/js/layer.js"></script>
<script src="/Public/js/dialog.js"></script>
<script src="/Public/js/common.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();
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