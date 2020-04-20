<?php

session_start();
require_once " Dao.php";


$dao = new Dao();
$email = $_REQUEST['email'];
$email = filter_var($email,FILTER_SANITIZE_EMAIL);
$password = $_REQUEST['password'];
$user = $dao->userLogin($username);
$_SESSION['email_preset'] = $_POST['email'];
$valid = true;
$messages = array();




$salt = 'abs0lutez3r0';
$saltedPW = $password . $salt;
$hashedPW = hash('sha256', $saltedPW);


if((empty($username)) && (empty($password))) {
    $messages[] = "Username and password cannot be blank";
    $valid = false;
    echo " Please enter a valid username";
}

if(empty($username)){
    $messages[] = "Please enter a valid username";
    $valid = false;
    echo "Please enter a valid username";
}

if(empty($password)){
    $messages[] = "Please enter a valid password";
    $valid = false;
    echo "Please enter a valid password";
}

if(!$user) {
    $messages[] = "Username does not exist";
    $valid = false;
} else {
    $user = $dao->getUser($username);
    $pass = $dao->getPassword($password);
    $passhash = hash("sha256", $password . "z3r0");


    if($passhash != $pass) {
        $messages[] = "Incorrect password";
        echo " invalid password";
        $valid = false;
        $_SESSION["user_preset"] = $username;
    } else {
        $messages[] = "Welcome $username";
        $_SESSION['currentUser'] = $username;
        $valid = true;
    }
}

if(!$valid) {
    $_SESSION['sentiment'] = "Incorrect email or password";
    $_SESSION['messages'] = $messages;
        header("Location: login.php");
        exit();
}

$_SESSION['sentiment'] = "good";
header("Location: index.php");
?>



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
