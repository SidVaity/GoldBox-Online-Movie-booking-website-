<?php

session_start();
if (isset($_SESSION['username'])) {
    session_destroy();
    header('location:Home1.php');
}
 ?>
