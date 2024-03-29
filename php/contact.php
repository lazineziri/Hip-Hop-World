<?php 
    include "../actions/databaza.php";
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hip-Hop-WRLD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <script type="text/javascript" src="../js/navbar.js"></script>
</head>
<body>
  <?php include "../actions/headercheck.php"; ?>
  <div class="main">
      <div id="title">
      <h1>Leave a message</h1>
      </div>
      <?php include "../actions/contactfunction.php"; ?>
      <!-- The "$_SERVER['PHP_SELF'])" sends submitted form data to the page itself rather than sending it in another page --->
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input id="name" name="firstName" type="text" name="firstname" class="text-field" placeholder="Name...">
        <br>
        <input id="lName" name="lastName" type="text" name="lastname" class="text-field" placeholder="Last name...">
        <br>
        <input id="username" name="username" type="text" name="lastname" class="text-field" placeholder="Username...">
        <br>
        <textarea id="subject" name="subject" placeholder="Write your honest review..." class="text-field" ></textarea>
        <br>
        <input type="submit" name="submit" value="Submit" id="submit">
      </form>
    </div>
  </div>
  <?php include '../inc/footer.php'?>
</body>
</html>