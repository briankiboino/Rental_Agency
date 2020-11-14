<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Code verification</title>
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
             <h2>Code verification</h2>
            </div>
        <div class="col text-center">
            <div class="count-box">
              <h6>
                <font color="red">
                  A verfification code has been sent to your email. Please check your email.
                </font>
              </h6></br>
              <form method="POST" id="verification_form">
             <input type="email" id="email" required="required" class="form-control" placeholder="Enter your email."></br>
             <input type="number" id="code" required="required" class="form-control" placeholder="Enter code sent to your email."></br>
             <center>
             <button name="verify" style="background: #50d8af; border-color: transparent; width: 150px; height: 40px; border-radius: 7px;">
              <font color="white">
               verify
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
        &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
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

  
  //Declaration of the variable for connection to the database
  const database = firebase.database();

  //Declaration of the variable for authentication 
  const auth = firebase.auth();

  //Get details from user
  const verfificationForm = document.querySelector('#verification_form');
  verfificationForm.addEventListener('submit', (e) => {
    e.preventDefault();
    var user_email = verfificationForm['email'].value;
    var email_code = verfificationForm['code'].value;
    var details = {Email: user_email, Verification_code: email_code};
    var userDetails = [];
    userDetails.push(details)
    var comparison_data = userDetails[0];

  //Retrieve data from database
  var ref = database.ref('/Verification_codes/');
  var users_ref = database.ref('/users/');
  ref.orderByChild("Email").equalTo(user_email).on("child_added", function(snapshot) {
  var code_id = snapshot.key;
  return database.ref('/Verification_codes/' + code_id).once('value').then(function(snapshot) {
  var code = (snapshot.val() && snapshot.val().Verification_code) || 'Anonymous';
     if(email_code == code){
       users_ref.orderByChild("Email").equalTo(user_email).on("child_added", function(snapshot) {
        var user_id = snapshot.key;
        var verified = "Verified";
        const newData = {
          Verification: verified
        }
        return users_ref.child(user_id).update(newData).then(function(displayMessage) {
           verfificationForm.reset();
           alert('Your email has been successfully verified. Pleaase proceed to the login page and log in. Incase of any issues while logging in please contact us.');
        }).then(() => {
          window.open("index.php", "_self");
        });
       });
     }
     else{
      alert('The code you submitted does not exist');
     }
  });
});
});

</script>

  
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