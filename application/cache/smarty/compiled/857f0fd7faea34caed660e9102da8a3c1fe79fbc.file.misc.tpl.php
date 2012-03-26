<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 15:35:29
         compiled from "application/views/bootstrap/components/misc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21228941874f7070a1ec2255-73264959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '857f0fd7faea34caed660e9102da8a3c1fe79fbc' => 
    array (
      0 => 'application/views/bootstrap/components/misc.tpl',
      1 => 1332768248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21228941874f7070a1ec2255-73264959',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7070a1edc870_51642227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7070a1edc870_51642227')) {function content_4f7070a1edc870_51642227($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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



<!-- Miscellaneous
================================================== -->
<section id="misc">
    <div class="page-header">
        <h1>Miscellaneous <small>Wells, badges, and close icon</small></h1>
    </div>
    <div class="row">
        <div class="span4">
            <h2>Wells</h2>
            <p>Use the well as a simple effect on an element to give it an inset effect.</p>
            <div class="well">
                Look, I'm in a well!
            </div>
<pre class="prettyprint linenums">
&lt;div class="well"&gt;
  ...
&lt;/div&gt;
</pre>
        </div><!--/span-->
        <div class="span4" style="display: none;">
            <h2>Badges</h2>
            <p>Use a badge on an element for an unread count or as a simple indicator.</p>
            <pre class="prettyprint linenums">&lt;span class="badge"&gt;3&lt;/div&gt;</pre>
        </div><!--/span-->
        <div class="span4">
            <h2>Close icon</h2>
            <p>Use the generic close icon for dismissing content like modals and alerts.</p>
            <p><a class="close" style="float: none;">&times;</a></p>
            <pre class="prettyprint linenums">&lt;a class="close"&gt;&amp;times;&lt;/a&gt;</pre>
        </div><!--/span-->
    </div><!--/row-->
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>