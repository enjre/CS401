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
            echo " id=\"currentpage\""; ?> ><a href="index.php">SHOWS</a></li>

        <li <?php if ($thisPage == "media")
            echo " id=\"currentpage\""; ?> ><a href="media.html">MEDIA</a></li>

        <li <?php if ($thisPage == "gallery")
            echo " id=\"currentpage\""; ?> ><a href="gallery.html">GALLERY</a></li>

        <li <?php if ($thisPage == "Contact")
            echo " id=\"currentpage\""; ?> ><a href="contact.php">CONTACT</a></li>
    </ul>
</div>