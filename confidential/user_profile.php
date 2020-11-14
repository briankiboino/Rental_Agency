<!DOCTYPE html>
<html>
<head>
<title>User Profile</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
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
<style >
   #userName{
    font-size: 12px;
  }
  #user_name__link{
    font-size: 13px;
  }
  #posts_container{
    font-size: 12px;  
  }
  #info_about{
     font-size: 12px; 
  }
  #demo{
    font-size: 12px;
  }
</style>
<body>
  <header id="header" style="background-color: #178FAB;">
    <div class="container">

     <div style="margin-top: 10px;">
      <a class="m-1" href="profile.php" title="My profile" class=""><img class="rounded-circle" src="" id="profileImage" height="30px;" width="30px"> <h8><font id="userName" color="white"></font></h8></a>
      <a class="m-1" href="social_home.php" title="Home"><i class="icofont-home" style="color: #fff;"></i></a>
      <a class="m-1" href="starter.php" title="Subjects"><i class="icofont-edit" style="color: purple;"></i></a>
      <a class="m-1" href="results.php" title="Search post"><i class="icofont-search" style="color: #fff;"></i></a>
      <a class="m-1" title="Subscription period"><button style="border-radius: 10px; width: 105px; height: 25px; border-color: transparent; background-color: white;"><p><font id="demo"></font></p></button></a>
    </div>

    </div>
  </header>
  <style="background-image: url(assets/img/photography.png); margin-top: 10px;">
  <div class="container">
    <div class="row">
	
                      <div id='info_about' class='col-sm-4' data-aos='fade-right'>
                      		<div style='background-color: #e6e6e6; height: 530px; border-radius: 5px;' class='col'>
                      			<center>
                              <h3>Information about</h3>
                      			<img src='' id='u_profile' class='rounded-circle' width='150' height='150'>
                            </center>
                      			<br><br>
                      			<ul class='list-group'>
                      				<li class='list-group-item'>Name:<strong> <h9><font id="u_name"></font></h9></strong></li>
                              <li class='list-group-item'>Username:<strong> <h9><font id="u_username"></font></h9></strong></li>
                      				<li class='list-group-item'>Status:<strong> <h9><font id="u_status"></font></h9></strong></li>
                      				<li class='list-group-item'>School:<strong> <h9><font id="u_school"></font></h9></strong></li>
                      				<li class='list-group-item'>Admission:<strong> <h9><font id="u_admission"></font></h9></strong></li>
                      				<li class='list-group-item'>Member since:<strong> <h9><font id="u_date"></font></h9></strong></li>
                      			</ul></br>	

			       </div>			   
           </div></br>
     
	  	 <div class="col-sm-8" id="posts_container">
	         <script>
            var counter = 0; 
           </script>	 
	  
       </div>
	  
</div>

</div>
</div>
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
    //Retrieve the username passed to this page by url
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const uploader = urlParams.get('uploader_username')
    
    //Retrieve details of the user using the username 
     database.ref('/users/').orderByChild("Username").equalTo(uploader).once('value').then(function(snapshot){
      snapshot.forEach(function(childSnapshot){

       var username = (childSnapshot.val() && childSnapshot.val().Username) || 'Anonymous';
       var first_name = (childSnapshot.val() && childSnapshot.val().FirstName) || 'Anonymous';
       var last_name = (childSnapshot.val() && childSnapshot.val().LastName) || 'Anonymous';
       var image = (childSnapshot.val() && childSnapshot.val().Profile) || 'Anonymous';
       var profile_image = (childSnapshot.val() && childSnapshot.val().Profile) || 'Anonymous';
       var school = (childSnapshot.val() && childSnapshot.val().School) || 'Anonymous';
       var status = (childSnapshot.val() && childSnapshot.val().Status) || 'Anonymous';
       var date = (childSnapshot.val() && childSnapshot.val().Date) || 'Anonymous';
       var admission = (childSnapshot.val() && childSnapshot.val().Admission) || 'Anonymous';
       var name = first_name + " " + last_name;

        document.getElementById('u_profile').src = image;
        document.getElementById('u_name').innerHTML = name;
        document.getElementById('u_username').innerHTML = username;
        document.getElementById('u_school').innerHTML = school;
        document.getElementById('u_status').innerHTML = status;
        document.getElementById('u_date').innerHTML = date;
        document.getElementById('u_admission').innerHTML = admission;

      });

    });


  }
});

  </script>
  <script>
    //Retrieve username from the url
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const uploader = urlParams.get('uploader_username')

     //Retrieve all images from firebase storage and display
    //Reference to database
    database.ref('/posts/').orderByChild("username").equalTo(uploader).once('value').then(function(snapshot){

    //Retrive data
   
        if(snapshot.exists)
        {
          
          var postsHtml = "";

          snapshot.forEach(function(singlePost)
          {

            counter = counter + 1;

            postsHtml += "<div class='card' data-aos='fade-up'>";

                  //Card header
                 postsHtml += "<div class='card-header' style='background-color: transparent;'>";
                      postsHtml += "<div class='row' id='comment'>";
                           postsHtml += "<img id='author_image' class='rounded-circle m-1' height='35px' width='35px' src='";
                                     postsHtml += singlePost.val().profile;
                                     postsHtml += "'><a href='user_profile.php?uploader_username=";
                                     postsHtml += singlePost.val().username;
                                     postsHtml += "'>";
                                     postsHtml += "<div><h8 id='author_name' style='margin-top: 5px; margin-left: 5px; margin-right: 5px; font-size: 13px;'>";
                                     postsHtml += singlePost.val().username;
                                     postsHtml += "</h8></a><strong>Updated a post</strong>";
                                     postsHtml += "<p id='author_comment' style='margin-top: 5px; margin-left: 5px; margin-right: 5px;'>";
                                     postsHtml += singlePost.val().date;
                                     postsHtml += ", ";
                                     postsHtml += singlePost.val().time;
                         postsHtml += "</p>";
                           postsHtml += "</div>";
                      postsHtml += "</div>";
                          postsHtml += singlePost.val().description;
                 postsHtml += "</div>";

                //Card body
                 postsHtml += "<div style='background-color: transparent;'> <img id='image_post_name' width='100%' src='";
                        postsHtml += singlePost.val().image;
                 postsHtml += "'></div>";

                 //Card footer
                postsHtml += "<div class='card-footer' style='background-color: transparent;'><a href='single.php?p_id=";
                          postsHtml += singlePost.key;
                                postsHtml += "' id='view_comments' style='float: left'><i class='icofont-chat'></i> View all comments...</a>";
                                       postsHtml += "<a href='single.php?p_id=";
                                postsHtml += singlePost.key;
                           postsHtml += "' id='add_comment' style='float: right'><strong><font color='grey'>Add comment...</font></strong></a></div>";
            postsHtml += "</div></br>";

          });

          document.getElementById('posts_container').innerHTML = postsHtml;

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

 