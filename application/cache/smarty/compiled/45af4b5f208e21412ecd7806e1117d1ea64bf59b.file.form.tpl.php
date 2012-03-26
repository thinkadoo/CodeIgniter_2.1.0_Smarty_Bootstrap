<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 15:55:55
         compiled from "application/views/bootstrap/demo/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14837539364f70756bef3050-35002228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45af4b5f208e21412ecd7806e1117d1ea64bf59b' => 
    array (
      0 => 'application/views/bootstrap/demo/form.tpl',
      1 => 1332769741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14837539364f70756bef3050-35002228',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70756bf0c031_02494320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70756bf0c031_02494320')) {function content_4f70756bf0c031_02494320($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/demo/masthead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section id="form">

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
</div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>