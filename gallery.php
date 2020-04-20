<?php $thisPage = "gallery";?>
<html>

  <head>

    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<header><title>BONE HAUS-GALLERY </title></header>




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
});
</script>



    </body>
</html>