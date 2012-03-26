<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 16:14:55
         compiled from "application/views/bootstrap/scaffolding/gridsystem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7566037714f70796463c758-47125314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9599b9e2dd264cf072aee82c502498d8cda6535c' => 
    array (
      0 => 'application/views/bootstrap/scaffolding/gridsystem.tpl',
      1 => 1332771257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7566037714f70796463c758-47125314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70796465a668_64699420',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70796465a668_64699420')) {function content_4f70796465a668_64699420($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/scaffolding/masthead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- Grid system
================================================== -->
<section id="grid-system">
    <div class="page-header">
        <h1>Grid system <small>12 columns with a responsive twist</small></h1>
    </div>

    <h2>Default 940px grid</h2>
    <div class="row show-grid">
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
    </div>
    <div class="row show-grid">
        <div class="span4">4</div>
        <div class="span4">4</div>
        <div class="span4">4</div>
    </div>
    <div class="row show-grid">
        <div class="span4">4</div>
        <div class="span8">8</div>
    </div>
    <div class="row show-grid">
        <div class="span6">6</div>
        <div class="span6">6</div>
    </div>
    <div class="row show-grid">
        <div class="span12">12</div>
    </div>
    <div class="row">
        <div class="span4">
            <p>The default grid system provided as part of Bootstrap is a <strong>940px-wide, 12-column grid</strong>.</p>
            <p>It also has four responsive variations for various devices and resolutions: phone, tablet portrait, table landscape and small desktops, and large widescreen desktops.</p>
        </div>
        <div class="span4">
<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span8"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>
        </div>
        <div class="span4">
            <p>As shown here, a basic layout can be created with two "columns," each spanning a number of the 12 foundational columns we defined as part of our grid system.</p>
        </div>
    </div><!-- /row -->

    <br>

    <h2>Offsetting columns</h2>
    <div class="row show-grid">
        <div class="span4">4</div>
        <div class="span4 offset4">4 offset 4</div>
    </div><!-- /row -->
    <div class="row show-grid">
        <div class="span3 offset3">3 offset 3</div>
        <div class="span3 offset3">3 offset 3</div>
    </div><!-- /row -->
    <div class="row show-grid">
        <div class="span8 offset4">8 offset 4</div>
    </div><!-- /row -->
<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span4"&gt;...&lt;/div&gt;
  &lt;div class="span4 offset4"&gt;...&lt;/div&gt;
&lt;/div&gt;
</pre>

    <br>

    <h2>Nesting columns</h2>
    <div class="row">
        <div class="span6">
            <p>With the static (non-fluid) grid system in Bootstrap, nesting is easy. To nest your content, just add a new <code>.row</code> and set of <code>.span*</code> columns within an existing <code>.span*</code> column.</p>
            <h4>Example</h4>
            <div class="row show-grid">
                <div class="span6">
                    Level 1 of column
                    <div class="row show-grid">
                        <div class="span3">
                            Level 2
                        </div>
                        <div class="span3">
                            Level 2
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="span6">
<pre class="prettyprint linenums">
&lt;div class="row"&gt;
  &lt;div class="span12"&gt;
    Level 1 of column
    &lt;div class="row"&gt;
      &lt;div class="span6"&gt;Level 2&lt;/div&gt;
      &lt;div class="span6"&gt;Level 2&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
        </div>
    </div>

    <h2>Grid customization</h2>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Variable</th>
            <th>Default value</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><code>@gridColumns</code></td>
            <td>12</td>
            <td>Number of columns</td>
        </tr>
        <tr>
            <td><code>@gridColumnWidth</code></td>
            <td>60px</td>
            <td>Width of each column</td>
        </tr>
        <tr>
            <td><code>@gridGutterWidth</code></td>
            <td>20px</td>
            <td>Negative space between columns</td>
        </tr>
        <tr>
            <td><code>@siteWidth</code></td>
            <td><em>Computed sum of all columns and gutters</em></td>
            <td>Counts number of columns and gutters to set width of the <code>.container-fixed()</code> mixin</td>
        </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="span4">
            <h3>Variables in LESS</h3>
            <p>Built into Bootstrap are a handful of variables for customizing the default 940px grid system, documented above. All variables for the grid are stored in variables.less.</p>
        </div>
        <div class="span4">
            <h3>How to customize</h3>
            <p>Modifying the grid means changing the three <code>@grid*</code> variables and recompiling Bootstrap. Change the grid variables in variables.less and use one of the <a href="#compiling">four ways documented to recompile</a>. If you're adding more columns, be sure to add the CSS for those in grid.less.</p>
        </div>
        <div class="span4">
            <h3>Staying responsive</h3>
            <p>Customization of the grid only works at the default level, the 940px grid. To maintain the responsive aspects of Bootstrap, you'll also have to customize the grids in responsive.less.</p>
        </div>
    </div><!-- /row -->

</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>