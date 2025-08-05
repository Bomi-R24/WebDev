<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <!-- Top Navigation Section -->
    <?php include '../include/topnav.php'; ?>
    
    <!-- Banner Section -->
    <div class="banner">
        <h1>My Project</h1>
    </div>

    <!-- Page Content -->
    <div class="page-content">
        <!-- Main Left Column -->
        <div class="main-left">
            <h2>Welcome to My Project Page</h2>
            <p>
                This page showcases my latest project. Here, you can find details about the project,
                its objectives, and the technologies used.
            </p>
            <p>
                Feel free to explore the project and learn more about what I have been working on.
            </p>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="aboutme.php">About Me</a></li>
                <li><a href="myhobbies.php">My Hobbies</a></li>
                <li><a href="contactme.php">Contact Me</a></li>
            </ul>
        </div>
    </div> <!-- /page-content -->
    
    <!-- Footer -->
    <?php include '../include/footer.php'; ?>
</body>
</html>