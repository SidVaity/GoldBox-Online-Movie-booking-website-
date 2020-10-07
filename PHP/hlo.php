
<?php

session_start();

require 'connect.php';

$i = 1;

while ($i <= 18) {
  $rev = "SELECT * FROM `images` WHERE pid='$i'";
  $data = mysqli_query($con,$rev);

  while($result = mysqli_fetch_array($data)){
    $a = $result['img_name'];
    $b = $result['id'];
    $m = $result['Movie_name'];
    $p = $result['pid'];

    if($p == 1){
      $a1 = $a;
      $m1 = $m;
    }
    if($p == 2){
      $a2 = $a;
      $m2 = $m;
    }
    if($p == 3){
      $a3 = $a;
      $m3 = $m;
    }
    if($p == 4){
      $a4 = $a;
      $m4 = $m;
    }
    if($p == 5){
      $a5 = $a;
      $m5 = $m;
    }
    if($p == 6){
      $a6 = $a;
      $m6 = $m;
    }
    if($p == 7){
      $a7 = $a;
      $m7 = $m;
    }
    if($p == 8){
      $a8 = $a;
      $m8 = $m;
    }

    if($p == 9){
      $a9 = $a;
      $m9 = $m;
    }
    if($p == 10){
      $a10 = $a;
      $m10 = $m;
    }
    if($p == 11){
      $a11 = $a;
      $m11 = $m;
    }
    if($p == 12){
      $a12 = $a;
      $m12 = $m;
    }
    if($p == 13){
      $a13 = $a;
      $m13 = $m;
    }
    if($p == 14){
      $a14 = $a;
      $m14 = $m;
    }
    if($p == 15){
      $a15 = $a;
      $m15 = $m;
    }
    if($p == 16){
      $a16 = $a;
      $m16 = $m;
    }
    if($p == 17){
      $a17 = $a;
      $m17 = $m;
      $b17 = $b;
    }
    if($p == 18){
      $a18 = $a;
      $p18 = $p;
      $m18 = $m;
      $b18 = $b;
    }

  }
  $i++;
}

// $c = $_GET['one'];
// echo "$c";

// $rev = "SELECT img_name FROM `images`";
// $data = mysqli_query($con,$rev);
//
// $result = mysqli_fetch_array($data);
// // print_r($result);
// while($result = mysqli_fetch_assoc($data)){
//   $a = $result['img_name'];
//   // $b = $result['id'];
//   // $_SESSION['img_name'] = $a;
//   // $_SESSION['id'] = $b;
//   // echo "<a href='newpg.php?img_name=$a'><img src='$a' width='100px' height='100px'></a> &nbsp;&nbsp;&nbsp; ";
//   // echo "$b";
//   // echo "$a <br>";
// }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title></title>
    <link rel="stylesheet" href="css/img-al.css">
    <link rel="stylesheet" href="css/chck.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
    <!-- <script type="text/javascript">
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length
    for(let i = 0;i<menuLength; i++){
      if(menuItem[i].href === currLocation){
        menuItem[i].className = "active"
      }
    }
      // $(document).on('click','ul li',function()){
      //   $(this).addClass('active').siblings().removeClass('active')
      // })
    </script> -->

    <nav>

        <ul class="nav__links">

              <div class="top-left">
                <li><a class="cta" href="Home1.php"><button>GoldBox</button></a></li>
                <!-- <li><img src="images/goldBox.jpg" alt="" style="height:30px; -->
                  <!-- width="30px";"></li> -->
                <!-- <li><a href="#" class="logo"></a></li> -->
                <li><a class="cta" href="chk.php"><button>Movies</button></a></li>
                <li><a class="cta" href="#"><button>Events</button></a></li>
              </div>

                <div class="top-right">
                    <li><a class="cta" href="login.php"><button>Log in</button></a></li>
                    <li><a class="cta" href="registration.php"><button>Sign up</button></a></li>
                  </div>

          </ul>

    </nav>
    <?php
    include "onclicktest.php";
     ?>


     <script>
     function openNav() {
       // document.getElementById("tbox1").style.display = "block";
       // document.getElementById("mbox1").style.transition = "all 2s";
       document.getElementById("tbox1").style.width = "250px";

       document.getElementById("mbox1").style.width = "1249px";
       document.getElementById("pg1").style.marginLeft = "630px";

     }

     function closeNav() {
       document.getElementById("tbox1").style.width = "0";
       document.getElementById("mbox1").style.width = "1490px";
       // document.getElementById("tbox1").style.display = "none";
       // document.getElementById("tbox1").style.transition = "ease 0.7s";
       document.getElementById("pg1").style.marginLeft = "700px";


     }
     </script>

<div id="movcontainer" class="movie-container">

  <div id="tbox1" class="tbox">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="class">
      <h3 onclick="">HollyWood</h3>
      <br>
      <br>
      <h3>BollyWood</h3>
      <br>
      <br>
      <h3>TollyWood</h3>
      <br>
      <br>

    </div>

  </div>

  <div class="mbox">

    <div id="mbox1" class="botnav">
      <a href="javascript:void(0)" class="openbtn" onclick="openNav()">&#9776;</a>

      <a class="" href="">Trending</a>
      <a href="">New Arrivals</a>

      <input type="text" placeholder="Search..">
      <div class="search-container">


      </div>
    </div>


    <!-- <form method="post">
    <a href='newpg.php?img_name=<?php echo "$a"; ?>'><input type="image" name="one" value="1" src="move_img/Infinity_War.jpg">
    </form> -->

    <div class="grid-5">

      <div  class="card17">
        <a href='newpg.php?id=<?php echo "$b17"; ?>'><img name="one" class="onem" value="1" src="<?php echo "$a17"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m17"; ?></h2>
          <!-- <p>Genre:Action,Fantasy,Comedy,Sci-fi</p> -->
      </div>

      <?php
      error_reporting(0);
      if($p18 == 0):  ?>

      <?php else : ?>
        <div id="class18" class="card18">
          <a href='newpg.php?id=<?php echo "$b18"; ?>'><img name="two" class="onem" value="2" src="<?php echo "$a18"; ?>"></img>
            <br>
            <br>
            <h2><?php echo "$m18"; ?></h2>
        </div>

      <?php endif; ?>

      <!-- <div class="card19">
          <a href='newpg.php?img_name=<?php echo "$a3"; ?>'><img name="three" class="onem" value="3" src="<?php echo "$a3"; ?>"></img>
            <br>
            <br>
            <h2><?php echo "$m3"; ?></h2>
      </div>

      <div class="card20">
        <a href='newpg.php?img_name=<?php echo "$a4"; ?>'><img name="four" class="onem" value="4" src="<?php echo "$a4"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m4"; ?></h2>
      </div> -->





    </div>
<!--
    <div class="grid-2">

      <div class="card5">
        <a href='newpg.php?img_name=<?php echo "$a5"; ?>'><img name="five" class="twom" value="5" src="<?php echo "$a5"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m5"; ?></h2>
      </div>

      <div class="card6">
        <a href='newpg.php?img_name=<?php echo "$a6"; ?>'><img name="six" class="twom" value="6" src="<?php echo "$a6"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m6"; ?></h2>
      </div>

      <div class="card7">
        <a href='newpg.php?img_name=<?php echo "$a7"; ?>'><img name="seven" class="twom" value="7" src="<?php echo "$a7"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m7"; ?></h2>
      </div>

      <div class="card8">
        <a href='newpg.php?img_name=<?php echo "$a8"; ?>'><img name="eight" class="twom" value="8" src="<?php echo "$a8"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m8"; ?></h2>
      </div>

    </div>


    <div class="grid-3">

      <div class="card9">
        <a href='newpg.php?img_name=<?php echo "$a9"; ?>'><img name="nine" class="threem" value="5" src="<?php echo "$a9"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m9"; ?></h2>
      </div>

      <div class="card10">
        <a href='newpg.php?img_name=<?php echo "$a10"; ?>'><img name="ten" class="threem" value="6" src="<?php echo "$a10"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m10"; ?></h2>
      </div>

      <div class="card11">
        <a href='newpg.php?img_name=<?php echo "$a11"; ?>'><img name="eleven" class="threem" value="7" src="<?php echo "$a11"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m11"; ?></h2>
      </div>

      <div class="card12">
        <a href='newpg.php?img_name=<?php echo "$a12"; ?>'><img name="twelve" class="threem" value="8" src="<?php echo "$a12"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m12"; ?></h2>
      </div>

    </div>


    <div class="grid-4">

      <div class="card13">
        <a href='newpg.php?img_name=<?php echo "$a13"; ?>'><img name="thirt" class="fourm" value="5" src="<?php echo "$a13"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m13"; ?></h2>
      </div>

      <div class="card14">
        <a href='newpg.php?img_name=<?php echo "$a14"; ?>'><img name="forth" class="fourm" value="6" src="<?php echo "$a14"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m14"; ?></h2>
      </div>

      <div class="card15">
        <a href='newpg.php?img_name=<?php echo "$a15"; ?>'><img name="fifth" class="fourm" value="7" src="<?php echo "$a15"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m15"; ?></h2>
      </div>

      <div class="card16">
        <a href='newpg.php?img_name=<?php echo "$a16"; ?>'><img name="sixth" class="fourm" value="8" src="<?php echo "$a16"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m16"; ?></h2>
      </div>

    </div> -->

    <a href="chk.php"><button id="pg1" type="button">1</button></a>
    <a href="hlo.php"><button class="active" id="pg2" type="button">2</button></a>
  </div>





</div>



<!--
<div class="row">
  <div class="helpbox">
<button class="help1" type="button" name="button">Contact Us</button>

<button class="help2" type="button" name="button">FAQ'S</button>


</div>

<div class="helpbox1">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div>

</div> -->






  </body>
</html>
