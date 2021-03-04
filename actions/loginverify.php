<?php
// KY FILE NUK TVYN KURGJO!!!!!!!
include "databaza.php";
require 'verify.php';
$username = "";
$password = "";
if (isset($_POST['login-btn'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if (variablesNotDefinedWell($username, $password)) {
        header('Location: ../php/login.php');
    } else if (usernameAndPasswordCorrect($username, $password)) {
        header('Location: ../php/index.php');
    } else {
        header('Location: ../php/login.php');
    }
}

function variablesNotDefinedWell($username, $password)
{
    if (empty($username) || empty($password)) {
        return true;
    }
}

function usernameAndPasswordCorrect($username, $password)
{
    global $users;
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['password'];
            $_SESSION['loginDate'] = date("Y-m-d");
            $_SESSION['loginTime'] = time();
            return true;
        }
    }
}
