<?php
    include "databaza.php";
    // Converting special characters to HTML enteties to prevent anyone from injecting code
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // When submit is clicked
    if (isset($_POST['submit'])) {
        // Getting variables from inputs
        $firstName = test_input($_POST["firstName"]);
        $lastName = test_input($_POST["lastName"]);
        $username = test_input($_POST["username"]);
        $message = test_input($_POST["subject"]);
        // Inserting value in mesazhet table
        $sql = "INSERT INTO mesazhet (`firstName`, `lastName`, `username`, `message`)
        VALUES('$firstName','$lastName','$username','$message')";
        // If data is sent in the db succesfully
        if ($conn->query($sql)) {
            echo 
            "
                <script>
                    alert('Message sent succesfully!');
                </script>
            ";
        }
    }
    // Clossing database connection
    $conn->close();
?>