<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Email verification</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="assets/img/.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" style="background-color: #178FAB;">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span><font color="white"><strong>OUR SCHOOL</strong></font></span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block bg-default">
        <ul>
          <li class="active"><a href="index.php"><font color="white">Home</font></a></li>
        </ul>
      </nav>

    </div>
  </header>
  <main id="main">
    <section></section>
    <section class="counts section-bg">
      <div class="container">
        <div class="section-title">      
             <h2>Email verification</h2>
            </div>
        <div class="col text-center">
            <div class="count-box">
              <h6>
                <font color="red">
                  Your username and verfication code has been sent to your email. Please check your email.
                </font>
              </h6></br>
              <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
             <input type="number" name="code" required="required" class="form-control" placeholder="Enter the code sent to your email"></br>
             <center>
             <button name="verify" style="background: #50d8af; width: 150px; height: 40px; border-radius: 7px;">
              <font color="white">
                Verify
              </font>
              </button>
             </center>
             </form>
             <?php

             require_once 'connect.php';
              if(isset($_GET['email'])){
              $Email = $_GET['email'];
            }
             if(isset($_POST['verify'])){
                             
             $Code = $_POST['code'];
             $Status = "Verified";

              $sql = "SELECT * FROM verification_codes WHERE verification_code = '$Code'";
              $query = mysqli_query($conn,$sql);
              $row1 = mysqli_fetch_assoc($query);

              if ($row1) {
                $Email = $row1['email'];
              }
              $sql2 = "SELECT * FROM users WHERE email = '$Email'";
              $query2 = mysqli_query($conn,$sql2);
              $row2 = mysqli_fetch_assoc($query2);
              
             if($row2){
                $Username = $row2['username'];
              }
              $count = mysqli_num_rows($query);

              if ($count == 1) {

                $sqli = "UPDATE users SET verification_status = '$Status' WHERE email = '$Email'";
                $query_run = mysqli_query($conn,$sqli);
                if($query_run){
                echo"<script>alert('You have successfully registered with us. Your username is $Username. Please proceed to log in to see if your account is actively working. If you encounter any issues during log in, kindly contact us. Thank you.')</script>";
                echo "<script>window.open('index.php', '_self')</script>";
              }else{
                echo "<script>alert('An error occured!')</script>";
              }              
              }  
              else{
                echo "<script>alert('The code you submitted does not exist!!')</script>";
              }
              }
              
             ?>
            </div>
          </div>
      </div>
    </section>
    <section></section>
    

  </main>
  <footer id="footer" style="background-color: #178FAB">
    <div class="footer-top" style="background-color: #178FAB">
      <div class="container" style="background-color: #178FAB">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h3>OUR SCHOOL</h3>
             Welcome to Our School, an online schooling program for Kenyan students
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Contact Us</h4>
            <p>Juja <br>
              Nairobi, Kenya<br>
              <strong>Phone:</strong> +254726159508<br>
              <strong>Email:</strong> ourschool@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <a href="halsodasgenerationlimited.com/briankim">Designed by Brian Kimutai</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
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
  <script src="assets/js/main.js"></script>

</body>

</html>