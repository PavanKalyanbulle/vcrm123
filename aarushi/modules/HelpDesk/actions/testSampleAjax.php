<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class HelpDesk_testSampleAjax_Action extends Vtiger_Action_Controller {

	public function requiresPermission(\Vtiger_Request $request) {
		return true;
	}
	
	public function process(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$tktSev = $request->get('tktSev');

		echo $tktSev." :: Returned from Ajax";
	}
}
