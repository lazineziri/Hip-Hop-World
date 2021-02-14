<?php 
    include "../actions/databaza.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hip-Hop-World | Control panel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" type="text/css" href="../css/controlpanel.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <script src="https://kit.fontawesome.com/71ac44bd60.js" crossorigin="anonymous"></script>
    <script src="../js/navbar.js"></script>
</head>
<body style="text-align:center; color: white;">
    <?php 
        include "../actions/headercheck.php"; 
        if ($row['admin'] != 1) {
            header ("Location: index.php");
        }
    ?>
    <br>
    <br>
    <h1 class="hidden" id="file">File successfully uploaded!</h1>
    <br>
    <?php include "../actions/fileupload.php"; ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <div class="col-12">
            <input type="text" name="titulli" placeholder="Post title">
            <input type="text" name="teksti" placeholder="Post text">
        </div>
        <input type="file" name="image">
        <br>
        <input type="submit" name="submit" value="Add post">
    </form>
    <br>
    <br>
    <br>
    <h1>Messages</h1>
    <div class="messages col-12">
    <table border=\"1\">
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Username</th>
        <th>Message</th>
    </tr>
        <?php
            $sql2 = "SELECT * FROM mesazhet";
			$result2 = $conn->query($sql2);
			
			if ($result2->num_rows > 0) {
				while($row = $result2->fetch_assoc()) {
					$id = $row['id'];
					$firstName = $row['firstName'];
					$lastName = $row['lastName'];
					$username = $row['username'];
                    $message = $row['message'];
	
					echo 
					"
                    <tr>
                        <td>$firstName</td>
                        <td>$lastName</td>
                        <td>$username</td>
                        <td class=\"message\">$message</td>
                    </tr>
					";
				}
			}
			$conn->close();
        ?>
    </table>
    </div>
</body>
</html>