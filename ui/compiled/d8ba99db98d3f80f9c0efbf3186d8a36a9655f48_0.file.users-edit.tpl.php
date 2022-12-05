<?php
/* Smarty version 3.1.33, created on 2021-11-08 11:39:25
  from '/home/myla4538/public_html/e-billing/ui/theme/ibilling/users-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6188a9fd7360f2_94230415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8ba99db98d3f80f9c0efbf3186d8a36a9655f48' => 
    array (
      0 => '/home/myla4538/public_html/e-billing/ui/theme/ibilling/users-edit.tpl',
      1 => 1551359636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6188a9fd7360f2_94230415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10324558296188a9fd710889_90967082', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_10324558296188a9fd710889_90967082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10324558296188a9fd710889_90967082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit User'];?>
</h5>

                </div>
                <div class="ibox-content" id="application_ajaxrender">

                    <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-edit-post">
                        <div class="form-group">
                            <label for="username"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['username'];?>
">
                        </div>
                        <div class="form-group">
                            <label for="fullname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Name'];?>
</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['fullname'];?>
">
                        </div>

                        <div class="form-group">
                            <div id="croppic"></div>

                            <button type="button" id="cropContainerHeaderButton" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload Picture'];?>
</button>
                            <button type="button" id="opt_gravatar" class="btn btn-info"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Use Gravatar'];?>
</button>
                            <button type="button" id="no_image" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Image'];?>
</button>
                        </div>

                        <div class="form-group">
                            <label for="fullname"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Picture'];?>
</label>
                            <input type="text" class="form-control picture" id="picture" readonly name="picture" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['img'];?>
">
                        </div>

                        <?php if (($_smarty_tpl->tpl_vars['user']->value['id']) != ($_smarty_tpl->tpl_vars['d']->value['id'])) {?>
                            <div class="form-group">
                                                                                                                                
                                                                
                                <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['User'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>

                                <div class="i-checks"><label> <input type="radio" value="Admin" name="user_type" <?php if ($_smarty_tpl->tpl_vars['d']->value->user_type == 'Admin') {?>checked<?php }?>> <i></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Full Administrator'];?>
 </label></div>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                                    <div class="i-checks"><label> <input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['role']->value['id'];?>
" name="user_type" <?php if ($_smarty_tpl->tpl_vars['d']->value->roleid == $_smarty_tpl->tpl_vars['role']->value['id']) {?>checked<?php }?>> <i></i> <?php echo $_smarty_tpl->tpl_vars['role']->value['rname'];?>
 </label></div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            </div>
                        <?php }?>
                        <div class="form-group">
                            <label for="password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['password_change_help'];?>
</span>
                        </div>

                        <div class="form-group">
                            <label for="cpassword"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Confirm Password'];?>
</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword">
                        </div>

                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
                    </form>

                </div>
            </div>



        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
