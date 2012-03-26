<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 14:36:43
         compiled from "application/views/bootstrap/basecss/tables.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3159642274f70627f7b7046-23454840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8a7540bb48c81b5cfea9368147efd60d7edf803' => 
    array (
      0 => 'application/views/bootstrap/basecss/tables.tpl',
      1 => 1332765400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3159642274f70627f7b7046-23454840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70627f7d0598_40806706',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70627f7d0598_40806706')) {function content_4f70627f7d0598_40806706($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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

<!-- Tables
================================================== -->
<section id="tables">
<div class="page-header">
    <h1>Tables <small>For, you guessed it, tabular data</small></h1>
</div>

<h2>Table markup</h2>
<div class="row">
    <div class="span8">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Tag</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <code>&lt;table&gt;</code>
                </td>
                <td>
                    Wrapping element for displaying data in a tabular format
                </td>
            </tr>
            <tr>
                <td>
                    <code>&lt;thead&gt;</code>
                </td>
                <td>
                    Container element for table header rows (<code>&lt;tr&gt;</code>) to label table columns
                </td>
            </tr>
            <tr>
                <td>
                    <code>&lt;tbody&gt;</code>
                </td>
                <td>
                    Container element for table rows (<code>&lt;tr&gt;</code>) in the body of the table
                </td>
            </tr>
            <tr>
                <td>
                    <code>&lt;tr&gt;</code>
                </td>
                <td>
                    Container element for a set of table cells (<code>&lt;td&gt;</code> or <code>&lt;th&gt;</code>) that appears on a single row
                </td>
            </tr>
            <tr>
                <td>
                    <code>&lt;td&gt;</code>
                </td>
                <td>
                    Default table cell
                </td>
            </tr>
            <tr>
                <td>
                    <code>&lt;th&gt;</code>
                </td>
                <td>
                    Special table cell for column (or row, depending on scope and placement) labels<br>
                    Must be used within a <code>&lt;thead&gt;</code>
                </td>
            </tr>
            <tr>
                <td>
                    <code>&lt;caption&gt;</code>
                </td>
                <td>
                    Description or summary of what the table holds, especially useful for screen readers
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="span4">
<pre class="prettyprint linenums">
&lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;…&lt;/th&gt;
      &lt;th&gt;…&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;…&lt;/td&gt;
      &lt;td&gt;…&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
</pre>
    </div>
</div>

<h2>Table options</h2>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Default</td>
        <td class="muted">None</td>
        <td>No styles, just columns and rows</td>
    </tr>
    <tr>
        <td>Basic</td>
        <td>
            <code>.table</code>
        </td>
        <td>Only horizontal lines between rows</td>
    </tr>
    <tr>
        <td>Bordered</td>
        <td>
            <code>.table-bordered</code>
        </td>
        <td>Rounds corners and adds outter border</td>
    </tr>
    <tr>
        <td>Zebra-stripe</td>
        <td>
            <code>.table-striped</code>
        </td>
        <td>Adds light gray background color to odd rows (1, 3, 5, etc)</td>
    </tr>
    <tr>
        <td>Condensed</td>
        <td>
            <code>.table-condensed</code>
        </td>
        <td>Cuts vertical padding in half, from 8px to 4px, within all <code>td</code> and <code>th</code> elements</td>
    </tr>
    </tbody>
</table>


<h2>Example tables</h2>

<h3>1. Default table styles</h3>
<div class="row">
    <div class="span4">
        <p>Tables are automatically styled with only a few borders to ensure readability and maintain structure. With 2.0, the <code>.table</code> class is required.</p>
<pre class="prettyprint linenums">
&lt;table class="table"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Language</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>CSS</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Javascript</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Stu</td>
                <td>Dent</td>
                <td>HTML</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<h3>2. Striped table</h3>
<div class="row">
    <div class="span4">
        <p>Get a little fancy with your tables by adding zebra-striping&mdash;just add the <code>.table-striped</code> class.</p>
        <p class="muted"><strong>Note:</strong> Sprited tables use the <code>:nth-child</code> CSS selector and is not available in IE7-IE8.</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-striped"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Language</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>CSS</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Javascript</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Stu</td>
                <td>Dent</td>
                <td>HTML</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<h3>3. Bordered table</h3>
<div class="row">
    <div class="span4">
        <p>Add borders around the entire table and rounded corners for aesthetic purposes.</p>
<pre class="prettyprint linenums">
&lt;table class="table table-bordered"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Language</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td colspan="2">Mark Otto</td>
                <td>CSS</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td rowspan="2">Javascript</td>
            </tr>
            </tr>
            <td>3</td>
            <td>Stu</td>
            <td>Dent</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Brosef</td>
                <td>Stalin</td>
                <td>HTML</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<h3>4. Condensed table</h3>
<div class="row">
    <div class="span4">
        <p>Make your tables more compact by adding the <code>.table-condensed</code> class to cut table cell padding in half (from 8px to 4px).</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-condensed"&gt;
  …
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
        <table class="table table-condensed">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Language</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>CSS</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Javascript</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Stu</td>
                <td>Dent</td>
                <td>HTML</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>



<h3>5. Combine them all!</h3>
<div class="row">
    <div class="span4">
        <p>Feel free to combine any of the table classes to achieve different looks by utilizing any of the available classes.</p>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-striped table-bordered table-condensed"&gt;
  ...
&lt;/table&gt;</pre>
    </div>
    <div class="span8">
        <table class="table table-striped table-bordered table-condensed">
            <thead>
            <tr>
                <th>#</th>
                <th class="yellow">First Name</th>
                <th class="blue">Last Name</th>
                <th class="green">Language</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>CSS</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>Javascript</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Stu</td>
                <td>Dent</td>
                <td>HTML</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Brosef</td>
                <td>Stalin</td>
                <td>HTML</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>