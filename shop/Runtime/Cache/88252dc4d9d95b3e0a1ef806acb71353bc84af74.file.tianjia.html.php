<?php /* Smarty version Smarty-3.1.6, created on 2017-03-07 14:39:14
         compiled from "D:/wamp64/www/tp/shop/Admin/View\Goods\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:2720158be45c56c4b67-46695719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88252dc4d9d95b3e0a1ef806acb71353bc84af74' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Admin/View\\Goods\\tianjia.html',
      1 => 1488868680,
      2 => 'file',
    ),
    '04201239d7d4eafa981430d32045b04705f85800' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Admin/View\\base.html',
      1 => 1488856094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2720158be45c56c4b67-46695719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58be45c59be79',
  'variables' => 
  array (
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be45c59be79')) {function content_58be45c59be79($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>后台</title>
    <link href="<?php echo @BOWER_URL;?>
/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo @BOWER_URL;?>
/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo @BOWER_URL;?>
/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo @BOWER_URL;?>
/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo @DIST_URL;?>
/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo @BOWER_URL;?>
/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="">后台管理页面</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo session('admin_name');?>
</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>设置</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo @__MODULE__;?>
/Manager/logout" onclick="if(confirm('确认退出吗?')) return true;else return false;"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = session('auth_infoA'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <li>
                            <a href="#"><i class="fa fa-align-justify"></i> <?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = session('auth_infoB'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                                <li>
                                    <a href="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_a'];?>
"><?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>
</a>
                                </li>
                                <?php }?>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
            
       <div class="row">
           <div class="col-lg-12">
               <h1 class="page-header">添加商品</h1>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                      添加商品
                   </div>
                   <div class="panel-body">
                       <div class="row">
                           <div class="col-lg-6">
                               <form role="form" action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                                   <div class="form-group">
                                       <label>商品名称</label>
                                       <input class="form-control" name="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['goods_name'];?>
">
                                       <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['goods_name'];?>
</span>
                                   </div>
                                   <div class="form-group">
                                       <label>所属分类</label>
                                       <select name="goods_category_id" class="form-control">
                                            <option value="0">顶级分类</option>
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</option>
                                            <?php } ?>
                                        </select>
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['goods_class'];?>
</span>
                                   </div>
                                   <div class="form-group">
                                        <label>商品图片</label>
                                        <input type="file" name="goods_pic">
                                    </div>
                                   <div class="form-group">
                                       <label>商品价格</label>
                                       <input class="form-control" name="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['goods_price'];?>
">
                                       <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['goods_price'];?>
</span>
                                   </div>
                                   <div class="form-group">
                                       <label>商品数量</label>
                                       <input class="form-control" name="goods_number" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['goods_price'];?>
">
                                       <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['goods_number'];?>
</span>
                                   </div>
                                   <div class="form-group">
                                       <label>商品重量</label>
                                       <input class="form-control" name="goods_weight" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['goods_weight'];?>
">
                                       <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['goods_weight'];?>
</span>
                                   </div>
                                   <div class="form-group">
                                       <label>商品描述</label>
                                       <!-- 加载编辑器的容器 -->
                                       <script id="container" name="goods_introduce" type="text/plain"></script>
                                       <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['goods_introduce'];?>
</span>
                                   </div>
                                   <button type="submit" class="btn btn-default">添加</button>
                                   <button type="reset" class="btn btn-default">重置</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    <!-- 配置文件 -->
   <script type="text/javascript" src="/Public/js/ueditor/ueditor.config.js"></script>
   <!-- 编辑器源码文件 -->
   <script type="text/javascript" src="/Public/js/ueditor/ueditor.all.js"></script>
   <!-- 实例化编辑器 -->
   <script type="text/javascript">
       var editor = UE.getEditor('container',{
           initialFrameHeight:250,
           toolbars: [
                        ['fullscreen', 'source', 'undo', 'redo'],
                        ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc']
                    ],
       });
   </script>

        </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo @BOWER_URL;?>
/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo @BOWER_URL;?>
/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo @BOWER_URL;?>
/metisMenu/dist/metisMenu.min.js"></script>

    
    <!-- DataTables JavaScript -->
    <script src="<?php echo @BOWER_URL;?>
/datatables/media/js/jquery.dataTables.js"></script>
    
    <script src="<?php echo @BOWER_URL;?>
/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo @DIST_URL;?>
/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
<?php }} ?>