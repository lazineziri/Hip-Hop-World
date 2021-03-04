<?php
    //
    if (isset($_SESSION['username'])) {
    	// Saving session data in variables for easier use
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        // Selecting db values where the username and password are the same as the ones saved in the session
        $sql = "SELECT * FROM klientat WHERE Username = '$username' and Passwordi = '$password'";
        $result = $conn->query($sql);
        // Returns number of rows found in database that meet given conditions
        mysqli_num_rows($result);
        // Creating an array of that row to access the data
        $row = $result->fetch_assoc();
        // Kto duhesh me dit qka bon se sje budall
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