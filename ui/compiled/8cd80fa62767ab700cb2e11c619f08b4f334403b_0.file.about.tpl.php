<?php
/* Smarty version 3.1.33, created on 2022-03-09 22:44:26
  from '/home/mylocaid/public_html/ebilling.myloca.id/ui/theme/ibilling/about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6228cb5a4d0d63_51382840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cd80fa62767ab700cb2e11c619f08b4f334403b' => 
    array (
      0 => '/home/mylocaid/public_html/ebilling.myloca.id/ui/theme/ibilling/about.tpl',
      1 => 1551359638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6228cb5a4d0d63_51382840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16764223306228cb5a4c93a0_37521310', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_16764223306228cb5a4c93a0_37521310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16764223306228cb5a4c93a0_37521310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div id="updateProgressbar" class="progress" style="display: none;">
                <div class="progress progress-striped active">
                    <div class="progress-bar" id="ib_progressing" role="progressbar" data-transitiongoal="10"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="ibox float-e-margins" id="ib_box">
                <div class="ibox-title">
                    <h5>iBilling Build - <?php echo $_smarty_tpl->tpl_vars['_c']->value['build'];?>
</h5>

                </div>
                <div class="ibox-content" id="ibox_update">

                    
                    
                    <button type="button" id="make_update" class="cls_update btn btn-danger">Update</button>


                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['app_stage']->value == 'Demo') {?>

                <input type="hidden" name="purchase_code" id="purchase_code" value="">

            <?php } else { ?>

                <div class="ibox float-e-margins" id="ib_box">

                    <div class="ibox-content">


                        <form role="form" name="accadd" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/activate_license_post/">





                            <div class="form-group">
                                <label for="purchase_code">Purchase Code</label>
                                <input type="text" required class="form-control" id="purchase_code" name="purchase_code" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['purchase_code'];?>
">
                                <span class="help-block"><a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank">How To Get Your Envato Purchase Code?</a> </span>
                            </div>





                            <button type="submit" id="btn_save" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        </form>




                    </div>
                </div>

            <?php }?>



        </div>

        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <label for="resp"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Response'];?>
</label>

                </div>
                <div class="ibox-content">

                    <form class="form-horizontal push-10-t push-10" method="post" onsubmit="return false;">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating">
                                    <textarea class="form-control ib_resp" id="resp" name="resp" rows="9"></textarea>
                                    <label for="api_header_resp">Response</label>
                                </div>

                            </div>
                        </div>

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
