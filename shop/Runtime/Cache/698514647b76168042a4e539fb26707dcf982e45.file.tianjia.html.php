<?php /* Smarty version Smarty-3.1.6, created on 2017-03-09 16:15:58
         compiled from "D:/wamp64/www/tp/shop/Admin/View\Auth\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:2410458c10f3ee2d930-79705448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '698514647b76168042a4e539fb26707dcf982e45' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Admin/View\\Auth\\tianjia.html',
      1 => 1488780532,
      2 => 'file',
    ),
    '04201239d7d4eafa981430d32045b04705f85800' => 
    array (
      0 => 'D:/wamp64/www/tp/shop/Admin/View\\base.html',
      1 => 1488944495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2410458c10f3ee2d930-79705448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c10f3f1e12e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c10f3f1e12e')) {function content_58c10f3f1e12e($_smarty_tpl) {?><!DOCTYPE html>
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
               <h1 class="page-header">添加权限</h1>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                      添加权限
                   </div>
                   <div class="panel-body">
                       <div class="row">
                           <div class="col-lg-6">
                               <form role="form" action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                                   <div class="form-group">
                                       <label>权限名称</label>
                                       <input class="form-control" name="auth_name" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['auth_name'];?>
">
                                       <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['auth_name'];?>
</span>
                                   </div>
                                   <div class="form-group">
                                       <label>父级权限</label>
                                       <select name="auth_pid" class="form-control">
                                            <option value="0">顶级权限</option>
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoC']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</option>
                                            <?php } ?>
                                        </select>
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['auth_pid'];?>
</span>
                                   </div>
                                   <div class="form-group">
                                       <label>控制器</label>
                                       <input class="form-control" name="auth_c" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['auth_c'];?>
">
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['auth_c'];?>
</span>
                                   </div>
                                   <div class="form-group">
                                       <label>操作方法</label>
                                       <input class="form-control" name="auth_a" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['auth_a'];?>
">
                                        <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['auth_c'];?>
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
    <script src="/Public/js/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
    <script src="/Public/js/common.js"></script>

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