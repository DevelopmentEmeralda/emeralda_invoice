<?php
/* Smarty version 3.1.33, created on 2022-06-17 11:47:10
  from '/home/mylocaid/public_html/ebilling.myloca.id/ui/theme/ibilling/contacts_import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_62ac074e94f880_11629998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fc5a351985f52325b27e06adb726ba0521b62cb' => 
    array (
      0 => '/home/mylocaid/public_html/ebilling.myloca.id/ui/theme/ibilling/contacts_import.tpl',
      1 => 1551359636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ac074e94f880_11629998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95309347362ac074e943b18_17202694', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_95309347362ac074e943b18_17202694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_95309347362ac074e943b18_17202694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12 m-b-sm">

            <div class="pull-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/list/" class="btn btn-xs btn-danger"><i class="fa fa-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Cancel'];?>
</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/contacts.csv" class="btn btn-xs btn-primary"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download Sample File'];?>
</a>
            </div>

        </div>

    </div>


    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default" id="uploading_inside">
                <div class="panel-body">
                    <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
contacts/csv_upload/" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fa fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop CSV File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Or Click to Upload'];?>
</span>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>






    <input type="hidden" id="_msg_importing" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Importing'];?>
 ...">
    <input type="hidden" id="_msg_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php
}
}
/* {/block "content"} */
}
