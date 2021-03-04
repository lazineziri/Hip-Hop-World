<?php
    include "databaza.php";

    $loginError = "";
    // When login button is clicked
    if (isset($_POST['login-btn'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        // Selecting data from db where username and password are the same as the user typed
        $sql = "SELECT * FROM klientat WHERE Username = '$username' and Passwordi = '$password'";
        $result = $conn->query($sql); // Executing SQL code
        // If there is a row that meets the conditions this code is executed
        if (mysqli_num_rows($result) > 0) {
            while($row = $result->fetch_assoc()) {
                // Saving row data in sessions
                $_SESSION['id'] = $row['Klientat_Id'];
                $_SESSION['username'] = $row['Username'];
                $_SESSION['password'] = $row['Passwordi'];
                $_SESSION['admin'] = $row['admin'];
            }
            header ("Location: index.php");
        } else {
            $loginError = "Wrong username or password!";
        }
    }
    $conn->close();
?>