<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 13:55:21
         compiled from "application/views/bootstrap/site/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13328535424f705929c172d6-42400998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3155f70a33d4f00ce8fe0a762ad027cea5907e6c' => 
    array (
      0 => 'application/views/bootstrap/site/header.tpl',
      1 => 1332762919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13328535424f705929c172d6-42400998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f705929c72b24_63746755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f705929c72b24_63746755')) {function content_4f705929c72b24_63746755($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/css/docs.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/ico/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/ico/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/ico/apple-touch-icon-114x114.png">
</head>

<body data-spy="scroll" data-target=".subnav" data-offset="50">


<!-- Navbar
        ================================================== -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">soapbox.io</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
index.php/site">Overview</a>
                    </li>
                    <li class="">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
index.php/scaffolding">Scaffolding</a>
                    </li>
                    <li class="">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
index.php/basecss">Base CSS</a>
                    </li>
                    <li class="">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
index.php/components">Components</a>
                    </li>
                    <li class="">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
index.php/javascript">Javascript plugins</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container"><?php }} ?>