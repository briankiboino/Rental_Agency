<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Log in</title>
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
        <h1 class="text-light"><a href="index.php"><span><font color="white"><strong>Masomo Kwetu</strong></font></span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block bg-default">
        <ul>
          <li class="active"><a href="index.php"><font color="white">Home</font></a></li>
        </ul>
      </nav>

    </div>
  </header>
  <main id="main">
    <section class="counts section-bg" style="height: 630px;">
      <div class="container">
        <div class="section-title" data-aos='fade-right' data-aos-delay='200;'>      
             <h2>Admin Log in Page</h2>
            </div>
        <div class="col text-center" data-aos='fade-up' data-aos-delay='200;'>
            <div class="count-box">
              <h3>
                <font color="red">
                  This page is strictly for administrators only
                </font>
              </h3></br>
              <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
             <input type="text" name="username" required="required" class="form-control" placeholder="Enter username"></br>
             <input type="password" name="password" required="required" class="form-control" placeholder="Enter password"></br>
             <center>
             <button name="sign_in" style="background: #50d8af; border-color: transparent; width: 150px; height: 40px; border-radius: 7px;">
              <font color="white">
              Sign in
              </font>
              </button></br>
             </center>
             </form>
             <?php

             require_once 'connect.php';

             if (isset($_POST['sign_in'])) {

              $Username = $_POST['username'];
              $Password = $_POST['password'];

              $pass = sha1($Password);

              if($stmt = $conn->prepare('SELECT id, username, password FROM admin WHERE username = ?')){
              $stmt->bind_param('s', $_POST['username']);
              $stmt->execute();
              $stmt->store_result();

              if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $username, $password);
                $stmt->fetch();

               if ($password == $pass) {
                $_SESSION['user_id'] = $id;
                echo "<script>window.open('admin.php', '_self')</script>";
               
             }

           }
         }
       }
             
              
             ?>
            </div>
          </div>
      </div>
    </section>    
  </main>
  <footer id="footer" style="background-color: #178FAB">
    <div class="footer-top" style="background-color: #178FAB">
      <div class="container" style="background-color: #178FAB">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h3>MASOMO KWETU</h3>
             Welcome to Masomo Kwetu, an online schooling program for Kenyan students
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
              <strong>Email:</strong> masomokwetu@gmail.com<br>
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
        &copy; Copyright <strong><span>Masomo Kwetu</span></strong>. All Rights Reserved
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