<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Change password</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- title icon -->
  <link href="images/donate.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="http://use.fontawesome.com/releases/v5.0.6/css/all.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <main id="main">
     <div class="section-title">
      <center>
          <h2 style="margin-top: 20px;">Change password</h2>
      </center>    
     </div>
    <section class="about" id="about">
      <div class="container">
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
             <div class="col text-center" style="height: 350px;" data-aos="fade-right">
            <div class="count-box">
              <h3>Enter your new password</h3></br>
             <input type="text" name="username" required="required" class="form-control" placeholder="Enter your username e.g johndoe"></br>
             <input type="password" name="password" required="required" class="form-control" placeholder="Enter your new password"></br>
             <input type="password" name="confirm" required="required" class="form-control" placeholder="Confirm your password">
            </div></br>
            <center>
              <button style="background: #50d8af; width: 150px; height: 40px; border-radius: 7px;" name="update">
                <font color="white">
                  Update password
                </font>
              </button></br>
            </center>
               
               <!--The php code that verifies username and password--->

<?php

             require_once 'connect.php';

             if (isset($_POST['update'])) {
              $username = $_POST['username'];
              $Password = $_POST['password'];
              $Confirm = $_POST['confirm'];
              $pass = sha1($Password);
              
              if($Password == $Confirm){
                    if(strlen($Password) < 6){
                       echo"<script>alert('Password should have a minimum of 6 characters!')</script>";
                       exit();
                    }
                    else{
              $sqli = "UPDATE admin SET password = '$pass' WHERE username = '$username'";
              $query = mysqli_query($conn,$sqli);

              if ($query) {
               echo "<script>alert('You have successfully updated your password.')</script>";
                echo "<script>window.open('admin_login.php', '_self')</script>";
              }
            }
          }
          else{
            echo "<font color='red'>Passwords do not match!!</font>";
          }
              
             }
             
              
?>
          </form>
        </div>
    </section>
    <section></section>
  </main><!-- End #main -->

  <a href="#" class="back-to-top" style="background-color: #50d8af;"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>