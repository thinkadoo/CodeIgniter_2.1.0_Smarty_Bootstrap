<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 23:02:05
         compiled from "application/views/bootstrap/javascript/tooltips.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7736927304f70820959d740-70649896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4165d391de358b0b36173c045fe78055b77860e0' => 
    array (
      0 => 'application/views/bootstrap/javascript/tooltips.tpl',
      1 => 1332795721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7736927304f70820959d740-70649896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7082095b9cd6_97530849',
  'variables' => 
  array (
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7082095b9cd6_97530849')) {function content_4f7082095b9cd6_97530849($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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



<!-- Tooltips
================================================== -->
<section id="tooltips">
    <div class="page-header">
        <h1>Tooltips <small>bootstrap-tooltip.js</small></h1>
    </div>
    <div class="row">
        <div class="span3 columns">
            <h3>About Tooltips</h3>
            <p>Inspired by the excellent jQuery.tipsy plugin written by Jason Frame; Tooltips are an updated version, which don't rely on images, uss css3 for animations, and data-attributes for local title storage.</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/js/bootstrap-tooltip.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
            <h2>Example use of Tooltips</h2>
            <p>Hover over the links below to see tooltips:</p>
            <div class="tooltip-demo well">
                <p class="muted" style="margin-bottom: 0;">Tight pants next level keffiyeh <a href="#" rel='tooltip' title="first tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="#" rel='tooltip' title='Another tooltip'>have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A <a href="#" rel='tooltip' title='Another one here too'>really ironic</a> artisan whatever keytar, scenester farm-to-table banksy Austin <a href="#" rel='tooltip' title='The last tip!'>twitter handle</a> freegan cred raw denim single-origin coffee viral.
                </p>
            </div>
            <hr>
            <h2>Using bootstrap-tooltip.js</h2>
            <p>Trigger the tooltip via javascript:</p>
            <pre class="prettyprint linenums">$('#example').tooltip(options)</pre>
            <h3>Options</h3>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 100px;">Name</th>
                    <th style="width: 100px;">type</th>
                    <th style="width: 50px;">default</th>
                    <th>description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>animation</td>
                    <td>boolean</td>
                    <td>true</td>
                    <td>apply a css fade transition to the tooltip</td>
                </tr>
                <tr>
                    <td>placement</td>
                    <td>string</td>
                    <td>'top'</td>
                    <td>how to position the tooltip - top | bottom | left | right</td>
                </tr>
                <tr>
                    <td>selector</td>
                    <td>string</td>
                    <td>false</td>
                    <td>If a selector is provided, tooltip objects will be delegated to the specified targets.</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>string | function</td>
                    <td>''</td>
                    <td>default title value if `title` tag isn't present</td>
                </tr>
                <tr>
                    <td>trigger</td>
                    <td>string</td>
                    <td>'hover'</td>
                    <td>how tooltip is triggered - hover | focus | manual</td>
                </tr>
                <tr>
                    <td>delay</td>
                    <td>number | object</td>
                    <td>0</td>
                    <td>
                        <p>delay showing and hiding the tooltip (ms)</p>
                        <p>If a number is supplied, delay is applied to both hide/show</p>
                        <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="alert alert-info">
                <strong>Heads up!</strong>
                Options for individual tooltips can alternatively be specified through the use of data attributes.
            </div>
            <h3>Markup</h3>
            <p>For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just specify a selector option.</p>
            <h3>Methods</h3>
            <h4>$().tooltip(options)</h4>
            <p>Attaches a tooltip handler to an element collection.</p>
            <h4>.tooltip('show')</h4>
            <p>Reveals an elements tooltip.</p>
            <pre class="prettyprint linenums">$('#element').tooltip('show')</pre>
            <h4>.tooltip('hide')</h4>
            <p>Hides an elements tooltip.</p>
            <pre class="prettyprint linenums">$('#element').tooltip('hide')</pre>
            <h4>.tooltip('toggle')</h4>
            <p>Toggles an elements tooltip.</p>
            <pre class="prettyprint linenums">$('#element').tooltip('toggle')</pre>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>