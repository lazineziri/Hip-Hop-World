<?php 
    include "../actions/databaza.php";
    include_once "../actions/AlbumiMapper.php";

    $aMapper = new AlbumiMapper();
    $albumet = $aMapper->getAlbumet();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hip-Hop-WRLD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <script type="text/javascript" src="../js/navbar.js"></script>
</head>
<body>
    <?php include "../actions/headercheck.php"; ?>
    <div class="main">
        <h1>HIP HOP WRLD</h1>
        <p>Albumet</p>
        <table class="zui-table">
            <thead>
                <tr>ALBUMET</tr>
                <tr>
                    <th>ID</th>
                    <th>Titulli</th>
                    <th>Numri i Kengeve</th>
                    <th>Cmimi</th>
                    <th>Fshij</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($albumet as $albumi){ ?>
                    <tr>
                        <td>
                            <?php echo $albumi['id']; ?>
                        </td>
                        <td>
                            <?php echo $albumi['titulli']; ?>
                        </td>
                        <td>
                            <?php echo $albumi['nrKangve']; ?>
                        </td>
                        <td>
                            <?php echo $albumi['cmimi']; ?>
                        </td>
                        <td>
                            <a href="<?php echo "../actions/modif.php?action=fshij-albumin&id=".$albumi['id']; ?>" onclick="return confirm('A je i sigurt qe po don me fshi qit album G Bro Amig ?'); ">Fshij</a>
                        </td>
                    </tr>
                <?php } ?>    
            </tbody>
        </table>

        <div>
            <form method="POST" action="../actions/upllodi.php" enctype="multipart/form-data">
                    <ul>
                        <li>
                            <label for="titulli">Titulli</label>
                            <input type="text" name="titulli" value="" required>
                        </li>
                        <li>
                            <label for="nrKangve">Numri i Kangve</label>
                            <input type="number" name="nrKangve" value="" required>
                        </li>
                        <li>
                            <label for="cmimi">Cmimi</label>
                            <input type="number" name="cmimi" value="" required>
                        </li>
                        <li>
                            <input type="submit" name="shto-albumin" value="Shto Albumin">
                        </li>
                    </ul>
            </form>
        </div>

    </div>
    <?php include '../inc/footer.php'?>
</body>
</html>