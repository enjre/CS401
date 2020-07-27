

<div id="left" class="navbar">
    <ul>
        <li <?php if ($thisPage == "index")
            echo " id=\"currentpage\""; ?> ><a href="index.php">SHOWS</a></li>

        <li <?php if ($thisPage == "media")
            echo " id=\"currentpage\""; ?> ><a href="media.php">MEDIA</a></li>

        <li <?php if ($thisPage == "gallery")
            echo " id=\"currentpage\""; ?> ><a href="gallery.php">GALLERY</a></li>

        <li <?php if ($thisPage == "contact")
            echo " id=\"currentpage\""; ?> ><a href="contact.php">CONTACT</a></li>
    </ul>
</div>