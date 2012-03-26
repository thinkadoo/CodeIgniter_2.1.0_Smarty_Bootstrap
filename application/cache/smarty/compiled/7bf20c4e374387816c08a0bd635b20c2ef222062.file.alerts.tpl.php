<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 16:34:56
         compiled from "application/views/bootstrap/javascript/alerts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20683261984f707e90eca522-26624901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bf20c4e374387816c08a0bd635b20c2ef222062' => 
    array (
      0 => 'application/views/bootstrap/javascript/alerts.tpl',
      1 => 1332772495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20683261984f707e90eca522-26624901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f707e90eef9a6_24393486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f707e90eef9a6_24393486')) {function content_4f707e90eef9a6_24393486($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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


<!-- Alert
================================================== -->
<section id="alerts">
    <div class="page-header">
        <h1>Alert messages <small>bootstrap-alert.js</small></h1>
    </div>
    <div class="row">
        <div class="span3 columns">
            <h3>About alerts</h3>
            <p>The alert plugin is a tiny class for adding close functionality to alerts.</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/js/bootstrap-alert.js" target="_blank" class="btn">Download</a>
        </div>
        <div class="span9 columns">
            <h2>Example alerts</h2>
            <p>The alerts plugin works on regular alert messages, and block messages.</p>
            <div class="alert fade in">
                <a class="close" data-dismiss="alert" href="#">&times;</a>
                <strong>Holy guacamole!</strong> Best check yo self, you’re not looking too good.
            </div>
            <div class="alert alert-block alert-error fade in">
                <a class="close" data-dismiss="alert" href="#">&times;</a>
                <h4 class="alert-heading">Oh snap! You got an error!</h4>
                <p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                <p>
                    <a class="btn btn-danger small" href="#">Take this action</a> <a class="btn small" href="#">Or do this</a>
                </p>
            </div>
            <hr>
            <h2>Using bootstrap-alerts.js</h2>
            <p>Enable dismissal of an alert via javascript:</p>
            <pre class="prettyprint linenums">$(".alert-message").alert()</pre>
            <h3>Markup</h3>
            <p>Just add <code>data-dismiss="alert"</code> to your close button to automatically give an alert close functionality.</p>
            <pre class="prettyprint linenums">&lt;a class="close" data-dismiss="alert" href="#"&gt;&amp;times;&lt;/a&gt;</pre>
            <h3>Methods</h3>
            <h4>$().alert()</h4>
            <p>Wraps all alerts with close functionality. To have your alerts animate out when closed, make sure they have the <code>.fade</code> and <code>.in</code> class already applied to them.</p>
            <h4>.alert('close')</h4>
            <p>Closes an alert.</p>
            <pre class="prettyprint linenums">$(".alert-message").alert('close')</pre>
            <h3>Events</h3>
            <p>Bootstrap's alert class exposes a few events for hooking into alert functionality.</p>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 150px;">Event</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>close</td>
                    <td>This event fires immediately when the <code>close</code> instance method is called.</td>
                </tr>
                <tr>
                    <td>closed</td>
                    <td>This event is fired when the alert has been closed (will wait for css transitions to complete).</td>
                </tr>
                </tbody>
            </table>
<pre class="prettyprint linenums">
$('#my-alert').bind('closed', function () {
  // do something…
})</pre>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>