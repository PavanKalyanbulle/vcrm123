<?php
/* Smarty version 4.3.2, created on 2025-04-08 16:15:31
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\Settings\LayoutEditor\FieldCreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67f54ba3cbc114_88621194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d1b6b7f17be913f7b8cede9e2829a7c9c4a9cc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\Settings\\LayoutEditor\\FieldCreate.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f54ba3cbc114_88621194 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-dialog createFieldModal modelContainer <?php if (!$_smarty_tpl->tpl_vars['IS_FIELD_EDIT_MODE']->value) {?>hide<?php }?>"><?php if (!$_smarty_tpl->tpl_vars['IS_FIELD_EDIT_MODE']->value) {
ob_start();
echo vtranslate('LBL_CREATE_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
$_prefixVariable12 = ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable12);
} else {
ob_start();
echo vtranslate('LBL_EDIT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value));
$_prefixVariable13 = ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable13);
}
$_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0, true);
?><div class="modal-content"><form class="form-horizontal createCustomFieldForm"><input type="hidden" name="fieldid" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
" /><input type="hidden" name="addToBaseTable" value="<?php echo $_smarty_tpl->tpl_vars['ADD_TO_BASE_TABLE']->value;?>
" /><input type="hidden" name="_source" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE']->value;?>
" /><input type="hidden" name="fieldname" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" /><input type="hidden" id="headerFieldsCount" value="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELDS_COUNT']->value;?>
" /><div class="modal-body model-body-scrollenabled"><?php if (!$_smarty_tpl->tpl_vars['IS_FIELD_EDIT_MODE']->value) {?><div class="form-group blockControlGroup hide"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_SELECT_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls col-sm-7"><select class="blockList col-sm-9" name="blockid"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']->value, 'BLOCK_MODEL', false, 'BLOCK_ID');
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_ID']->value => $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value) {
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->isAddCustomFieldEnabled()) {
if ($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('label') == 'LBL_ITEM_DETAILS' && in_array($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,getInventoryModules())) {
continue 1;
}?><option value="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('label');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php }?><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_SELECT_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls col-sm-7"><select class="fieldTypesList col-sm-9" name="fieldType" <?php if ($_smarty_tpl->tpl_vars['IS_FIELD_EDIT_MODE']->value) {?> disabled="disabled"<?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ADD_SUPPORTED_FIELD_TYPES']->value, 'FIELD_TYPE');
$_smarty_tpl->tpl_vars['FIELD_TYPE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->value) {
$_smarty_tpl->tpl_vars['FIELD_TYPE']->do_else = false;
if (!$_smarty_tpl->tpl_vars['IS_FIELD_EDIT_MODE']->value && $_smarty_tpl->tpl_vars['FIELD_TYPE']->value == 'Relation') {?> <?php continue 1;
}?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
"<?php if (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataTypeLabel() == $_smarty_tpl->tpl_vars['FIELD_TYPE']->value)) {?>selected='selected'<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_TYPE_INFO']->value[$_smarty_tpl->tpl_vars['FIELD_TYPE']->value], 'TYPE_INFO_VALUE', false, 'TYPE_INFO');
$_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TYPE_INFO']->value => $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->value) {
$_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['TYPE_INFO']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_TYPE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label><div class="controls col-sm-7"><input type="text" class='inputElement col-sm-9' maxlength="50" <?php if ($_smarty_tpl->tpl_vars['IS_FIELD_EDIT_MODE']->value) {?>disabled="disabled"<?php }?> name="fieldLabel" value="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
" data-rule-required='true' style='width: 75%' /></div></div><?php if (!$_smarty_tpl->tpl_vars['IS_FIELD_EDIT_MODE']->value) {?><div class="form-group supportedType lengthsupported"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_LENGTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label><div class="controls col-sm-7"><input type="text" name="fieldLength" class="inputElement" value="" data-rule-required='true' data-rule-positive="true" data-rule-WholeNumber='true' data-rule-illegal='true' style='width: 75%'/></div></div><div class="form-group supportedType decimalsupported hide"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_DECIMALS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label><div class="controls col-sm-7"><input type="text" name="decimal" class="inputElement" value="" data-rule-required='true' style='width: 75%'/></div></div><div class="form-group supportedType preDefinedValueExists hide"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label><div class="controls col-sm-7"><input type="text" id="picklistUi" class="col-sm-9 select2" name="pickListValues" placeholder="<?php echo vtranslate('LBL_ENTER_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-rule-required='true' data-rule-picklist='true'/></div></div><div class="form-group supportedType picklistOption hide"><label class="control-label fieldLabel col-sm-5">&nbsp;</label><div class="controls col-sm-7"><div class="checkbox row" style="margin-left: 5px;"><span class="col-sm-1"><input type="checkbox" name="isRoleBasedPickList" value="1" ></span><span style="margin-left: -10px;"><?php echo vtranslate('LBL_ROLE_BASED_PICKLIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div></div><div class="form-group supportedType relationModules hide"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label><div class="controls col-sm-7"><select class="col-sm-6 relationModule" name="relationmodule[]" multiple data-rule-required='true'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_TYPE_INFO']->value['Relation']['relationModules'], 'RELATION_MODULE_NAME');
$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value) {
$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATION_MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() != 'reference') {
$_smarty_tpl->_subTemplateRender(vtemplate_path('DefaultValueUi.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value), 0, true);
}
if ($_smarty_tpl->tpl_vars['IS_FIELD_EDIT_MODE']->value) {?><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_SHOW_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls col-sm-7"><input type="hidden" name="presence" value="1"/><label class="checkbox"><input type="checkbox" class ='cursorPointer bootstrap-switch' id="fieldPresence" name="presence" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isViewable()) {?> checked <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveOptionDisabled()) {?> readonly="readonly" <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?> readonly="readonly" <?php }?>data-on-text="Yes" data-off-text="No" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('presence');?>
"/></label></div></div><?php } else { ?><input type="hidden" name="presence" value="2" /><?php }?><div class="well fieldProperty"><div class="properties"><div class="row"><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_ENABLE_OR_DISABLE_FIELD_PROP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><div class="row"><div class="form-group col-sm-7"><label class="control-label fieldLabel col-sm-10"><i class="fa fa-exclamation-circle"></i> &nbsp; <?php echo vtranslate('LBL_MANDATORY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls col-sm-2"><input type="hidden" name="mandatory" value="O"/><label class="checkbox" style="margin-left: 6%;"><input type="checkbox" name="mandatory" class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatoryOptionDisabled()) {?> cursorPointerNotAllowed <?php } else { ?> cursorPointer<?php }?>" value="M" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?> checked="checked" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatoryOptionDisabled()) {?>readonly="readonly"<?php }?>/></label></div></div><div class="form-group col-sm-6"><label class="control-label fieldLabel col-sm-7"><i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls col-sm-5"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isQuickCreateOptionDisabled()) {?><input type="hidden" name="quickcreate" value=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('quickcreate');?>
 /><?php } else { ?><input type="hidden" name="quickcreate" value="1" /><?php }
$_smarty_tpl->_assignInScope('IS_QUICKCREATE_SUPPORTED', ((string)$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->isQuickCreateSupported()));?><input type="hidden" name="isquickcreatesupported" value="<?php echo $_smarty_tpl->tpl_vars['IS_QUICKCREATE_SUPPORTED']->value;?>
"><label class="checkbox" style="margin-left: 9%;"><input type="checkbox" class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isQuickCreateOptionDisabled()) {?> cursorPointerNotAllowed <?php } else { ?> cursorPointer<?php }?>" name="quickcreate" value="2" <?php if (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('quickcreate') == '2' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) && $_smarty_tpl->tpl_vars['IS_QUICKCREATE_SUPPORTED']->value) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isQuickCreateOptionDisabled()) {?>readonly="readonly"<?php }?>/></label></div></div></div><div class="row"><div class="form-group col-sm-7"><label class="control-label fieldLabel col-sm-10"><i class="fa fa-key"></i> &nbsp; <?php echo vtranslate('LBL_KEY_FIELD_VIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls col-sm-2"><input type="hidden" name="summaryfield" value="0"/><label class="checkbox" style="margin-left: 6%;"><input type="checkbox" class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isSummaryFieldOptionDisabled()) {?> cursorPointerNotAllowed <?php } else { ?> cursorPointer<?php }?>" name="summaryfield" value="1" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('summaryfield') == '1') {?>checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isSummaryFieldOptionDisabled()) {?>readonly="readonly"<?php }?> /></label></div></div><div class="form-group col-sm-6"><label class="control-label fieldLabel col-sm-7"><i class="fa fa-flag-o"></i> &nbsp; <span><?php echo vtranslate('LBL_HEADER_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label><div class="controls col-sm-5"><input type="hidden" name="headerfield" value="0"/><label class="checkbox" style="margin-left: 9%;"><input type="checkbox" class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isHeaderFieldOptionDisabled()) {?> cursorPointerNotAllowed <?php } else { ?> cursorPointer<?php }?>" name="headerfield" value="1" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('headerfield') == '1') {?>checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isHeaderFieldOptionDisabled() || $_smarty_tpl->tpl_vars['IS_NAME_FIELD']->value) {?>readonly="readonly"<?php }?> /></label></div></div></div><div class="row"><div class="form-group col-sm-7"><label class="control-label fieldLabel col-sm-10"><img src="<?php echo vimage_path('MassEdit.png');?>
" height=14 width=14/> &nbsp; <?php echo vtranslate('LBL_MASS_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls col-sm-2"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMassEditOptionDisabled()) {?><input type="hidden" name="masseditable" value=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('masseditable');?>
 /><?php } else { ?><input type="hidden" name="masseditable" value="2" /><?php }?><label class="checkbox" style="margin-left: 6%;"><input type="checkbox" class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMassEditOptionDisabled()) {?> cursorPointerNotAllowed <?php } else { ?> cursorPointer<?php }?>" name="masseditable" value="1" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('masseditable') == '1') {?>checked="checked" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMassEditOptionDisabled()) {?>readonly="readonly"<?php }?>/></label></div></div></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div><?php if ($_smarty_tpl->tpl_vars['FIELDS_INFO']->value != '[]') {
echo '<script'; ?>
 type="text/javascript">var uimeta = (function () {var fieldInfo = <?php echo $_smarty_tpl->tpl_vars['FIELDS_INFO']->value;?>
;var newFieldInfo = <?php echo $_smarty_tpl->tpl_vars['NEW_FIELDS_INFO']->value;?>
;return {field: {get: function (name, property) {if (name && property === undefined) {return fieldInfo[name];}if (name && property) {return fieldInfo[name][property]}},isMandatory: function (name) {if (fieldInfo[name]) {return fieldInfo[name].mandatory;}return false;},getType: function (name) {if (fieldInfo[name]) {return fieldInfo[name].type}return false;},getNewFieldInfo: function () {if (newFieldInfo['newfieldinfo']) {return newFieldInfo['newfieldinfo']}return false;}},};})();<?php echo '</script'; ?>
><?php }?></div><?php }
}
