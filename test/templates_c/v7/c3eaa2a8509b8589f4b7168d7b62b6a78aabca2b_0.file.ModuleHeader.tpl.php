<?php
/* Smarty version 4.3.2, created on 2025-05-08 17:34:34
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\EmailTemplates\ModuleHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_681ceb2aa14828_15316512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3eaa2a8509b8589f4b7168d7b62b6a78aabca2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\EmailTemplates\\ModuleHeader.tpl',
      1 => 1744046260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681ceb2aa14828_15316512 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-12 col-xs-12 module-action-bar clearfix coloredBorderTop"><div class="module-action-content clearfix"><div class="col-lg-5 col-md-5 module-breadcrumb"><?php $_smarty_tpl->_assignInScope('MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['MODULE']->value));?><a title="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" href='<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultUrl();?>
'><h4 class="module-title pull-left text-uppercase">&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</h4></a><p class="current-filter-name filter-name pull-left cursorPointer">&nbsp;&nbsp;<span class="fa fa-angle-right pull-left" aria-hidden="true"></span><?php if ($_smarty_tpl->tpl_vars['REQ']->value['view'] == 'List') {
echo vtranslate('LBL_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);
}?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['REQ']->value['view'] == 'Detail') {?><a title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('templatename');?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('templatename');?>
&nbsp;</a><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value && $_smarty_tpl->tpl_vars['REQ']->value['view'] == 'Edit') {?><a title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('templatename');?>
">&nbsp;<?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('templatename');?>
 &nbsp;</a><?php } elseif ($_smarty_tpl->tpl_vars['REQ']->value['view'] == 'Edit') {?><a>&nbsp;<?php echo vtranslate('LBL_ADDING_NEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</a><?php }?></p></div><div class="col-lg-7 col-md-7 pull-right"><div id="appnav" class="navbar-right"><ul class="nav navbar-nav"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_BASIC_ACTIONS']->value, 'BASIC_ACTION');
$_smarty_tpl->tpl_vars['BASIC_ACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BASIC_ACTION']->value) {
$_smarty_tpl->tpl_vars['BASIC_ACTION']->do_else = false;
?><li><button id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getLabel());?>
" type="button" class="btn addButton btn-default module-buttons"<?php if (stripos($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getUrl(),'javascript:') === 0) {?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?>onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
"'<?php }?>><div class="fa <?php echo $_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getIcon();?>
" aria-hidden="true"></div>&nbsp;&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['BASIC_ACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div></div><?php if ($_smarty_tpl->tpl_vars['FIELDS_INFO']->value != null) {
echo '<script'; ?>
 type="text/javascript">var uimeta = (function () {var fieldInfo = <?php echo $_smarty_tpl->tpl_vars['FIELDS_INFO']->value;?>
;return {field: {get: function (name, property) {if (name && property === undefined) {return fieldInfo[name];}if (name && property) {return fieldInfo[name][property]}},isMandatory: function (name) {if (fieldInfo[name]) {return fieldInfo[name].mandatory;}return false;},getType: function (name) {if (fieldInfo[name]) {return fieldInfo[name].type}return false;}}};})();<?php echo '</script'; ?>
><?php }?></div><?php }
}
