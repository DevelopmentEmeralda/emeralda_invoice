<?php
/* Smarty version 3.1.33, created on 2021-11-08 11:15:22
  from '/home/myla4538/public_html/e-billing/ui/theme/ibilling/api.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6188a45a71bc17_72442102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c1184b6953ad50b594bd0cec0168f5d8751ef64' => 
    array (
      0 => '/home/myla4538/public_html/e-billing/ui/theme/ibilling/api.tpl',
      1 => 1551359638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6188a45a71bc17_72442102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6578752776188a45a70a3b8_67672050', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_6578752776188a45a70a3b8_67672050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6578752776188a45a70a3b8_67672050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="exampleInputEmail1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Application URL'];?>
:</label>
                <input type="text" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add API Access'];?>
</h5>

                </div>
                <div class="ibox-content" id="ibox_form">


                    <form class="form-horizontal" method="post" id="tform" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_post/">



                        <div class="form-group">
                            <label for="label" class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Label'];?>
</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="label" name="label">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>



    </div>

    <div class="row">


        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Access'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <table class="table table-bordered sys_table">
                        <thead>
                        <tr>
                            <th width="20%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Label'];?>
</th>
                            <th width="60%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Key'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
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
                                <td> <?php echo $_smarty_tpl->tpl_vars['ds']->value['label'];?>
 </td>
                                <td><input class="form-control input-sm" type="text" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['apikey'];?>
"></td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_regen/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-info btn-xs"><i class="fa fa-refresh"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Re Generate Key'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/api_delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                                </td>
                            </tr>

                            <?php
}
} else {
?>
                            <tr>

                                <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
 </td>

                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>

    <input type="hidden" id="_lan_no_results_found" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No results found'];?>
">


<?php
}
}
/* {/block "content"} */
}
