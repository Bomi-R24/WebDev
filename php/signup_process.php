<?php
// signup_process.php

require 'dbconnection.php';  // Reuse the DB connection

// Collect and sanitize form data
$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Simple validation
if (empty($username) || empty($email) || empty($password)) {
    http_response_code(400);
    echo "All fields are required.";
    exit;
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert the new user
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
if ($stmt) {
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "Account successfully created. Please click 'Sign In' to continue.";
    } else {
        http_response_code(500);
        echo "Failed to register user: " . $stmt->error;
    }

    $stmt->close();
} else {
    http_response_code(500);
    echo "Query preparation failed: " . $conn->error;
}

$conn->close();
?>
