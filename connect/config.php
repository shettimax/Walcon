<?php
//shettimax
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db = "walconnect"; 
$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn,$db);

$site = "connect/index.php";
?>
