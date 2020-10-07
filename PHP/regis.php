<?php
require 'connect.php';

if (isset($_POST['create'])) {

  $Username = $_POST['User'];
  $Email = $_POST['Email'];
  $Password = $_POST['Pass'];
  $CPassword = $_POST['CPass'];

  $s = "SELECT * FROM accounts WHERE Username ='$Username'";
  $e = "SELECT * FROM accounts WHERE Email ='$Email'";

  // echo "$s";
  $resultu = mysqli_query($con,$s);
  $resulte = mysqli_query($con,$e);

  $num = mysqli_num_rows($resultu);
  $num1 = mysqli_num_rows($resulte);
  // echo "$num";

  if($num == 1){
    echo "Username taken";
  }
  elseif ($num1 == 1) {
    echo "Email taken";
  }
  else {
    echo "Account created";
    $sqli = "insert into accounts(Username,Email,Password,CPassword) VALUES ('$Username','$Email','$Password','$CPassword')";
    mysqli_query($con,$sqli);
    header('location:login.php');
  }

}

 ?>
