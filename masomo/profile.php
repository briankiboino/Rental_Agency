<!DOCTYPE html>
<html>
<head>
	<title>Update profile</title>
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
		top: 190px;
		left: 40px;
	}
	#update_profile{
		position: relative;
		top: -33px;
		cursor: pointer;
		left: 93px;
		border-radius: 4px;
		background-color: rgba(0,0,0,0.1);
		transform: translate(-50%, -50%);
	}
	#button_profile{
		position: absolute;
		top: 180px;
		left: 20px;
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
</style> 
<body>
	 <header id="header" style="background-color: #178FAB;">
    <div class="container">
      <div style="margin-top: 10px;">
      <a href="profile.php" title="My profile" class=""><img class="rounded-circle" src="" id="profileImage" height="35px;" width="35px"> <h8><font id="userName" color="white"></font></h8></a>
      <a class="m-3" href="starter.php" title="Home"><i class="icofont-home" style="color: #fff;"></i></a>
      <a class="m-3" href="teachers.php" title="Find teachers"><i class="icofont-user" style="color: violet;"></i></a>
      <a class="m-3" href="members.php" title="Find students"><i class="icofont-users" style="color: #50d8af;"></i></a>
      <a class="m-3" href="messages.php" title="Notifications"><i class="icofont-notification" style="color: #fff;"></i></a>
      <a class="m-3" href="results.php" title="Search post"><i class="icofont-search" style="color: #fff;"></i></a>
      <a class="m-3" title="Subscription period"><button style="border-radius: 10px; width: 130px; height: 30px; border-color: transparent; background-color: white;"><p><font id="subscription"></font></p></button></a>
    </div>

    </div>
  </header>
  <section style="background-image: url(assets/img/photography.png);">
  	<div class="container">
    <div class="row" data-aos='fade-right' data-aos-delay='200;'>
	<div class="col-md-12">
	
				<img id='cover_img' src='' width='100%' height="400px" class="rounded">
				
				<form id="update_cover" method='post' enctype='multipart/form-data'>

				<ul class='nav pull-left' style='position:absolute;top:10px;left:40px;'>
					<li class='dropdown'>
						<button class='dropdown-toggle btn' style='background-color: white;' data-toggle='dropdown'><font color='#000'><i class="icofont-camera" style="color: #000"></i> Change Cover</font></button>
						<div class='dropdown-menu' style='width: 300px;'>
							<center>
							<p>Click <strong>Choose another image</strong> and then click <br> <strong>Update Cover</strong></p>
							<label class='btn btn-info'> 
							<input type='file' id="new_cover_image" style='width: 220px;'/>
							</label><br><br>
							<button name='submit' class='btn btn-info'>Update Cover</button>
							</center>
						</div>
					</li>
				</ul>

				</form>
			
			<div id='profile-img'>
				<img src='' id="Image" alt='Profile' class='rounded-circle' width='220px' height='205px'>
				<form id="update_profile" method='post' enctype='multipart/form-data'>
				<ul class='nav pull-left' style='position:absolute; bottom: 5px; left:200px;'>
					<li class='dropdown'>
						<button class='dropdown-toggle btn' style='background-color: white; border-radius: 30px;' data-toggle='dropdown'><font color='#000'><i class="icofont-camera" style="color: #000"></i></font></button>
						<div class='dropdown-menu' style='width: 300px;'>
							<center>
							<p>Click <strong>Choose another image</strong> and then click <br> <strong>Update Cover</strong></p>
							<label class='btn btn-success'> 
							<input type='file' id='user_image' style='width: 220px;'/>
							</label><br><br>
							<button name='update' class='btn btn-success'>Update profile</button>
							</center>
						</div>
					</li>
				</ul>

				</form>
			</div>
	</div>

</div></br>
<div class="row">
	<div class="col-md-4" style="background-color: #e6e6e6; left: 0.8%; border-radius: 5px; height: 450px;" data-aos='fade-left' data-aos-delay='200;'>
		 	      <center><h2 style="margin-top: 20px;"><strong>About</strong></h2></center>
			     <ul class='list-group' style="margin-left: 5px; margin-right: 5px;">
              <li class='list-group-item'>Name:<strong> <h9><font id="fullName"></font></h9></strong></li>
              <li class='list-group-item'>Username:<strong> <h9><font id="user_name"></font></h9></strong></li>
              <li class='list-group-item'>Status:<strong> <h9><font id="status"></font></h9></strong></li>
              <li class='list-group-item'>School:<strong> <h9><font id="school"></font></h9></strong></li>
              <li class='list-group-item'>Admission:<strong> <h9><font id="admission"></font></h9></strong></li>
              <li class='list-group-item'>Member since:<strong> <h9><font id="date"></font></h9></strong></li></br>
              <center><button style="width: 150px;" class="btn btn-danger" id="logout">Sign out</button></center>
            </ul></br> 
	</div>
   <div class="col-md-8" id="posts_container">
    <script>
     var counter = 0;
   </script>
   </div>
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
  document.getElementById('admission').innerHTML = Admission;
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

    // Display the result in the element with id="demo"
    document.getElementById("subscription").innerHTML = days + "d:" + hours + "h:"
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
    database.ref('/posts/').orderByChild("user_id").equalTo(user.uid).once('value').then(function(snapshot){
    //Retrive data
        if(snapshot.exists)
        {
          
          var postsHtml = "";

          snapshot.forEach(function(singlePost)
          {

            counter = counter + 1;

            postsHtml += "<div class='card' data-aos='fade-up'>";

                 postsHtml += "<div class='card-header' style='background-color: transparent;'>";
                 postsHtml += "<div class='row'>";
                      postsHtml += "<div class='col-sm-1'><img height='40px' width='40px' class='rounded-circle' src='";
                      postsHtml += singlePost.val().profile;
                      postsHtml += "'></div>";

                      postsHtml += "<div class='col'>";
                          postsHtml += "<div class='row'><strong>You uploaded a post on";
                          postsHtml += "</strong></div>";
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

                 postsHtml += "<div class='card-body' style='background-color: transparent;'><img width='100%' src='";
                     postsHtml += singlePost.val().image;
                 postsHtml += "'></div>";

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

   //Upload post and store into firebase storage
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
                  postStorageRef.getDownloadURL().then(function(url)
                    {
                        var updates = {

                          Cover: url
                        }
                        return database.ref('/users/' + user.uid).update(updates);

                        alert('Cover image updated');
                                coverForm.reset();
                                window.open("profile.php", "_Self");

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
                  postStorageRef.getDownloadURL().then(function(url)
                    {
                        var updates = {

                          Profile: url
                        }
                        return database.ref('/users/' + user.uid).update(updates);

                 }).then(() => {
                              
                              //Catch the error and print it
                              if(err){
                                alert(err);
                              }
                              else{
                                alert('Profile image updated');
                                profileForm.reset();
                              }

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