<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome.min.css">
<head>

<div id="right" class="navbar">
<ul>
            <li <?php if ($thisPage == "logout")
            echo " id=\"currentpage\""; ?> ><a href="logout.php">LOGOUT</a></li>


             <li <?php if ($thisPage == "login")
            echo " id=\"currentpage\""; ?>> <a href="login.php" >LOGIN | SIGN UP</a></li>  
</ul>
</div>

<div id="left" class="navbar">
    <ul>
        <li <?php if ($thisPage == "index")
            echo " id=\"currentpage\""; ?> ><a href="index.php"> <i class="fa fa-fw fa-home"></i>SHOWS</a></li>

        <li <?php if ($thisPage == "media")
            echo " id=\"currentpage\""; ?> ><a href="media.php">MEDIA</a></li>

        <li <?php if ($thisPage == "gallery")
            echo " id=\"currentpage\""; ?> ><a href="gallery.php">GALLERY</a></li>

        <li <?php if ($thisPage == "contact")
            echo " id=\"currentpage\""; ?> ><a href="contact.php">CONTACT</a></li>
    </ul>
</div>