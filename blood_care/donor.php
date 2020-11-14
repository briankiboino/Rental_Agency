<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Become a donor</title>
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
  <!-- ======= Header ======= -->
  <header id="header" class="bg-danger">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span><font color="white">Blood Care</font></span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php"><font color="white">Home</font></a></li>
           <li class="drop-down"><a href=""><font color="white">Donation</font></a>
            <ul>
              <li><a href="donor.php">Become a donor</a></li>
              <li><a href="recepient.php">Request blood donation</a></li>
            </ul>
          </li>
        </ul>
      </nav>

    </div>
  </header>
  <main id="main">
     <div class="section-title">
      <center>
          <h2 style="margin-top: 20px;">Become a donor today</h2>
      </center>    
     </div>
    <!-- ======= About Us Section ======= -->
    <section class="counts section-bg">
      <div class="container">
       <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Enter your first name eg.John" required="required" name="first">
       </div> <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-edit" style="color: purple;"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Enter your last name eg.Maina" required="required" name="last">
       </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone" style="color: green;"></i></span>
          </div>
          <input type="number" class="form-control" placeholder="Enter your phone number eg.0723567816" required="required" name="phone">
       </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope" style="color: red;"></i></span>
          </div>
          <input type="email" class="form-control" placeholder="Enter your email eg.johnmaina@gmail.com" required="required" name="email">
       </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-calendar" style="color: blue;"></i></span>
          </div>
          <input type="number" class="form-control" placeholder="Enter you age. Only 16 and above is allowed to donate" required="required" name="age">
       </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-map" style="color: green;"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Enter your county eg.Nairobi" required="required" name="county">
       </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-heart" style="color: red;"></i></span>
          </div>
          <select class="form-control" required="required" name="blood_group">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
          </select>
       </div>
       <div class="input-group mb-3">
          <input type="checkbox" style="height: 20px; width: 20px;" required="required" id="agreement">
          <label for="agreement"> You agree to be contacted by us</label>
       </div>
        <center>
          <button class="btn" style="background-color: #50d8af; width: 200px;" name="become_donor"><font color="white">Submit</font></button>
        </center>
       </form>
       <!--The php code that enters donor's data into the database--->
<?php
            if (isset($_POST['become_donor'])) {
              require_once 'connect.php';

              //Declaration variables which will store data from the input fields
              $first_name = $_POST['first'];
              $last_name = $_POST['last'];
              $phone_number = $_POST['phone'];
              $email = $_POST['email'];
              $age = $_POST['age'];
              $county = $_POST['county'];
              $blood_group = $_POST['blood_group'];
              $status = "Pending";

              //sql query that inserts the data into the database
              $insert_query = "INSERT INTO donors(first_name,last_name,phone_number,email,age,county,blood_group,status) VALUES('$first_name','$last_name','$phone_number','$email','$age','$county','$blood_group','$status')";
              $query_execute = mysqli_query($conn,$insert_query);
              if ($query_execute) {
                $message = "Thank you for choosing Blood Care. We have received your request. We will get back to you with a suitable donor.";
                $subject = "Request for blood donation report";
                $from = "From: brianoproff@gmail.com";

                $mail = mail($email, $subject, $message, $from);

                if ($mail) {
                  echo "<script>window.alert('We have received your request. A message has been sent to your email. Please check your email. Thank you for choosing Blood Care.')</script>";
                }
                else{
                  echo "<script>window.alert('Please give us a relevant email')</script>";
                }
              }
              else{
                echo "<script>window.alert('An error occured while processing your request. Please try again late or give us relevant details.')</script>";
              }
            }
?>
      </div>
    </section>
    <section></section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="bg-danger">
    <div class="footer-top bg-danger">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Blood CARE</h3>
            <p>
              JUJA <br>
              Nairobi, Kenya<br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> bloodcare@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Process</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Live feeds</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Contact us</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Blood Care</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="http://www.halsodasgenerationlimited.com/brian_kim.html">Brian Kimutai</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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