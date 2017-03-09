<?php /* Smarty version Smarty-3.1.6, created on 2017-03-09 10:25:17
         compiled from "D:/wamp64/www/tp/shop/Home/View\Goods\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2094258bfb8c2e96876-61343851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7849d364ad609d17681a67e65db41102e36fde25' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\Goods\\showlist.html',
      1 => 1489026314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2094258bfb8c2e96876-61343851',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58bfb8c32cb0c',
  'variables' => 
  array (
    'catename' => 0,
    'cate' => 0,
    'v' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfb8c32cb0c')) {function content_58bfb8c32cb0c($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left"><?php echo $_smarty_tpl->tpl_vars['catename']->value;?>
</h1>
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
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                	<li><a href="#" class="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</a></li>
                    <?php } ?>
                </ul>
            </div>

            <ul class="portfolio recent-work clearfix">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li data-id="id-<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
">
                    <a href="portfolio_item.html">
                    	<em class="overflow-hidden"><img style="width:270px;height:117px;" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
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
    </div><!--/row-fluid-->
</div><!--/container-->
<?php echo $_smarty_tpl->getSubTemplate ("Index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>