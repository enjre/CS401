<?php
    session_start();
    $thisPage="login";
    ?>

    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <h1>Please Log In</h1>


            <?php 
        if(isset($_SESSION['message'])) {
            $sentiment = (isset($_SESSION['good']) && ($_SESSION['good'])) ? "good" : "bad";
            echo "<div class='message' id='" . $sentiment . "' >" . $_SESSION['message'] ."</div>";
        }
            unset($_SESSION['message']);
            

    ?>

            <form action="login_handler.php" method="POST">
                <label for="username"> Username: </label>
                <input type="text" id="username" name="username">
                <label for="password">Password: </label>
                <input type="password" id="password" name="password">
                <input type="submit" name="submit" value="submit">
            </form>
        </body>
    </html>

   