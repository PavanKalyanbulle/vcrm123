<?php
$name="pavan kalyan bulle";
echo "$name";
?>

<?php
$crm_url = "http://your-crm-url/webservice.php";
$username = "admin";
$accessKey = "your-access-key"; // From Vtiger user settings

// Step 1: Get Challenge Token
$challenge = file_get_contents("$crm_url?operation=getchallenge&username=$username");
$challengeResult = json_decode($challenge, true);
$token = $challengeResult['result']['token'];

// Step 2: Login using md5(token + accessKey)
$generatedKey = md5($token . $accessKey);

$postFields = http_build_query([
    'operation' => 'login',
    'username' => $username,
    'accessKey' => $generatedKey
]);

$context = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'content' => $postFields
    ]
]);

$response = file_get_contents($crm_url, false, $context);
$loginResult = json_decode($response, true);
$sessionName = $loginResult['result']['sessionName'];

echo "✅ Connected! Session ID: $sessionName";
?>
