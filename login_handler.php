<?php

session_start();
require_once " Dao.php";


$dao = new Dao();
$username = $_POST['username'];
$password = $_POST['password'];

$username = filter_var($username,FILTER_SANITIZE_STRING);


$_SESSION['user'] = $username;
$_SESSION['pass'] = $password;

if(empty($username) || empty($password))
	{
		$_SESSION['errorMessage'] = "Missing in form fields.";
		$_SESSION['errorEmail'] = "Please Enter a valid Email";
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$_SESSION['errorEmail'] = "Enter a valid Email.";
		}
		else
		{
			$_SESSION['errorEmail'] = "";
		}
		$_SESSION['errorLPass'] = "Please Enter A Password";
		header("Location: login.php");
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password))
	{
		$_SESSION['errorEmail'] = "Enter a valid Email.";
		$_SESSION['errorLPass'] = "";
		header("Location: login.php");
	}
	else
	{
		$salt = "eftisfun";
		$epassword = hash('sha256', $password . $salt);
		$loginInfo = $dao->checkLogin($email, $epassword);
	
		if ($loginInfo == 1) {
			$_SESSION['errorMessage'] = "";
			$_SESSION['errorLPass'] = "";
			$_SESSION['errorEmail'] = "";
			$_SESSION['currentUser'] = $email;
			$_SESSION['admin'] = $dao->checkAdmin($email);
			header("Location: index.php");
		} 
		else {
			$_SESSION['errorMessage'] = "Login Unsuccessful, email or password incorrect.";
			$_SESSION['errorLPass'] = "";
			$_SESSION['errorEmail'] = "";
			header("Location: login.php");
		}
	}



?>