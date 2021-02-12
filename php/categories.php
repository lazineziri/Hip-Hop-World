<?php 
    include "../actions/databaza.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hip-Hop-WRLD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" type="text/css" href="../css/categories.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <script src="https://kit.fontawesome.com/71ac44bd60.js" crossorigin="anonymous"></script>
    <script src="js/navbar.js"></script>
</head>
<body>
    <?php include "../actions/headercheck.php"; ?>
    <div class="row">
        <div class="col-6">
            <div class="kengetaret">
                <h2>Këngtarët</h2>
                <br>
                <ul>
                    <li>Bajram Gigolli</li>
                    <li>Travis Skotaj</li>
                    <li>E ShtuneDiela</li>
                    <li>Drake</li>
                    <li>I Ardhmi</li>
                    <li>Xinxifie Lopez</li>
                    <li>Rihankua</li>
                    <li>Celsat e Lizes</li>
                    <li>Halil Ziu</li>
                </ul>
            </div> 
        </div>
        <div class="col-6">
            <div class="Artistat">
                <h2>Artistat</h2>
                <br>
                <ul>
                    <li>Mc Kresha TC</li>
                    <li>Laazi TC</li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../js/navbar.js"></script>
    <?php include '../inc/footer.php'?>
</body>
</html>