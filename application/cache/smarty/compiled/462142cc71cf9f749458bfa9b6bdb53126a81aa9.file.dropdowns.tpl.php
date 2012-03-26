<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 23:02:04
         compiled from "application/views/bootstrap/javascript/dropdowns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4376489584f7080c82da347-17986230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '462142cc71cf9f749458bfa9b6bdb53126a81aa9' => 
    array (
      0 => 'application/views/bootstrap/javascript/dropdowns.tpl',
      1 => 1332795721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4376489584f7080c82da347-17986230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7080c82f55d7_30568015',
  'variables' => 
  array (
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7080c82f55d7_30568015')) {function content_4f7080c82f55d7_30568015($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <h1>Javascript for Bootstrap</h1>
    <p class="lead">Bring Bootstrap's components to life&mdash;now with 12 custom <a href="http://jquery.com/" target="_blank">jQuery</a> plugins.
    <div class="subnav">
        <ul class="nav nav-pills">
            <li><a href="modals">Modal</a></li>
            <li><a href="dropdowns">Dropdown</a></li>
            <li><a href="scrollspy">Scrollspy</a></li>
            <li><a href="tabs">Tab</a></li>
            <li><a href="tooltips">Tooltip</a></li>
            <li><a href="popovers">Popover</a></li>
            <li><a href="alerts">Alert</a></li>
            <li><a href="buttons">Button</a></li>
            <li><a href="collapse">Collapse</a></li>
            <li><a href="carousel">Carousel</a></li>
            <li><a href="typeahead">Typeahead</a></li>
        </ul>
    </div>
</header>




<!-- Dropdown
================================================== -->
<section id="dropdowns">
    <div class="page-header">
        <h1>Dropdowns <small>bootstrap-dropdown.js</small></h1>
    </div>
    <div class="row">
        <div class="span3 columns">
            <h3>About dropdowns</h3>
            <p>Add dropdown menus to nearly anything in Bootstrap with this simple plugin. Bootstrap features full dropdown menu support on in the navbar, tabs, and pills.</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/js/bootstrap-dropdown.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
            <h2>Examples</h2>
            <p>Click on the dropdown nav links in the navbar and pills below to test dropdowns.</p>
            <div id="navbar-example" class="navbar navbar-static">
                <div class="navbar-inner">
                    <div class="container" style="width: auto;">
                        <a class="brand" href="#">Project Name</a>
                        <ul class="nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2 <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav pull-right">
                            <li id="fat-menu" class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 3 <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- /navbar-example -->

            <ul class="nav nav-pills">
                <li class="active"><a href="#">Regular link</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                    <ul id="menu1" class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 2 <b class="caret"></b></a>
                    <ul id="menu2" class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 3 <b class="caret"></b></a>
                    <ul id="menu3" class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul> <!-- /tabs -->

            <hr>

            <h2>Using bootstrap-dropdown.js</h2>
            <p>Call the dropdowns via javascript:</p>
            <pre class="prettyprint linenums">$('.dropdown-toggle').dropdown()</pre>
            <h3>Markup</h3>
            <p>To quickly add dropdown functionality to any element just add <code>data-toggle="dropdown"</code> and any valid bootstrap dropdown will automatically be activated.</p>
            <div class="alert alert-info">
                <strong>Heads up!</strong> You may optionally target a specific dropdown by using <code>data-target="#fat"</code> or <code>href="#fat"</code>.
            </div>

<pre class="prettyprint linenums">
&lt;ul class="nav pills"&gt;
  &lt;li class="active"&gt;&lt;a href="#"&gt;Regular link&lt;/a&gt;&lt;/li&gt;
  &lt;li class="dropdown" id="menu1"&gt;
    &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#menu1"&gt;
      Dropdown
      &lt;b class="caret"&gt;&lt;/b&gt;
    &lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
      &lt;li class="divider"&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;</pre>
            <h3>Methods</h3>
            <h4>$().dropdown()</h4>
            <p>A programatic api for activating menus for a given navbar or tabbed navigation.</p>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>