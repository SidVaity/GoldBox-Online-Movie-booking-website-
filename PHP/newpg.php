<?php

session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/movie_pg.css">
  </head>
   <body style="background-image: url('images/grayb.jpg')">
    <!-- <h1>hello</h1> -->

  <?php


  require 'connect.php';
  $img_name = isset($_REQUEST['img_name']) ? $_REQUEST['img_name'] : null;
  $id1 = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

  $geti = "SELECT * FROM `images` WHERE id='$id1' ";
  $data1 = mysqli_query($con,$geti);

  while($result2 = mysqli_fetch_array($data1)){
    $a1 = $result2['img_name'];
    $b1 = $result2['id'];
    $d1 = $result2['Description'];
    $y1 = $result2['Yt_links'];
    $m1 = $result2['Movie_name'];

    
    // echo "<img src='$a1' width='100px' height='100px'>";
    // echo "$b1";
    // echo "$d1";
    // echo "$y1";
  }

  ?>


<div class="box">

<!-- <h1>hello</h1> -->

<iframe width="1020" height="525" src="<?php echo "$y1" ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<div class="grid-container">
  <img class="lh" src="<?php echo "$a1" ?>" alt="" width="250px" height="350px">
  <h1 class="lh1"><?php echo "$m1"; ?></h1>
  <h4 class="lh2"><?php echo "$d1"; ?></h4>

</div>

<a href="chkbox_check.php"><button type="submit" name="bookticket">Book now</button></a>


</div>


  </body>
</html>
