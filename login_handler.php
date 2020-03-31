<?php

session_start();

$username = "andremaldonado";
$password = "Boise123!";

if($username == $_POST['username'] && $password == $_POST['password']){
    $_SESSION['auth'] = true;
    header("Location: index.html");
    exit;
} else{
    $_SESSION['auth'] = false;
    $_SESSION['message'] = "Invalid username or password";
    header("Location: login.php");
}
