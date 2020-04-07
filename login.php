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
                <label> Username</label>
                <input type="text" name="username">
                <label>Password</label>
                <input type="text" name="pass">
                <input type="submit" name="submit" value="submit">
            </form>
        </body>
    </html>

    <?php 
    //session_start();
        $conn = mysqli_connect("localhost","root", "", "admin"); 

        if(isset($_POST["submit"])){
            $username = $_POST["username"];
            $pass = $_POST["pass"];

            $sql = mysqli_query($conn, "SELECT count(*) as total from Login where username = '".$username."' and password = '".$pass."'") or die(mysqli_error($conn));
        
            $rw = mysqli_fetch_array($sql);

            if($rw['total'] > 0) {
                echo "<script>alert('username and password are correct'</script>";
            } else{
                echo "<script>alert('username and password are incorrect'</script>";

            }


        }
    ?>