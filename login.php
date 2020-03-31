<?php
    session_start();
    ?>

    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <h1>Please Log In</h1>
            <?php
                if (isset($SESSION['message'])){
                    echo "<div id='error'>{$_SESSION['message']}</div>";
                    unset($_SESSION['message']);
                }
            ?>

            <form action="login_handler.php" method="POST" align="center">
                <div><label for="username">Username: <input type="textbox" id="username" name="username" /></div>
                <div><label for="password">Password: <input type="password" id="password" name="password" /></div>
                <div><input type="submit"/></div>
            </form>
        </body>
    </html>