<?php
    session_start();
    session_unset();   // removes all session variables
    session_destroy(); // destroyes the session
    header ("Location: ../php/login.php");
?>