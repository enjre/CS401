<?php
    session_start();
    $thisPage = "login";
?>

    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <h1>Please Log In</h1>

            <div class="title">
        <h1>BONE HAUS</h1>
      </div>
      
        <h2>
            <?php include("navbar.php"); ?>
        </h2>
    
        <div class="loginbox">
            <?php 
                if(isset($_SESSION['message'])) {
                    echo "<div id='error'>{$_SESSION['message']}</div>";
                }
                    unset($_SESSION['message']);
             ?>
        

            <form action="login_handler.php" method="post">
                <div><label for="username"> Username:<input type="text" id="username" name="username" /></div>
                <div><label for="password">Password:<input type="password" id="password" name="password" /></div>
                <div><input type="submit" name="submit" value="submit"></div>
            </form>

            </div>
        </body>
    </html>

   