<?php
/* Smarty version 4.3.2, created on 2025-04-14 19:10:22
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\Import\ImportLandingPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_67fd5d9e573559_38385475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e28e90e38d736c38bcbffaef51c78c47eead80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\Import\\ImportLandingPage.tpl',
      1 => 1744045986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67fd5d9e573559_38385475 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class='fc-overlay-modal'>
	<div class = "modal-content">
		<div class="overlayHeader">
			<?php ob_start();
echo vtranslate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1=ob_get_clean();
ob_start();
echo vtranslate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable1." ".$_prefixVariable2);?>
			<?php $_smarty_tpl->_subTemplateRender(vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0, true);
?>
		</div>
		<div class='modal-body' style="margin-bottom:100%" id ="landingPageDiv">
			<hr>
			<div class="landingPage container-fluid importServiceSelectionContainer">
				<div class = "col-lg-12" style = "font-size: 16px;"><?php echo vtranslate('LBL_SELECT_IMPORT_FILE_FORMAT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div>
				<br>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id = "csvImport">
					<div class="menu-item app-item app-SALES">
						<span class="fa fa-file-text"></span>
						<div>
							<h4><?php echo vtranslate('LBL_CSV_FILE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['FOR_MODULE']->value == 'Contacts') {?>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id = "vcfImport">
						<div class="menu-item app-item app-INVENTORY">
							<span class="fa fa-user"></span>
							<div>
								<h4><?php echo vtranslate('LBL_VCF_FILE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
							</div>
						</div>
					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['FOR_MODULE']->value == 'Calendar') {?>
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="icsImport">
						<div class="menu-item app-item" style="background: #b74f6f none repeat scroll 0 0 !important;">
							<span class="fa fa-calendar-o"></span>
							<div>
								<h4><?php echo vtranslate('LBL_ICS_FILE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
							</div>
						</div>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
<?php }
}
