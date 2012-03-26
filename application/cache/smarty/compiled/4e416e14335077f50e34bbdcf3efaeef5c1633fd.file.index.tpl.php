<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 16:03:00
         compiled from "application/views/bootstrap/demo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4817997914f707457618863-10338444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e416e14335077f50e34bbdcf3efaeef5c1633fd' => 
    array (
      0 => 'application/views/bootstrap/demo/index.tpl',
      1 => 1332770578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4817997914f707457618863-10338444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f707457635321_78778313',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f707457635321_78778313')) {function content_4f707457635321_78778313($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <h1>Demo</h1>
    <p class="lead">Here you can see how Expression Engine works with Forms Tables and Details.</p>
    <div class="subnav">
        <ul class="nav nav-pills">

            <li><a href="demo/form">Form</a></li>
            <li><a href="demo/table">Table</a></li>
            <li><a href="demo/lists">List</a></li>
            <li><a href="demo/detail">Detail</a></li>
            <li><a href="demo/complex">Complex</a></li>

        </ul>
    </div>
</header>


<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>