<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <!-- main.css import -->
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <!-- Top Navigation -->
   <?php include '../include/navbar.php'; ?>
    
   <!-- Banner -->
    <div class="banner">
        <h1>Homepage</h1>
    </div>

    <!-- Page Content (two‑column flex area) -->
    <div class="page-content">

        <!-- MAIN LEFT COLUMN -->
        <div class="main-left">
            <h2>Welcome to My Homepage</h2>
            <p>
                This is a simple homepage created using HTML and CSS. You can navigate through
                the links in the top navigation bar to learn more about me, my hobbies,
                projects, and how to contact me.
            </p>
            <p>
                Feel free to explore the site and get to know more about my interests and work.
            </p>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar">
            <h3>Sidebar</h3>
            <p>
                This is a sidebar section where you can add additional links
                or information relevant to the homepage.
            </p>
        </div>

    </div> <!-- /page-content -->

    <!-- Footer -->
    <?php include '../Include/footer.php'; ?>
    
</body>
</html>
