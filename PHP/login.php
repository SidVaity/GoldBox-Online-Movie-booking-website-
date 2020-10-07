<?php
require 'connect.php';
session_start();

if (isset($_POST['log'])) {
  $Usern = $_POST['chkuser'];
  $Passn = $_POST['chkpass'];

  $sqli = "SELECT * FROM accounts WHERE Username='$Usern' && Password='$Passn'";
  // echo "$sqli";
  $result = mysqli_query($con,$sqli);

  $num = mysqli_num_rows($result);

  if($num == 1){
    $_SESSION['username'] = $Usern;
    echo $_SESSION['username'];
    header('location:usrpage.php');
  }
  else {
    header('location:login.php');
    echo "Incorrect password";
  }
}
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="css/loga.css">
   </head>

   <body style="background-image: url('images/grayb.jpg')">





      <div class="main">

        <form action="" method="post">
          <h2 class="l4">Login Page</h2>
           <label class="l1">Username</label>
           <input class="usern" type="text" name="chkuser" value="">
           <br>
           <label class="l2">Password</label>
           <input class="passn1" type="password" name="chkpass" value="">
           <br>
           <a href="#"><button class="butn" type="submit" name="log">Login</button></a>



     </form>
     <br>
     <br>

     <a class="notreg" href="registration.php">Not registered? Sign up here</a>
    </div>

   </body>
 </html>
