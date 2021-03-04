<?php
    include "../actions/databaza.php";

    if(isset($_POST['submit'])){
        // Getting typed values from inputs
        $titulli = $_POST['titulli'];
        $teksti = $_POST['teksti'];
        // Using this variable as a parameter to check if conditions are met
        $errors = 0;
        $file_name = $_FILES['image']['name'];   // Gets the file name
        $file_size =$_FILES['image']['size'];    // Gets the file size
        $file_tmp =$_FILES['image']['tmp_name']; // Gets the file temporary name
        $file_type=$_FILES['image']['type'];     // Gets the file type (jpg,png,gif,jfif)
        $tmp = explode('.', $file_name);         // Breaks the temporary name in an array
        // end() gets the last element of the array and strtolower() converts it into lowercase
        $file_ext = strtolower(end($tmp));
        // Array of allowed file extensions
        $extensions= array("jpeg","jpg","png","gif");
        // If the file type isn't one we set
        if(in_array($file_ext,$extensions)=== false){
            $message = "File type not supported!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $errors++;
        }
        // If file size is higher than a set number of bytes (our case 2 Mb)
        if($file_size > 2097152){
            $message = "File is too large!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $errors++;
        }
        // If it bypasses all "security" measures executes code
        if($errors == 0){
            // Moves the uploaded file into our images folder
            if (move_uploaded_file($file_tmp,"../images/".$file_name)) {
                // Saves data in the postimet table in the database
                $sql = "INSERT INTO `postimet`(`titulli`, `teksti`, `fotoja`)
                VALUES ('$titulli','$teksti','$file_name')";
                // If data wasn't uploaded
                if (!$conn->query($sql)) {
                    echo $conn->error;
                } else {
                    // Changes the class of the h1
                    echo
                    "
                        <script>
                            window.onload = function() {
                                const h1 = document.querySelector(\"#file\");
                                h1.classList.toggle(\"hidden\");
                            }
                        </script>
                    ";
                }
            }
        }
    }
?>