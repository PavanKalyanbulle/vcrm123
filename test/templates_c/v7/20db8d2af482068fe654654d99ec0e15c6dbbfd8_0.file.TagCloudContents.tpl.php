<?php
/* Smarty version 4.3.2, created on 2025-05-11 21:14:02
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\Vtiger\dashboards\TagCloudContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6821131abf9316_37175708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20db8d2af482068fe654654d99ec0e15c6dbbfd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\Vtiger\\dashboards\\TagCloudContents.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6821131abf9316_37175708 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tagsContainer" id="tagCloud"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAGS']->value, 'TAG_MODEL', false, 'TAG_ID');
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAG_ID']->value => $_smarty_tpl->tpl_vars['TAG_MODEL']->value) {
$_smarty_tpl->tpl_vars['TAG_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('TAG_LABEL', $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName());?><span class="tag" title="<?php echo $_smarty_tpl->tpl_vars['TAG_LABEL']->value;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getType();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
"><span class="tagName display-inline-block textOverflowEllipsis cursorPointer" data-tagid="<?php echo $_smarty_tpl->tpl_vars['TAG_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_LABEL']->value;?>
</span></span><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
