<!DOCTYPE html>
<html>
<head>
<title>Update profile</title>
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
<style>
  #profile-img{
    position: absolute;
    top: 245px;
    left: 20px;
  }
  #button_profile{
    position: absolute;
    top: 150px;
    left: 10px;
    cursor: pointer;
  }
  #own_posts{
    border: 2px solid #e6e6e6;
    padding: 40px 50px;
  }
  #post_img{
    height: 300px;
    width: 100px;
  }
   #userName{
    font-size: 12px;
  }
  #demo{
      font-size: 12px;
  }
  #cover{
      font-size: 12px;
  }
  #posts_container{
      font-size: 12px;
  }
  #buttons{
      font-size: 12px;
  }
  #myProgress {
  width: 100%;
  background-color: white;
}

#uploadcover {
  width: 1%;
  height: 30px;
  background-color: #50d8af;
  border-radius: 20px;
}
#uploadprofile {
  width: 1%;
  height: 30px;
  background-color: #50d8af;
  border-radius: 20px;
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
  <div style="background-image: url(assets/img/photography.png); margin-top: 10px;">
    <div class="container">
    <div class="row" data-aos='fade-right' data-aos-delay='200;'>
  <div class="col-md-12">
  
        <img id='cover_img' src='' width='100%' height="400px" class="rounded">
        <ul class='nav pull-left' style='position:absolute;top:10px;left:40px;'>
          <li class='dropdown'>
            <button name='cover' data-toggle="modal" data-target="#updateco_verImage" class='btn' style='background-color: white;'><font color='#000'><i class="icofont-camera" style="color: #000"></i> Change Cover</font></button>
            <div class='dropdown-menu' style='width: 300px;'>
              
            </div>
          </li>
        </ul>

        </form>
      
      <div id='profile-img'>
        <img src='' id="Image" alt='Profile' class='rounded-circle' width='150px' height='150px'>
        <ul class='nav pull-left' style='position:absolute; bottom: 5px; left:100px;'>
          <li class='dropdown'>
            <button class='btn'data-toggle="modal" data-target="#updateprofileImage" name='pro_file' style='background-color: white; border-radius: 30px;'><font color='#000'><i class="icofont-camera" style="color: #000"></i></font></button>
          
          </li>
        </ul>

        </form>
      </div>
  </div>

</div></br>
<div class="row">
  <div class="col-md-4" style="background-color: #e6e6e6; left: 0.8%; border-radius: 5px; height: 360px; font-size: 12px; margin-right: 15px; margin-left: 10px;" data-aos='fade-left' data-aos-delay='200;'>
            <center><h2 style="margin-top: 20px;"><strong>About</strong></h2></center>
           <ul class='list-group' style="margin-left: 5px; margin-right: 5px;">
              <li class='list-group-item'>Name:<strong> <h9><font id="fullName"></font></h9></strong></li>
              <li class='list-group-item'>Username:<strong> <h9><font id="user_name"></font></h9></strong></li>
              <li class='list-group-item'>Status:<strong> <h9><font id="status"></font></h9></strong></li>
              <li class='list-group-item'>School:<strong> <h9><font id="school"></font></h9></strong></li>
              <li class='list-group-item'>Member since:<strong> <h9><font id="date"></font></h9></strong></li></br>
              <center><button style="width: 150px;" class="btn btn-danger" id="logout">Sign out</button></center>
            </ul></br> 
  </div>
   <div class="col-md-8" id="posts_container" style='margin-top: 20px;'>
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
           <div class='modal fade' id='updateco_verImage' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Update cover image</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <div class='modal-body'>
                      <form id='update_cover' method='post' enctype='multipart/form-data'>
                          <center>
                              <label class='btn btn-info'><input type='file' id='new_cover_image' style='width: 220px;'/>
                              </label></br>
                              </center>
                              <div id="myProgress">
                                 <div class="progress-bar progress-bar-striped" id="uploadcover"></div>
                              </div>
                      
              </div>
              
                      <div class='modal-footer'>
                        <button name='update' class='btn btn-info' id='buttons'>Update</button>
                        </form>
                      </div>
                      </div>
                      </div>
                    </div>
                    
                     <div class='modal fade' id='updateprofileImage' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='exampleModalLabel'>Update profile image</h5>
                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                    </button>
                  </div>
                  <div class='modal-body'>
                      <form id='update_profile' method='post' enctype='multipart/form-data'>
                          <center>
                              <label class='btn btn-success'><input type='file' id='user_image' style='width: 220px;'/>
                              </label></br>
                              </center>
                               <div id="myProgress">
                                 <div class="progress-bar progress-bar-striped" id="uploadprofile"></div>
                              </div>
              </div>
              
                      <div class='modal-footer'>
                        <button name='update' class='btn btn-success' id='buttons'>Update</button>
                        </form>
                      </div>
                      </div>
                      </div>
                    </div>
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
    
   return firebase.database().ref('/users/' + user.uid).on('value', function(snapshot) {
  var username = (snapshot.val() && snapshot.val().Username) || 'Anonymous';
  var first_name = (snapshot.val() && snapshot.val().FirstName) || 'Anonymous';
  var last_name = (snapshot.val() && snapshot.val().LastName) || 'Anonymous';
  var profile_image = (snapshot.val() && snapshot.val().Profile) || 'Anonymous';
  var School = (snapshot.val() && snapshot.val().School) || 'Anonymous';
  var Status = (snapshot.val() && snapshot.val().Status) || 'Anonymous';
  var reg_date = (snapshot.val() && snapshot.val().Date) || 'Anonymous';
  var cover = (snapshot.val() && snapshot.val().Cover) || 'Anonymous';
  var name = first_name + " " + last_name;
 
  document.getElementById('profileImage').src = profile_image;
  document.getElementById('cover_img').src = cover;
  document.getElementById('Image').src = profile_image;
  document.getElementById('user_name').innerHTML = username;
  document.getElementById('userName').innerHTML = name;
  document.getElementById('fullName').innerHTML = name;
  document.getElementById('school').innerHTML = School;
  document.getElementById('status').innerHTML = Status;
  document.getElementById('date').innerHTML = reg_date;

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
    database.ref('/posts/').orderByChild("user_id").equalTo(user.uid).on('value', function(snapshot){
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
                                     postsHtml += "'>";
                                     postsHtml += "<div>";
                                     postsHtml += "<strong> You updated a post</strong>";
                                     postsHtml += "<p id='author_comment' style='margin-left: 5px; margin-right: 5px;'>";
                                     postsHtml += singlePost.val().date;
                                     postsHtml += ", ";
                                     postsHtml += singlePost.val().time;
                         postsHtml += "</p>";
                           postsHtml += "</div>";
                      postsHtml += "</div>";
                          postsHtml += singlePost.val().description;
                 postsHtml += "</div>";
                 
                 //Card body
                 postsHtml += "<div style='background-color: transparent;'><img width='100%' src='";
                     postsHtml += singlePost.val().image;
                 postsHtml += "'></div>";
                 
                 //Card footer
                 postsHtml += "<div class='card-footer' style='background-color: transparent;'><a href='single.php?p_id=";
                     postsHtml += singlePost.key;
                 postsHtml +="'><i class='icofont-chat'></i> View comments...</a><a id='delete' href='delete_post.php?p_id=";
                     postsHtml += singlePost.key;
                 postsHtml +="'><button class='btn btn-danger' style='float: right;'><font color='white'>Delete post</font></button></a>";
                 postsHtml += "</div>";

            postsHtml += "</div></br>";

          });

          document.getElementById('posts_container').innerHTML = postsHtml;

        }
    });
  }
});
 
</script>
<script>

   //Get image and description from the user
   var validImagetypes = ["image/gif", "image/jpeg", "image/png"];

   //Update Cover image
   const coverForm = document.querySelector('#update_cover');     
   coverForm.addEventListener('submit', (e) => {
       e.preventDefault();
        var file = document.getElementById("new_cover_image").files[0];
          var reader = new FileReader();
          reader.onload = function() {    
            var blob = window.dataURLtoBlob(reader.result);
            console.log(blob, new File([blob], "image.png", {
              type: "image/png"
            }));
          };
          reader.readAsDataURL(file);
       if(file == ""){
            alert("No image has been selected! Please select an image to upload.");
       }
       else{
        //Reference to database
       database.ref('/posts/').once('value').then(function(snapshot){
           
          //Get name of the image and date
          var name = file.name;
          var dateStr = new Date().getTime();
          var fileCompleteName = name + "_" +dateStr;
          

          //Reference to the firebase storage
          var storageRef = firebase.storage().ref("/covers/");
          var postStorageRef = storageRef.child(fileCompleteName);
          
          //Push image to the storage
          var uploadTask = postStorageRef.put(file);

          //Observe state change events while uploading
          uploadTask.on("state_changed", function(snapshot) {
              
              //Print the progress
              var progressPercentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              var i = 0;
                if (i == 0) {
                  i = 1;
                  var elem = document.getElementById("uploadcover");
                  var width = progressPercentage;
                  var id = setInterval(frame, progressPercentage);
                  function frame(dialog) {
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
                  postStorageRef.getDownloadURL().then(function(url)
                    {
                        var updates = {

                          Cover: url
                        }
                        return database.ref('/users/' + user.uid).update(updates);
                               coverForm.reset();

                 }).then(() => {
                  });
                    
              }

          );
       

       });
     }
});
</script>
<script>

   //Get image and description from the user
   var validImagetypes = ["image/gif", "image/jpeg", "image/png"];

   //Upload post and store into firebase storage
   const profileForm = document.querySelector('#update_profile');     
   profileForm.addEventListener('submit', (e) => {
       e.preventDefault();
        var file = document.getElementById("user_image").files[0];
          var reader = new FileReader();
          reader.onload = function() {    
            var blob = window.dataURLtoBlob(reader.result);
            console.log(blob, new File([blob], "image.png", {
              type: "image/png"
            }));
          };
          reader.readAsDataURL(file);
       if(file == ""){
            alert("No image has been selected! Please select an image to upload.");
       }
       else{
        //Reference to database
       database.ref('/posts/').once('value').then(function(snapshot){
           
          //Get name of the image and date
          var name = file.name;
          var dateStr = new Date().getTime();
          var fileCompleteName = name + "_" +dateStr;
          

          //Reference to the firebase storage
          var storageRef = firebase.storage().ref("/profiles/");
          var postStorageRef = storageRef.child(fileCompleteName);
          
          //Push image to the storage
          var uploadTask = postStorageRef.put(file);

          //Observe state change events while uploading
          uploadTask.on("state_changed", function(snapshot) {
              
              //Print the progress
              var progressPercentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              var i = 0;
                if (i == 0) {
                  i = 1;
                  var elem = document.getElementById("uploadprofile");
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
                if(err){
                alert(err);
              }
              else{
                  alert('Profile photo updated');
              }

              },
              
              //If image is uploaded successfully push details of image and uploader to the database
              function complete()
              {
                 
                 //Retrieve current user's information from database
                 const auth = firebase.auth();
                 var user = auth.currentUser;
                  postStorageRef.getDownloadURL().then(function(url)
                    {
                        var updates = {

                          Profile: url
                        }
                        return database.ref('/users/' + user.uid).update(updates);

                 }).catch(err => {
                              
                              //Catch the error and print it
                                alert(err);
                         });
                    
              }

          );
       

       });
     }
});
</script>
<script src="logout.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/javascript-canvas-to-blob/3.4.0/js/canvas-to-blob.min.js"></script>
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