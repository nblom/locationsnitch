<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO history (ip, long, lat, device) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $_SERVER['REMOTE_ADDR'], $_REQUEST['long'], $_REQUEST['lat'], $_REQUEST['device']);
$stmt->execute();
$stmt->close();
$conn->close();



echo 'Updated: '.date('Y-m-d H:i:s');
echo "\n";
echo 'Updated by: '.$_SERVER['REMOTE_ADDR'];
echo "\n";
echo "Longitude: ".$_REQUEST['long'];
echo "\n";
echo "Latitude: ".$_REQUEST['lat'];
echo "\n";
echo "Device name: ".$_REQUEST['device'];
echo "\n";
