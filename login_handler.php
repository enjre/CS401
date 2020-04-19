<?php

session_start();

$username = "andremaldonado";
$password = "Boise123!";
//$username= test_input($_POST['username']);
//$password= test_input($_POST['password']);


$salt = 'abs0lutez3r0';
$saltedPW = $password . $salt;
$hashedPW = hash('sha256', $saltedPW);

if(empty($username)) {
    $_SESSION['good'] = false;
    $_SESSION['message'] = "Username cannot be empty";
    header("Location: login.php");
    exit();
}


require_once 'Dao.php';
$dao = new Dao();

$loginMatch = $dao->userLogin($username, $hashedPW);

if($loginMatch['Username'] == $username && $loginMatch['Password'] == $hashedPW) {
    $_SESSION['good'] = true;
    $_SESSION['Message'] = "You are logged in";
    $_SESSION['logged_in'] = true;
    header("Location: login.php");
    exit();
} else {
    $_SESSION['good'] = false;
    $_SESSION['message'] = "Username or password not valid";
    header("Location: login.php");
    exit();
}
