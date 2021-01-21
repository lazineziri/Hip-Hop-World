<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hip-Hop-WRLD</title>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <script src="https://kit.fontawesome.com/71ac44bd60.js" crossorigin="anonymous"></script>
    <script src="js/contact.js"></script>
</head>
<body>
  <?php include '../inc/header.php'?>

  <div class="main">
      <div id="title">
      <h1>Leave a message</h1>
      </div>
      <form>
        <input id="name" type="text" name="firstname" class="text-field" placeholder="Name...">
        <br>
        <input id="lName" type="text" name="lastname" class="text-field" placeholder="Last name...">
        <br>
        <input id="username" type="text" name="lastname" class="text-field" placeholder="Username...">
        <br>
        <textarea id="subject" name="subject" placeholder="Write your honest review..." class="text-field" ></textarea>
        <br>
        <input type="submit" value="Submit" id="submit" onclick="validate()">
      </form>
    </div>
  </div>
  <script type="text/javascript" src="../js/navbar.js"></script>
  <?php include '../inc/footer.php'?>
</body>
</html>