<?php /* Smarty version Smarty-3.1.6, created on 2017-03-10 09:12:19
         compiled from "D:/wamp64/www/tp/shop/Home/View\Goods\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1420558c1093eb401a2-07293450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7849d364ad609d17681a67e65db41102e36fde25' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Home/View\\Goods\\showlist.html',
      1 => 1489047197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1420558c1093eb401a2-07293450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c1093ec518e',
  'variables' => 
  array (
    'catename' => 0,
    'cate' => 0,
    'v' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c1093ec518e')) {function content_58c1093ec518e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
	<div class="container">
        <h1 class="color-green pull-left"><?php echo $_smarty_tpl->tpl_vars['catename']->value;?>
</h1>
    </div>
</div>
<div class="container">
	<div class="row-fluid">
        <div id="w">
            <div class="sort" id="sort">
				<ul class="unstyled inline">
                	<li><a href="#" class="all selected">所有分类</a></li>
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
                    <a href="<?php echo @__CONTROLLER__;?>
/detail?goods_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">
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
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>