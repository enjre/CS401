<?php

session_start();

//$username = "andremaldonado";
//$password = "Boise123!";

// function checkInput ($dat){
//     $dat = trim($dat);
//     $dat = stripslashes($dat);
//     $dat = htmlspecialchars($dat);
//     return $dat;
// }

//  $username= checkInput($_POST['username']);
//  $password= checkInput($_POST['password']);

$username = 'andremaldonado';
$password = 'Boise123!';

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
    $_SESSION['auth'] = true;
    $_SESSION['Message'] = "You are logged in";
    $_SESSION['logged_in'] = true;
    header("Location: index.php");
    exit();
} else {
    $_SESSION['auth'] = false;
    $_SESSION['message'] = "Username or password invalid";
    header("Location: login.php");
    exit();
}
