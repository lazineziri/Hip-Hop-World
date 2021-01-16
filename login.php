<?php
include 'loginheader.php'?>
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
        <input id="submit" type="submit" class="input submit" name = "login-btn" value="Log in" onclick="validate(0)" />
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
        <input id="submit" type="submit" class="input submit" name = "login-btn" value="Register" onclick="validate(1)" />
        </div>
    </form>
</div>
<?php
include 'footer.php'?>