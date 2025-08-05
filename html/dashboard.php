<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: signin.html");
    exit;
}
// Redirect to sign-in page if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Dashboard</title>

    <!-- main.css import -->
    <link rel="stylesheet" href="../css/main.css" />
</head>
<body>
    <!-- Top Navigation -->
    <div class="topnav">
        <a href="index.html">Home</a> 
        <a href="aboutme.html">About Me</a>
        <a href="myhobbies.html">My Hobbies</a>
        <a href="myproject.html">My Project</a>
        <a href="contactme.html">Contact Me</a>
        <a href="lightbulb.html">Lightbulb</a>

        <div class="topnav-right">
            <a href="../php/signout_process.php" class="signout">Sign Out</a>
        </div>

    </div>

    <!-- Banner -->
    <div class="banner">
        <h1>User Dashboard</h1>
    </div>

    <!-- Page Content -->
    <div class="page-content">

        <!-- MAIN LEFT COLUMN -->
        <div class="main-left">
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>

            <h2>Welcome Back!</h2>
            <p>
                You're now signed in. This is your personal dashboard where you can
                access exclusive features, manage your account, and see personalized content.
            </p>
            <p>
                Use the navigation bar to explore the rest of the site or sign out when you're done.
            </p>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar">
            <h3>Quick Links</h3>
            <ul class="custom-links">
                <li><a href="myproject.html">View Your Projects</a></li>
                <li><a href="contactme.html">Contact Support</a></li>
                <li><a href="signout.php">Log Out</a></li>
            </ul>
        </div>

    </div> <!-- /page-content -->

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </footer>

    <script src="../js/index.js"></script>
</body>
</html>
