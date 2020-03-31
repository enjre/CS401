<?php
session_start();

if(!isset($_SESSION['auth']) || !$_SESSION['auth']) {
    header("Location: http://CS401/login.php");
    exit;
}