<?php
// signout_process.php

session_start();
session_unset(); // Clear all session variables
session_destroy(); // Destroy the session

// Optionally redirect to home or login page
header("Location: ../html/signin.php");
exit;
