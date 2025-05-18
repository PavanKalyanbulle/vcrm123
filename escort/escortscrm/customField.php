<?php

// Turn on debugging level
$Vtiger_Utils_Log = true;

// Include necessary classes
include_once('vtlib/Vtiger/Module.php');

// Define instances
$users = Vtiger_Module::getInstance('Users');

// Nouvelle instance pour le nouveau bloc
$block = Vtiger_Block::getInstance('LBL_ADDRESS_INFORMATION', $users);


// Add field
// $fieldInstance = new Vtiger_Field();
// $fieldInstance->name = 'my_custom_text_field';
// $fieldInstance->table = 'vtiger_users';
// $fieldInstance->column = 'my_custom_text_field';
// $fieldInstance->label = 'My Custom Text Field';
// $fieldInstance->columntype = 'text';
// $fieldInstance->uitype = 1;
// $fieldInstance->typeofdata = 'V~O';


$fieldInstance = new Vtiger_Field();
$fieldInstance->name = 'product_code';
$fieldInstance->table = $moduleInstance->basetable;
$fieldInstance->column = 'product_code';
$fieldInstance->label='Product Code';
$fieldInstance->columntype = 'VARCHAR(100)';
$fieldInstance->uitype = 33;
$fieldInstance->typeofdata = 'V~O';
$fieldInstance->setpicklistvalues( array("SAT",
    "ABT",
    "ABTAMDBS",
    "ABTBD",
    "ABTBMBS",
    "ABTCAMC",
    "ABTDETC",
    "ABTE",
    "ABTEMCBS",
    "BBT",
    "BBTE",
    "BBTEBP",
    "BMBS",
    "DMRC",
    "EP",
    "EPASCE",
    "EPCFIBAAMC",
    "EPFIBA",
    "ESB",
    "SATE",
    "SKT",
    "SKTA"), '');
$block->addField($fieldInstance);
		

		


?> 