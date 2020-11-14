<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Find Students</title>
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style>
    
    #userName{
    font-size: 12px;
  }

  </style>
</head>

<body>
  <header id="header" style="background-color: #178FAB;">
    <div class="container">
     
      <div style="margin-top: 10px;">
      <a href="profile.php" title="My profile" class=""><img class="rounded-circle" src="" id="profileImage" height="30px;" width="30px"> <h8><font id="userName" color="white"></font></h8></a>
      <a class="m-3" href="starter.php" title="Home"><i class="icofont-home" style="color: #fff;"></i></a>
      <a class="m-3" href="teachers.php" title="Find teachers"><i class="icofont-user" style="color: violet;"></i></a>
      <a class="m-3" href="members.php" title="Find students"><i class="icofont-users" style="color: #50d8af;"></i></a>
      <a class="m-3" href="messages.php" title="Notifications"><i class="icofont-notification" style="color: #fff;"></i></a>
      <a class="m-3" href="results.php" title="Search post"><i class="icofont-search" style="color: #fff;"></i></a>
      <a class="m-3" title="Subscription period"><button style="border-radius: 10px; width: 130px; height: 30px; border-color: transparent; background-color: white;"><p><font id="demo"></font></p></button></a>
    </div>
   
    </div>
  </header>
   <section style="background-image: url(assets/img/photography.png);"> 	
     <div class="container">
      <center>
    <h4>Find Students</h4>
    </center>
    <form method="POST" id="search_student_form">
				<div class="input-group mb-3">
        <input type="text" id="student_name" class="form-control" required="required" placeholder="Search student here...">
        <div class="input-group-append">
          <button type="submit" class="input-group-text" id="basic-addon2"><i class="icofont-search"></i></button>
        </div>
      </div>
      </form>
      <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6" id="display_students_container"></div>
      <div class="col-md-2"></div>
      </div>

    	</div>

   </section>
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
  <script src="https://www.gstatic.com/firebasejs/7.15.4/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.15.4/firebase-storage.js"></script>
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
</script>
<script src="connection.js"></script>
<script>
//Listen for auth status changes
auth.onAuthStateChanged(user => {
  if(user){
    
  return firebase.database().ref('/users/' + user.uid).once('value').then(function(snapshot) {
  var first_name = (snapshot.val() && snapshot.val().FirstName) || 'Anonymous';
  var last_name = (snapshot.val() && snapshot.val().LastName) || 'Anonymous';
  var profile_image = (snapshot.val() && snapshot.val().Profile) || 'Anonymous';
  var name = first_name + " " + last_name;
  document.getElementById('profileImage').src = profile_image;
  document.getElementById('userName').innerHTML = name;

  // Set the date we're counting down to
  var countDownDate = new Date("July 5, 2020 15:37:25").getTime();

  // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = days + "d:" + hours + "h:"
    + minutes + "m:" + seconds + "s";

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);
  });

  }
  else{
     window.open("index.php", "_self");
  }
});
</script>
  <script>
    auth.onAuthStateChanged(user => {
    if(user){
    //Display all students from the database by default

    //Retrieve data from database
    return database.ref('/users/').orderByChild("Role").equalTo("Student").once('value').then(function(snapshot){

        var postsHtml = "";

          snapshot.forEach(function(singleStudent)
          {
            
            var name = singleStudent.val().FirstName + " " + singleStudent.val().LastName;

             postsHtml += "<div class='card' data-aos='fade-up'>";

                  //Card body
                 postsHtml += "<div class='card-body' style='background-color: ;'>";

                       postsHtml += "<img class='rounded-circle' style='float: left;' height='150px' width='150px' src='";
            
                             postsHtml +=singleStudent.val().Profile;

                       postsHtml += "'>";

                       postsHtml += "<div style='margin-left: 50px; height: 20px;'>";
                       postsHtml += "</div>";

                       postsHtml += "<a style='margin-left: 25px;' href='user_profile.php?uploader_username=";
            
                             postsHtml +=singleStudent.val().Username;

                       postsHtml += "'><h8 style='margin-left: 25px;'>";

                             postsHtml +=singleStudent.val().Username;

                       postsHtml += "</h8></a></br>";
                        postsHtml += "<h8 style='margin-left: 50px;'>Name: <strong>";

                             postsHtml +=name;

                       postsHtml += "</h8></strong></br>";
                        postsHtml += "<h8 style='margin-left: 50px;'>School: <strong>";

                             postsHtml +=singleStudent.val().School;

                       postsHtml += "</strong></h8></br>";
                        postsHtml += "<h8 id='p' style='margin-left: 50px;'>Status: <strong>";

                             postsHtml +=singleStudent.val().Status;

                       postsHtml += "</h8></strong>";
      
                     postsHtml +="</div>";

              postsHtml += "</div></br>";

          });

          document.getElementById('display_students_container').innerHTML = postsHtml;

    })
    

  }
  else{
     window.open("index.php", "_self");
  }
});
  </script>
  <script>
    //Listen for auth status changes
    auth.onAuthStateChanged(user => {
    if(user){
    //Display the students according to users input 
    const search_form = document.querySelector('#search_student_form');
    search_form.addEventListener('submit', (s) => {
      s.preventDefault();
      var student = search_form['student_name'].value;
      document.getElementById('display_students_container').innerHTML = "";

    })
  }
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
