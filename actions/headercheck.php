<?php
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];

        $sql = "SELECT * FROM klientat WHERE Username = '$username' and Passwordi = '$password'";
        $result = $conn->query($sql);
        mysqli_num_rows($result);
        $row = $result->fetch_assoc();

        if ($row['admin'] == 1) {
            include "../inc/headeradmin.php";
        } else if(isset($username)){
            include "../inc/headerlogin.php";
        } else {
            include "../inc/header.php";
        }
    } else {
        include "../inc/header.php";
    }
?>