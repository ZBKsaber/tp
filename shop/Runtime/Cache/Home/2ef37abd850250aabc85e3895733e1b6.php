<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
    <link rel="stylesheet" href="{$smarty.const.PLUGINS_URL}bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{$smarty.const.CSS_URL}style.css" />
    <link rel="stylesheet" href="{$smarty.const.CSS_URL}headers/header1.css" />
    <link rel="stylesheet" href="{$smarty.const.PLUGINS_URL}bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="{$smarty.const.CSS_URL}style_responsive.css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{$smarty.const.PLUGINS_URL}font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="{$smarty.const.PLUGINS_URL}flexslider/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{$smarty.const.PLUGINS_URL}parallax-slider/css/parallax-slider.css" type="text/css" />
    <!-- CSS Theme -->
    <link rel="stylesheet" href="{$smarty.const.CSS_URL}themes/default.css" id="style_color" />
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
            <a href="index.html"><img id="logo-header" src="{$smarty.const.IMG_URL}logo1-default.png" alt="Logo" /></a>
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
                        <li class="active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="index.html">Option1: Landing Page</a></li>
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
                        <li>
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
                                <li><a href="page_registration.html">Registration</a></li>
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

<!--=== Slider ===-->
<div class="slider-inner">
    <div id="da-slider" class="da-slider">
        <div class="da-slide">
            <h2><i>CLEAN &amp; FRESH</i> <br /> <i>FULLY RESPONSIVE</i> <br /> <i>DESIGN</i></h2>
            <p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
            <div class="da-img"><img src="<?php echo PLUGINS_URL?>parallax-slider/img/1.png" alt="" /></div>
        </div>
        <div class="da-slide">
            <h2><i>USING BEST WEB</i> <br /> <i>SOLUTIONS WITH</i> <br /> <i>HTML5/CSS3</i></h2>
            <p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
            <div class="da-img"><img src="<?php echo PLUGINS_URL?>parallax-slider/img/html5andcss3.png" alt="image01" /></div>
        </div>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    </div><!--/da-slider-->
</div><!--/slider-->
<!--=== End Slider ===-->

<!--=== Purchase Block ===-->
<div class="row-fluid purchase margin-bottom-30">
    <div class="container">
		<div class="span9">
            <span>Unify is a clean and fully responsive incredible Template.</span>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi  vehicula sem ut volutpat. Ut non libero magna fusce condimentum eleifend enim a feugiat.</p>
        </div>
        <a href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697" class="btn-buy hover-effect">Purchase Now</a>
    </div>
</div><!--/row-fluid-->
<!-- End Purchase Block -->

<!--=== Content Part ===-->
<div class="container">
	<!-- Service Blocks -->
	<div class="row-fluid">
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-resize-small"></i>
    			<div class="desc">
    				<h4>Fully Responsive</h4>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
    			</div>
    		</div>
    	</div>
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-cogs"></i>
    			<div class="desc">
    				<h4>HTML5 + CSS3</h4>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
    			</div>
    		</div>
    	</div>
    	<div class="span4">
    		<div class="service clearfix">
                <i class="icon-plane"></i>
    			<div class="desc">
    				<h4>Launch Ready</h4>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus etiam sem...</p>
    			</div>
    		</div>
    	</div>
	</div><!--/row-fluid-->
	<!-- //End Service Blokcs -->

	<!-- Recent Works -->
	<div class="headline"><h3>Recent Works</h3></div>
    <ul class="thumbnails">
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="{$smarty.const.IMG_URL}carousel/2.jpg" alt="" /></div>
                    <a class="btn-more hover-effect" href="#">read more +</a>
                </div>
                <h3><a class="hover-effect" href="#">Our Work</a></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
            </div>
        </li>
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="{$smarty.const.IMG_URL}carousel/3.jpg" alt="" /></div>
                    <a class="btn-more hover-effect" href="#">read more +</a>
                </div>
                <h3><a class="hover-effect" href="#">One More Work</a></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
            </div>
        </li>
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="{$smarty.const.IMG_URL}carousel/9.jpg" alt="" /></div>
                    <a class="btn-more hover-effect" href="#">read more +</a>
                </div>
                <h3><a class="hover-effect" href="#">Another Work</a></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
            </div>
        </li>
        <li class="span3">
            <div class="thumbnail-style thumbnail-kenburn">
            	<div class="thumbnail-img">
                    <div class="overflow-hidden"><img src="{$smarty.const.IMG_URL}carousel/10.jpg" alt="" /></div>
                    <a class="btn-more hover-effect" href="#">read more +</a>
                </div>
                <h3><a class="hover-effect" href="#">Huge Work</a></h3>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem.</p>
            </div>
        </li>
    </ul><!--/thumbnails-->
	<!-- //End Recent Works -->

	<!-- Information Blokcs -->
	<div class="row-fluid margin-bottom-20">
    	<!-- Who We Are -->
		<div class="span8">
			<div class="headline"><h3>Welcome To UNIFY Template</h3></div>
			<p><img class="pull-left lft-img-margin img-width-200" src="{$smarty.const.IMG_URL}carousel/6.jpg" alt="" />Unify is an incredibly beautiful responsive Bootstrap Template for corporate and creative professionals. It works on all major web browsers, tablets and phone.</p>
            <ul class="unstyled">
            	<li><i class="icon-ok color-green"></i> Donec id elit non mi porta gravida</li>
            	<li><i class="icon-ok color-green"></i> Corporate and Creative</li>
            	<li><i class="icon-ok color-green"></i> Responsive Bootstrap Template</li>
            	<li><i class="icon-ok color-green"></i> Corporate and Creative</li>
            </ul><br />

            <blockquote class="hero-unify">
                <p>Award winning digital agency. We bring a personal and effective approach to every project we work on, which is why. Unify is an incredibly beautiful responsive Bootstrap Template for corporate professionals.</p>
                <small>CEO, Jack Bour</small>
            </blockquote>
        </div><!--/span8-->

        <!-- Latest Shots -->
        <div class="span4">
			<div class="headline"><h3>Latest Shots</h3></div>
			<div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="{$smarty.const.IMG_URL}carousel/5.jpg" alt="" />
                    <div class="carousel-caption">
                      <p>Cras justo odio, dapibus ac facilisis in, egestas.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="{$smarty.const.IMG_URL}carousel/4.jpg" alt="" />
                    <div class="carousel-caption">
                      <p>Cras justo odio, dapibus ac facilisis in, egestas.</p>
                    </div>
                  </div>
                  <div class="item">
                    <img src="{$smarty.const.IMG_URL}carousel/3.jpg" alt="" />
                    <div class="carousel-caption">
                      <p>Cras justo odio, dapibus ac facilisis in, egestas.</p>
                    </div>
                  </div>
                </div>

                <div class="carousel-arrow">
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-angle-left"></i></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-angle-right"></i></a>
                </div>
			</div>
        </div><!--/span4-->
	</div><!--/row-fluid-->
	<!-- //End Information Blokcs -->

	<!-- Our Clients -->
	<div id="clients-flexslider" class="flexslider home clients">
        <div class="headline"><h3>Our Clients</h3></div>
		<ul class="slides">
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/hp_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/hp.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/igneus_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/igneus.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/vadafone_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/vadafone.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/walmart_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/walmart.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/shell_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/shell.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/natural_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/natural.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/aztec_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/aztec.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/gamescast_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/gamescast.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/cisco_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/cisco.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/everyday_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/everyday.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/cocacola_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/cocacola.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/spinworkx_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/spinworkx.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/shell_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/shell.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/natural_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/natural.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/gamescast_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/gamescast.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/everyday_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/everyday.png" class="color-img" alt="" />
                </a>
            </li>
			<li>
                <a href="#">
                    <img src="{$smarty.const.IMG_URL}clients/spinworkx_grey.png" alt="" />
                    <img src="{$smarty.const.IMG_URL}clients/spinworkx.png" class="color-img" alt="" />
                </a>
            </li>
		</ul>
	</div><!--/flexslider-->
	<!-- //End Our Clients -->
</div><!--/container-->
<!-- End Content Part -->

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
                        <dt><a href="#"><img src="{$smarty.const.IMG_URL}sliders/elastislide/6.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="{$smarty.const.IMG_URL}sliders/elastislide/10.jpg" alt="" /></a></dt>
                        <dd>
                            <p><a href="#">Anim moon officia Unify is an incredibly beautiful responsive Bootstrap Template</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                    <dt><a href="#"><img src="{$smarty.const.IMG_URL}sliders/elastislide/11.jpg" alt="" /></a></dt>
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
				<a href="index.html"><img id="logo-footer" src="{$smarty.const.IMG_URL}logo2-default.png" class="pull-right" alt="" /></a>
			</div>
		</div><!--/row-fluid-->
	</div><!--/container-->
</div><!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="{$smarty.const.JS_URL}jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="{$smarty.const.JS_URL}modernizr.custom.js"></script>
<script type="text/javascript" src="{$smarty.const.PLUGINS_URL}bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="{$smarty.const.PLUGINS_URL}flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="{$smarty.const.PLUGINS_URL}parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="{$smarty.const.PLUGINS_URL}parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="{$smarty.const.PLUGINS_URL}back-to-top.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="{$smarty.const.JS_URL}app.js"></script>
<script type="text/javascript" src="{$smarty.const.JS_URL}pages/index.js"></script>
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