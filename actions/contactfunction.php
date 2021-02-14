<?php
    include "databaza.php";
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['submit'])) {
        $firstName = test_input($_POST["firstName"]);
        $lastName = test_input($_POST["lastName"]);
        $username = test_input($_POST["username"]);
        $message = test_input($_POST["subject"]);

        $sql = "INSERT INTO mesazhet (`firstName`, `lastName`, `username`, `message`)
        VALUES('$firstName','$lastName','$username','$message')";

        if ($conn->query($sql)) {
            echo 
            "
                <script>
                    alert('Message sent succesfully!');
                </script>
            ";
        }
    }

    $conn->close();
?>