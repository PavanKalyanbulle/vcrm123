<?php
// Turn on debugging level
$Vtiger_Utils_Log = true;
include_once 'vtlib/Vtiger/Module.php';
include_once 'vtlib/Vtiger/Package.php';
include_once('vtlib/Vtiger/Menu.php');

$MODULENAME     = 'Store';
$moduleInstance = Vtiger_Module::getInstance($MODULENAME);

if ($moduleInstance && file_exists('modules/' . $MODULENAME)) {    
    echo 'Store Module is exists';
}else {
  $moduleInstance             = new Vtiger_Module(); 
  $moduleInstance->name       = $MODULENAME;
  $moduleInstance->tablabel   = 'LBL_STORE';
  $moduleInstance->parent     = 'Inventory';
  $moduleInstance->save();
  
  // Schema Setup
  $moduleInstance->initTables();

  // Webservice Setup
  $moduleInstance->initWebservice();
  
  $block        = new Vtiger_Block();
  $block->label = 'LBL_STORE_INFORMATION';
  $block        = $block->getInstance($block->label, $moduleInstance);
  if ($block == false) {
      $block        = new Vtiger_Block();
      $block->label = 'LBL_STORE_INFORMATION';
      $moduleInstance->addBlock($block);
      $block        = $block->getInstance($block->label, $moduleInstance);
  }
  
  $filter = Vtiger_Filter::getInstance('All', $moduleInstance);
  if (empty($filter)) {
      // Filter Setup
      $filter            = new Vtiger_Filter();
      $filter->name      = 'All';
      $filter->isdefault = true;
      $moduleInstance->addFilter($filter);
  }
    
  //Adding fields
  $field = Vtiger_Field::getInstance('store_name', $moduleInstance);
  if (empty($field)) {
    $field              = new Vtiger_Field();
    $field->name        = 'store_name';
    $field->label       = 'LBL_STORE_NAME';
    $field->uitype      = 2;      
    $field->presence    = 1;
    $field->displaytype = 3;
    $field->column      = $field->name;
    $field->columntype  = 'VARCHAR(20)';
    $field->typeofdata  = 'V~M';
    $field->sequence    = 1;
    $field->table       = $module->basetable;
    $block->addField($field);
    
    $filter->addField($field, 1);
    
    $moduleInstance->setEntityIdentifier($field);
    echo '\n fieldname' .$field->name .'added successfully'."\n";
  }


  $field = Vtiger_Field::getInstance('store_number', $moduleInstance);
  if (empty($field)) {
    $field  = new Vtiger_Field();
    $field->name        = 'store_number';
    $field->label       = 'LBL_STORE_NUMBER';
    $field->uitype      = 4;       
    $field->presence    = 2;
    $field->displaytype = 3;
    $field->column      = $field->name;
    $field->columntype  = 'VARCHAR(20)';
    $field->typeofdata  = 'V~O';
    $field->sequence    = 2;
    $field->table       = $module->basetable;
    $block->addField($field);
    
    $filter->addField($field, 2);
    echo "\n Field ".$field->name." added.\n";
  }

  $field = Vtiger_Field::getInstance('store_address', $moduleInstance);
  if (empty($field)) {
    $field  = new Vtiger_Field();
    $field->name        = 'store_address';
    $field->label       = 'LBL_STORE_ADDRESS';
    $field->uitype      = 16;
    $field->presence    = 2;
    $field->displaytype = 1;
    $field->column      = $field->name;
    $field->columntype  = 'VARCHAR(20)';
    $field->typeofdata  = 'V~O';
    $field->sequence    = 3;
    $field->table       = $module->basetable;
    $block->addField($field);

    $filter->addField($field, 3);
    echo "\n Field ".$field->name." added.\n";
  }

  $field = Vtiger_Field::getInstance('assigned_to', $moduleInstance);
  if (empty($field)) {
    $field  = new Vtiger_Field();
    $field->name        = 'assigned_to';
    $field->label       = 'LBL_ASSIGNED_TO';
    $field->uitype      = 16;
    $field->presence    = 2;
    $field->displaytype = 1;
    $field->column      = $field->name;
    $field->columntype  = 'VARCHAR(20)';
    $field->typeofdata  = 'V~O';
    $field->sequence    = 5;
    $field->table       = 'vtiger_crmentity';
    $block->addField($field);
    
    $filter->addField($field, 4);
    echo "\n Field ".$field->name." added.\n";
  }
  
  Settings_MenuEditor_Module_Model::addModuleToApp($moduleInstance->name, $moduleInstance->parent);
  echo 'Store Module is Created';
}
?>