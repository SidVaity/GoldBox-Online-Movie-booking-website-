

<?php
session_start();

require 'connect.php';

if (isset($_POST['sub'])) {

$filename = $_FILES["img_name"]["name"];
$tempname = $_FILES["img_name"]["tmp_name"];

$folder = "move_img/".$filename;
// echo "$folder";
move_uploaded_file($tempname,$folder);


$mname = $_POST["Movie_name"];
$des = $_POST["Description"];
$ytl = $_POST["Yt_links"];
$pd = $_POST['p_id'];

// echo "<img src='$folder' height='100' width='100' alt=''/>";

  if ($filename != "" && $mname != "" && $des != "" && $ytl != "") {
    $sqli = "INSERT INTO images (img_name,Movie_name,Description,Yt_links,pid) VALUES ('$folder','$mname','$des','$ytl','$pd')";
    mysqli_query($con,$sqli);
    echo("Sucesss");
  }

}


  $rev = "SELECT * FROM `images`";
  $data = mysqli_query($con,$rev);

  while($result = mysqli_fetch_assoc($data)){
    $a = $result['img_name'];
    // $b = $result['id'];
    // $_SESSION['img_name'] = $a;
    // $_SESSION['id'] = $b;
    // echo "<a href='newpg.php?img_name=$a'><img src='$a' width='100px' height='100px'></a>";
    // echo "$b";
    // echo "$a";
  }


 ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/dataadd.css">
  </head>
    <div class="main">
  <body style="background-image: url('images/grayb.jpg')">
    <form method="post" enctype="multipart/form-data">


      <label>Movie name</label>
      <input type="text" class="Movie_name" name="Movie_name" value="">

      <br>
      <label id="descri">Description</label>
      <textarea class="Description" name="Description" rows="8" cols="80"></textarea>
      <br>
      <label>Youtube embed link</label>
      <input class="Yt_links" type="text" name="Yt_links" value="">
      <br>
      <br>

      <label>Poster</label>

      <input class="img_name" type="file" name="img_name" value="">
      <br>
      <br>

      <label>Poster_id</label>
      <input class="p_id" type="text" name="p_id" value="">
      <br>
      <br>

      <input class="sub" type="submit" name="sub" value="Submit">


      <!-- <textarea name="img_dir" rows="8" cols="80">SAY</textarea> -->
    </form>
  </div>

  </body>
</html>
