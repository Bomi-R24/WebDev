<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lightbulb Toggle</title>

    <!-- CSS Import -->
    <link rel="stylesheet" href="../css/main.css" />

</head>
<body>

    <!-- ░ Top Navigation ░ -->
    <?php include '../include/navbar.php'; ?>

    <!-- ░ Banner ░ -->
    <div class="banner">
        <h1>Lightbulb Toggle</h1>
    </div>

    <!-- ░ Two‑Column Layout ░ -->
    <div class="page-content">

        <!-- Main Left Column -->
        <div class="main-left" style="text-align:center;">
            <h2>Let There Be Light!</h2>

            <!-- Bulb image -->
            <img id="bulb"
                 src="../images/BulbOff.jpeg"
                 alt="Lightbulb"
                 style="width:200px; border:5px solid #00ff7b; border-radius:10px;">

            <br><br>

            <!-- Control buttons -->
            <button onclick="turnOn()">Turn On</button>
            <button onclick="turnOff()">Turn Off</button>
            
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <h3>About This Demo</h3>
            <p>
                Click the buttons to switch the light on or off.  
                The image changes instantly using a tiny JavaScript
                file (<code>bulb.js</code>) that swaps the image source.
            </p>
        </div>
    </div>

    <!-- ░ Footer ░ -->
    <?php include '../include/footer.php'; ?>

    <!-- Javascript Import -->
    <script src="../js/lightbulb.js" defer></script>
</body>
</html>
