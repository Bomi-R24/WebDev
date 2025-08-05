<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>

    <!-- Only main.css is needed **if** it already @imports form.css -->
    <link rel="stylesheet" href="../css/main.css" />
</head>
<body>

    <!-- ░ Top Navigation ░ -->
    <?php include '../include/navbar.php'; ?>

    <!-- ░ Page Banner ░ -->
    <div class="banner">
        <h1>Sign In</h1>
    </div>

    <!-- ░ Two‑Column Layout ░ -->
    <div class="page-content">

        <!-- Main Left -->
        <div class="main-left">
            <h2>Welcome Back</h2>

            <form>
                <input type="text" name="username"
                       placeholder="Enter your username" required><br>
                <input type="password" name="password"
                       placeholder="Enter your password" required><br><br>

                <input type="submit" value="Sign In">
            </form>
            <p id="message-box" style="color: red; margin-top: 10px;"></p>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <h3>No Account Yet?</h3>
            <p>
                Don’t have an account? <br>
                <a href="signup.html" style="color:#00ff7b;">Create one here</a>
            </p>
            <p>Signing in lets you access personalised features and updates.</p>
        </div>
    </div>

    <!-- ░ Footer ░ -->
    <?php include '../include/footer.php'; ?>

    <script src="../js/signinValidation.js"></script>
</body>
</html>
