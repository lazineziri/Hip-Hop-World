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
    <script type="text/javascript" src="../js/navbar.js"></script>
</head>
<body>
    <?php include "../actions/headercheck.php"; ?>
    <div class="row">
        <div class="Artistat col-12">
            <h2>Artistat</h2>
            <br>
            <ul>
                <?php
                    // Selects all data from postimet table
                    $sql2 = "SELECT * FROM postimet";
                    // Executes SQL code
                    $result2 = $conn->query($sql2);
                    // If there is data in the postimet table executes this
                    if ($result2->num_rows > 0) {
                        // While there is data in the rows executes this
                        while($row = $result2->fetch_assoc()) {
                            $id = $row['id'];
                            $titulli = $row['titulli'];

                            echo "<li>$titulli</li>";
                        }
                    }
                ?>
            </ul>
        </div>
    </div>
    <?php include '../inc/footer.php'?>
</body>
</html>