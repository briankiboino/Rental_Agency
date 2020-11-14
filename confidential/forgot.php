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
<style>
#myProgress {
  width: 100%;
  background-color: white;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #50d8af;
  border-radius: 20px;
}
</style>

<body>
  <header id="header" style="background-color: #178FAB;">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.php"><span><font color="white"><strong>MASOMO KWETU</strong></font></span></a></h1>
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
                  Enter your username and email
                </font>
              </h6></br>
              <form method="POST" id="email_verification_form">
              <input type="email" name="user_email" required="required" class="form-control" placeholder="Enter your email e.g johndoe@gmail.com"></br>
             <center>
             <button name="submit" style="background: #50d8af; border-color: transparent; width: 150px; height: 40px; border-radius: 7px;">
              <font color="white">
                Submit
              </font>
              </button></br>
             </center>
             </form>
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
            <h3>MASOMO KWETU</h3>
             Welcome to Masomo Kwetu, an online schooling program for Kenyan students
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Privacy policy</a></li>
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
    <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.15.4/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.4/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.4/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.4/firebase-analytics.js"></script>

  <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyACKJmAJdpJ_ZMgcLbXyGj8sApksuDGTKo",
      authDomain: "masomo-kwetu.firebaseapp.com",
      databaseURL: "https://masomo-kwetu.firebaseio.com",
      projectId: "masomo-kwetu",
      storageBucket: "masomo-kwetu.appspot.com",
      messagingSenderId: "353413157327",
      appId: "1:353413157327:web:65a27bc524de77deab82ba",
      measurementId: "G-M79KK63HSD"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

    //Forgot passsword
    const forgotpasswordForm = document.querySelector('#email_verification_form');
    forgotpasswordForm.addEventListener('submit', (e) => {
      e.preventDefault();

      //Get email from user
      var email = forgotpasswordForm['user_email'].value;

      //Send email to user 
      auth.sendPasswordResetEmail(email).then(function(){
        alert('An email has been sent please check and verify');
      }).then(() => {
          forgotpasswordForm.reset();
          window.open("index.php", "_self");
      });
    })
  </script>
  <script>
  </script>
  
  <script src="connection.js"></script>s
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