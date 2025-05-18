<?php

$host = "localhost";       // usually localhost
$username = "root";        // from config.inc.php
$password = "";            // from config.inc.php
$dbname = "vcrm1_db";    // your Vtiger DB name

$con= mysqli_connect($host ,$username,$password,$dbname);

if(!$con){
     die(mysqli_error("error"+$con));
}


?>

<!-- //
// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
echo "✅ Connected to Vtiger CRM database successfully";

// Example query (optional)
$result = $conn->query("SELECT * FROM vtiger_users");

while($row = $result->fetch_assoc()) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

$conn->close();
// -->