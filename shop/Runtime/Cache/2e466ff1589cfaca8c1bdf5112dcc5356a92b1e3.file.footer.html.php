<?php /* Smarty version Smarty-3.1.6, created on 2017-03-04 15:07:42
         compiled from "D:/wamp64/www/tp/shop/Home/View\Index\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:774058ba67bee947e5-79831627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e466ff1589cfaca8c1bdf5112dcc5356a92b1e3' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\Index\\footer.html',
      1 => 1487341926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '774058ba67bee947e5-79831627',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ba67bf0b5bb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ba67bf0b5bb')) {function content_58ba67bf0b5bb($_smarty_tpl) {?><!--=== Footer ===-->
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