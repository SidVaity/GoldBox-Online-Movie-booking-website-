<?php

// $mysql_host = 'localhost';
// $mysql_user = 'root';
// $mysql_password = 'Scanor12345';
//
// @mysqli_connect($mysql_host,$mysql_user,$mysql_password) or die('not correct user');
// echo "success";
$host = 'localhost';
$user = 'root';
$password = 'Scanor12345';
$db = 'movie';

$con = @mysqli_connect($host, $user, $password, $db);

if (!$con)
{
    die('cannot connect to the database!');
}
else
{
    @mysqli_select_db($con, "movie");
}
 ?>
