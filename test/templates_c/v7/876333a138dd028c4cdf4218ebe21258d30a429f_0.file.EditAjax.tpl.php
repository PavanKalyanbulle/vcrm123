<?php
/* Smarty version 4.3.2, created on 2025-04-09 22:29:21
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\Settings\Tags\EditAjax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67f6f4c107a1b7_18679268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '876333a138dd028c4cdf4218ebe21258d30a429f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\Settings\\Tags\\EditAjax.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f6f4c107a1b7_18679268 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-content"><?php ob_start();
echo vtranslate('LBL_ADD_NEW_TAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('HEADER_TITLE', $_prefixVariable1);?><form id="addTagSettings" method="POST"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0, true);
?><div class="modal-body"><div class="row-fluid"><div class="form-group"><label class="control-label"><?php echo vtranslate('LBL_CREATE_NEW_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div><input name="createNewTag" value="" data-rule-required = "true" class="form-control" placeholder="<?php echo vtranslate('LBL_CREATE_NEW_TAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></div></div><div class="form-group"><div><div class="checkbox"><label><input type="hidden" name="visibility" value="<?php echo Vtiger_Tag_Model::PRIVATE_TYPE;?>
"/><input type="checkbox" name="visibility" value="<?php echo Vtiger_Tag_Model::PUBLIC_TYPE;?>
" />&nbsp; <?php echo vtranslate('LBL_SHARE_TAGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="pull-right"></div></div></div><div class="form-group"><div class=" vt-default-callout vt-info-callout tagInfoblock"><h5 class="vt-callout-header"><span class="fa fa-info-circle"></span>&nbsp; Info </h5><div><?php echo vtranslate('LBL_TAG_SEPARATOR_DESC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><br><div><?php echo vtranslate('LBL_SHARED_TAGS_ACCESS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div>
<?php }
}
