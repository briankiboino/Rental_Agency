<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Upload video tutorial</title>
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
</head>
  <style>
#myProgress {
  width: 100%;
  background-color: white;
}

#uploading {
  width: 1%;
  height: 30px;
  background-color: #50d8af;
  border-radius: 20px;
}
#userName{
  font-size: 12px;
}
body{
  overflow-x: hidden;
}
</style>
<body>
  <header id="header" style="background-color: #178FAB;">
    <div class="container">

     <div style="margin-top: 10px;">
      <a class="m-1" href="teacher_profile.php" title="My profile" class=""><img class="rounded-circle" src="" id="profileImage" height="30px;" width="30px"> <h8><font id="userName" color="white"></font></h8></a>
      <a class="m-1" href="teacher_starter.php" title="Home"><i class="icofont-home" style="color: #fff;"></i></a>
      <a class="m-1" href="video_upload.php" title="Upload videos"><i class="icofont-video" style="color: #fff;"></i></a>
      <a class="m-1" href="teacher_results.php" title="Search post"><i class="icofont-search" style="color: #fff;"></i></a>
    </div>

    </div>
  </header>

  <main id="main">
    <section></section>
   <section class="counts section-bg" id="about">
     <div class="container">
      <center>
      <h4>Upload video tutorial</h4>
    </center>
    <div id="upload_video"></div>
      <div id="myProgress">
          <div class="progress-bar progress-bar-striped" id="uploading"></div>
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
              <strong>Email:</strong> masomokwetul@gmail.com<br>
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
   <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/javascript-canvas-to-blob/3.4.0/js/canvas-to-blob.min.js"></script>
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
  firebase.database().ref('/users/' + user.uid).once('value').then(function(snapshot) {
  var first_name = (snapshot.val() && snapshot.val().FirstName) || 'Anonymous';
  var last_name = (snapshot.val() && snapshot.val().LastName) || 'Anonymous';
  var subject = (snapshot.val() && snapshot.val().Subject) || 'Anonymous'
  var profile_image = (snapshot.val() && snapshot.val().Profile) || 'Anonymous';;
  var name = first_name + " " + last_name;
  document.getElementById('profileImage').src = profile_image;
  document.getElementById('userName').innerHTML = name;
      var postHtml = "";

      if(subject == "Mathematics"){
          
          postHtml += "<form method='POST' id='upload_video_form'>";
          postHtml += "<label for'subject'><b>Your subject</b></label>";
          postHtml += "<select id='subject' class='form-control'><option value='";
          postHtml += subject;
          postHtml += "'>";
          postHtml += subject; 
          postHtml += "</option></select></br>";
          postHtml += "<label for'topic'><b>Select the topic which the video covers</b></label>";
          postHtml += "<select id='topic' class='form-control'>";
          postHtml += "<option value='Natural numbers'>Natural numbers</option><option value='Factors'>Factors</option><option value='Divisibility Tests'>Divisibility Tests</option><option value='GCD/HCF'>GCD/HCF</option><option value='LCM'>LCM</option><option value='Integers'>Integers</option><option value='Fractions'>Fractions</option><option value='Decimals'>Decimals</option><option value='Squares and Square Roots'>Squares and Square Roots</option><option value='Algebraic Expressions'>Algebraic Expressions</option><option value='Rates, Ratio, Percentages and Proportions'>Rates, Ratio, Percentages and Proportions</option><option value='Length'>Length</option><option value='Area'>Area</option><option value='Volume And Capacity'>Volume And Capacity</option><option value='Mass, Density and Weight'>Mass, Density and Weight</option><option value='Time'>Time</option><option value='Linear Equations'>Linear Equations</option><option value='Commercial Arithmetic 1'>Commercial Arithmetic 1</option><option value='Co-ordinates and Graphs'>Co-ordinates and Graphs</option><option value='Angles and Plane Figures'>Angles and Plane Figures</option><option value='Geometric Constructions'>Geometric Constructions</option><option value='Scale Drawing'>Scale Drawing</option><option value='Common Solids'>Common Solids</option><option value='Cubes and Cube Roots'>Cubes and Cube Roots</option><option value='Reciprocals'>Reciprocals</option><option value='Indices and Logarithms'>Indices and Logarithms</option><option value='Equations and Straight Lines'>Equations and Straight Lines</option><option value='Reflection and Congruence'>Reflection and Congruence'</option><option value='Rotation'>Rotation</option><option value='Enlargment and Similarity'>Enlargment and Similarity</option><option value='Pythagoras Theorem'>Pythagoras Theorem</option><option value='Trigonometry 1'>Trigonometry 1</option><option value='Area of a Triangle'>Area of a Triangle</option><option value='Area of Quadrilateral and other Polygons'>Area of Quadrilateral and other Polygons</option><option value='Area of Part of a circle'>Area of Part of a circle</option><option value='Surface Area of solids'>Surface Area of solids</option><option value='Volume of Solids'>Volume of Solids</option><option value='Quadrilateral Expressions and Equations'>Quadrilateral Expressions and Equations</option><option value='Linear Inequalities'>Linear Inequalities</option><option value='Linear Motion'>Linear Motion</option><option value='Statistics'>Statistics</option><option value='Angle Properties of a Circle'>Angle Properties of a Circle</option><option value='Vectors'>Vectors</option><option value='Quadratic  Expressions'>Quadratic Expressions</option><option value='Approximation and Errors'>Approximation and Errors</option><option value='Trigonometry 2'>Trigonometry 2</option><option value='SURDS'>SURDS</option><option value='Further Logarithms'>Further Logarithms</option><option value='Commercial Arithmetic 2'>Commercial Arithmetic 2</option><option value='Circles, Chords and Tangets'>Circles, Chords and Tangets</option><option value='Matrices'>Matrices</option><option value='Formulae and Variations'>Formulae and Variations</option><option value='Sequences and Series'>Sequences and Series</option><option value='Vectors'>Vectors</option><option value='Binomial Expansions'>Binomial Expansions</option><option value='Probability'>Probability</option><option value='Compound Proportions and Rates of Work'>Compound Proportions and Rates of Work</option><option value='Graphical Methods'>Graphical Methods</option><option value='Matrices and Transformations'>Matrices and Transformations</option><option value='Statistics'>Statistics</option><option value='Loci'>Loci</option><option value='Trigonometry'>Trigonometry</option><option value='Three Dimensional Geometry'>Three Dimensional Geometry</option><option value='Longitudes and Latitudes'>Longitudes and Latitudes</option><option value='Linear Programming'>Linear Programming</option><option value='Differentiation'>Differentiation</option><option value='Area Approximation'>Area Approximation</option><option value='Intergration'>Integration</option>";
          postHtml += "</select></br>";
          postHtml += "<label for='desc'><b>Enter a short description of the video</b></label>";
          postHtml += "<input type='text' id='desc' required='required' id='description' class='form-control'></br>";
          postHtml += "<label class='btn btn-warning'><input type='file' id='video'></label></br>";
          postHtml += "<center><button class='btn btn-success' style='width: 200px;' type='submit'>Upload video</button></center>"
          postHtml += "</form>";

          document.getElementById('upload_video').innerHTML = postHtml;
          const videoForm = document.querySelector('#upload_video_form');

           videoForm.addEventListener('submit', (e) => {
       e.preventDefault();
        var file = document.getElementById("video").files[0];
        var teacher_subject = document.getElementById("subject").value;
        console.log(teacher_subject);
          var reader = new FileReader();
          reader.onload = function() {    
            var blob = window.dataURLtoBlob(reader.result);
            console.log(blob, new File([blob], "image.png", {
              type: "image/png"
            }));
          };
          reader.readAsDataURL(file);
        //Reference to database
       database.ref(teacher_subject).once('value').then(function(snapshot){
           
          //Get name of the image and date
          var name = file.name;
          var dateStr = new Date().getTime();
          var fileCompleteName = name + "_" +dateStr;
          

          //Reference to the firebase storage
          var storageRef = firebase.storage().ref("/videos/");
          var postStorageRef = storageRef.child(fileCompleteName);
          
          //Push image to the storage
          var uploadTask = postStorageRef.put(file);

          //Observe state change events while uploading
          uploadTask.on("state_changed", function(snapshot) {
              
              //Print the progress
              var progressPercentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              document.getElementById("uploading").value = progressPercentage;
              var i = 0;
                if (i == 0) {
                  i = 1;
                  var elem = document.getElementById("uploading");
                  var width = progressPercentage;
                  var id = setInterval(frame, progressPercentage);
                  function frame() {
                    if (width >= 100) {
                      clearInterval(id);
                      i = 0;
                    } else {
                      width++;
                      elem.style.width = width + "%";
                    }
                  }
                }

          },
              //Catch any error that occurs during uploading process and print it
              function error(err){

                alert(err);

              },
              
              //If image is uploaded successfully push details of image and uploader to the database
              function complete()
              {
                 
                 //Retrieve current user's information from database
                 const auth = firebase.auth();
                 var user = auth.currentUser;
                 var userName;
                         
                    //Upload data into database
                    postStorageRef.getDownloadURL().then(function(url)
                    {

                      return database.ref('/users/' + user.uid).once('value').then(function(snapshot)
                       {

                       var desc = videoForm['desc'].value;

                        //Create object that will store data to be pushed to database
                        var postData = 

                         {

                            "video": url,
                            "name": fileCompleteName,
                            "topic": desc,
                            "uploader": user.uid,

                         };

                                        
                         var newPostRef = database.ref(teacher_subject).push();

                         newPostRef.set(postData, function(err){
                              
                              //Catch the error and print it
                              if(err){
                                alert(err);
                              }
                              else{
                                alert('Video uploaded successfully');
                                videoForm.reset();
                              }

                         });
                       });

                    });


                 });

                   
              }

          );
});  

  }
}).then(videoForm => {
   //Upload video and store into firebase storage   
  
});
}
else
{
  window.open("index.php", "_self");
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
