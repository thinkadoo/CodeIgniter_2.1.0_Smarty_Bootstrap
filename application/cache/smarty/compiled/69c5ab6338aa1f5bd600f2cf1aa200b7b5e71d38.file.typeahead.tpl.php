<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 16:52:47
         compiled from "application/views/bootstrap/javascript/typeahead.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2575988874f7082bfd91e88-01280418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69c5ab6338aa1f5bd600f2cf1aa200b7b5e71d38' => 
    array (
      0 => 'application/views/bootstrap/javascript/typeahead.tpl',
      1 => 1332773526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2575988874f7082bfd91e88-01280418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7082bfdad4f3_74060650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7082bfdad4f3_74060650')) {function content_4f7082bfdad4f3_74060650($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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



<!-- Typeahead
================================================== -->
<section id="typeahead">
    <div class="page-header">
        <h1>Typeahead <small>bootstrap-typeahead.js</small></h1>
    </div>
    <div class="row">
        <div class="span3 columns">
            <h3>About</h3>
            <p>A basic, easily extended plugin for quickly creating elegant typeaheads with any form text input.</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/js/bootstrap-typeahead.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
            <h2>Example</h2>
            <p>Start typing in the field below to show the typeahead results.</p>
            <div class="well">
                <input type="text" class="span3" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
            </div>
            <hr>
            <h2>Using bootstrap-typeahead.js</h2>
            <p>Call the typeahead via javascript:</p>
            <pre class="prettyprint linenums">$('.typeahead').typeahead()</pre>
            <h3>Options</h3>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 100px;">Name</th>
                    <th style="width: 50px;">type</th>
                    <th style="width: 100px;">default</th>
                    <th>description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>source</td>
                    <td>array</td>
                    <td>[ ]</td>
                    <td>The data source to query against.</td>
                </tr>
                <tr>
                    <td>items</td>
                    <td>number</td>
                    <td>8</td>
                    <td>The max number of items to display in the dropdown.</td>
                </tr>
                <tr>
                    <td>matcher</td>
                    <td>function</td>
                    <td>case insensitive</td>
                    <td>The method used to determine if a query matches an item. Accepts a single argument, the <code>item</code> against which to test the query. Access the current query with <code>this.query</code>. Return a boolean <code>true</code> if query is a match.</td>
                </tr>
                <tr>
                    <td>sorter</td>
                    <td>function</td>
                    <td>exact match,<br> case sensitive,<br> case insensitive</td>
                    <td>Method used to sort autocomplete results. Accepts a single argument <code>items</code> and has the scope of the typeahead instance. Reference the current query with <code>this.query</code>.</td>
                </tr>
                <tr>
                    <td>highlighter</td>
                    <td>function</td>
                    <td>highlights all default matches</td>
                    <td>Method used to highlight autocomplete results. Accepts a single argument <code>item</code> and has the scope of the typeahead instance. Should return html.</td>
                </tr>
                </tbody>
            </table>

            <h3>Markup</h3>
            <p>Add data attributes to register an element with typeahead functionality.</p>
<pre class="prettyprint linenums">
&lt;input type="text" data-provide="typeahead"&gt;
</pre>
            <h3>Methods</h3>
            <h4>.typeahead(options)</h4>
            <p>Initializes an input with a typahead.</p>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>