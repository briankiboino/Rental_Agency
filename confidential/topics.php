<?php
session_start();

if (!isset($_SESSION['user_id'])) {
 header('Location: index.php');
}

$id = $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Topics</title>
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
        <h1 class="text-light"><a href="index.html"><span><font color="white">OUR SCHOOL</font></span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block bg-default">
        <ul class="ml-auto">
          <li class="active drop-down">
            <a href="">
              <?php

              require 'connect.php';
                  
                  $sqli = "SELECT * FROM users WHERE user_id = '$id'";
                  $result = mysqli_query($conn,$sqli);
                  if($result){
                   while($row=mysqli_fetch_assoc($result)) {
                         echo"   
                            <img src='users/{$row['image']}' width='30px' height='30px' class='rounded-circle'>
                            <font color='white'>
                             ";
                     }
                   }

              

              ?>
               <?php 
               require'connect.php';

               $sqli = "SELECT * FROM users WHERE user_id = '$id'";
                  $result = mysqli_query($conn,$sqli);
                  if($result){
                   while($row=mysqli_fetch_assoc($result)) {
                       $first_name = $row['firstName'];
                       $last_name = $row['lastName'];
                        echo $first_name." ".$last_name;
                     }
                   }

               ?>
                 
               </font>
             </a>
              <ul>
                  <li><a href="#">View profile</a></li>
                  <li><a href="#">Update profile</a></li>
                  <li><a href="logout.php">Sign out</a></li>
                </ul>
           </li>
          <li class="active drop-down"><a href='social_home.php'><i class='icofont-comment' style='color: #fff'></i></a>
            <ul>
              <li><a href="social_home.php">Go social</a></li>
            </ul>
          </li>
          <li class="active drop-down"><a href=""><i class="icofont-notification" style="color: #fff"></i></a>
            <ul>
              <li><a href="">Notifications</a></li>
            </ul>
          </li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">
  <section class="counts section-bg" id="about">
    <div class="container">
      <?php
      if (isset($_GET['Subject'])) {
        $subject = $_GET['Subject'];
        if (isset($_GET['form'])) {
        $form = $_GET['form'];

        if ($subject == "Mathematics" && $form == "I") {
         echo"
        
          ";
        }

          elseif ($subject == "Mathematics" && $form == "II") {
              echo"
         
     
          ";
           
          }
          elseif ($subject == "Mathematics" && $form == "III") {
              echo"
            
     
          ";
           
          }
          elseif ($subject == "Mathematics" || $form == "IV") {
             echo"
          
          ";
           
          }
          elseif ($subject == "English" && $form == "I") {
           
          }
          elseif ($subject == "English" && $form == "II") {
           
          }
          elseif ($subject == "English" && $form == "III") {
           
          }
          elseif ($subject == "English" && $form == "IV") {
           
          }
          elseif ($subject == "Kiswahili" && $form == "I") {
           
          }
          elseif ($subject == "Kiswahili" && $form == "II") {
           
          }
          elseif ($subject == "Kiswahili" && $form == "III") {
           
          }
          elseif ($subject == "Kiswahili" && $form == "IV") {
           
          }
          elseif ($subject == "Biology" && $form == "I") {
           echo "
               <div class='col-lg-4 col-md-6 text-center' data-aos='fade-up' data-aos-delay='400'>
                <a href='no_tes.php?Subject=Chemistry'>
                  <div class='count-box'>
                      <i class='icofont-flask' style='color: #FF8C00;'></i>
                        <h4>Chemistry</h4>
                  </div>
                 </a>
               </div>
           ";
          }
          elseif ($subject == "Biology" && $form == "II") {
           
          }
          elseif ($subject == "Biology" && $form == "III") {
           
          }
          elseif ($subject == "Biology" && $form == "IV") {
           
          }
          elseif ($subject == "Chemistry" && $form == "I") {
            echo "
             <center>
                 <h2>
                   Form I
                 </h2>  
             </center>
            <div class='row'>
                <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left' data-aos-delay='400'>
                <a href='no_tes.php?topic=introduction-to-chemistry'>
                  <div class='count-box'>
                      <i class='icofont-flag' style='color: #20b38e;'></i>
                        <h4>Introduction to chemistry</h4>
                  </div>
                 </a>
               </div>

               <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right' data-aos-delay='400'>
                <a href='no_tes.php?topic=classsification-of-substances'>
                  <div class='count-box'>
                      <i class='icofont-test-tube' style='color: #B22222;'></i>
                        <h4>Classification of substances</h4>
                  </div>
                 </a>
               </div>

               <div class='col-lg-5 col-md-6 text-center' data-aos='fade-up' data-aos-delay='200'>
                <a href='no_tes.php?topic=air-oxygen-combustion'>
                  <div class='count-box'>
                      <i class='icofont-fire' style='color: #FF8C00;'></i>
                        <h4>Air, Oxygen and Combustion</h4>
                  </div>
                 </a>
               </div>

                <div class='col-lg-5 col-md-6 text-center' data-aos='fade-up' data-aos-delay='400'>
                <a href='no_tes.php?topic=acids-bases-salts'>
                  <div class='count-box'>
                      <i class='icofont-flask' style='color: #c042ff;'></i>
                        <h4>Acids, Bases and Salts</h4>
                  </div>
                 </a>
               </div>

                 <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left' data-aos-delay='400'>
                <a href='no_tes.php?topic=water-and-hydrogen'>
                  <div class='count-box'>
                      <i class='icofont-cloud' style='color: #46d1ff;'></i>
                        <h4>Water and Hydrogen</h4>
                  </div>
                 </a>
               </div>

               </div>
           ";
           
          }
          elseif ($subject == "Chemistry" && $form == "II") {
           
          }
          elseif ($subject == "Chemistry" && $form == "III") {
           
          }
          elseif ($subject == "Chemistry" && $form == "IV") {
           
          }
           elseif ($subject == "Physics" && $form == "I") {
           
          }
          elseif ($subject == "Physics" && $form == "II") {
           
          }
          elseif ($subject == "Physics" && $form == "III") {
           
          }
          elseif ($subject == "Physics" && $form == "IV") {
           
          }
           elseif ($subject == "Geography" && $form == "I") {
           
          }
          elseif ($subject == "Geography" && $form == "II") {
           
          }
          elseif ($subject == "Geography" && $form == "III") {
           
          }
          elseif ($subject == "Geography" && $form == "IV") {
           
          }
          elseif ($subject == "History" && $form == "I") {
           
          }
          elseif ($subject == "History" && $form == "II") {
           
          }
          elseif ($subject == "History" && $form == "III") {
           
          }
          elseif ($subject == "History" && $form == "IV") {
           
          }
          elseif ($subject == "CRE" && $form == "I") {
           
          }
          elseif ($subject == "CRE" && $form == "II") {
           
          }
          elseif ($subject == "CRE" && $form == "III") {
           
          }
          elseif ($subject == "CRE" && $form == "IV") {
           
          }
           elseif ($subject == "IRE" && $form == "I") {
           
          }
          elseif ($subject == "IRE" && $form == "II") {
           
          }
          elseif ($subject == "IRE" && $form == "III") {
           
          }
          elseif ($subject == "IRE" && $form == "IV") {
           
          }
            elseif ($subject == "Computer" && $form == "I") {
           
          }
          elseif ($subject == "Computer" && $form == "II") {
           
          }
          elseif ($subject == "Computer" && $form == "III") {
           
          }
          elseif ($subject == "Computer" && $form == "IV") {
           
          }
           elseif ($subject == "Homescience" && $form == "I") {
           
          }
          elseif ($subject == "Homescience" && $form == "II") {
           
          }
          elseif ($subject == "Homescience" && $form == "III") {
           
          }
          elseif ($subject == "Homescience" && $form == "IV") {
           
          }
           elseif ($subject == "Agriculture" && $form == "I") {
           
          }
          elseif ($subject == "Agriculture" && $form == "II") {
           
          }
          elseif ($subject == "Agriculture" && $form == "III") {
           
          }
          elseif ($subject == "Agriculture" && $form == "IV") {
           
          }
          elseif ($subject == "French" && $form == "I") {
           
          }
          elseif ($subject == "French" && $form == "II") {
           
          }
          elseif ($subject == "French" && $form == "III") {
           
          }
          elseif ($subject == "French" && $form == "IV") {
           
          }
           elseif ($subject == "German" && $form == "I") {
           
          }
          elseif ($subject == "German" && $form == "II") {
           
          }
          elseif ($subject == "German" && $form == "III") {
           
          }
          elseif ($subject == "German" && $form == "IV") {
           
          }
          elseif ($subject == "Music" && $form == "I") {
           
          }
          elseif ($subject == "Music" && $form == "II") {
           
          }
          elseif ($subject == "Music" && $form == "III") {
           
          }
          elseif ($subject == "Business" && $form == "IV") {
           
          }
           elseif ($subject == "Business" && $form == "I") {
           
          }
          elseif ($subject == "Business" && $form == "II") {
           
          }
          elseif ($subject == "Business" && $form == "III") {
           
          }
          elseif ($subject == "Business" && $form == "IV") {
           
          }
          
          }
        }

          ?>

        </div>

  </section>

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
        Designed by Brian Kimutai
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