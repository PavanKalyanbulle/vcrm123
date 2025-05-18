<?php
		include_once "modules/Vtiger/CRMEntity.php";
		class jobsearch extends Vtiger_CRMEntity {
			var $table_name = "vtiger_jobsearch";
			var $table_index= "jobsearchid";
			/**
			 * Mandatory table for supporting custom fields.
			 */
			var $customFieldTable = Array("vtiger_jobsearchcf", "jobsearchid");

			/**
			 * Mandatory for Saving, Include tables related to this module.
			 */
			var $tab_name = Array("vtiger_crmentity", "vtiger_jobsearch", "vtiger_jobsearchcf");

			/**
			 * Mandatory for Saving, Include tablename and tablekey columnname here.
			 */
			var $tab_name_index = Array(
				"vtiger_crmentity" => "crmid",
				"vtiger_jobsearch" => "jobsearchid",
				"vtiger_jobsearchcf"=>"jobsearchid");
				
			/**
			 * Mandatory for Listing (Related listview)
			 */
			var $list_fields = Array (
				/* Format: Field Label => Array(tablename, columnname) */
				// tablename should not have prefix "vtiger_"
				"jobid" => Array("jobsearch", "jobid"),
				"Assigned To" => Array("crmentity","smownerid")
			);
			var $list_fields_name = Array (
				/* Format: Field Label => fieldname */
				"jobid" => "jobid",
				"Assigned To" => "assigned_user_id",
			);

			// Make the field link to detail view
			var $list_link_field = "jobid";
			
			// For Popup listview and UI type support
			var $search_fields = Array(
				/* Format: Field Label => Array(tablename, columnname) */
				// tablename should not have prefix "vtiger_"
				"jobid" => Array("jobsearch", "jobid"),
				"Assigned To" => Array("vtiger_crmentity","assigned_user_id"),
			);
			var $search_fields_name = Array (
				/* Format: Field Label => fieldname */
				"jobid" => "jobid",
				"Assigned To" => "assigned_user_id",
			);

			// For Popup window record selection
			var $popup_fields = Array ("jobid");
			
			// For Alphabetical search
			var $def_basicsearch_col = "jobid";

			// Column value to use on detail view record text display
			var $def_detailview_recname = "jobid";

			// Used when enabling/disabling the mandatory fields for the module.
			// Refers to vtiger_field.fieldname values.
			var $mandatory_fields = Array("jobid","assigned_user_id");

			var $default_order_by = "jobid";
			var $default_sort_order="ASC";
			
			
			function vtlib_handler($moduleName, $eventType) {
				if($eventType == "module.postinstall") {
					// TODO Handle actions after this module is installed.
				} else if($eventType == "module.disabled") {
					// TODO Handle actions before this module is being uninstalled.
				} else if($eventType == "module.preuninstall") {
					// TODO Handle actions when this module is about to be deleted.
				} else if($eventType == "module.preupdate") {
					// TODO Handle actions before this module is updated.
				} else if($eventType == "module.postupdate") {
					// TODO Handle actions after this module is updated.
				}
			}
		}
	?>