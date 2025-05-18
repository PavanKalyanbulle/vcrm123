[12:00 pm, 22/4/2025] Naveen Kumar 10 class: <?php
include_once('vtlib/Vtiger/EventHandler.php');

class ContactAfterSaveHandler extends VTEventHandler {
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
                $message = "A new contact was created: $name ($email)…
[12:03 pm, 22/4/2025] bunny141136j: Fatal error: Uncaught Error: Class "VTEventHandler" not found in C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\contactAS.php:2 Stack trace: #0 {main} thrown in C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\contactAS.php on line 2
[2:50 pm, 22/4/2025] Naveen Kumar 10 class: <?php

$vtiger_url = "http://localhost/vtigercrm/webservice.php"; // Change to your Vtiger URL
$username = "admin";
$accessKey = "your_access_key_here"; // Get from your user in CRM

// Step 1: Login
function login($username, $accessKey, $vtiger_url) {
    $data = array(
        'operation' => 'login',
        'username' => $username,
        'accessKey' => $accessKey
    );

    $response = send_post($vtiger_url, $data);
    return $response['result'];
}

// Step 2: Create a Contact
function create_contact($sessionName, $userId, $vtiger_url) {
    $contact = array(
        "firstname" => "Test",
        "lastname" => "User",
        "email" => "test@example.com",
        "assigned_user_id" => $userId
    );

    $data = array(
        'operation' => 'create',
        'sessionName' => $sessionName,
        'elementType' => 'Contacts',
        'element' => json_encode($contact)
    );

    $response = send_post($vtiger_url, $data);
    return $response['result'];
}

// Step 3: Read contact
function read_contact($sessionName, $recordId, $vtiger_url) {
    $url = $vtiger_url . "?operation=retrieve&sessionName=$sessionName&id=$recordId";
    $response = json_decode(file_get_contents($url), true);
    return $response['result'];
}

// Step 4: Update contact
function update_contact($sessionName, $recordId, $vtiger_url) {
    $updated = array(
        "id" => $recordId,
        "email" => "updated@example.com"
    );

    $data = array(
        'operation' => 'update',
        'sessionName' => $sessionName,
        'element' => json_encode($updated)
    );

    $response = send_post($vtiger_url, $data);
    return $response['result'];
}

// Step 5: Delete contact
function delete_contact($sessionName, $recordId, $vtiger_url) {
    $data = array(
        'operation' => 'delete',
        'sessionName' => $sessionName,
        'id' => $recordId
    );

    $response = send_post($vtiger_url, $data);
    return $response['result'];
}

// Helper function for POST requests
function send_post($url, $fields) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($fields));
    $response = curl_exec($curl);
    curl_close($curl);
    return json_decode($response, true);
}

// ---- EXECUTION START ----

$login = login($username, $accessKey, $vtiger_url);
$sessionName = $login['sessionName'];
$userId = $login['userId'];

// CREATE
$newContact = create_contact($sessionName, $userId, $vtiger_url);
echo "Created: " . $newContact['id'] . "\n";

// READ
$readContact = read_contact($sessionName, $newContact['id'], $vtiger_url);
echo "Read Email: " . $readContact['email'] . "\n";

// UPDATE
$updatedContact = update_contact($sessionName, $newContact['id'], $vtiger_url);
echo "Updated Email: " . $updatedContact['email'] . "\n";

// DELETE
$deleted = delete_contact($sessionName, $newContact['id'], $vtiger_url);
echo "Deleted: " . ($deleted ? "Yes" : "No") . "\n";

?>