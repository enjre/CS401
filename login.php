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
            <a href="index.html" id="Shows" >Shows</a>
            <a href="media.html" id="Media" >Media</a>
            <a href="gallery.html" id="Gallery" >Gallery</a>
            <a href="contact.php" id="Contact" >Contact</a>
            <a href="login.php" id="login">Login</a>
        </h2>
    

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
        </body>
    </html>

   