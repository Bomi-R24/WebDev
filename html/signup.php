<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>

    <!-- Only main.css is needed **if** it already @imports form.css -->
    <link rel="stylesheet" href="../css/main.css" />
</head>
<body>

    <!-- ░ Top Navigation ░ -->
    <?php include '../include/navbar.php'; ?>

    <!-- ░ Page Banner ░ -->
    <div class="banner">
        <h1>Sign Up</h1>
    </div>

    <!-- ░ Two‑Column Layout ░ -->
    <div class="page-content">

        <!-- Main Left -->
        <div class="main-left">
            <h2>Create An Account</h2>

            <form action="../php/signup_process.php" method="post">
                <input type="text"     name="username"
                       placeholder="Choose a username" required><br>
                <input type="email"    name="email"
                       placeholder="Enter your email" required><br>
                <input type="password" name="password"
                       placeholder="Create a password" required><br><br>

                <input type="submit" value="Sign Up">
                <input type="reset" value="Reset">

                <div>
                <p id="signup-message" style="margin-top: 10px; color: #00ff7b;"></p>
                </div>
            </form>
        </div>
        
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Already a Member?</h3>
            <p>
                If you already have an account<br>
            </p>
            <p>
                <a href="signin.html" style="color:#00ff7b;">Sign in here</a>
        </div>
    </div>

    <!-- ░ Footer ░ -->
    <?php include '../include/footer.php'; ?>
    
    <script src="../js/signupValidation.js"></script>
</body>
</html>
