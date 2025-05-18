<?php
/* Smarty version 4.3.2, created on 2025-05-07 22:04:58
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\Settings\Profiles\DeleteTransferForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_681bd90a1be4e2_49959238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '523e88ab1d1b00553ef6dcff6ab87bbe6d528ece' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\Settings\\Profiles\\DeleteTransferForm.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681bd90a1be4e2_49959238 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-dialog modelContainer"><?php ob_start();
echo vtranslate('LBL_DELETE_PROFILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('HEADER_TITLE', (($_prefixVariable1).(" - ")).($_prefixVariable2));
$_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0, true);
?><div class="modal-content"><form class="form-horizontal" id="DeleteModal" name="AddComment" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Delete" /><input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId();?>
" /><div name='massEditContent'><div class="modal-body"><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_TRANSFER_ROLES_TO_PROFILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls fieldValue col-xs-6"><select id="transfer_record" name="transfer_record" class="select2 col-xs-9"><optgroup label="<?php echo vtranslate('LBL_PROFILES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_RECORDS']->value, 'PROFILE_MODEL');
$_smarty_tpl->tpl_vars['PROFILE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PROFILE_MODEL']->value) {
$_smarty_tpl->tpl_vars['PROFILE_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('PROFILE_ID', $_smarty_tpl->tpl_vars['PROFILE_MODEL']->value->get('profileid'));
if ($_smarty_tpl->tpl_vars['PROFILE_ID']->value != $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId()) {?><option value="<?php echo $_smarty_tpl->tpl_vars['PROFILE_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PROFILE_MODEL']->value->get('profilename');?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div></div>


<?php }
}
