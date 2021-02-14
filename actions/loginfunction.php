<?php
    include "databaza.php";

    $loginError = "";
    
    if (isset($_POST['login-btn'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM klientat WHERE Username = '$username' and Passwordi = '$password'";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = $result->fetch_assoc()) {
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