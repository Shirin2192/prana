<?php
// config.php

$host = "localhost";   // Database host
$user = "hbot_prana";        // Database username
$pass = "hbot_prana";            // Database password
$db   = "hbot_prana"; // Database name

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: set charset
$conn->set_charset("utf8");

?>
