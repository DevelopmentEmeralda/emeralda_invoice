<?php
/* Smarty version 3.1.33, created on 2021-11-08 11:17:29
  from '/home/myla4538/public_html/e-billing/ui/theme/ibilling/contacts_find_by_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6188a4d9af4e64_73277825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29cad6f2392edfdaa5eb902daacf2b1fe7c29981' => 
    array (
      0 => '/home/myla4538/public_html/e-billing/ui/theme/ibilling/contacts_find_by_group.tpl',
      1 => 1551359636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6188a4d9af4e64_73277825 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18834973716188a4d9ae2728_90191772', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_18834973716188a4d9ae2728_90191772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18834973716188a4d9ae2728_90191772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">



        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/group_email/<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
/" class="btn btn-primary mb-md"><i class="fa fa-paper-plane"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Email'];?>
</a>
                    <br>

                    <table class="table table-bordered table-hover sys_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</th>
                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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

                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</a> </td>

                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</a> </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['company'];?>
</td>

                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['email'];?>


                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['ds']->value['phone'];?>

                                </td>
                                <td class="text-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>

                                    <a href="#" class="btn btn-danger btn-xs cdelete" id="uid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
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
        </div>




    </div>


<?php
}
}
/* {/block "content"} */
}
