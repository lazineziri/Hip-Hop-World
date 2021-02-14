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
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <script src="https://kit.fontawesome.	com/71ac44bd60.js" crossorigin="anonymous"></script>
	<script type="text/javascript" src="../js/navbar.js"></script>
</head>
<body style="color: white;">
	<?php include "../actions/headercheck.php"; ?>
	<div class="main">
		<?php 
			$sql2 = "SELECT * FROM postimet";
			$result2 = $conn->query($sql2);
			
			if ($result2->num_rows > 0) {
				while($row = $result2->fetch_assoc()) {
					$id = $row['id'];
					$titulli = $row['titulli'];
					$teksti = $row['teksti'];
					$fotoja = $row['fotoja'];
	
					echo 
					"
					<div class=\"row\">
						<div class=\"col-6\">
							<img src=\"../images/$fotoja\">
						</div>
						<div class=\"col-5\">
							<h2>$titulli</h2>
							<p>$teksti</p>
						</div>
					</div>
					<hr>
					";
				}
			}
			$conn->close();
		?>
	</div>
	<?php include '../inc/footer.php'?>
</body>
</html>