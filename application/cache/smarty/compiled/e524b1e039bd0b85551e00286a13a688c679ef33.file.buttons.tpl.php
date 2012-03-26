<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 14:34:21
         compiled from "application/views/bootstrap/basecss/buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:909760324f7061041714e0-29612007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e524b1e039bd0b85551e00286a13a688c679ef33' => 
    array (
      0 => 'application/views/bootstrap/basecss/buttons.tpl',
      1 => 1332765157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '909760324f7061041714e0-29612007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70610418fb67_14835982',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70610418fb67_14835982')) {function content_4f70610418fb67_14835982($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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



<!-- Buttons
================================================== -->
<section id="buttons">
    <div class="page-header">
        <h1>Buttons</h1>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Button</th>
            <th>Class</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a class="btn" href="#">Default</a></td>
            <td><code>.btn</code></td>
            <td>Standard gray button with gradient</td>
        </tr>
        <tr>
            <td><a class="btn btn-primary" href="#">Primary</a></td>
            <td><code>.btn-primary</code></td>
            <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
        </tr>
        <tr>
            <td><a class="btn btn-info" href="#">Info</a></td>
            <td><code>.btn-info</code></td>
            <td>Used as an alternate to the default styles</td>
        </tr>
        <tr>
            <td><a class="btn btn-success" href="#">Success</a></td>
            <td><code>.btn-success</code></td>
            <td>Indicates a successful or positive action</td>
        </tr>
        <tr>
            <td><a class="btn btn-warning" href="#">Warning</a></td>
            <td><code>.btn-warning</code></td>
            <td>Indicates caution should be taken with this action</td>
        </tr>
        <tr>
            <td><a class="btn btn-danger" href="#">Danger</a></td>
            <td><code>.btn-danger</code></td>
            <td>Indicates a dangerous or potentially negative action</td>
        </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="span4">
            <h3>Buttons for actions</h3>
            <p>As a convention, buttons should only be used for actions while hyperlinks are to be used for objects. For instance, "Download" should be a button while "recent activity" should be a link.</p>
        </div>
        <div class="span4">
            <h3>For anchors and forms</h3>
            <p>Button styles can be applied to anything with the <code>.btn</code> applied. However, typically you’ll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements.</p>
        </div>
        <div class="span4">
            <p><strong>Note:</strong> All buttons must include the <code>.btn</code> class. Button styles should be applied to <code>&lt;button&gt;</code> and <code>&lt;a&gt;</code> elements for consistency.</p>
        </div>
    </div>

    <div class="row">
        <div class="span4">
            <h3>Multiple sizes</h3>
            <p>Fancy larger or smaller buttons? Have at it!</p>
            <p>
                <a href="#" class="btn btn-large btn-primary">Primary action</a>
                <a href="#" class="btn btn-large">Action</a>
            </p>
            <p>
                <a href="#" class="btn btn-small btn-primary">Primary action</a>
                <a href="#" class="btn btn-small">Action</a>
            </p>
        </div>
        <div class="span4">
            <h3>Disabled state</h3>
            <p>For disabled buttons, use <code>.btn-disabled</code> for links and <code>:disabled</code> for <code>&lt;button&gt;</code> elements.</p>
            <p>
                <a href="#" class="btn btn-large btn-primary disabled">Primary action</a>
                <a href="#" class="btn btn-large disabled">Action</a>
            </p>
            <p>
                <button class="btn btn-large btn-primary disabled" disabled="disabled">Primary action</button>
                <button class="btn btn-large" disabled>Action</button>
            </p>
        </div>
        <div class="span4">
            <h3>Cross browser compatibility</h3>
            <p>In IE9, we drop the gradient on all buttons in favor of rounded corners as IE9 doesn't crop background gradients to the corners.</p>
            <p>Related, IE9 jankifies disabled <code>button</code> elements, rendering text gray with a nasty text-shadow&mdash;unfortunately we can't fix this.</p>
        </div>
    </div>

    <br>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>