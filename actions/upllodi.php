<?php
require_once "Albumi.php";
require_once "AlbumiMapper.php";

if(isset($_POST['shto-albumin'])){
    $titulli = $_POST['titulli'];
    $nrKangve = $_POST['nrKangve'];
    $cmimi = $_POST['cmimi'];

    $aMapper = new AlbumiMapper();
    $albumi = new Albumi($titulli, $nrKangve, $cmimi);
    
    if($aMapper->insertAlbumi($albumi)){
        header("Location: ../php/albumet.php?action=shto-albumin&upload=success");
    }
    else{
        header("Location: ../php/albumet.php?action=shto-albumin&upload=error");
    }
}