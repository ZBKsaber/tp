<?php /* Smarty version Smarty-3.1.6, created on 2017-03-09 16:08:28
         compiled from "D:/wamp64/www/tp/shop/Home/View\Goods\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:3031858c10263c8aaa2-23309490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6da8bc237b46d40b4b684a6be48f5b51bb504d0' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\Goods\\detail.html',
      1 => 1489046797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3031858c10263c8aaa2-23309490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c1026414bd1',
  'variables' => 
  array (
    'goods' => 0,
    'newGoods' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c1026414bd1')) {function content_58c1026414bd1($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</h1>
    </div>
</div>
<div class="container portfolio-item">
	<div class="row-fluid margin-bottom-20">
		<!-- Carousel -->
        <div class="span7">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_big_img'];?>
" alt="" />
                        <div class="carousel-caption">
                            <h4><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</h4>
                            <p>惊爆价:<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-arrow">
                    <a data-slide="prev" href="#myCarousel" class="left carousel-control"><i class="icon-angle-left"></i></a>
                    <a data-slide="next" href="#myCarousel" class="right carousel-control"><i class="icon-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="span5">
        	<h3><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</h3>
			<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_introduce'];?>

            <ul class="unstyled">
            	<li><i class="icon-user color-green"></i>价格: <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
</li>
            	<li><i class="icon-calendar color-green"></i>库存: <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_number'];?>
</li>
            </ul>
            <p><a class="btn-u btn-u-large" href="#">立即剁手</a></p>
        </div>
    </div>

    <div class="headline"><h3>最新商品</h3></div>
    <div class="row-fluid margin-bottom-40">
        <ul id="list" class="bxslider recent-work">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newGoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <li>
                <a href="#">
                	<em class="overflow-hidden"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" alt="" /></em>
                    <span>
                        <strong><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</strong>
                        <i><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</i>
                    </span>
                </a>
            </li>
			<?php } ?>
        </ul>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initBxSlider1();
    });
</script>
<?php }} ?>