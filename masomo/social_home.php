<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Social home</title>
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
  #label{
    position: absolute;
    top: 49.5%;
    right: -9.7%;
    width: 250px;
    border-radius: 4px;
    transform: translate(-50%, -50%);
  }
  #btn-post{
    min-width: 25%;
    max-width: 25%;
  }
  #userName{
    font-size: 12px;
  }
   #user_name__link{
    font-size: 13px;
  }
  #demo{
    font-size: 12px;
  }
</style>

<body>
  <header id="header" style="background-color: #178FAB;">
  <div class="container">
      <div style="margin-top: 10px;">
      <center>
      <h8 class="m-3"><strong><font color="white">MASOMO KWETU</font></strong></h8>
      <a class="m-1" href="profile.php" title="My profile" class=""><img class="rounded-circle" src="" id="profileImage" height="30px;" width="30px"> <h8><font id="userName" color="white"></font></h8></a>
      <a class="m-1" href="social_home.php" title="Home"><i class="icofont-home" style="color: #fff;"></i></a>
      <a class="m-1" href="results.php" title="Subjects"><i class="icofont-edit" style="color: purple;"></i></a>
      <a class="m-1" href="results.php" title="Search post"><i class="icofont-search" style="color: #fff;"></i></a>
      <a class="m-1" title="Subscription period"><button style="border-radius: 10px; width: 105px; height: 25px; border-color: transparent; background-color: white;"><p><font id="demo"></font></p></button></a>
    </center>
    </div>
    </div>
  </header>

  <main id="main">
   <section class="counts section-bg" id="about" style="background-image: url(assets/img/photography.png);">
     <div class="container">
      <div class="row">
        <div class="col-md-8 overflow-auto" style="max-height: 800px;">
            <form id="upload_post_form" enctype="multipart/form-data" method="post">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label name="post" class="input-group-text" id="basic-addon2">
                  <i class="icofont-camera">
                    <input type="file" style="visibility: hidden; width: 5px;" accept="image/*" id="post_image">
                  </i>
                <label>
              </div>
            <input class="form-control" id="description" placeholder="What's in your mind?" required="required"><br>
          </div>
          <center>
              <button class="btn btn-success" name="post" style="width: 250px;">Post</button>
          </center>
            </form>
        <div class="counts section-bg" id="about">
            <center><h2><strong>News Feed</strong></h2><br></center>
            <div id="posts_container">
                <script>
                  var counter = 0;
                </script>
             </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class='card' data-aos='fade-right'>
          <div style='background-color: #e6e6e6; height: 530px;' class='card_body'>
            <center>
            <img src='' id="profile_Image" class='rounded-circle' width='130' height='130' style="margin-top: 10px;">
            </center>
            <h2 id="userName"></h2>
            <ul class='list-group' style="margin-left: 10px; margin-right: 10px;">
              <li class='list-group-item'>Name:<strong> <h9><font id="fullName"></font></h9></strong></li>
              <li class='list-group-item'>Username:<strong> <h9><font id="user_name"></font></h9></strong></li>
              <li class='list-group-item'>Status:<strong> <h9><font id="status"></font></h9></strong></li>
              <li class='list-group-item'>School:<strong> <h9><font id="school"></font></h9></strong></li>
              <li class='list-group-item'>Admission:<strong> <h9><font id="admission"></font></h9></strong></li>
              <li class='list-group-item'>Member since:<strong> <h9><font id="date"></font></h9></strong></li></br>
              <center><a href="profile.php"><button style="width: 150px;" class="btn btn-success m-1">Edit profile</button></a> <button style="width: 150px;" class="btn btn-danger" id="logout">Sign out</button></center>
            </ul></br>    
</div>
</div>
      </div>
     </div>
   </div>
   </section>
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
        &copy; Copyright <strong><span>Masomokwetu</span></strong>. All Rights Reserved
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
  var username = (snapshot.val() && snapshot.val().Username) || 'Anonymous';
  var first_name = (snapshot.val() && snapshot.val().FirstName) || 'Anonymous';
  var last_name = (snapshot.val() && snapshot.val().LastName) || 'Anonymous';
  var payment_status = (snapshot.val() && snapshot.val().PaymentStatus) || 'Anonymous';
  var profile_image = (snapshot.val() && snapshot.val().Profile) || 'Anonymous';
  var School = (snapshot.val() && snapshot.val().School) || 'Anonymous';
  var Status = (snapshot.val() && snapshot.val().Status) || 'Anonymous';
  var Admission = (snapshot.val() && snapshot.val().AdmissionNumber) || 'Anonymous';
  var reg_date = (snapshot.val() && snapshot.val().Date) || 'Anonymous';
  var Subscription = (snapshot.val() && snapshot.val().Subscription) || 'Anonymous';
  var name = first_name + " " + last_name;
  document.getElementById('profileImage').src = profile_image;
  document.getElementById('profile_Image').src = profile_image;
  document.getElementById('user_name').innerHTML = username;
  document.getElementById('userName').innerHTML = name;
  document.getElementById('fullName').innerHTML = name;
  document.getElementById('school').innerHTML = School;
  document.getElementById('status').innerHTML = Status;
  document.getElementById('admission').innerHTML = Admission;
  document.getElementById('date').innerHTML = reg_date;
  // Set the date we're counting down to
  var countDownDate = new Date("July 15, 2020 15:37:25").getTime();

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

   //Get image and description from the user
   var validImagetypes = ["image/gif", "image/jpeg", "image/png"];

   //Upload post and store into firebase storage
   const postForm = document.querySelector('#upload_post_form');     
   postForm.addEventListener('submit', (e) => {
       e.preventDefault();
        var file = document.getElementById("post_image").files[0];
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
          var storageRef = firebase.storage().ref("/Posts/");
          var postStorageRef = storageRef.child(fileCompleteName);
          
          //Push image to the storage
          var uploadTask = postStorageRef.put(file);

          //Observe state change events while uploading
          uploadTask.on("state_changed", function(snapshot) {
              
              //Print the progress
              var progressPercentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              alert("Uploading..." + progressPercentage + "% done");

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

                 return database.ref('/users/' + user.uid).once('value').then(function(snapshot)
                 {

                 }).then(userName => {
                         
                    //Upload data into database
                    postStorageRef.getDownloadURL().then(function(url)
                    {

                      return database.ref('/users/' + user.uid).once('value').then(function(snapshot)
                       {

                  
                       var profile_image = (snapshot.val() && snapshot.val().Profile);
                       var userName = (snapshot.val() && snapshot.val().Username);
                       var desc = postForm['description'].value;

                        var time = new Date();
                        var options = 
                        {
                          
                          weekday: "long",
                          month: "long",
                          day: "2-digit",
                          year: "numeric",

                        };

                        //Create object that will store data to be pushed to database
                        var postData = 

                         {

                            "image": url,
                            "name": fileCompleteName,
                            "description": desc,
                            "user_id": user.uid,
                            "counter": 10000 - counter,
                            "username": userName,
                            "profile": profile_image,
                            "time": time.toLocaleString('en-US', {hour: 'numeric', minute: 'numeric', hour12: true}),
                            "date": time.toLocaleString('en-US', options),

                         };

                                        
                         var newPostRef = database.ref('/posts/').push();

                         newPostRef.set(postData, function(err){
                              
                              //Catch the error and print it
                              if(err){
                                alert(err);
                              }
                              else{
                                alert('You just uploaded a post a moment ago');
                                postForm.reset();
                              }

                         });
                       });

                    });


                 });

                    
              }

          );
       

       });
     }
});
</script>
<script>    
    //Retrieve all images from firebase storage and display
    //Reference to database
    var dbPosts = database.ref('/posts/').orderByChild("counter");

    //Retrive data
    dbPosts.once('value', function(posts){
   
        if(posts.exists)
        {
          
          var postsHtml = "";

          posts.forEach(function(singlePost)
          {

            counter = counter + 1;

            postsHtml += "<div class='card'>";

                  //Card header
                 postsHtml += "<div class='card-header' style='background-color: transparent;'>";
                     postsHtml += "<div class='row'>";
                          postsHtml += "<div class='col-sm-1'><img height='40px' width='40px' class='rounded-circle' src='";
                              postsHtml += singlePost.val().profile;
                                     postsHtml += "'></div>";
                                         postsHtml += "<div class='col'>";
                                              postsHtml += "<div class='row' id='card'><a href='user_profile.php?uploader_username=";
                                              postsHtml += singlePost.val().username;
                                                       postsHtml += "'</a><h8 id='user_name_link'>";
                                                             postsHtml += singlePost.val().username;
                                                                postsHtml += "</h8> <strong><font color='black'>Updated a post</font></strong></a></div>";
                                                                    postsHtml += "<div class='row'>";
                                                                     postsHtml += singlePost.val().date;
                                                            postsHtml += singlePost.val().time;
                                                   postsHtml += "</div>"; 
                                            postsHtml += "<div class='row'>";                       
                                     postsHtml += "</div>";
                               postsHtml += "</div>";
                          postsHtml += "</div>";
                      postsHtml += singlePost.val().description;
                 postsHtml += "</div>";

                //Card body
                 postsHtml += "<div class='card-body' style='background-color: transparent;'> <img id='image_post_name' width='100%' src='";
                        postsHtml += singlePost.val().image;
                 postsHtml += "'></div>";

                 //Card footer
                postsHtml += "<div class='card-footer' style='background-color: transparent;'><a href='single.php?p_id=";
                          postsHtml += singlePost.key;
                                postsHtml += "' id='view_comments' style='float: left'><i class='icofont-chat'></i> View all comments...</a>";
                                     postsHtml += "<a href='single.php?p_id=";
                                postsHtml += singlePost.key;
                           postsHtml += "' id='add_comment' style='float: right'><strong>Add comment...</strong></a></div>";
            postsHtml += "</div></br>";

            
          });


          document.getElementById('posts_container').innerHTML = postsHtml;

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
