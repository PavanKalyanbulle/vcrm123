/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

Vtiger_Edit_Js("HelpDesk_Edit_Js", {}, {
    
	customMethod : function(){
		$(document).on("change","#ticketseverities",function(){
			var tktSev = $("#ticketseverities").val();
			// alert(tktSev);
			$.ajax({  
				type: "GET",
				url: "index.php?module=HelpDesk&action=testSampleAjax&tktSev="+tktSev,
				success: function(response){
					alert(response);
				}
			});
		});
	},
    
    registerEvents : function() {
        this._super();
		this.customMethod();
    }
});