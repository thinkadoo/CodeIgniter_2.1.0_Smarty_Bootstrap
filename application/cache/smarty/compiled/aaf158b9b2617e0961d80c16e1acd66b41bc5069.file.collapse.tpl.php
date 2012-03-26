<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 23:02:07
         compiled from "application/views/bootstrap/javascript/collapse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6724691634f7080482ce7a3-95099988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf158b9b2617e0961d80c16e1acd66b41bc5069' => 
    array (
      0 => 'application/views/bootstrap/javascript/collapse.tpl',
      1 => 1332795721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6724691634f7080482ce7a3-95099988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7080482f5ef4_55125749',
  'variables' => 
  array (
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7080482f5ef4_55125749')) {function content_4f7080482f5ef4_55125749($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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




<!-- Collapse
================================================== -->
<section id="collapse">
    <div class="page-header">
        <h1>Collapse <small>bootstrap-collapse.js</small></h1>
    </div>
    <div class="row">
        <div class="span3 columns">
            <h3>About</h3>
            <p>Get base styles and flexible support for collapsible components like accordions and navigation.</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/js/bootstrap-collapse.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
            <h2>Example accordion</h2>
            <p>Using the collapse plugin, we built a simple accordion style widget:</p>

            <div class="accordion" id="accordion2">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                            Collapsible Group Item #1
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                            Collapsible Group Item #2
                        </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                            Collapsible Group Item #3
                        </a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse">
                        <div class="accordion-inner">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>


            <hr>
            <h2>Using bootstrap-collapse.js</h2>
            <p>Enable via javascript:</p>
            <pre class="prettyprint linenums">$(".collapse").collapse()</pre>
            <h3>Options</h3>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 100px;">Name</th>
                    <th style="width: 50px;">type</th>
                    <th style="width: 50px;">default</th>
                    <th>description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>parent</td>
                    <td>selector</td>
                    <td>false</td>
                    <td>If selector then all collapsible elements under the specified parent will be closed when this collasabile item is shown. (similar to traditional accordion behavior)</td>
                </tr>
                <tr>
                    <td>toggle</td>
                    <td>boolean</td>
                    <td>true</td>
                    <td>Toggles the collapsible element on invocation</td>
                </tr>
                </tbody>
            </table>
            <h3>Markup</h3>
            <p>Just add <code>data-toggle="collapse"</code> and a <code>data-target</code> to element to automatically assign control of a collapsible element. The <code>data-target</code> attribute accepts a css selector to apply the collapse to. Be sure to add the class <code>collapse</code> to the collapsible element. If you'd like it to default open, add the additional class <code>in</code>.</p>
          <pre class="prettyprint linenums">
&lt;button class="btn btn-danger" data-toggle="collapse" data-target="#demo"&gt;
  simple collapsible
&lt;/button&gt;

&lt;div id="demo" class="collapse in"&gt; … &lt;/div&gt;</pre>
            <div class="alert alert-info">
                <strong>Heads up!</strong>
                To add accordion-like group management to a collapsible control, add the data attribute <code>data-parent="#selector"</code>. Refer to the demo to see this in action.
            </div>
            <h3>Methods</h3>
            <h4>.collapse(options)</h4>
            <p>Activates your content as a collapsible element. Accepts an optional options <code>object</code>.
<pre class="prettyprint linenums">
$('#myCollapsible').collapse({
  toggle: false
})</pre>
            <h4>.collapse('toggle')</h4>
            <p>Toggles a collapsible element to shown or hidden.</p>
            <h4>.collapse('show')</h4>
            <p>Shows a collapsible element.</p>
            <h4>.collapse('hide')</h4>
            <p>Hides a collapsible element.</p>
            <h3>Events</h3>
            <p>
                Bootstrap's collapse class exposes a few events for hooking into collapse functionality.
            </p>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 150px;">Event</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>show</td>
                    <td>This event fires immediately when the <code>show</code> instance method is called.</td>
                </tr>
                <tr>
                    <td>shown</td>
                    <td>This event is fired when a collapse element has been made visible to the user (will wait for css transitions to complete).</td>
                </tr>
                <tr>
                    <td>hide</td>
                    <td>
                        This event is fired immediately when the <code>hide</code> method has been called.
                    </td>
                </tr>
                <tr>
                    <td>hidden</td>
                    <td>This event is fired when a collapse element has been hidden from the user (will wait for css transitions to complete).</td>
                </tr>
                </tbody>
            </table>

<pre class="prettyprint linenums">
$('#myCollapsible').on('hidden', function () {
  // do something…
})</pre>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>