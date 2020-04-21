<?php
    session_start();
    $thisPage = "login";
?>

    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">

            <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
            <link rel="manifest" href="favicon_io/site.webmanifest">
            <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script> 
            <script src="js/jquery.validate.js"></script>
        </head>


        <body>
            

        <div class="title">
            <h1>BONE HAUS</h1>

        
        </div>

      
        <h2>
            <?php include("navbar.php"); ?>
        </h2>
    
        
            <?php 

            $user = " ";

                if(isset($_SESSION['username'])) {
                    $user = $_SESSION['username'];
                    echo "<div id='error'>{$_SESSION['message']}</div>";
                }
                    unset($_SESSION['username']);
             ?>
        
        <div class="loginbox">
            <section>
            <h1>Please Log In</h1>
            <form action="login_handler.php" method="post">
                 <p>
                    <label class="formitem" for="username"> Username:</label>
                    <input type="text" id="username" name="username" minlength= "8" required/>
                 </p>
                 <p>
                    <label class="formitem" for="password">Password:</label>
                    <input type="password" id="password" name="password" minlength= "8" required/>
                </p>
                
                <p>
                    <input class="formitem" type="submit" name="submit" value="submit">
                </p>

            </form>
            </section>

        </div>
        </body>
    </html>

   