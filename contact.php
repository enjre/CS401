
<html>
<header><title>BONE HAUS-CONTACT </title></header>
<link rel="stylesheet" type="text/css" href="style.css">

<h1>BONE HAUS</h1>
       
       <h2> 
        <a href="index.html" id="Shows" >Shows</a>
        <a href="media.html" id="Media" >Media</a>
        <a href="gallery.html" id="Gallery" >Gallery</a>
        <a href="contact.html" id="Contact" >Contact</a>
        </h2>

        <h3>CONTACT</h3>
        <div><p>Reach us on <a href="https://www.facebook.com/BoneHausBand/?ref=bookmarks"> Facebook </a>, 
          <a href="https://www.instagram.com/bonehausofficial/"> Instagram</a> or at hmiller10191@gmail.com</p></div>

    <body>
          <?php 
          // pre_r($_POST);
          if (isset($_POST['submit'])) {
            echo "Thanks you for contacting us ".$_POST['name'].'<br />'."!";
            echo "We will email you at ".$_POST['email'].'<br />';
          }
          ?>

            <form action="" method="POST">
             <p> Name: <input type="text" name="name" value=""></p>
             <p> E-mail: <input type="text" name="email" value =""></p>
              <p>Message: <textarea name="message" rows="5" cols="40"> </textarea></p>
              <p><input type="submit" name="submit" value="Submit"></p>
            </form>
    </body>
</html>

    <?php
        function pre_r( $array ){
              echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
    ?>
