<?php
    include "databaza.php";

    $signupError = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['signup-btn'])) {
        $firstName = test_input($_POST["firstName"]);
        $lastName = test_input($_POST["lastName"]);
        $users_name = test_input($_POST["users_name"]);
        $password = test_input($_POST["users_password"]);

        $sql = "SELECT * FROM Klientat WHERE Username = '$users_name'";
        $result2 = $conn->query($sql);

        if (mysqli_num_rows($result2) > 0) {
            $signupError = "This user already exists!";
        } else {
            $sql2 = "INSERT INTO Klientat (`Emri`, `Mbiemri`, `Username`, `Passwordi`)
            VALUES('$firstName','$lastName','$users_name','$password')";

            if ($conn->query($sql2) == TRUE) {
                $_SESSION['firstName'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['username'] = $users_name;
                $_SESSION['password'] = $password;

                header ("Location: index.php");
            } else {
                header ("Location: contact.php");
            }
        }
    }
    $conn->close();
?>