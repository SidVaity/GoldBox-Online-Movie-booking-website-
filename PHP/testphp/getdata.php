
<?php

require 'connect.php';



$query = "SELECT * FROM `user_acc`";

if($is_query_run = mysqli_query($con,$query)){
  echo "Query executed <br>";
  while($query_execute = mysqli_fetch_assoc($is_query_run)){
    if($query_execute['edu'] == 'Science'){
    echo "Hello <br>";
    }
    else{
      echo $query_execute['edu'].'<br>';
    }
  }



}
else {
  echo "Query not executed";
}


 ?>
