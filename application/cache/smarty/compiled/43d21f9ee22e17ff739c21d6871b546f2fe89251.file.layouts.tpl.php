<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 16:14:55
         compiled from "application/views/bootstrap/scaffolding/layouts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6214836884f7079df0a4607-88783228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43d21f9ee22e17ff739c21d6871b546f2fe89251' => 
    array (
      0 => 'application/views/bootstrap/scaffolding/layouts.tpl',
      1 => 1332771275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6214836884f7079df0a4607-88783228',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7079df0bf389_95136813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7079df0bf389_95136813')) {function content_4f7079df0bf389_95136813($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/scaffolding/masthead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- Layouts (Default and fluid)
================================================== -->
<section id="layouts">
    <div class="page-header">
        <h1>Layouts <small>Basic templates to create webpages</small></h1>
    </div>

    <div class="row">
        <div class="span6">
            <h2>Fixed layout</h2>
            <p>The default and simple 940px-wide, centered layout for just about any website or page provided by a single <code>&lt;div class="container"&gt;</code>.</p>
            <div class="minicon-layout">
                <div class="minicon-layout-body"></div>
            </div>
<pre class="prettyprint linenums">
&lt;body&gt;
  &lt;div class="container"&gt;
    ...
  &lt;/div&gt;
&lt;/body&gt;
</pre>
        </div><!-- /col -->
        <div class="span6">
            <h2>Fluid layout</h2>
            <p><code>&lt;div class="container-fluid"&gt;</code> gives flexible page structure, min- and max-widths, and a left-hand sidebar. It's great for apps and docs.</p>
            <div class="minicon-layout fluid">
                <div class="minicon-layout-sidebar"></div>
                <div class="minicon-layout-body"></div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="container-fluid"&gt;
  &lt;div class="row-fluid"&gt;
    &lt;div class="span2"&gt;
      &lt;!--Sidebar content--&gt;
    &lt;/div&gt;
    &lt;div class="span10"&gt;
      &lt;!--Body content--&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
        </div><!-- /col -->
    </div><!-- /row -->
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>