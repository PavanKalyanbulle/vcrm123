<?php
/* Smarty version 4.3.2, created on 2025-04-16 19:08:08
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\CustomModule\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_680000181c4552_06169900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c6ce6a29625e537a8f80cd0ac3e9aefe2b2860b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\CustomModule\\Index.tpl',
      1 => 1727771856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680000181c4552_06169900 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-sm-12 col-xs-12 ">
	<input type="hidden" name="view" id="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" />
	<input type="hidden" name="cvid" value="<?php echo $_smarty_tpl->tpl_vars['VIEWID']->value;?>
" />
	<div id="table-content" class="table-container" style="border:0px;">
				<div class="detailViewInfo row-fluid">
			<div class="col-sm-12 col-xs-12 details">
				<br>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-10 col-xs-10" style="margin-bottom:5px;">
							<h3>Create Custom Module</h3>
						</div>
						<div class="col-sm-2 col-xs-2 pull-right" style="margin-bottom:5px;">
							&nbsp;
						</div>
					</div>
					<form name="createModuleForm" id="createModuleForm" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-6 col-xs-6" style="margin-bottom:5px;">
							<div class="row">
								<div class="col-sm-12 col-xs-12" style="margin-bottom:5px;">
									<span>
										<label>Module Name</label>&nbsp;
										<input type="text" name="moduleName" id="moduleName" class="inputElement moduleDetail" required="required" />
									</span>
								</div>
								<div class="col-sm-12 col-xs-12" style="margin-bottom:5px;">
									<span>
										<label>Identifier Field Name</label>&nbsp;
										<input type="text" name="identifierField" id="identifierField" class="inputElement moduleDetail" required="required" />
									</span>
								</div>
								<div class="col-sm-12 col-xs-12" style="margin-bottom:5px;">
									<span>
										<label>App to link Module</label>&nbsp;
										<select name="appName" id="appName" class="select2" required="required">
											<?php echo $_smarty_tpl->tpl_vars['APP_LIST']->value;?>

										</select>
									</span>
								</div>
								<div class="col-sm-12 col-xs-12" style="margin-bottom:5px;">
									<button id="createModuleButton" type="submit" class="btn btn-success pull-right">Create Module</button>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6" style="margin-bottom:5px;" id="moduleCreationResponse">
						
						</div>
					</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
>
	 $('.moduleDetail').keypress(function (e) {
		var regex = new RegExp("^[a-zA-Z ]+$");
		var strigChar = String.fromCharCode(!e.charCode ? e.which : e.charCode);
		if (regex.test(strigChar)) {
			return true;
		}
		return false
	  });
	$(document).ready(function (e) {
		var request;
		// Bind to the submit event of our form
		$("#createModuleForm").submit(function(event){
			$("#createModuleButton").prop("disabled", true);
			$("#moduleCreationResponse").html('');
			$("#moduleCreationResponse").html('<p>Creating Module</p>');
			event.preventDefault();
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: "index.php?module=CustomModule&action=createCustomModule",
				type: 'POST',
				data: formData,
				async: false,
				cache: false,
				contentType: false,
				enctype: 'multipart/form-data',
				processData: false,
				success: function (response) {
					if(response == "Module already present - choose a different name."){
						$("#moduleCreationResponse").append("<p>"+response+"</p>");
						$("#createModuleButton").prop("disabled", false);
					}else{
						var respSpl = response.split("|~|");
						if(respSpl[1]=="OK"){
							 $("#moduleCreationResponse").append("<p>Module Creation Executed.</p>");
							 $("#moduleCreationResponse").append("<p>Creating Module File.</p>");
							 $.ajax({    
								type: "GET",
								url: "index.php?module=CustomModule&action=createModuleFile&moduleName="+$("#moduleName").val()+"&fieldName="+$("#identifierField").val(),  
								success: function(response){
									if(response=="Failed"){
										$("#moduleCreationResponse").append("<p>Module File Creation Failed.</p>");
										$("#moduleCreationResponse").append("<p>Module Creation Failed.</p>");
										$("#createModuleButton").prop("disabled", false);
									}else{
										$("#moduleCreationResponse").append("<p>Module File Created.</p>");
										$("#moduleCreationResponse").append("<p>Relating Module To App.</p>");
										$.ajax({    
											type: "GET",
											url: "index.php?module=CustomModule&action=relatingModuleToApp&moduleName="+$("#moduleName").val()+"&appName="+$("#appName").val(),  
											success: function(response){
												if(response=="Failed"){
													$("#moduleCreationResponse").append("<p>Relating Module To App Failed.</p>");
													$("#moduleCreationResponse").append("<p>Module Creation Failed.</p>");
													$("#createModuleButton").prop("disabled", false);
												}else{
													$("#moduleCreationResponse").append("<p>Module Related To App.</p>");
													$("#moduleCreationResponse").append("<p>Module Created.</p>");
													$("#moduleCreationResponse").append("<p>Adding Comment Module.</p>");
													$.ajax({    
														type: "GET",
														url: "index.php?module=CustomModule&action=addingCommentModule&moduleName="+$("#moduleName").val(),  
														success: function(response){
															if(response=="Failed"){
																$("#moduleCreationResponse").append("<p>Adding Comment Module Failed.</p>");
																$("#moduleCreationResponse").append("<p>Please Reload The Page.</p>");
																$("#createModuleButton").prop("disabled", false);
															}else{
																$("#moduleCreationResponse").append("<p>Comment Module Added.</p>");
																$("#moduleCreationResponse").append("<p>Please Reload The Page.</p>");
																$("#createModuleButton").prop("disabled", false);
															}
														}
													});
												}
											}
										});
									}
								}
							});
						}else{
							$("#moduleCreationResponse").append("<p>Module Creation Failed.</p>");
							$("#createModuleButton").prop("disabled", false);
						}
					}
					
				}
			});
			return false;
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
