<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 14:34:29
         compiled from "application/views/bootstrap/basecss/code.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3589190994f70625506f035-33904791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44459e33c1c216c3a0b2e1dcb1b58dc243aca232' => 
    array (
      0 => 'application/views/bootstrap/basecss/code.tpl',
      1 => 1332765177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3589190994f70625506f035-33904791',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f706255082f45_89996398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f706255082f45_89996398')) {function content_4f706255082f45_89996398($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <h1>Base CSS</h1>
    <p class="lead">On top of the scaffolding, basic HTML elements are styled and enhanced with extensible classes to provide a fresh, consistent look and feel.</p>
    <div class="subnav">
        <ul class="nav nav-pills">
            <li><a href="typography">Typography</a></li>
            <li><a href="code">Code</a></li>
            <li><a href="tables">Tables</a></li>
            <li><a href="forms">Forms</a></li>
            <li><a href="buttons">Buttons</a></li>
            <li><a href="icons">Icons by Glyphicons</a></li>
        </ul>
    </div>
</header>



<!-- Code
================================================== -->
<section id="code">
    <div class="page-header">
        <h1>Code <small>Inline and block code snippets</small></h1>
    </div>
    <div class="row">
        <div class="span4">
            <h2>Inline</h2>
            <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
<pre class="prettyprint linenums">
For example, &lt;code&gt;section&lt;/code&gt; should be wrapped as inline.
</pre>
        </div><!--/span-->
        <div class="span4">
            <h2>Basic block</h2>
            <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to turn any carets into their unicode characters for proper rendering.</p>
<pre>
&lt;p&gt;Sample text here...&lt;/p&gt;
</pre>
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;pre&gt;
  &amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&lt;/pre&gt;
</pre>
            <p><strong>Note:</strong> Be sure to keep code within <code>&lt;pre&gt;</code> tags as close to the left as possible; it will render all tabs.</p>
        </div><!--/span-->
        <div class="span4">
            <h2>Google Prettify</h2>
            <p>Take the same <code>&lt;pre&gt;</code> element and add two optional classes for enhanced rendering.</p>
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;p&gt;Sample text here...&lt;/p&gt;
</pre>
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;pre class="prettyprint
     linenums"&gt;
  &amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&lt;/pre&gt;
</pre>
            <p><a href="http://code.google.com/p/google-code-prettify/">Download google-code-prettify</a> and view the readme for <a href="http://google-code-prettify.googlecode.com/svn/trunk/README.html">how to use</a>.</p>
        </div><!--/span-->
    </div><!--/row-->
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>