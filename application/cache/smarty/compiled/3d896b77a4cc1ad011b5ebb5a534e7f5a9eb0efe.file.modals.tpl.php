<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 23:02:03
         compiled from "application/views/bootstrap/javascript/modals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15613123914f708114686e82-69791067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d896b77a4cc1ad011b5ebb5a534e7f5a9eb0efe' => 
    array (
      0 => 'application/views/bootstrap/javascript/modals.tpl',
      1 => 1332795721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15613123914f708114686e82-69791067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7081146af0b2_65782991',
  'variables' => 
  array (
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7081146af0b2_65782991')) {function content_4f7081146af0b2_65782991($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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




<!-- Modal
================================================== -->
<section id="modals">
    <div class="page-header">
        <h1>Modals <small>bootstrap-modal.js</small></h1>
    </div>
    <div class="row">
        <div class="span3 columns">
            <h3>About modals</h3>
            <p>A streamlined, but flexible, take on the traditional javascript modal plugin with only the minimum required functionality and smart defaults.</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/js/bootstrap-modal.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
            <h2>Static example</h2>
            <p>Below is a statically rendered modal.</p>
            <div class="well modal-example" style="background-color: #888; border: none;">
                <div class="modal" style="position: relative; top: auto; left: auto; margin: 0 auto; z-index: 1">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h3>Modal header</h3>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-primary">Save changes</a>
                        <a href="#" class="btn">Close</a>
                    </div>
                </div>
            </div> <!-- /well -->

            <h2>Live demo</h2>
            <p>Toggle a modal via javascript by clicking the button below. It will slide down and fade in from the top of the page.</p>
            <!-- sample modal content -->
            <div id="myModal" class="modal hide fade">
                <div class="modal-header">
                    <a class="close" data-dismiss="modal" >&times;</a>
                    <h3>Modal Heading</h3>
                </div>
                <div class="modal-body">
                    <h4>Text in a modal</h4>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

                    <h4>Popover in a modal</h4>
                    <p>This <a href="#" class="btn popover-test" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">button</a> should trigger a popover on hover.</p>

                    <h4>Tooltips in a modal</h4>
                    <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> should have tooltips on hover.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Save changes</a>
                    <a href="#" class="btn" data-dismiss="modal" >Close</a>
                </div>
            </div>
            <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Launch demo modal</a>

            <hr>

            <h2>Using bootstrap-modal</h2>
            <p>Call the modal via javascript:</p>
            <pre class="prettyprint linenums">$('#myModal').modal(options)</pre>
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
                    <td>backdrop</td>
                    <td>boolean</td>
                    <td>true</td>
                    <td>Includes a modal-backdrop element</td>
                </tr>
                <tr>
                    <td>keyboard</td>
                    <td>boolean</td>
                    <td>true</td>
                    <td>Closes the modal when escape key is pressed</td>
                </tr>
                </tbody>
            </table>
            <h3>Markup</h3>
            <p>You can activate modals on your page easily without having to write a single line of javascript. Just set <code>data-toggle="modal"</code> on a controller element with a <code>data-target="#foo"</code> or <code>href="#foo"</code> which corresponds to a modal element id, and when clicked, it will launch your modal.</p>
            <p>Also, to add options to your modal instance, just include them as additional data attributes on either the control element or the modal markup itself.</p>
<pre class="prettyprint linenums">
&lt;a class="btn" data-toggle="modal" href="#myModal" &gt;Launch Modal&lt;/a&gt;
</pre>

<pre class="prettyprint linenums">
&lt;div class="modal"&gt;
  &lt;div class="modal-header"&gt;
    &lt;a class="close" data-dismiss="modal"&gt;&times;&lt;/a&gt;
    &lt;h3&gt;Modal header&lt;/h3&gt;
  &lt;/div&gt;
  &lt;div class="modal-body"&gt;
    &lt;p&gt;One fine body…&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="modal-footer"&gt;
    &lt;a href="#" class="btn btn-primary"&gt;Save changes&lt;/a&gt;
    &lt;a href="#" class="btn"&gt;Close&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
            <div class="alert alert-info">
                <strong>Heads up!</strong> If you want your modal to animate in and out, just add a <code>.fade</code> class to the <code>.modal</code> element (refer to the demo to see this in action) and include bootstrap-transition.js.
            </div>
            <h3>Methods</h3>
            <h4>.modal(options)</h4>
            <p>Activates your content as a modal. Accepts an optional options <code>object</code>.</p>
<pre class="prettyprint linenums">
$('#myModal').modal({
  keyboard: false
})</pre>
            <h4>.modal('toggle')</h4>
            <p>Manually toggles a modal.</p>
            <pre class="prettyprint linenums">$('#myModal').modal('toggle')</pre>
            <h4>.modal('show')</h4>
            <p>Manually opens a modal.</p>
            <pre class="prettyprint linenums">$('#myModal').modal('show')</pre>
            <h4>.modal('hide')</h4>
            <p>Manually hides a modal.</p>
            <pre class="prettyprint linenums">$('#myModal').modal('hide')</pre>
            <h3>Events</h3>
            <p>Bootstrap's modal class exposes a few events for hooking into modal functionality.</p>
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
                    <td>This event is fired when the modal has been made visible to the user (will wait for css transitions to complete).</td>
                </tr>
                <tr>
                    <td>hide</td>
                    <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
                </tr>
                <tr>
                    <td>hidden</td>
                    <td>This event is fired when the modal has finished being hidden from the user (will wait for css transitions to complete).</td>
                </tr>
                </tbody>
            </table>

<pre class="prettyprint linenums">
$('#myModal').on('hidden', function () {
  // do something…
})</pre>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>