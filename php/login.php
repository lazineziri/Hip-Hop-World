<?php 
    session_start();
    include "../actions/databaza.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>HIP-HOP-WORLD | Sign in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/logo.png">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <script type="text/javascript" src="../js/navbar.js"></script>
    <script type="text/javascript" src="../js/login.js"></script>
</head>
<body>
    <?php include "../inc/header.php"; ?>
    <div class="main">
        <div class="container">
        <div class="link-container">
            <a id="firstA" href="#">Login</a>
            <a id="secondA" href="#">Register</a>
        </div>
        <?php include "../actions/loginfunction.php"; ?>
        <!-- The "$_SERVER['PHP_SELF'])" sends submitted form data to the page itself rather than sending it in another page --->
        <form id="mainForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="login forms form-style">
                <label class="shkronjat">Username:</label>
                <input type="text" id="username" class="input" placeholder="Username..." name="username" required/>
                <label class="shkronjat">Password:</label>
                <input type="password" id="password" class="input" placeholder="Password..." name="password" required/>
                <br>
                <span class="wrong"><?php echo $loginError; ?></span>
                <button id="submit" type="submit" class="input submit" name = "login-btn" value="Log in">Log In</button>
            </div>
        </form>
        <?php include "../actions/signupfunction.php"; ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="register forms hidden" id="form2">
                <label class="shkronjat">Name:</label>
                <input type="text" name="firstName" class="input" placeholder="Name..." required/>
                <label class="shkronjat">Lastname:</label>
                <input type="text" name="lastName" class="input" placeholder="Last name..." required/>
                <label class="shkronjat">Username:</label>
                <input type="text" name="users_name" class="input" placeholder="Username..." required/>
                <label class="shkronjat">Password:</label>
                <input type="password" name="users_password" class="input" placeholder="Password..." required/>
                <br>
                <span class="wrong"><?php echo $signupError; ?></span>
                <button id="submit" type="submit" class="input submit" name = "signup-btn"
                value="Register">Sign Up</button>
            </div>
        </form>
    </div>
    </div>
    <?php include '../inc/footer.php'; ?>
</body>
</html>