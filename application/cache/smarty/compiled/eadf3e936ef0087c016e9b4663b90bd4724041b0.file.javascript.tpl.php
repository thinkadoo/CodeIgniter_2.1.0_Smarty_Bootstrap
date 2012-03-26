<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 16:34:11
         compiled from "application/views/bootstrap/javascript/javascript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5217737794f707e63ef80f3-77084476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eadf3e936ef0087c016e9b4663b90bd4724041b0' => 
    array (
      0 => 'application/views/bootstrap/javascript/javascript.tpl',
      1 => 1332771796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5217737794f707e63ef80f3-77084476',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f707e63f16b18_88430626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f707e63f16b18_88430626')) {function content_4f707e63f16b18_88430626($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <h1>Javascript for Bootstrap</h1>
    <p class="lead">Bring Bootstrap's components to life&mdash;now with 12 custom <a href="http://jquery.com/" target="_blank">jQuery</a> plugins.
    <div class="subnav">
        <ul class="nav nav-pills">
            <li><a href="javascript">All plugins</a></li>
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


<!-- Using Javascript w/ Bootstrap
================================================== -->
<section id="javascript">
    <div class="page-header">
        <h1>jQuery plugins <small>A dozen Bootstrap plugins to get you started</small></h1>
    </div>
    <div class="row">
        <div class="span3">
            <label>
                <h3><a href="modals">Modals</a></h3>
                <p>A streamlined, but flexible, take on the traditional javascript modal plugin with only the minimum required functionality and smart defaults.</p>
            </label>
        </div>
        <div class="span3">
            <label>
                <h3><a href="dropdowns">Dropdowns</a></h3>
                <p>Add dropdown menus to nearly anything in Bootstrap with this simple plugin. Bootstrap features full dropdown menu support on in the navbar, tabs, and pills.</p>
            </label>
        </div>
        <div class="span3">
            <label>
                <h3><a href="scrollspy">Scrollspy</a></h3>
                <p>Use scrollspy to automatically update the links in your navbar to show the current active link based on scroll position.</p>
            </label>
        </div>
        <div class="span3">
            <label>
                <h3><a href="tabs">Togglable tabs</a></h3>
                <p>Use this plugin to make tabs and pills more useful by allowing them to toggle through tabbable panes of local content.</p>
            </label>
        </div>
    </div> <!-- /row -->
    <div class="row">
        <div class="span3">
            <label>
                <h3><a href="tooltips">Tooltips</a></h3>
                <p>A new take on the jQuery Tipsy plugin, Tooltips don't rely on images, uss CSS3 for animations, and data-attributes for local title storage.</p>
            </label>
        </div>
        <div class="span3">
            <label>
                <h3><a href="popovers">Popovers</a> <small class="muted">*</small></h3>
                <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</p>
                <p class="muted"><strong>*</strong> Requires <a href="tooltips">Tooltips</a> to be included</p>
            </label>
        </div>
        <div class="span3">
            <label>
                <h3><a href="alerts">Alert messages</a></h3>
                <p>The alert plugin is a tiny class for adding close functionality to alerts.</p>
            </label>
        </div>
        <div class="span3">
            <label>
                <h3><a href="buttons">Buttons</a></h3>
                <p>Do more with buttons. Control button states or create groups of buttons for more components like toolbars.</p>
            </label>
        </div>
    </div> <!-- /row -->
    <div class="row" style="margin-bottom: 9px;">
        <div class="span3">
            <label>
                <h3><a href="collapse">Collapse</a></h3>
                <p>Get base styles and flexible support for collapsible components like accordions and navigation.</p>
            </label>
        </div>
        <div class="span3">
            <label>
                <h3><a href="carousel">Carousel</a></h3>
                <p>Create a merry-go-round of any content you wish to provide an interactive slideshow of content.</p>
            </label>
        </div>
        <div class="span3">
            <label>
                <h3><a href="typeahead">Typeahead</a></h3>
                <p>A basic, easily extended plugin for quickly creating elegant typeaheads with any form text input.</p>
            </label>
        </div>
        <div class="span3">
            <label>
                <h3>Transitions <small class="muted">*</small></h3>
                <p>For simple transition effects, include bootstrap-transition.js once to slide in modals or fade out alerts.</p>
                <p class="muted"><strong>*</strong> Required for animation in plugins</p>
            </label>
        </div>
    </div> <!-- /row -->
    <div class="alert alert-info"><strong>Heads up!</strong> All javascript plugins require the latest version of jQuery.</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>