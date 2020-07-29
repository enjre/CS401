<?php $thisPage = "gallery";?>
<html manifest="/example.appcache">

<head> 
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>

<header><title>BONE HAUS-GALLERY </title></header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script> 


<link rel="stylesheet" type="text/css" href="style.css">
    <body>
            
       <h1>BONE HAUS</h1>
        
       <h2>
            <?php include("navbar.php"); ?>
        </h2>
           
        <h3>IMAGE GALLERY</h3>
        
        
          <div class="col">
              <div class="box"><img src="imgs/bh1.jpg" width="500px" height="500px"></div>
              <div class="box"><img src="imgs/bh3.jpg" width="500px" height="500px"></div>
              <div class="box"><img src="imgs/bh4.jpg"></div>
              <div class="box"><img src="imgs/bh5.jpg" width="800px" height="600px"></div>
              <div class="box"><img src="imgs/bh6.jpg" height="500px"></div>
              
          </div>

          <div class="col">
              <div class="box"><img src="imgs/bh7.jpg"></div>
              <div class="box"><img src="imgs/bh8.jpg"></div>
              <div class="box"><img src="imgs/bh9.jpg"></div>
              <div class="box"><img src="imgs/bh10.jpg"></div>
              <div class="box"><img src="imgs/bh11.jpg" width="400px" height="600px"></div>

          </div>

          
            <div class="full-image">
              <img class="sticky" src="imgs/bh1.jpg" width="500px" height="500px">
            </div>
        

<script type="text/javascript">
  $(document).ready(function(){
    $('.box').click(function(){
      $('.full-image').html($(this).html());
    });
  });

</script>

    </body>
</html>