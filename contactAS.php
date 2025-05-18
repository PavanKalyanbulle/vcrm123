<?php
class ContactAfterSaveHandler extends VTEventHandler {
    public function handleEvent($eventName, $entityData) {
        if ($eventName === 'vtiger.entity.aftersave.final') {
            $module = $entityData->getModuleName();
            if ($module === 'Contacts') {
                $name = $entityData->get('firstname') . ' ' . $entityData->get('lastname');
                $email = $entityData->get('email');

                // Save to a text log file for testing
                file_put_contents('logs/custom_contact_log.txt', "New Contact Saved: $name <$email>\n", FILE_APPEND);
            }
        }
    }
}
?>