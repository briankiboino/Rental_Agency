<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Forgot Password</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
</head>

<body>
  <header id="header">
     <div class="container">
      <div class="row">
      <div class="col-md-3" id="header-contents">
     <div>
      <h2>
        <font color="#000" face="Bradley Hand ITC">
          <b>Smart Farm</b>
        </font>
      </h2>
    </div>
      </div>
    <div class="col-md-6">
      <form class="form-inline" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
        <input type="text" name="name"  style="width: 82%; font-family: FontAwesome;" class="form-control mr-1" placeholder="&#xf002; Search for any tool of your choice" required="required">
         <button class="btn btn-warning" name="search"><font color="white"><b>SEARCH</b></font></button>
<?php

        if (isset($_POST['search'])) {
         
           $name = $_POST['name'];

           echo "

                <script>window.open('search.php?name=$name','_self');</script>

                ";

        }

?>
       </form>
    </div>
    <div class="col">
    <div class="dropdown">
      <span class="bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i style="font-size: 25px; color: #000;" class="ion-person mr-1"></i> <font color="black">Login</font>
      </span>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="signin.php"><center><button class="btn btn-warning" style="width: 200px;"><font color="white"><strong>LOGIN</strong></font></button></center></a>
        <span class="line2">
            <h2><span>OR</span></h2>
        </span>​
        <a class="dropdown-item" href="register.php"><center><button class="btn" style="width: 200px;"><font color="orange"><strong>CREATE ACCOUNT</strong></font></button></center></a>
      </div>
    </div>
  </div>
    <div class="col">
    <div class="dropdown">
      <span class="bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i style="font-size: 25px; color: #000;" class="ion-help mr-1"></i> <font color="black">Help</font>
      </span>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="home.php">Home</a>
        <a class="dropdown-item" href="aboutus.php">About Us</a>
        <a class="dropdown-item" href="contactus.php">Contact Us</a>
        <a class="dropdown-item" href="location.php">Our Location</a>
      </div>
    </div>
  </div>
    <a href="cart.php"><i style="font-size: 25px; color: #000;" class="ion-ios-cart"></i> <font color="black">Cart</font></a>
    </div>
  </div>
    </div>
  </header></br>
  <header id="header-small-device">
     <div class="container">
    <div id="header-contents-small-device">
    <div class="ml-2 mr-auto" id="logo">
    <h2>
      <font color="#000" face="Bradley Hand ITC">
        <b>Smart Farm</b>
      </font>
    </h2>
  </div>
  <div class="mr-auto">
     <div class="dropdown m-1">
     <form class="form-inline" method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
        <input type="text" name="name"  style="width: 75%; font-family: FontAwesome;" class="form-control mr-1" placeholder="Search for any tool..." required="required">
         <button class="btn btn-warning" style="width: 60px;" name="search"><i style="color: #fff;" class="ion-search"></i></button>
         <?php

        if (isset($_POST['search'])) {
         
           $name = $_POST['name'];

           echo "

                <script>window.open('search.php?name=$name','_self');</script>

                ";

        }

?>
       </form>
    </div>
  </div>
     <div class="dropdown m-1">
      <a href="home.php"><i style="font-size: 25px; color: #000;" class="ion-home"></i></a>
    </div>
  </div>
</div>
  </div>
    </div>
  </header></br>

  <main id="main">
    <section id="about">
      <div class="container">
        <center>
            <h3>Password Recovery</h3></br>
          </center>
        <div class="row">
           <div class="container">
           <div class="row">
           <div class="col-md-3 col-sm-3 wow fadeInDown"></div>
           <div class="col-md-6 col-sm-6 wow fadeInDown">
           <p>Please enter the email address associated with your Smart Farm account. We will send you a link to this e-mail address to reset your password.</p>
           <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
           <input type="email" class="input" name="email" style="width: 100%; font-family: FontAwesome;" placeholder="Email" required="required"><br><br><br><br>
           <center><button class="btn btn-warning" style="width: 100%;" name="changePassword"><font color="white"><strong>RESET PASSWORD</strong></font></button></center><br><br>
<?php

           //Database connection
           require_once 'connect.php';
           include 'functions.php';

           if(isset($_POST['changePassword'])){

          echo forgotPassword($conn);

           }

?>     
           </form>
           <center><a href="signIn.php">RETURN TO LOGIN</a></center>
           </div>
           <div class="col-md-3 col-sm-3 wow fadeInUp"></div>
          </div>
        </div>
        </div>
      </div>
    </section>
  </main><br><br>
    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <font color="white">
            <h3><font face="Bradley Hand ITC">Smart Farm</font></h3>
            <p>Welcome to Smart Farm. We offer the latest farm tools in the market at affordable prices. Don't miss out, register with us today and enjoy the experience. Modern Transition, Greater Farming.</p>
          </font>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <font color="white">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="home.php">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="aboutus.php">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="contactus.php">Contact Us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="location.php">Our Location</a></li>
            </ul>
          </font>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <font color="white">
            <h4>Contact Us</h4>
            <p>
              Ngara <br>
              Nairobi<br>
              Kenya <br>
              <strong>Phone:</strong> +25472615508<br>
              <strong>Email:</strong> smartfarm@gmail.com<br>
            </p>
            </font>
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <font color="white">
        <a href="admin_signin.php"><font color="white">&copy;</font></a> Copyright <strong>Smart Farm</strong>. All Rights Reserved
      </font>
      </div>
      <div class="credits">
        Designed by <a href="https://halsodasgenerationlimited.com/brian_kim.html">Brian Kimutai</a>
      </div>
    </div>
  </footer>
   <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>

</body>
</html>