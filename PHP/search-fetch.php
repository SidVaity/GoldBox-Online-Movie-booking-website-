<?php
include "connect.php";

$op = '';
$sql = "SELECT * FROM `images` WHERE Movie_name LIKE '%".$_POST['search']."%'";

$q = mysqli_query($con,$sql);
if(mysqli_num_rows($q) > 0)
{
  $op .= '
  <table class="content-display">
    <tr>

    </tr>
    ';



while ($row = mysqli_fetch_array($q)) {
  $a = $row['Movie_name'];
  $c = $row['id'];
  $m = $row['img_name'];
$op .= "
<tr>
<td><a id='textcol' href='newpg.php?id=".$c."'>".$a."</a>
          
</tr>";
}
echo $op;
}
else {
  echo "Data not found";
}

?>





<!-- <a href='newpg.php?img_name=".$row['Movie_name']."'> -->
