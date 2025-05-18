<?php
/* Smarty version 4.3.2, created on 2025-05-12 22:44:40
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\Settings\PickListDependency\ListViewRecordActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_682279d870df75_99219742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7096d19d55ebc3d9575ce773e0508d9f9bed114a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\Settings\\PickListDependency\\ListViewRecordActions.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682279d870df75_99219742 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="table-actions"><?php $_smarty_tpl->_assignInScope('RECORD_SOURCE_MODULE', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('sourceModule'));
$_smarty_tpl->_assignInScope('RECORD_SOURCE_FIELD', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('sourcefield'));
$_smarty_tpl->_assignInScope('RECORD_TARGET_FIELD', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('targetfield'));?><span class="fa fa-pencil" onclick="javascript:Settings_PickListDependency_Js.triggerEdit(event, '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_MODULE']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_FIELD']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_TARGET_FIELD']->value;?>
')" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span><span class="fa fa-trash-o" onclick="javascript:Settings_PickListDependency_Js.triggerDelete(event, '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_MODULE']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_FIELD']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_TARGET_FIELD']->value;?>
')" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></div><?php }
}
