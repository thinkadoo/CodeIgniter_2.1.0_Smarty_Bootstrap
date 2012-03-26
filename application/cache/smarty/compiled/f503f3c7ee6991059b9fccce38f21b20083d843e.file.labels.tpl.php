<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 15:35:22
         compiled from "application/views/bootstrap/components/labels.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18240068314f70709ae9edd4-64682415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f503f3c7ee6991059b9fccce38f21b20083d843e' => 
    array (
      0 => 'application/views/bootstrap/components/labels.tpl',
      1 => 1332768230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18240068314f70709ae9edd4-64682415',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70709aeb3074_28899775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70709aeb3074_28899775')) {function content_4f70709aeb3074_28899775($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <!-- Masthead
   ================================================== -->
    <header class="jumbotron subhead" id="overview">
        <h1>Components</h1>
        <p class="lead">Dozens of reusable components are built into Bootstrap to provide navigation, alerts, popovers, and much more.</p>
        <div class="subnav">
            <ul class="nav nav-pills">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Buttons <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="buttons/#buttonGroups">Button groups</a></li>
                        <li><a href="buttons/#buttonDropdowns">Button dropdowns</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Navigation <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="navigation/#navs">Nav, tabs, pills</a></li>
                        <li><a href="navigation/#navbar">Navbar</a></li>
                        <li><a href="navigation/#breadcrumbs">Breadcrumbs</a></li>
                        <li><a href="navigation/#pagination">Pagination</a></li>
                    </ul>
                </li>
                <li><a href="labels">Labels</a></li>
                <li><a href="thumbnails">Thumbnails</a></li>
                <li><a href="alerts">Alerts</a></li>
                <li><a href="progress">Progress bars</a></li>
                <li><a href="misc">Miscellaneous</a></li>
            </ul>
        </div>
    </header>


<!-- Labels
================================================== -->
<section id="labels">
    <div class="page-header">
        <h1>Inline labels <small>Label and annotate text</small></h1>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Labels</th>
            <th>Markup</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <span class="label">Default</span>
            </td>
            <td>
                <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-success">New</span>
            </td>
            <td>
                <code>&lt;span class="label label-success"&gt;New&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-warning">Warning</span>
            </td>
            <td>
                <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-important">Important</span>
            </td>
            <td>
                <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-info">Info</span>
            </td>
            <td>
                <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
            </td>
        </tr>
        </tbody>
    </table>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>