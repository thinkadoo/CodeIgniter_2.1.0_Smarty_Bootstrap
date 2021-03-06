<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 14:34:35
         compiled from "application/views/bootstrap/basecss/forms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12253223564f70625bc10c15-70437055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6a6f37956e1d17114237fe51a0dd1bbbc5ac3fe' => 
    array (
      0 => 'application/views/bootstrap/basecss/forms.tpl',
      1 => 1332765200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12253223564f70625bc10c15-70437055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70625bc29332_08041381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70625bc29332_08041381')) {function content_4f70625bc29332_08041381($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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



<!-- Forms
================================================== -->
<section id="forms">
<div class="page-header">
    <h1>Forms</h1>
</div>
<div class="row">
    <div class="span4">
        <h2>Flexible HTML and CSS</h2>
        <p>The best part about forms in Bootstrap is that all your inputs and controls look great no matter how you build them in your markup. No superfluous HTML is required, but we provide the patterns for those who require it.</p>
        <p>More complicated layouts come with succinct and scalable classes for easy styling and event binding, so you're covered at every step.</p>
    </div>
    <div class="span4">
        <h2>Four layouts included</h2>
        <p>Bootstrap comes with support for four types of form layouts:</p>
        <ul>
            <li>Vertical (default)</li>
            <li>Search</li>
            <li>Inline</li>
            <li>Horizontal</li>
        </ul>
        <p>Different types of form layouts require some changes to markup, but the controls themselves remain and behave the same.</p>
    </div>
    <div class="span4">
        <h2>Control states and more</h2>
        <p>Bootstrap's forms include styles for all the base form controls like input, textarea, and select you'd expect. But it also comes with a number of custom components like appended and prepended inputs and support for lists of checkboxes.</p>
        <p>States like error, warning, and success are included for each type of form control. Also included are styles for disabled controls.</p>
    </div>
</div>

<h2>Four types of forms</h2>
<p>Bootstrap provides simple markup and styles for four styles of common web forms.</p>
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
        <th>Vertical (default)</th>
        <td><code>.form-vertical</code> <span class="muted">(not required)</span></td>
        <td>Stacked, left-aligned labels over controls</td>
    </tr>
    <tr>
        <th>Inline</th>
        <td><code>.form-inline</code></td>
        <td>Left-aligned label and inline-block controls for compact style</td>
    </tr>
    <tr>
        <th>Search</th>
        <td><code>.form-search</code></td>
        <td>Extra-rounded text input for a typical search aesthetic</td>
    </tr>
    <tr>
        <th>Horizontal</th>
        <td><code>.form-horizontal</code></td>
        <td>Float left, right-aligned labels on same line as controls</td>
    </tr>
    </tbody>
</table>


<h2>Example forms <small>using just form controls, no extra markup</small></h2>
<h3>Basic form</h3>
<div class="row">
    <div class="span3">
        <p>With v2.0, we have lighter and smarter defaults for form styles. No extra markup, just form controls.</p>
    </div>
    <div class="span9">
        <form class="well">
            <label>Label name</label>
            <input type="text" class="span3" placeholder="Type something…"> <span class="help-inline">Associated help text!</span>
            <label class="checkbox">
                <input type="checkbox"> Check me out
            </label>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</div> <!-- /row -->
<h3>Search form</h3>
<div class="row">
    <div class="span3">
        <p>Reflecting default WebKit styles, just add <code>.form-search</code> for extra rounded search fields.</p>
    </div>
    <div class="span9">
        <form class="well form-search">
            <input type="text" class="input-medium search-query">
            <button type="submit" class="btn">Search</button>
        </form>
    </div>
</div> <!-- /row -->
<h3>Inline form</h3>
<div class="row">
    <div class="span3">
        <p>Inputs are block level to start. For <code>.form-inline</code> and <code>.form-horizontal</code>, we use inline-block.</p>
    </div>
    <div class="span9">
        <form class="well form-search">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <button type="submit" class="btn">Go</button>
        </form>
    </div>
</div><!-- /row -->

<br>

<h2>Horizontal forms</h2>
<div class="row">
    <div class="span8">
        <form class="form-horizontal">
            <fieldset>
                <legend>Controls Bootstrap supports</legend>
                <div class="control-group">
                    <label class="control-label" for="input01">Text input</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="input01">
                        <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="optionsCheckbox">Checkbox</label>
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" id="optionsCheckbox" value="option1">
                            Option one is this and that&mdash;be sure to include why it’s great
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="select01">Select list</label>
                    <div class="controls">
                        <select id="select01">
                            <option>something</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="multiSelect">Multicon-select</label>
                    <div class="controls">
                        <select multiple="multiple" id="multiSelect">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="fileInput">File input</label>
                    <div class="controls">
                        <input class="input-file" id="fileInput" type="file">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="textarea">Textarea</label>
                    <div class="controls">
                        <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="span4">
        <h3>What's included</h3>
        <p>Shown on the left are all the default form controls we support. Here's the bulleted list:</p>
        <ul>
            <li>text inputs (text, password, email, etc)</li>
            <li>checkbox</li>
            <li>radio</li>
            <li>select</li>
            <li>multiple select</li>
            <li>file input</li>
            <li>textarea</li>
        </ul>
        <hr>
        <h3>New defaults with v2.0</h3>
        <p>Up to v1.4, Bootstrap's default form styles used the horizontal layout. With Bootstrap 2, we removed that constraint to have smarter, more scalable defaults for any form.</p>
    </div>
</div>

<br>

<div class="row">
    <div class="span8">
        <form class="form-horizontal">
            <fieldset>
                <legend>Form control states</legend>
                <div class="control-group">
                    <label class="control-label" for="focusedInput">Focused input</label>
                    <div class="controls">
                        <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused…">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Uneditable input</label>
                    <div class="controls">
                        <span class="input-xlarge uneditable-input">Some value here</span>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="disabledInput">Disabled input</label>
                    <div class="controls">
                        <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="Disabled input here…" disabled>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="optionsCheckbox2">Disabled checkbox</label>
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" id="optionsCheckbox2" value="option1" disabled>
                            This is a disabled checkbox
                        </label>
                    </div>
                </div>
                <div class="control-group warning">
                    <label class="control-label" for="inputError">Input with warning</label>
                    <div class="controls">
                        <input type="text" id="inputError">
                        <span class="help-inline">Something may have gone wrong</span>
                    </div>
                </div>
                <div class="control-group error">
                    <label class="control-label" for="inputError">Input with error</label>
                    <div class="controls">
                        <input type="text" id="inputError">
                        <span class="help-inline">Please correct the error</span>
                    </div>
                </div>
                <div class="control-group success">
                    <label class="control-label" for="inputError">Input with success</label>
                    <div class="controls">
                        <input type="text" id="inputError">
                        <span class="help-inline">Woohoo!</span>
                    </div>
                </div>
                <div class="control-group success">
                    <label class="control-label" for="selectError">Select with success</label>
                    <div class="controls">
                        <select id="selectError">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <span class="help-inline">Woohoo!</span>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="span4">
        <h3>Redesigned browser states</h3>
        <p>Bootstrap features styles for browser-supported focused and <code>disabled</code> states. We remove the default Webkit <code>outline</code> and apply a <code>box-shadow</code> in it's place for <code>:focus</code>.</p>
        <hr>
        <h3>Form validation</h3>
        <p>It also includes validation styles for errors, warnings, and success. To use, add the error class to the surrounding <code>.control-group</code>.</p>
<pre class="prettyprint linenums">
&lt;fieldset
  class="control-group error"&gt;
  …
&lt;/fieldset&gt;
</pre>
    </div>
</div>

<br>

<div class="row">
    <div class="span8">
        <form class="form-horizontal">
            <fieldset>
                <legend>Extending form controls</legend>
                <div class="control-group">
                    <label class="control-label">Form sizes</label>
                    <div class="controls docs-input-sizes">
                        <input class="span1" type="text" placeholder=".span1">
                        <input class="span2" type="text" placeholder=".span2">
                        <input class="span3" type="text" placeholder=".span3">
                        <select class="span1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <select class="span2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <select class="span3">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <p class="help-block">Use the same <code>.span*</code> classes from the grid system for input sizes.</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="prependedInput">Prepended text</label>
                    <div class="controls">
                        <div class="input-prepend">
                            <span class="add-on">@</span>
                            <input class="span2" id="prependedInput" size="16" type="text">
                        </div>
                        <p class="help-block">Here's some help text</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="appendedInput">Appended text</label>
                    <div class="controls">
                        <div class="input-append">
                            <input class="span2" id="appendedInput" size="16" type="text">
                            <span class="add-on">.00</span>
                        </div>
                        <p class="help-block">Here's more help text</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inlineCheckboxes">Inline checkboxes</label>
                    <div class="controls">
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                        </label>
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="optionsCheckboxList">Checkboxes</label>
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" name="optionsCheckboxList1" value="option1">
                            Option one is this and that&mdash;be sure to include why it’s great
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="optionsCheckboxList2" value="option2">
                            Option two can also be checked and included in form results
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="optionsCheckboxList3" value="option3">
                            Option three can&mdash;yes, you guessed it&mdash;also be checked and included in form results
                        </label>
                        <p class="help-block"><strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Radio buttons</label>
                    <div class="controls">
                        <label class="radio">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Option one is this and that&mdash;be sure to include why it’s great
                        </label>
                        <label class="radio">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                            Option two can is something else and selecting it will deselect option one
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="span4">
        <h3>Prepend &amp; append inputs</h3>
        <p>Input groups&mdash;with appended or prepended text&mdash;provide an easy way to give more context for your inputs. Great examples include the @ sign for Twitter usernames or $ for finances.</p>
        <hr>
        <h3>Checkboxes and radios</h3>
        <p>Up to v1.4, Bootstrap required extra markup around checkboxes and radios to stack them. Now, it's a simple matter of repeating the <code>&lt;label class="checkbox"&gt;</code> that wraps the <code>&lt;input type="checkbox"&gt;</code>.</p>
        <p>Inline checkboxes and radios are also supported. Just add <code>.inline</code> to any <code>.checkbox</code> or <code>.radio</code> and you're done.</p>
        <hr>
        <h4>Inline forms and append/prepend</h4>
        <p>To use prepend or append inputs in an inline form, be sure to place the <code>.add-on</code> and <code>input</code> on the same line, without spaces.</p>
        <hr>
        <h4>Form help text</h4>
        <p>To add help text for your form inputs, include inline help text with <code>&lt;span class="help-inline"&gt;</code> or a help text block with <code>&lt;p class="help-block"&gt;</code> after the input element.</p>
    </div>
</div><!-- /row -->
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>