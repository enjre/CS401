<?php
    session_start();
    session_destroy();
    header("Location: https://CS401/login.php");
    exit;
    
