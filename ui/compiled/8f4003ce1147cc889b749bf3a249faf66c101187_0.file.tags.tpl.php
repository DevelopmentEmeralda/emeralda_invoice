<?php
/* Smarty version 3.1.33, created on 2022-03-09 22:41:55
  from '/home/mylocaid/public_html/ebilling.myloca.id/ui/theme/ibilling/tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6228cac32ba943_91889450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f4003ce1147cc889b749bf3a249faf66c101187' => 
    array (
      0 => '/home/mylocaid/public_html/ebilling.myloca.id/ui/theme/ibilling/tags.tpl',
      1 => 1551359636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6228cac32ba943_91889450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19082785766228cac32adc44_04167065', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_19082785766228cac32adc44_04167065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19082785766228cac32adc44_04167065',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Tags'];?>
 </h5>
        </div>
        <div class="ibox-content">

            <table class="table table-bordered table-hover sys_table">
                <thead>
                <tr>

                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tag'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</th>

                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                    <tr>

                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['text'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-xs cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
