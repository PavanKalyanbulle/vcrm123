<?php
/* Smarty version 4.3.2, created on 2025-05-08 17:34:41
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\EmailTemplates\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_681ceb31e2f085_71011643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf6de152bdf89e99638fea102fadbdb7f8ff36d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\EmailTemplates\\EditView.tpl',
      1 => 1744046260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681ceb31e2f085_71011643 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="main-container clearfix"><div id="modnavigator" class="module-nav editViewModNavigator"><div class="hidden-xs hidden-sm mod-switcher-container"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="editViewPageDiv viewContent"><div class="col-sm-12 col-xs-12 content-area"><form id="EditView" class="form-horizontal recordEditView" name="EditView" method="post" action="index.php"><div class="editViewHeader"><div class='row'><div class="col-lg-12 col-md-12 col-lg-pull-0"><?php $_smarty_tpl->_assignInScope('SINGLE_MODULE_NAME', ('SINGLE_').($_smarty_tpl->tpl_vars['MODULE']->value));
if ($_smarty_tpl->tpl_vars['RECORD_ID']->value != '') {?><h4 class="editHeader" title="<?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</h4><?php } else { ?><h4 class="editHeader" ><?php echo vtranslate('LBL_CREATING_NEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4><?php }?></div></div></div><div class="editViewBody"><div class="editViewContents"><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('QUALIFIED_MODULE_NAME', $_prefixVariable1);
$_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
$_smarty_tpl->_assignInScope('IS_SYSTEM_TEMPLATE_EDIT', false);
$_smarty_tpl->_assignInScope('SYSTEM_TEMPLATE', $_smarty_tpl->tpl_vars['RECORD']->value->isSystemTemplate());
if ($_smarty_tpl->tpl_vars['SYSTEM_TEMPLATE']->value && $_smarty_tpl->tpl_vars['MODE']->value != '') {
$_smarty_tpl->_assignInScope('IS_SYSTEM_TEMPLATE_EDIT', $_smarty_tpl->tpl_vars['SYSTEM_TEMPLATE']->value);
}?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" class="isSystemTemplate" value="<?php echo $_smarty_tpl->tpl_vars['IS_SYSTEM_TEMPLATE_EDIT']->value;?>
" /><?php if ($_smarty_tpl->tpl_vars['IS_SYSTEM_TEMPLATE_EDIT']->value) {?><input type="hidden" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
"/><input type="hidden" name="systemtemplate" value="<?php echo $_smarty_tpl->tpl_vars['SYSTEM_TEMPLATE']->value;?>
" /><?php }
if ($_smarty_tpl->tpl_vars['RETURN_VIEW']->value) {?><input type="hidden" name="returnmodule" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_MODULE']->value;?>
" /><input type="hidden" name="returnview" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_VIEW']->value;?>
" /><input type="hidden" name="returnrecord" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_RECORD']->value;?>
" /><input type="hidden" name="returnpage" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_PAGE']->value;?>
" /><input type="hidden" name="returnsearch_params" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['RETURN_SEARCH_PARAMS']->value);?>
' /><input type="hidden" name="returnsearch_key" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SEARCH_KEY']->value;?>
 /><input type="hidden" name="returnsearch_value" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SEARCH_VALUE']->value;?>
 /><input type="hidden" name="returnoperator" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SEARCH_OPERATOR']->value;?>
 /><input type="hidden" name="returnsortorder" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_SORTBY']->value;?>
 /><input type="hidden" name="returnorderby" value=<?php echo $_smarty_tpl->tpl_vars['RETURN_ORDERBY']->value;?>
 /><?php }
$_smarty_tpl->_subTemplateRender(vtemplate_path("partials/EditViewContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="modal-overlay-footer clearfix" style="border-left-width: 0px;"><div class="row clearfix"><div class=' textAlignCenter col-lg-12 col-md-12 col-sm-12 '><button type='submit' class='btn btn-success saveButton'><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<a class='cancelLink' href="javascript:history.back()" type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></div></div></form></div></div></div><?php }
}
