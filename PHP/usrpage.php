<?php

session_start();
require 'connect.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

     <!-- Optional theme -->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
     <link rel="stylesheet" href="css/usrpage.css">
     <link rel="stylesheet" href="arrow.css">
   </head>
   <body>

     <nav>

        <ul class="nav__links">

               <div class="top-left">
                 <li><a class="cta" href= "Home1.php"><button>GoldBox</button></a></li>
                 <!-- <li><img src="images/goldBox.jpg" alt="" style="height:30px; -->
                   <!-- width="30px";"></li> -->
                 <!-- <li><a href="#" class="logo"></a></li> -->
                 <li><a class="cta" href="#"><button>Movies</button></a></li>
                 <li><a class="cta" href="#"><button>Events</button></a></li>
               </div>

                 <div class="top-right">
                     <li><a class="cta" href=""><button><?php echo $_SESSION['username']; ?></button></a></li>
                     <li><a class="cta" href="logout.php"><button>Logout</button></a></li>
                   </div>


          </ul>


    </nav>

    <?php
    include "onclicktest.php";
     ?>

<div class="row">

<div class="lh"><h2> Easy to use and Interact </h2>
<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eipariatur.Loriusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
</div>
<div class="lh"> <h2>24 X 7 Online Customer Service </h2>
<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eipariatur.Loriusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
</div>

</div>

<div class="rh-1"> <h2>Special Offers and Coupons Available On Selected Services</h2>
<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidiostrudlorem incididunt ut labore et dolor incididunt ut labore et dolor incididunt ut labore et dolor incididunt ut labore et dolor incididunt ut labore et dolor





   </body>
 </html>
