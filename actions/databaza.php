<?php
$serverName="localhost";
$dbUser="root";
$dbPass="";
$dbName="Hip-Hop-World";

$conn = mysqli_connect($serverName,$dbUser,$dbPass,$dbName);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}


?>