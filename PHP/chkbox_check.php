<?php

require 'connect.php';


if(isset($_POST['submit'])){

  $s = $_POST["edu"];

  // $s=implode(",",$edu1);
  print_r($s);

  // $c = "SELECT * FROM user_acc WHERE edu ='$Username'";


  // mysqli_query($con,"insert into user_acc(edu)values ('$s')");

  foreach ($s as $value) {

    // echo "$value";
    mysqli_query($con,"insert into user_acc(edu,status)values ('$value','CHECKED')");
  }

}


//==============================CODE FOR CHECKED SEATS=========================//




  $query = "SELECT * FROM `user_acc`";
  $is_query_run = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($is_query_run)){
      $f=$row['edu'];
      $stat = $row["status"];

      if($f == "A1"){
        $edu = explode(" ",$f);
      }
      if($f == "A2"){
        $edu1 = explode(" ",$f);
      }
      if($f == "B1"){
        $edu2 = explode(" ",$f);
      }
      if($f == "B2"){
        $edu3 = explode(" ",$f);
      }
      if($f == "C1"){
        $edu4 = explode(" ",$f);
      }
      if($f == "C2"){
        $edu5 = explode(" ",$f);
      }
      if($f == "A3"){
        $edu6 = explode(" ",$f);
      }
      if($f == "A4"){
        $edu7 = explode(" ",$f);
      }
      if($f == "A5"){
        $edu8 = explode(" ",$f);
      }
      if($f == "A6"){
        $edu9 = explode(" ",$f);
      }
      if($f == "B3"){
        $edu10 = explode(" ",$f);
      }
      if($f == "B4"){
        $edu11 = explode(" ",$f);
      }
      if($f == "B5"){
        $edu12 = explode(" ",$f);
      }
      if($f == "B6"){
        $edu13 = explode(" ",$f);
      }
      if($f == "C3"){
        $edu14 = explode(" ",$f);
      }
      if($f == "C4"){
        $edu15 = explode(" ",$f);
      }
      if($f == "C5"){
        $edu16 = explode(" ",$f);
      }
      if($f == "C6"){
        $edu17 = explode(" ",$f);
      }
      if($f == "A8"){
        $edu18 = explode(" ",$f);
      }
      if($f == "A7"){
        $edu19 = explode(" ",$f);
      }
      if($f == "B8"){
        $edu20 = explode(" ",$f);
      }
      if($f == "B7"){
        $edu21 = explode(" ",$f);
      }
      if($f == "C8"){
        $edu22 = explode(" ",$f);
      }
      if($f == "C7"){
        $edu23 = explode(" ",$f);
      }
    




    }
// include 'connect.php';
//
// $stmt = $db->query("SELECT * FROM `user_acc`");
//
// $every = $stmt->fetchAll();
//
// foreach ($every as $row) {
//
//   $f=$row['edu'];
//
//
//   if($f == "A1"){
//      $edu = explode(" ",$f);
//   }
//
// }






 ?>



 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="css/seatbox.css">
   </head>
   <body>
     <form method="post">

<div class="c1">


       <div style="float:left"><input type="checkbox" name="edu[]" value="A1" class="check_box1" id="checkbox1"
       <?php
       error_reporting(0);
       if (in_array("A1",$edu)) {
         echo "checked";
       }
       ?>
       >
      <label for="checkbox1"><p>A1</p></div>

       <div style="float:left"><input type="checkbox" name="edu[]" value="A2" class="check_box1" id="checkbox2"
       <?php
         if (in_array("A2",$edu1)) {
           echo "checked";
         }

        ?>>
        <label for="checkbox2"><p>A2</p></div>

          <br>
          <br>

       <div style="float:left"><input type="checkbox" name="edu[]" value="B1" class="check_box1" id="checkbox3"
       <?php
         if (in_array("B1",$edu2)) {
           echo "checked";
         }

        ?>
        >
        <label for="checkbox3"><p>B1</p></div>

        <div style="float:left"><input type="checkbox" name="edu[]" value="B2" class="check_box1" id="checkbox4"
        <?php
        if (in_array("B2",$edu3)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox4"><p>B2</p></div>

          <br>
          <br>


        <div style="float:left"><input type="checkbox" name="edu[]" value="C1" class="check_box1" id="checkbox5"
        <?php
        if (in_array("C1",$edu4)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox5"><p>C1</p></div>


      <div style="float:left"><input type="checkbox" name="edu[]" value="C2" class="check_box1" id="checkbox6"
        <?php
        if (in_array("C2",$edu5)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox6"><p>C2</p></div>

  </div>

  <div class="container">


        <div style="float:left"><input type="checkbox" name="edu[]" value="A3" class="check_box1" id="checkbox7"
        <?php
        if (in_array("A3",$edu6)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox7"><p>A3</p></div>


        <div style="float:left"><input type="checkbox" name="edu[]" value="A4" class="check_box1" id="checkbox8"
        <?php
        if (in_array("A4",$edu7)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox8"><p>A4</p></div>




        <div style="float:left"><input type="checkbox" name="edu[]" value="A5" class="check_box1" id="checkbox9"
        <?php
        if (in_array("A5",$edu8)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox9"><p>A5</p></div>


        <div style="float:left"><input type="checkbox" name="edu[]" value="A6" class="check_box1" id="checkbox10"
        <?php
        if (in_array("A6",$edu9)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox10"><p>A6</p></div>

<br>
<br>
        <div style="float:left"><input type="checkbox" name="edu[]" value="B3" class="check_box1" id="checkbox11"
        <?php
        if (in_array("B3",$edu10)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox11"><p>B3</p></div>

        <div style="float:left"><input type="checkbox" name="edu[]" value="B4" class="check_box1" id="checkbox12"
        <?php
        if (in_array("B4",$edu11)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox12"><p>B4</p></div>


      <div style="float:left">  <input type="checkbox" name="edu[]" value="B5" class="check_box1" id="checkbox13"
        <?php
        if (in_array("B5",$edu12)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox13"><p>B5</p></div>


        <div style="float:left"><input type="checkbox" name="edu[]" value="B6" class="check_box1" id="checkbox14"
        <?php
        if (in_array("B6",$edu13)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox14"><p>B6</p></div>

<br>
<br>

        <div style="float:left"><input type="checkbox" name="edu[]" value="C3" class="check_box1" id="checkbox15"
        <?php
        if (in_array("C3",$edu14)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox15"><p>C3</p></div>


        <div style="float:left"><input type="checkbox" name="edu[]" value="C4" class="check_box1" id="checkbox16"
        <?php
        if (in_array("C4",$edu15)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox16"><p>C4</p></div>


        <div style="float:left"><input type="checkbox" name="edu[]" value="C5" class="check_box1" id="checkbox17"
        <?php
        if (in_array("C5",$edu16)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox17"><p>C5</p></div>


        <div style="float:left"><input type="checkbox" name="edu[]" value="C6" class="check_box1" id="checkbox18"
        <?php
        if (in_array("C6",$edu17)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox18"><p>C6</p></div>


  </div>

  <div class="c2">

        <div style="float:right"><input type="checkbox" name="edu[]" value="A8" class="check_box1" id="checkbox19"
        <?php
        if (in_array("A8",$edu18)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox19"><p>A8</p></div>


        <div style="float:right"><input type="checkbox" name="edu[]" value="A7" class="check_box1" id="checkbox20"
        <?php
        if (in_array("A7",$edu19)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox20"><p>A7</p></div>
          <br>
          <br>


        <div style="float:right"><input type="checkbox" name="edu[]" value="B8" class="check_box1" id="checkbox21"
        <?php
        if (in_array("B8",$edu20)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox21"><p>B8</p></div>


        <div style="float:right"><input type="checkbox" name="edu[]" value="B7" class="check_box1" id="checkbox22"
        <?php
        if (in_array("B7",$edu21)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox22"><p>B7</p></div>

<br>
<br>

        <div style="float:right"><input type="checkbox" name="edu[]" value="C8" class="check_box1" id="checkbox23"
        <?php
        if (in_array("C8",$edu22)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox23"><p>C8</p></div>


      <div style="float:right">  <input type="checkbox" name="edu[]" value="C7" class="check_box1" id="checkbox24"
        <?php
        if (in_array("C7",$edu23)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox24"><p>C7</p></div>


      <div style="display:none">  <input type="checkbox" name="edu[]" value="C9" class="check_box1" id="checkbox25"
        <?php
        if (in_array("C9",$edu24)) {
          echo "checked";
        }
        ?>
        ><label for="checkbox25"><p>C9</p></div>



</div>


       <input type="submit" name="submit" value="submit">

     </form>

   </body>
 </html>
