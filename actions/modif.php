<?php
include 'AlbumiMapper.php';
$aMapper = new AlbumiMapper();

if(isset($_GET['action']) && ($_GET['action'] == 'fshij-albumin')){
    if(isset($_GET['id'])){
        $aMapper->fshijAlbumin($_GET['id']);
        header("Location: ../php/albumet.php");
    }
}