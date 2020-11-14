<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Comments</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
  #userName{
    font-size: 12px;
  }
  #comment{
    display: flex;
    font-size: 12px;
  }
  #single_comment{
     background-color: #DCDCDC; 
     border-radius: 10px;
     font-size: 12px;
  }
  #demo{
      font-size: 12px;
  }
  #desc_ription{
      font-size: 12px;
      margin-left: 5px;
  }
  #author_name{
     font-size: 12px; 
  }
  #display{
      font-size: 12px;
  }
  </style>
</head>

<body>
  <header id="header" style="background-color: #178FAB;">
    <div class="container">
    
     <div style="margin-top: 10px;">
      <a class="m-1" href="teacher_profile.php" title="My profile" class=""><img class="rounded-circle" src="" id="profileImage" height="30px;" width="30px"> <h8><font id="userName" color="white"></font></h8></a>
      <a class="m-1" href="teacher_starter.php" title="Home"><i class="icofont-home" style="color: #fff;"></i></a>
      <a class="m-1" href="video_upload.php" title="Upload videos"><i class="icofont-edit" style="color: purple;"></i></a>
      <a class="m-1" href="teacher_results.php" title="Search post"><i class="icofont-search" style="color: #fff;"></i></a>
      <a class="m-1" title="Subscription period"><button style="border-radius: 10px; width: 105px; height: 25px; border-color: transparent; background-color: white;"><p><font id="demo"></font></p></button></a>
    </div>

    </div>
  </header>

  <main id="main">
   <div style="background-image: url(assets/img/photography.png); margin-top: 10px;">
     <div class="container" id="posts_container">
    
      </div>
   </div></br>

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
    //Get author's details
    return database.ref('/users/' + user.uid).once('value').then(function(snapshot)
   {


   var profile_image = (snapshot.val() && snapshot.val().Profile);
   var userName = (snapshot.val() && snapshot.val().Username);
    if(user){
    //Retrieve post id from the url
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const post_id = urlParams.get('p_id');
    
    //Retrieve details of the user using the username 
    database.ref('/posts/').orderByKey().equalTo(post_id).once('value').then(function(snapshot){
    snapshot.forEach(function(childSnapshot){
    var childKey = childSnapshot.key;
    var childData = childSnapshot.val();
    
    var postsHtml = "";

    postsHtml += "<div class='card'>";

                  //Card header
                 postsHtml += "<div style='background-color: transparent;'>";
                      postsHtml += "<div class='row' id='comment' style='margin-left: 1px; margin-top: 5px;'>";
                           postsHtml += "<img id='author_image' class='rounded-circle m-1' height='35px' width='35px' src='";
                                     postsHtml += childData.profile;
                                     postsHtml += "'><a href='teacher_user_profile.php?uploader_username=";
                                     postsHtml += childData.username;
                                     postsHtml += "'>";
                                     postsHtml += "<div><h8 id='author_name' style='margin-left: 5px; margin-right: 5px;'>";
                                     postsHtml += childData.username;
                                     postsHtml += "</h8></a>";
                                     postsHtml += "<p id='author_comment' style='margin-left: 5px; margin-right: 5px;'>";
                                     postsHtml += childData.date;
                                     postsHtml += ", ";
                                     postsHtml += childData.time;
                         postsHtml += "</p>";
                           postsHtml += "</div>";
                      postsHtml += "</div><p id='desc_ription'>";
                          postsHtml += childData.description;
                 postsHtml += "</p></div>";

                //Card body
                 postsHtml += "<div style='background-color: transparent;'> <img id='image_post_name' width='100%' src='";
                        postsHtml += childData.image;
                 postsHtml += "'></div>";

                 
            postsHtml += "</div></br>";

            //Comments
            postsHtml += "<div class='section' id='display'>";
                
                 postsHtml += "</div>";

            //Add comment
                 postsHtml += "<div class=input-group-prepend'><img class='rounded-circle m-2' height='30px' width='30px' src='";
                     postsHtml += profile_image;
                 postsHtml += "'></div><form id='add_comment_form' method='POST'><div class='input-group'><input type='text' id='user_comment' required='required' class='form-control' placeholder='Write a comment...'><div class='input-group-append'><button class='btn btn-success' type='submit'>Add</button></div></form>";

            postsHtml += "</div>";


             document.getElementById('posts_container').innerHTML = postsHtml;

              //Get all comments for this post
            database.ref('/comments/').orderByChild("p_id").equalTo(post_id).on('value', function(snapshot){
              if(snapshot.exists){

               var postsHtml2 = "";

                 snapshot.forEach(function(eachComment)
                {

                        

                        postsHtml2 += "<div><div id='comment'><img id='author_image' class='rounded-circle m-1' height='30px' width='30px' src='";
                                     postsHtml2 += eachComment.val().author_profile;
                               postsHtml2 += "'><div id='single_comment'><strong><h8 id='author_name' style='margin-top: 5px; margin-left: 5px; margin-right: 5px; font-size: 11px;'>";
                                     postsHtml2 += eachComment.val().author;
                               postsHtml2 += "</h8></strong></br>";
                                   postsHtml2 += "<p id='author_comment' style='margin-top: 5px; margin-left: 5px; margin-right: 5px;'>";
                                   postsHtml2 += eachComment.val().comment;
                         postsHtml2 += "</p></div></div></br>";
                         
              });

                        document.getElementById('display').innerHTML = postsHtml2;

            }
            else{
            var postsHtml2 = "";
 
            document.getElementById('display').innerHTML = postsHtml2; 
          }

            });

        //Insert comment
        //Get comment
        const commentForm = document.querySelector('#add_comment_form');
        commentForm.addEventListener('submit', (s) => {
            s.preventDefault();
            var comment = commentForm['user_comment'].value;
            var date_time = new Date().getTime();

            //Data to be inserted
             var commentData = {

              p_id: post_id,
              author_id: user.uid,
              comment: comment,
              author: userName,
              author_profile: profile_image,
              comment_date: date_time,

             }

            //Reference to database
            const dbComments = database.ref('/comments/').push();
            dbComments.set(commentData, function(err){  
              if(err){
                alert(err);
              } 
              else{
                commentForm.reset();
              }                
           });

    })

  });

});

  }
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
