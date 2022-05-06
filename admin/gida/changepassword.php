<?php
session_start();
include("db.php");
if(isset($_POST['Submit']))
{
 $oldpass=$_POST['opwd'];
 $useremail=$_SESSION['username'];
 $newpassword=$_POST['npwd'];
$sql=mysqli_query($con,"SELECT password FROM admin where password='$oldpass' && username='$useremail'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update admin set password='$newpassword' where username='$useremail'");
$_SESSION['msg1']='Password Changed Successfully !!<br><a href="home.php">CLICK HERE</a>)';
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>0-O</title>
 <link rel="icon" type="image/png" href="img/LASU_LOGO.png">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
     
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><img src="img/LASU_LOGO.png" alt="Smiley face" height="80" width="80"><br><strong><?php echo $useremail;?><br><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></strong></h1>
                  </div>

                  <form class="user" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="opwd" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="current password">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="npwd" id="exampleInputPassword" placeholder="newPassword">
                    </div>
<div class="form-group">
                      <input type="password" class="form-control form-control-user" name="cpwd" id="exampleInputPassword" placeholder="Retype-newPassword">
                    </div>
                   
                 
                      <input type="submit" name="Submit" class="btn btn-primary btn-user btn-block"  value="LOGIN">
                    
                   
                  </form>
                 
              </div>
            </div>
          </div>
        </div>
 <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; iyayen gizo 2020</span>
          </div>
        </div>
      </footer>
      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
