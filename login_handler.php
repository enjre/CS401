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
		$_SESSION['errorUser'] = "Please enter a valid username";
		if(!filter_var($username, FILTER_VALIDATE_STRING))
		{
			$_SESSION['errorUser'] = "Enter a valid username.";
		}
		else
		{
			$_SESSION['errorUSer'] = "";
		}
		$_SESSION['errorPass'] = "Please Enter A Password";
		header("Location: login.php");
	}
	else if(!filter_var($username, FILTER_VALIDATE_STRING) && !empty($password))
	{
		$_SESSION['errorUser'] = "Enter a valid username.";
		$_SESSION['errorPass'] = "";
		header("Location: login.php");
	}
	else
	{
		$salt = "abs0lut3z3r0";
		$epassword = hash('sha256', $password . $salt);
		$loginInfo = $dao->checkLogin($username, $epassword);
	
		if ($loginInfo == 1) {
			$_SESSION['errorMessage'] = "";
			$_SESSION['errorPass'] = "";
			$_SESSION['errorUser'] = "";
			$_SESSION['currentUser'] = $username;
			$_SESSION['admin'] = $dao->checkAdmin($username);
			header("Location: index.php");
		} 
		else {
			$_SESSION['errorMessage'] = "Username or password incorrect.";
			$_SESSION['errorLPass'] = "";
			$_SESSION['errorUser'] = "";
			header("Location: login.php");
		}
	}



?>