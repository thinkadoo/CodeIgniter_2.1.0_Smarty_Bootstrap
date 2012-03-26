<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 16:17:07
         compiled from "application/views/bootstrap/demo/table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3067359984f707592231703-76445190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca9d7ef3a7ad5da4a17f8a1659c2a32b2c87a46' => 
    array (
      0 => 'application/views/bootstrap/demo/table.tpl',
      1 => 1332771135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3067359984f707592231703-76445190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f707592252d22_69397730',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f707592252d22_69397730')) {function content_4f707592252d22_69397730($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/demo/masthead.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<section id="table">

<h2>Table layout</h2>
<div class="row">
    <div class="span6">
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