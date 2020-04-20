<?php $thisPage = "contact";?>
<html>

<head>
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">
</head>

<header><title>BONE HAUS-CONTACT </title></header>
  <link rel="stylesheet" type="text/css" href="style.css">

    <h1>BONE HAUS</h1>
       
        <h2>
            <?php include("navbar.php"); ?>
        </h2>

        <h3>CONTACT</h3>
        <div><p>Reach us on <a href="media.html">social media</a> or at bonehausofficial@gmail.com</p></div>

<?php
  session_start();

  $errors= array();

    //validate and sanitize name
      if(filter_has_var(INPUT_POST, 'name')){
        $name = $_POST['name'];
        if(!preg_match("/^([a-zA-Z' ]+)$/" , $name)){
            $errors[] = "Invalid name format";
        } 
        else{
          $name= filter_var($name, FILTER_SANITIZE_STRING);
        }
      } 

    //validate and sanitize email
    if(filter_has_var(INPUT_POST, 'email')){
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $errors[] = "Invalid email format";
        }  else{
          $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        }
    } 

    //validate and sanitize message
      if(strlen($_POST['message']) > 500){
        $errors[] = "Message can only be 500 characters long";
      }

      if(strlen($_POST['message']) == 0){
        $errors[] = "Please leave a message before submitting";
      }

?>



    <body>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
             <p><label for="name"> Name: <input type="text" name="name" value=""></label></p>
             <p><label for="email"> E-mail: <input type="text" name="email" value =""></label></p>
             <p> <label for="subject">Subject: <input type="text" name="subject" value=""></label></p>
             <p> <labe for="message">Message: <textarea name="message" rows="5" cols="40"> </textarea> </label></p>
             <p><input type="submit" name="submit" value="Submit"></p>
            </form>

      <div id="output" name="output" align="center">
          <?php 
          if (isset($_POST['submit'])) {
            echo "Thanks you for contacting us ".$_POST['name']."!".'<br />';
            echo "We will email you at ".$_POST['email'].'<br />';
          }

          function sanitize_my_email($field) {
            $field = filter_var($field, FILTER_SANITIZE_EMAIL);
            if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
              return false;
            }
          }

            $to_email = 'bonehausofficial@gmail.com';
            $subject = $_POST['subject'];
            $message =$_POST['message'];
            $headers = 'From:' . $_POST['email'];
            $secure_check = sanitize_my_email($to_email);
            if($secure_check == false) {
                echo "Invalid input";

            } else {
              mail($to_email, $subject, $message, $headers);
            }

          ?>
      </div>
    </body>
</html>