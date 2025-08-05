<?php
// dbconnection.php

$servername = "localhost";
$username = "root";
$password = "bomi24";
$dbname = "webdev_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// No echo — keep it silent for reusability
?>