<!DOCTYPE html>
<html>
<head>
    <title>HIP-HOP-WORLD | Sign in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/general.css">
    <script src="https://kit.fontawesome.com/71ac44bd60.js" crossorigin="anonymous"></script>
    <script src="js/login.js"type="text/javascript"></script>
</head>
<body>
    <?php include '../inc/header.php' ?>
    <div class="container">
        <div class="link-container">
            <a id="firstA" href="#" onclick="changeForm(0)">Login</a>
            <a href="#" onclick="changeForm(1)">Register</a>
        </div>
        <form id="mainForm" action="loginVerify.php" method="post" onsubmit="return validate()">
            <div class="login forms form-style">
                <label class="shkronjat">Username:</label>
                <input type="text" id="username" class="input" placeholder="Username..." />
                <label class="shkronjat">Password:</label>
                <input type="password" id="password" class="input" placeholder="Password..." />
                <button id="submit" type="submit" class="input submit" name = "login-btn" value="Log in" onclick="validate(0)">Log In</button>
            </div>
            <div class="register forms hidden" id="form2">
                <label class="shkronjat">Name:</label>
                <input type="text" class="input" placeholder="Name..." />
                <label class="shkronjat">Lastname:</label>
                <input type="text" class="input" placeholder="Password..." />
                <label class="shkronjat">Username:</label>
                <input type="text" class="input" placeholder="Username..." />
                <label class="shkronjat">Password:</label>
                <input type="password" class="input" placeholder="password..." />
                <button id="submit" type="submit" class="input submit" name = "login-btn" value="Register" onclick="validate(1)">Sign Up</button>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="../js/navbar.js"></script>
    <?php include '../inc/footer.php' ?>
</body>
</html>