<?php
/* Smarty version 3.1.33, created on 2022-03-09 23:38:14
  from '/home/mylocaid/public_html/ebilling.myloca.id/ui/theme/ibilling/balance-sheet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6228d7f69e0bc7_81177712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8889dc709cfcb07cebf46a2e777952aa2fd1194' => 
    array (
      0 => '/home/mylocaid/public_html/ebilling.myloca.id/ui/theme/ibilling/balance-sheet.tpl',
      1 => 1551359638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6228d7f69e0bc7_81177712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17082811516228d7f69c4cc3_38161441', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_17082811516228d7f69c4cc3_38161441 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17082811516228d7f69c4cc3_38161441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance Sheet'];?>
 </h5>

                </div>
                <div class="ibox-content">

                    <table class="table table-bordered sys_table">

                        <th width="80%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>

                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                            <tr>

                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>

                                <td class="text-right"><span class="amount<?php if ($_smarty_tpl->tpl_vars['ds']->value['balance'] < 0) {?> text-red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['ds']->value['balance'];?>
</span></td>

                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                    </table>
                    <table class="table invoice-total">
                        <tbody>

                        <tr>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                            <td><strong><span class="amount<?php if ($_smarty_tpl->tpl_vars['tbal']->value < 0) {?> text-red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['tbal']->value;?>
</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <!-- Widget-2 end-->
    </div> <!-- Row end-->


<?php
}
}
/* {/block "content"} */
}
