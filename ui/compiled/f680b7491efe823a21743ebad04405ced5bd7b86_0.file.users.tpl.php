<?php
/* Smarty version 3.1.33, created on 2022-12-05 11:18:04
  from 'C:\xampp\htdocs\emeralda_invoice\ui\theme\ibilling\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_638d70fc6fc567_71843865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f680b7491efe823a21743ebad04405ced5bd7b86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\emeralda_invoice\\ui\\theme\\ibilling\\users.tpl',
      1 => 1670212255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638d70fc6fc567_71843865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_341786958638d70fc6d7080_95557946', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_341786958638d70fc6d7080_95557946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_341786958638d70fc6d7080_95557946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage_Users'];?>
</h5>

                </div>
                <div class="ibox-content">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-add" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_New_User'];?>
</a>
                    <br>
                    <br>
                    <table class="table table-striped table-bordered table-responsive">
                        <th style="width: 60px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Avatar'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full_Name'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                            <tr>
                                <td><?php if ($_smarty_tpl->tpl_vars['ds']->value['img'] == 'gravatar') {?>
                                        <img src="http://www.gravatar.com/avatar/<?php echo md5(($_smarty_tpl->tpl_vars['ds']->value['username']));?>
?s=60" class="img-circle" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['fullname'];?>
">
                                    <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['img'] == '') {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/imgs/default-user-avatar.png" style="max-height: 60px;" alt="">
                                    <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['ds']->value['img'];?>
" class="img-circle" style="max-height: 60px;" alt="<?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>
">
                                    <?php }?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['fullname'];?>
</td>
                                <td><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['user_type']);?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-inverse"><i class="fa fa-pencil"></i> </a>
                                    <?php if (($_smarty_tpl->tpl_vars['_user']->value['username']) != ($_smarty_tpl->tpl_vars['ds']->value['username'])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-danger cdelete"><i class="fa fa-trash"></i> </a>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


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
