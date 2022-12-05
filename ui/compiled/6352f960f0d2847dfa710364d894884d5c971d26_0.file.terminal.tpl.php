<?php
/* Smarty version 3.1.33, created on 2022-12-05 11:35:47
  from 'C:\xampp\htdocs\emeralda_invoice\ui\theme\ibilling\terminal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_638d752393d8f9_03042706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6352f960f0d2847dfa710364d894884d5c971d26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\emeralda_invoice\\ui\\theme\\ibilling\\terminal.tpl',
      1 => 1670212257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638d752393d8f9_03042706 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_363224792638d7523938935_26601489', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_363224792638d7523938935_26601489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_363224792638d7523938935_26601489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Terminal'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <div id="terminal">

                        <div id="output"></div>

                        <div id="command">
                            <div id="prompt">&gt;</div>
                            <input type="text" autocapitalize="off">
                        </div>

                    </div>

                </div>
            </div>



        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
