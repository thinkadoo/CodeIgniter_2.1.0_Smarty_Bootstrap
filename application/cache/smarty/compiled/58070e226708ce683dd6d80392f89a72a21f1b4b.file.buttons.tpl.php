<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 16:38:38
         compiled from "application/views/bootstrap/javascript/buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15978485724f707f6eec3e74-11158168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58070e226708ce683dd6d80392f89a72a21f1b4b' => 
    array (
      0 => 'application/views/bootstrap/javascript/buttons.tpl',
      1 => 1332772715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15978485724f707f6eec3e74-11158168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f707f6eedf566_11348397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f707f6eedf566_11348397')) {function content_4f707f6eedf566_11348397($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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



<!-- Buttons
================================================== -->
<section id="buttons">
    <div class="page-header">
        <h1>Buttons <small>bootstrap-button.js</small></h1>
    </div>
    <div class="row">
        <div class="span3 columns">
            <h3>About</h3>
            <p>Do more with buttons. Control button states or create groups of buttons for more components like toolbars.</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/js/bootstrap-button.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
            <h2>Example uses</h2>
            <p>Use the buttons plugin for states and toggles.</p>
            <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <td>Stateful</td>
                    <td>
                        <button id="fat-btn" data-loading-text="loading..." class="btn btn-primary">
                            Loading State
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Single toggle</td>
                    <td>
                        <button class="btn btn-primary" data-toggle="button">Single Toggle</button>
                    </td>
                </tr>
                <tr>
                    <td>Checkbox</td>
                    <td>
                        <div class="btn-group" data-toggle="buttons-checkbox">
                            <button class="btn btn-primary">Left</button>
                            <button class="btn btn-primary">Middle</button>
                            <button class="btn btn-primary">Right</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Radio</td>
                    <td>
                        <div class="btn-group" data-toggle="buttons-radio">
                            <button class="btn btn-primary">Left</button>
                            <button class="btn btn-primary">Middle</button>
                            <button class="btn btn-primary">Right</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <hr>
            <h2>Using bootstrap-button.js</h2>
            <p>Enable buttons via javascript:</p>
            <pre class="prettyprint linenums">$('.tabs').button()</pre>
            <h3>Markup</h3>
            <p>Data attributes are integral to the button plugin. Check out the example code below for the various markup types.</p>
<pre class="prettyprint linenums">
&lt;!-- Add data-toggle="button" to activate toggling on a single button --&gt;
&lt;button class="btn" data-toggle="button"&gt;Single Toggle&lt;/button&gt;

&lt;!-- Add data-toggle="buttons-checkbox" for checkbox style toggling on btn-group --&gt;
&lt;div class="btn-group" data-toggle="buttons-checkbox"&gt;
  &lt;button class="btn"&gt;Left&lt;/button&gt;
  &lt;button class="btn"&gt;Middle&lt;/button&gt;
  &lt;button class="btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;

&lt;!-- Add data-toggle="buttons-radio" for radio style toggling on btn-group --&gt;
&lt;div class="btn-group" data-toggle="buttons-radio"&gt;
  &lt;button class="btn"&gt;Left&lt;/button&gt;
  &lt;button class="btn"&gt;Middle&lt;/button&gt;
  &lt;button class="btn"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>
            <h3>Methods</h3>
            <h4>$().button('toggle')</h4>
            <p>Toggles push state. Gives btn the look that it's been activated.</p>
            <div class="alert alert-info">
                <strong>Heads up!</strong>
                You can enable auto toggling of a button by using the <code>data-toggle</code> attribute.
            </div>
            <pre class="prettyprint linenums">&lt;button class="btn" data-toggle="button" &gt;…&lt;/button&gt;</pre>
            <h4>$().button('loading')</h4>
            <p>Sets button state to loading - disables button and swaps text to loading text. Loading text should be defined on the button element using the data attribute <code>data-loading-text</code>.
            </p>
            <pre class="prettyprint linenums">&lt;button class="btn" data-loading-text="loading stuff..." &gt;...&lt;/button&gt;</pre>
            <div class="alert alert-info">
                <strong>Heads up!</strong>
                <a href="https://github.com/twitter/bootstrap/issues/793">Firefox persists the disabled state across page loads</a>. A workaround for this is to use <code>autocomplete="off"</code>.
            </div>
            <h4>$().button('reset')</h4>
            <p>Resets button state - swaps text to original text.</p>
            <h4>$().button(string)</h4>
            <p>Resets button state - swaps text to any data defined text state.</p>
<pre class="prettyprint linenums">&lt;button class="btn" data-complete-text="finished!" &gt;...&lt;/button&gt;
&lt;script&gt;
  $('.btn').button('complete')
&lt;/script&gt;</pre>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>