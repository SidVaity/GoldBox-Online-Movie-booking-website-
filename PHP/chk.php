
<?php

session_start();

require 'connect.php';

$i = 1;

while ($i <= 16) {
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
      $b1 = $b;
    }
    if($p == 2){
      $a2 = $a;
      $m2 = $m;
      $b2 = $b;
    }
    if($p == 3){
      $a3 = $a;
      $m3 = $m;
      $b3 = $b;
    }
    if($p == 4){
      $a4 = $a;
      $m4 = $m;
      $b4 = $b;
    }
    if($p == 5){
      $a5 = $a;
      $m5 = $m;
      $b5 = $b;
    }
    if($p == 6){
      $a6 = $a;
      $m6 = $m;
      $b6 = $b;
    }
    if($p == 7){
      $a7 = $a;
      $m7 = $m;
      $b7 = $b;
    }
    if($p == 8){
      $a8 = $a;
      $m8 = $m;
      $b8 = $b;
    }

    if($p == 9){
      $a9 = $a;
      $m9 = $m;
      $b9 = $b;
    }
    if($p == 10){
      $a10 = $a;
      $m10 = $m;
      $b10 = $b;
    }
    if($p == 11){
      $a11 = $a;
      $m11 = $m;
      $b11 = $b;
    }
    if($p == 12){
      $a12 = $a;
      $m12 = $m;
      $b12 = $b;
    }
    if($p == 13){
      $a13 = $a;

      $m13 = $m;
      $b13 = $b;
    }
    if($p == 14){
      $a14 = $a;
      $m14 = $m;
      $b14 = $b;
    }
    if($p == 15){
      $a15 = $a;
      $m15 = $m;
      $b15 = $b;
    }
    if($p == 16){
      $a16 = $a;
      $m16 = $m;
      $b16 = $b;
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

    <title></title>
    <link rel="stylesheet" href="css/img-al.css">
    <link rel="stylesheet" href="css/chck.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>


      <!-- Compiled and minified CSS -->
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->


  </head>
  <body>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- <script type="text/javascript">
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length
    for(let i = 0;i<menuLength; i++){
      if(menuItem[i].href === currLocation){
        menuItem[i].className = "active"
      }
    } -->
      <!-- // $(document).on('click','ul li',function()){
      //   $(this).addClass('active').siblings().removeClass('active')
      // })
    // </script> -->

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
       document.getElementById("mbox1").style.width = "1495px";
       // document.getElementById("tbox1").style.display = "none";
       // document.getElementById("tbox1").style.transition = "ease 0.7s";
       document.getElementById("pg1").style.marginLeft = "700px";


     }
     </script>


<div id="movcontainer" class="movie-container">

  <div id="tbox1" class="tbox">
    <a class="closebtn" onclick="closeNav()">&times;</a>
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
    <!-- <span style="font-size:30px;cursor:pointer;color:gold;" class="openbtn" onclick="openNav()">&#9776;</span> -->

  <div id="mbox1" class="mbox">

    <div  class="botnav">

      <a href="javascript:void(0)" class="openbtn" onclick="openNav()">&#9776;</a>
      <a class="sds" href="">Trending</a>
      <a class="sds1" href="">New Arrivals</a>

      <input type="text" class="search-area" id="search-text" placeholder="Search..">



      <div id="search-result">

      </div>



    </div>

<!-- ajax -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#search-text').keyup(function(){
      var txt = $(this).val();
      if(txt != ''){
          $.ajax({
            url:"search-fetch.php",
            method:"post",
            data:{search:txt},
            dataType:"text",
            success:function(data){
              $('#search-result').html(data);
            }

          });
      }
      else {
        $('#search-result').html('');
      }
    });
  });
</script>

    <!-- <form method="post">
    <a href='newpg.php?img_name=<?php echo "$a"; ?>'><input type="image" name="one" value="1" src="move_img/Infinity_War.jpg">
    </form> -->

    <div class="grid-container">

      <div id="card1" class="card1">
        <a href='newpg.php?id=<?php echo "$b1"; ?>'><img name="one" class="onem" value="1" src="<?php echo "$a1"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m1"; ?></h2>
          <!-- <p>Genre:Action,Fantasy,Comedy,Sci-fi</p> -->
      </div>

      <div class="card2">
        <a href='newpg.php?id=<?php echo "$b2"; ?>'><img name="two" class="onem" value="2" src="<?php echo "$a2"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m2"; ?></h2>
      </div>

      <div class="card3">
          <a href='newpg.php?id=<?php echo "$b3"; ?>'><img name="three" class="onem" value="3" src="<?php echo "$a3"; ?>"></img>
            <br>
            <br>
            <h2><?php echo "$m3"; ?></h2>
      </div>

      <div class="card4">
        <a href='newpg.php?id=<?php echo "$b4"; ?>'><img name="four" class="onem" value="4" src="<?php echo "$a4"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m4"; ?></h2>
      </div>





    </div>

    <div class="grid-2">

      <div class="card5">
        <a href='newpg.php?id=<?php echo "$b5"; ?>'><img name="five" class="twom" value="5" src="<?php echo "$a5"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m5"; ?></h2>
      </div>

      <div class="card6">
        <a href='newpg.php?id=<?php echo "$b6"; ?>'><img name="six" class="twom" value="6" src="<?php echo "$a6"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m6"; ?></h2>
      </div>

      <div class="card7">
        <a href='newpg.php?id=<?php echo "$b7"; ?>'><img name="seven" class="twom" value="7" src="<?php echo "$a7"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m7"; ?></h2>
      </div>

      <div class="card8">
        <a href='newpg.php?id=<?php echo "$b8"; ?>'><img name="eight" class="twom" value="8" src="<?php echo "$a8"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m8"; ?></h2>
      </div>

    </div>


    <div class="grid-3">

      <div class="card9">
        <a href='newpg.php?id=<?php echo "$b9"; ?>'><img name="nine" class="threem" value="5" src="<?php echo "$a9"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m9"; ?></h2>
      </div>

      <div class="card10">
        <a href='newpg.php?id=<?php echo "$b10"; ?>'><img name="ten" class="threem" value="6" src="<?php echo "$a10"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m10"; ?></h2>
      </div>

      <div class="card11">
        <a href='newpg.php?id=<?php echo "$b11"; ?>'><img name="eleven" class="threem" value="7" src="<?php echo "$a11"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m11"; ?></h2>
      </div>

      <div class="card12">
        <a href='newpg.php?id=<?php echo "$b12"; ?>'><img name="twelve" class="threem" value="8" src="<?php echo "$a12"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m12"; ?></h2>
      </div>

    </div>


    <div class="grid-4">

      <div class="card13">
        <a href='newpg.php?id=<?php echo "$b13"; ?>'><img name="thirt" class="fourm" value="5" src="<?php echo "$a13"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m13"; ?></h2>
      </div>

      <div class="card14">
        <a href='newpg.php?id=<?php echo "$b14"; ?>'><img name="forth" class="fourm" value="6" src="<?php echo "$a14"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m14"; ?></h2>
      </div>

      <div class="card15">
        <a href='newpg.php?id=<?php echo "$b15"; ?>'><img name="fifth" class="fourm" value="7" src="<?php echo "$a15"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m15"; ?></h2>
      </div>

      <div class="card16">
        <a href='newpg.php?id=<?php echo "$b16"; ?>'><img name="sixth" class="fourm" value="8" src="<?php echo "$a16"; ?>"></img>
          <br>
          <br>
          <h2><?php echo "$m16"; ?></h2>
      </div>

    </div>

<a href="chk.php"><button class="active" id="pg1" type="button">1</button></a>
<a href="hlo.php"><button id="pg2" type="button">2</button></a>

  </div>



</div>



<div class="row">
  <div class="helpbox">
      <button class="help1" type="button" name="button">Contact Us</button>

      <button class="help2" type="button" name="button">FAQ'S</button>

  </div>

<div id="botp" class="helpbox1">
    <h2 id="infotab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
</div>

</div>






  </body>
</html>
