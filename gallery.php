<?php $thisPage = "gallery";?>
<html>
<header><title>BONE HAUS-GALLERY </title></header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script> 


<link rel="stylesheet" type="text/css" href="style.css">
    <body>
            
       <h1>BONE HAUS</h1>
        
       <h2>
            <?php include("navbar.php"); ?>
        </h2>
           
        <h3>GALLERY</h3>
        
        <div class="container">
          <div class="col">
              <div class="box"><img src="imgs/bh1.jpg" width="500px" height="500px"></div>
              <div class="box"><img src="imgs/bh2.jpg"></div>
              <div class="box"><img src="imgs/bh3.jpg" width="500px" height="500px"></div>
              <div class="box"><img src="imgs/bh4.jpg"></div>
              <div class="box"><img src="imgs/bh5.jpg" width="800px" height="600px"></div>
              <div class="box"><img src="imgs/bh6.jpg" height="500px"></div>
              <div class="box"><img src="imgs/bh7.jpg"></div>
              <div class="box"><img src="imgs/bh8.jpg"></div>
              <div class="box"><img src="imgs/bh9.jpg"></div>
              <div class="box"><img src="imgs/bh10.jpg"></div>
              <div class="box"><img src="imgs/bh11.jpg" width="400px" height="600px"></div>
              


          </div>
          <div class="col">
            <div class="full-image">
              <img src="imgs/bh1.jpg" width="500px" height="500px">
            </div>

        </div>
        </div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.box').click(function(){
      $('.full-image').html($(this).html());
    });
  });

</script>




          <!-- <div class="row">
            <div class="column">
              <img src="imgs/bh2.jpg" width="30%" height="30%">
              <img src="imgs/bh3.jpg" width= "30%" height="30%">
            </div>
            <div class="column">
              <img src="imgs/bh4.jpg" width= "60%" height="30%">
            </div>
          </div> -->
        <!-- <div id="album" class="image">
          <img src="imgs/bh1.jpg" width= "40%" height="40%">
      </div> -->
    </body>
</html>