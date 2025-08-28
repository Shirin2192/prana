<?php
// config.php

$host = "localhost";   // Database host
$user = "root";        // Database username
$pass = "";            // Database password
$db   = "db_prana"; // Database name

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: set charset
$conn->set_charset("utf8");

?>
