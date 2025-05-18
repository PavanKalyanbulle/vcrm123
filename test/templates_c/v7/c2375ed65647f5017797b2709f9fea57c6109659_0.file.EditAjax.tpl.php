<?php
/* Smarty version 4.3.2, created on 2025-04-09 21:09:18
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\Settings\CronTasks\EditAjax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67f6e1fee74ba5_21752551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2375ed65647f5017797b2709f9fea57c6109659' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\Settings\\CronTasks\\EditAjax.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67f6e1fee74ba5_21752551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.explode.php','function'=>'smarty_modifier_explode',),));
?>
<div class="modal-dialog modelContainer"><?php ob_start();
echo vtranslate($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('HEADER_TITLE', $_prefixVariable1);
$_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0, true);
?><div class="modal-content"><form class="form-horizontal" id="cronJobSaveAjax" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
" /><input type="hidden" name="cronjob" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('name');?>
" /><input type="hidden" name="oldstatus" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('status');?>
" /><input type="hidden" id="minimumFrequency" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getMinimumFrequency();?>
" /><input type="hidden" name="frequency" id="frequency" value="" /><div class="modal-body"><div class="form-group"><label class="control-label fieldLabel col-xs-5"><?php echo vtranslate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="controls fieldValue col-xs-5"><select class="select2 inputElement" name="status"><option <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('status') == 1) {?> selected="" <?php }?> value="1"><?php echo vtranslate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('status') == 0) {?> selected="" <?php }?> value="0"><?php echo vtranslate('LBL_INACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group"><label class="control-label fieldLabel col-xs-5"><?php echo vtranslate('Frequency',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><?php $_smarty_tpl->_assignInScope('VALUES', smarty_modifier_explode(':',$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDisplayValue('frequency')));
if ($_smarty_tpl->tpl_vars['VALUES']->value[0] == '00' && $_smarty_tpl->tpl_vars['VALUES']->value[1] == '00') {
$_smarty_tpl->_assignInScope('MINUTES', "true");
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['VALUES']->value[1]);
} elseif ($_smarty_tpl->tpl_vars['VALUES']->value[0] == '00') {
$_smarty_tpl->_assignInScope('MINUTES', "true");
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['VALUES']->value[1]);
} elseif ($_smarty_tpl->tpl_vars['VALUES']->value[1] == '00') {
$_smarty_tpl->_assignInScope('MINUTES', "false");
$_smarty_tpl->_assignInScope('FIELD_VALUE', ($_smarty_tpl->tpl_vars['VALUES']->value[0]));
} else {
$_smarty_tpl->_assignInScope('MINUTES', "true");
$_smarty_tpl->_assignInScope('FIELD_VALUE', ($_smarty_tpl->tpl_vars['VALUES']->value[0]*60)+$_smarty_tpl->tpl_vars['VALUES']->value[1]);
}?><div class="controls fieldValue col-xs-2"><input type="text" class="inputElement" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"] == true) {?> data-rule-required="true" <?php }?> id="frequencyValue"/>&nbsp;</div><div class="controls fieldValue col-xs-3" style="padding-left: 0px;"><select class="select2 inputElement" id="time_format"><option value="mins" <?php if ($_smarty_tpl->tpl_vars['MINUTES']->value == 'true') {?> selected="" <?php }?>><?php echo vtranslate('LBL_MINUTES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="hours" <?php if ($_smarty_tpl->tpl_vars['MINUTES']->value == 'false') {?>selected="" <?php }?>><?php echo vtranslate('LBL_HOURS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group" style="text-align: center;"><div class="col-xs-2"></div><div class="col-xs-8"><div class="alert alert-info"><?php echo vtranslate($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('description'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div></div></div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div></div>	
<?php }
}
