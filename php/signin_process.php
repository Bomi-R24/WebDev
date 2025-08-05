<?php
// signin_process.php
session_start();

// Include reusable DB connection
require_once '../php/dbconnection.php';

// Sanitize input
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// Validate
if (empty($username) || empty($password)) {
    http_response_code(400);
    echo "Both fields are required.";
    exit;
}

// Look up user
$stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
    // Start session
    session_start();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['logged_in'] = true;

    echo "Sign in successful"; // Redirected in JS
    exit;
    }
    else {
        http_response_code(401);
        echo "Invalid email or password.";
    }
    } else {
    http_response_code(401);
    echo "Invalid email or password.";
    }

$stmt->close();
$conn->close();
