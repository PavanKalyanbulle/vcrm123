<?php
/* Smarty version 4.3.2, created on 2025-05-08 17:47:31
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\Settings\Vtiger\EditRegion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_681cee3332ea09_17610983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '592d9e2733072aeb217d03727c0994be68541ed7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\Settings\\Vtiger\\EditRegion.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681cee3332ea09_17610983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('TAX_REGION_ID', $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getId());?><div class="taxRegionContainer modal-dialog modal-xs"><div class="modal-content"><form id="editTaxRegion" class="form-horizontal"><?php if ($_smarty_tpl->tpl_vars['TAX_REGION_ID']->value) {
ob_start();
echo vtranslate('LBL_EDIT_REGION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_prefixVariable1;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable2);
} else {
ob_start();
echo vtranslate('LBL_ADD_NEW_REGION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_prefixVariable3;
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable4);
}
$_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0, true);
?><input type="hidden" name="taxRegionId" value="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_ID']->value;?>
" /><div class="modal-body"><div class="row"><div class="nameBlock"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_REGION_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-lg-5"><input class="inputElement" type="text" name="name" placeholder="<?php echo vtranslate('LBL_ENTER_REGION_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getName();?>
" data-rule-required="true" /></div><div class="col-lg-3"></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div></div><?php }
}
