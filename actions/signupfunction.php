<?php
    include "databaza.php";

    $signupError = "";
    // Converting special characters to HTML enteties to prevent anyone from injecting code
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // When signup btn is clicked
    if (isset($_POST['signup-btn'])) {
        // Saving input values to variables
        $firstName = test_input($_POST["firstName"]);
        $lastName = test_input($_POST["lastName"]);
        $users_name = test_input($_POST["users_name"]);
        $password = test_input($_POST["users_password"]);
        // Selecting db data where the username is the same as the one typed so we don't have 2 accounts with the same username
        $sql = "SELECT * FROM Klientat WHERE Username = '$users_name'";
        $result2 = $conn->query($sql); // Exectuing the SQL code
        // If the username already exists executes this
        if (mysqli_num_rows($result2) > 0) {
            $signupError = "This user already exists!";
        } else {
            // Inserting values into the klientat table
            $sql2 = "INSERT INTO Klientat (`Emri`, `Mbiemri`, `Username`, `Passwordi`)
            VALUES('$firstName','$lastName','$users_name','$password')";

            if ($conn->query($sql2) == TRUE) {
                // Saving some values in sessions to use on header check
                $_SESSION['firstName'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['username'] = $users_name;
                $_SESSION['password'] = $password;
                // Sends us to index php
                header ("Location: index.php");
            } else {
                // If code didn't work sends to contact so they can complain like bitches
                header ("Location: contact.php");
            }
        }
    }
    $conn->close();
?>