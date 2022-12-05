<?php
/* Smarty version 3.1.33, created on 2021-11-23 14:01:22
  from '/home/myla4538/public_html/e-billing/ui/theme/ibilling/documents_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_619c91c28cb897_25217961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '725a376b46ce2b35fcc541956aa144b42f8d93d9' => 
    array (
      0 => '/home/myla4538/public_html/e-billing/ui/theme/ibilling/documents_view.tpl',
      1 => 1551359636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619c91c28cb897_25217961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2053777161619c91c28be0f6_38959229', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_2053777161619c91c28be0f6_38959229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2053777161619c91c28be0f6_38959229',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-body">

                    <h3 style="color: #2f96f3;"><?php echo $_smarty_tpl->tpl_vars['doc']->value->title;?>
</h3>
                    <hr>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['doc']->value->file_dl_token;?>
" class="md-btn md-btn-primary waves-effect waves-light"><i class="fa fa-download"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
 </a>

                    <?php if (has_access($_smarty_tpl->tpl_vars['user']->value->roleid,'documents','delete')) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
delete/document/<?php echo $_smarty_tpl->tpl_vars['doc']->value->id;?>
/" class="md-btn md-btn-danger waves-effect waves-light"><i class="fa fa-trash"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
 </a>
                    <?php }?>


                    <hr>

                    <?php if ($_smarty_tpl->tpl_vars['ext']->value == 'jpg' || $_smarty_tpl->tpl_vars['ext']->value == 'png' || $_smarty_tpl->tpl_vars['ext']->value == 'gif') {?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/docs/<?php echo $_smarty_tpl->tpl_vars['doc']->value->file_path;?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['doc']->value->title;?>
">
                    <?php }?>





                </div>
            </div>
        </div>



    </div>

<?php
}
}
/* {/block "content"} */
}
