<?php
require 'regis.php';
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">

     <title></title>
     <link rel="stylesheet" href="css/regis.css">
   </head>

   <body style="background-image: url('images/grayb.jpg')">



      <div class="main">
        <form action="" method="post">
          <h2 class="l4">Registration Page</h2>

           <label>Username</label>
           <input class="usern" type="text" name="User" value="" required>
           <br>
           <label>Email</label>
           <input class="emailn" type="text" name="Email" value="" required>
           <br>
           <label>Password</label>
           <input class="passn" type="password" name="Pass" value="">
           <br>
           <label>Confirm Password</label>
           <input class="cpassn" type="password" name="CPass" value="">
           <br>
           <a href="#"><button class="butn" type="submit" name="create">Register</button></a>



     </form>
     </div>

   </body>
 </html>
