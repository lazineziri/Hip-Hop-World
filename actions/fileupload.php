<?php
    include "../actions/databaza.php";

    if(isset($_POST['submit'])){
        $titulli = $_POST['titulli'];
        $teksti = $_POST['teksti'];

        $errors = 0;
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $tmp = explode('.', $file_name);
        $file_ext = strtolower(end($tmp));
        
        $extensions= array("jpeg","jpg","png","gif");
        
        if(in_array($file_ext,$extensions)=== false){
            $message = "File type not supported!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $errors++;
        }
        
        if($file_size > 2097152){
            $message = "File is too large!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            $errors++;
        }
        
        if($errors == 0){
            if (move_uploaded_file($file_tmp,"../images/".$file_name)) {
                $sql = "INSERT INTO `postimet`(`titulli`, `teksti`, `fotoja`)
                VALUES ('$titulli','$teksti','$file_name')";

                if (!$conn->query($sql)) {
                    echo $conn->error;
                } else {
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