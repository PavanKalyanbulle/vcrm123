<?php
/* Smarty version 4.3.2, created on 2025-05-08 17:34:41
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\EmailTemplates\DefaultContentForTemplates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_681ceb31ef0183_90458151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1323b481e750ccb8bf021df3d6d7ce9cef90512' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\EmailTemplates\\DefaultContentForTemplates.tpl',
      1 => 1744046260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681ceb31ef0183_90458151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('VIEW_IN_BROWSER_TAG', EmailTemplates_Module_Model::$BROWSER_MERGE_TAG);
$_smarty_tpl->_assignInScope('WEBSITE_URL', $_smarty_tpl->tpl_vars['COMPANY_MODEL']->value->get('website'));
$_smarty_tpl->_assignInScope('FACEBOOK_URL', $_smarty_tpl->tpl_vars['COMPANY_MODEL']->value->get('facebook'));
$_smarty_tpl->_assignInScope('TWITTER_URL', $_smarty_tpl->tpl_vars['COMPANY_MODEL']->value->get('twitter'));?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title></title>
	</head>
	<body class="scayt-enabled">
		<div>
			<center>
				<table border="0" cellpadding="0" cellspacing="0" class="borderGrey" width="600px">
					<tbody>
						<tr style="height:50px;">
							<td colspan="6" style="border-top: 1px solid #ddd; font-family: Helvetica,Verdana,sans-serif"></td>
						</tr>
						<tr>
							<td colspan="6" style="font-family: Helvetica,Verdana,sans-serif;font-size: 11px;color: #666666;">
								<table border="0" cellpadding="4" cellspacing="0" width="100%">
									<tbody>
										<tr>
											<td colspan="2" id="social" valign="middle">
												<center>
													<div>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['TWITTER_URL']->value;?>
" target="_blank"> follow on Twitter</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_URL']->value;?>
" target="_blank">follow on Facebook</a></div>
												</center>
											</td>
										</tr>
										<!--copy right data-->
										<tr>
											<td valign="top" width="350px">
												<center>
													<div><em>Copyright &copy; <?php echo date('Y');?>
 <?php if (!(empty($_smarty_tpl->tpl_vars['WEBSITE_URL']->value))) {?><a href="<?php echo $_smarty_tpl->tpl_vars['WEBSITE_URL']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['WEBSITE_URL']->value;?>
</a><?php } else { ?>your company.com<?php }?>, All rights reserved.</em></div>
												</center>
											</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</center>
		</div>
	</body>
</html>
<?php }
}
