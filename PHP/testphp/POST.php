<?php


if(!empty($_POST['user']) && !empty($_POST['pass'])){
  echo 'Username:'.$_POST["user"].'<br>';
  echo 'Password:'.$_POST["pass"].'<br>';
 
  echo "success";
}
else {
  echo "complete both fields";
}
 ?>
