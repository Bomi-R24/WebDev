<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <!-- Top Navigation Section -->
    <?php include '../include/navbar.php'; ?>
    
    <!-- Banner Section -->
    <div class="banner">
        <h1>About Me</h1>
    </div>

    <!-- Page Content -->
    <div class="page-content">
        <!-- MAIN LEFT COLUMN -->
        <div class="main-left">
            <h2>About Me</h2>
            <p>
                Hello! My name is Bomi. I am a student with a passion for web development.
                This website is a showcase of my work, hobbies, and interests. Feel free to explore the different sections
                to learn more about me.
            </p>
            <p>
                I enjoy gaming, coding, playing football and I am always eager to learn new things and take on new challenges.
            </p>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="myhobbies.php">My Hobbies</a></li>
                <li><a href="myproject.php">My Project</a></li>
                <li><a href="contactme.php">Contact Me</a></li>
            </ul>
        </div>
  
    </div> <!-- /page-content -->
    
    <?php include '../include/footer.php'; ?>
</body>
</php>