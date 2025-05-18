<?php
include_once('vtlib/Vtiger/EventHandler.php');

class ContactAfterSaveHandler /*extends VTEventHandler*/ {
    public function handleEvent($eventName, $entityData) {

        // Check if event is after save
        if ($eventName === 'vtiger.entity.aftersave.final') {

            // Only run for Contacts module
            if ($entityData->getModuleName() === 'Contacts') {

                $name = $entityData->get('firstname') . ' ' . $entityData->get('lastname');
                $email = $entityData->get('email');

                // Mail configuration
                $to = "youremail@example.com"; // Change this to your email
                $subject = "New Contact Created in Vtiger";
                $message = "A new contact was created: $name ($email)";
                $headers = "From: vtigercrm@example.com";

                // Send the email
                mail($to, $subject, $message, $headers);
            }
        }
    }
}
?>