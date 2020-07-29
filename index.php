<?php $thisPage = "index";?>

<html>

    <head><title> BONE HAUS-SHOWS </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
        <link rel="manifest" href="favicon_io/site.webmanifest">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    </head>
    <body>
    <style>
        div {
            background-image: url('imgs/bh4.jpg');
        }
    </style> 
      <div class="title">
        <h1>BONE HAUS</h1>
      </div>
      
      
        <h2>
            <?php include("navbar.php"); ?>
        </h2>

        <!-- <div class="frontimg"> <img src="imgs/bh4.jpg"></div> -->


        <h4>UPCOMING SHOWS</h4>

        <div>
            <table style="width:40%">
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                </tr>
                <tr >
                    <td >March 7th</td>
                    <td>7:00pm doors/8:00pm show</td>
                    <td>The Shredder</td>
                </tr>
                <tr >
                    <td>March 25th</td>
                    <td>6:00pm</td>
                    <td>Regal Beaver</td>
                </tr>
                <tr>
                    <td>April 18th</td>
                    <td> 7:00pm</td>
                    <td>Dogg House</td>
                </tr>
                <tr>
                    <td>May 15th</td>
                    <td>7:00pm</td>
                    <td>Regal Beaver</td>
                </tr>
            </table>
        </div>

    </body>


</html>