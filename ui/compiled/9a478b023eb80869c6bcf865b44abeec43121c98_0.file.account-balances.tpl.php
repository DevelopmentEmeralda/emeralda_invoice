<?php
/* Smarty version 3.1.33, created on 2021-11-23 13:11:54
  from '/home/myla4538/public_html/e-billing/ui/theme/ibilling/account-balances.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_619c862acc4875_36239713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a478b023eb80869c6bcf865b44abeec43121c98' => 
    array (
      0 => '/home/myla4538/public_html/e-billing/ui/theme/ibilling/account-balances.tpl',
      1 => 1551359638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c862acc4875_36239713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_278329661619c862aca5f92_77197818', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_278329661619c862aca5f92_77197818 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_278329661619c862aca5f92_77197818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Financial Balances'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
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
                                <td class="text-right"><span <?php if ($_smarty_tpl->tpl_vars['ds']->value['balance'] < 0) {?>class="text-red"<?php }?>><?php echo ib_money_format($_smarty_tpl->tpl_vars['ds']->value['balance'],$_smarty_tpl->tpl_vars['_c']->value);?>
</span> </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        <tr>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
:</strong></td>
                            <td class="text-right"><strong><span <?php if ($_smarty_tpl->tpl_vars['tbal']->value < 0) {?>class="text-red"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tbal']->value;?>
</span></strong></td>
                        </tr>
                    </table>

                </div>
            </div>



        </div>



    </div>


<?php
}
}
/* {/block "content"} */
}
