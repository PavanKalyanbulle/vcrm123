<?php
/* Smarty version 4.3.2, created on 2025-05-12 17:34:23
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\Settings\Groups\DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6822311f9d50c1_75171404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1b51a87e7d10c83bf06f202ab1c4233ba208e62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\Settings\\Groups\\DetailView.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6822311f9d50c1_75171404 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="detailViewContainer full-height"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-scroll"><div class="detailViewInfo" ><form id="detailView" class="form-horizontal" method="POST"><div class="clearfix"><h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('groupname');?>
</h4><div class="btn-group pull-right" ><button class="btn btn-default" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getEditViewUrl();?>
'" type="button"><strong><?php echo vtranslate('LBL_EDIT_RECORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div><hr><div class="form-group"><span class="fieldLabel col-lg-3 col-md-3 col-sm-3"><?php echo vtranslate('LBL_GROUP_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></span><div class="fieldValue"><b><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
</b></div></div><div class="form-group"><span class="fieldLabel col-lg-3 col-md-3 col-sm-3"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="fieldValue"><b><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDescription();?>
</b></div></div><div class="form-group "><span class="fieldLabel col-lg-3 col-md-3 col-sm-3 "><?php echo vtranslate('LBL_GROUP_MEMBERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></span><div class="fieldValue"><span class="col-lg-6 col-md-6 col-sm-6 collectiveGroupMembers" style="width:auto;min-width:300px"><ul class="nav"><?php $_smarty_tpl->_assignInScope('GROUPS', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getMembers());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'GROUP_MEMBERS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['GROUP_MEMBERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value) {
$_smarty_tpl->tpl_vars['GROUP_MEMBERS']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value)) {?><li class="groupLabel"><?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value, 'GROUP_MEMBER_INFO');
$_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value) {
$_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->do_else = false;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value->get('name');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></span></div></div></form></div></div></div><?php }
}
