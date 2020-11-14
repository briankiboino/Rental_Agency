<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
 header('Location: index.php');
}

$id = $_SESSION['user_id'];


?>
<html>
<head>
	<title>My profile</title>
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
  #own-posts{
    border: 5px solid #e6e6e6;
    padding: 40px 50px;
    width: 100%;
  }
 
</style>
<body>
  <header id="header" style="background-color: #178FAB;">
    <div class="container-fluid">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span><font color="white"><strong>OUR SCHOOL</strong></font></span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block bg-default">
       
         <?php 
         require 'connect.php';

           $get_user = "SELECT * FROM `users` WHERE `user_id` = '$id'";
           $run_user = mysqli_query($conn,$get_user);
           $row = mysqli_fetch_array($run_user);

           $user_id = $row['user_id'];
           $firstName = $row['firstName'];
           $lastName = $row['lastName'];
           $user_name = $row['username'];
           $school = $row['school'];
           $admission = $row['admission'];
           $image = $row['image'];

           $user_posts = "SELECT * FROM `posts` WHERE `user_id` = '$user_id'";
           $run_user_posts = mysqli_query($conn,$user_posts);
           $posts = mysqli_num_rows($run_user_posts);
         
         ?>
        <ul>
          <li class="active drop-down">
            <a href="">
              <?php

              require 'connect.php';

                  
                  $sqli = "SELECT * FROM users WHERE user_id = '$id'";
                  $result = mysqli_query($conn,$sqli);
                  if($result){
                   while($row=mysqli_fetch_assoc($result)) {
                         echo"   
                            <img src='users/$image' width='30px' height='30px' class='rounded-circle'>
                             ";
                     }
                   }

              ?>

               <?php 

               require'connect.php';

                 $sqli = "SELECT * FROM users WHERE user_id = '$id'";
                  $result = mysqli_query($conn,$sqli);
                  if($result){
                   while($row=mysqli_fetch_assoc($result)) {
                       $first_name = $row['firstName'];
                       $last_name = $row['lastName'];
                     }
                     echo "<font color='white'>".$first_name." ".$last_name."</font>";
                   }

               ?>
                 
             </a>
              <ul>
                  <li>
                    <?php
                    echo "
                  <a href='teachers_posts.php'>My Posts <span class='badge'>$posts</span></a>
                  ";
                  ?>
                </li>
                  <li><a href="teachers_profile.php">Edit Account</a></li>
                  <li><a href="logout.php">Sign out</a></li>
                </ul>
           </li>
             <li class="active drop-down"><a href="teacher_starter.php"><font color="white"><i class="icofont-home" style="color: #fff"></i></font></a>
              <ul>
                <li><a href="teacher_starter.php">Home</a></li>
              </ul>
            </li>
        <li class="active drop-down"><a href="video_upload.php"><font color="white"><i class="icofont-video" style="color: #fff"></i></font></a>
          <ul>
            <li><a href="video_upload.php">Upload video tuorial</a></li>
          </ul>
        </li>
        <li class="active drop-down">
          <a href="teacher_messages.php">
            <font color="white"><i class="icofont-notification" style="color: #fff"></i>
              <span class='counter counter-lg' data-hover="yes">
                <?php
                 $sql = "SELECT * FROM user_messages WHERE user_to = '$id' AND msg_seen = 'no'";
                   $query = mysqli_query($conn,$sql);
                   $count = mysqli_num_rows($query);
                   if($count == 0){}
                    else{
                 echo "<font color='orange'>$count</font>";
                    }
                  ?>
                  
                </span>
              </font>
            </a>
          <ul>
          <li><a href="teacher_messages.php">Notifications</a></li>
        </ul>
      </li>
        </ul>
      </nav>

    </div>
  </header>
  <section>
     <center><h3><strong><?php
     $user_id = $_SESSION['user_id'];

             require_once 'connect.php';

             $select_user = "SELECT * FROM `users` WHERE `user_id` = '$user_id'";
               $run = mysqli_query($conn,$select_user);
               $row = mysqli_fetch_array($run);

                   $user_id = $row['user_id'];
           $firstName = $row['firstName'];
           $lastName = $row['lastName'];

     echo "$firstName  $lastName"; 

     ?></strong></h3></center>
  <div class="container">
    <div class="row">
	<?php
         $user_id = $_SESSION['user_id'];
         if($user_id < 0 || $user_id == ""){
         echo "<script>window.open('social_home.php','_self')</script>";
     }else{
	?>
	  <div class="col-md-5 m-1">
	  	 <?php 
	  	   $user_id = $_SESSION['user_id'];
	  	    
          require_once 'connect.php';

	  	   
	  	    $select_user = "SELECT * FROM `users` WHERE `user_id` = '$user_id'";
            $run = mysqli_query($conn,$select_user);
            $row = mysqli_fetch_array($run);

            $name = $row['username']; 
	  	}
	  	 ?>

	  	 <?php  

            $user_id = $_SESSION['user_id'];

	  	       require_once 'connect.php';
	  	       $select_user = "SELECT * FROM `users` WHERE `user_id` = '$user_id'";
               $run = mysqli_query($conn,$select_user);
               $row = mysqli_fetch_array($run);

                   $user_id = $row['user_id'];
				   $firstName = $row['firstName'];
				   $lastName = $row['lastName'];
				   $user_name = $row['username'];
				   $school = $row['school'];
				   $admission = $row['admission'];
				   $image = $row['image'];
				   $reg_date = $row['reg_date'];
				   $status = $row['status'];
				   $posts = $row['posts'];

				echo "
                      <div class='col' data-aos='fade-right'>
                      	<center>
                      		<div style='background-color: #e6e6e6; height: 550px;' class='col'>
                      			<h3>Information about</h3>
                      			<img src='users/$image' class='rounded-circle' width='150' height='150'>
                      			<br><br>
                      			<ul class='list-group'>
                      				<li class='list-group-item'>Name:<strong>$firstName $lastName</strong></li>
                      				<li class='list-group-item'>Status:<strong style='color: grey;'>$status</strong></li>
                      				<li class='list-group-item'>School:<strong>$school</strong></li>
                      				<li class='list-group-item'>Admission:<strong>$admission</strong></li>
                      				<li class='list-group-item'>Member since:<strong>$reg_date</strong></li>
                      			</ul></br>	
				";

				$id = $_SESSION['user_id'];
				$get_user = "SELECT * FROM `users` WHERE `user_id`= '$id'";
				$run_user= mysqli_query($conn,$get_user);
				$row = mysqli_fetch_array($run_user);

				$userown_id = $row['user_id'];

				if($userown_id == $user_id){
				 echo"<a href='teachers_profile.php' class='btn btn-success'>Edit profile</a><br><br><br>";
			}
			    echo"
			       </div>
			   </center>
			     ";
	  	 ?>
      </div>
      </div>
	  	 <div class="col-md-6">
	  	 	
	  	 	<?php  
                 require_once 'connect.php';

                $user_id = $_SESSION['user_id'];

             $get_posts = "SELECT * FROM `posts` WHERE `user_id` = '$user_id' ORDER BY 1 DESC LIMIT 5";
             $run_posts = mysqli_query($conn,$get_posts);

             while($row_posts=mysqli_fetch_array($run_posts)){

              $post_id = $row_posts['post_id'];
              $user_id = $row_posts['user_id'];
              $content = $row_posts['post_content'];
              $upload_image = $row_posts['upload_image'];
              $post_date = $row_posts['post_date'];

              $user = "SELECT * FROM `users` WHERE `user_id` = '$user_id' AND `posts` = 'yes'";
              $run_user = mysqli_query($conn,$user);
              $row_user = mysqli_fetch_array($run_user);

              $user_name = $row_user['username'];
              $firstName = $row_user['firstName'];
              $lastName = $row_user['lastName'];
              $user_image = $row_user['image'];

              if($content=="No" && strlen($upload_image) >= 1){
              echo "
                   <div class='card' data-aos='fade-right' style='width: 720px;'>
                   	<div class='card-header'>
                    <img src='users/$user_image' class='rounded-circle' width='40px' height='40px'>                  		
                   			<h10><small style='color: black;'>You updated a post on  <strong>$post_date</strong></small></h10>
                   	</div>
                   	<div class='card-body'>
                   		<div class='col-sm-12'>
                        $content
                   			<img id='posts-img' src='imagepost/$upload_image' style='height: 450px; width: 100%;'>
                   		</div>
                    </div><br>
                    <div class='card-footer'>
                    <a href='teacher_single.php?post_id=$post_id' style='float:left;'><button class='btn btn-success'>View</button></a>
                   <a href='teacher_delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-danger'>Delete</button></a>
                   </div>
                  </div></br>

              ";
          }

          else if(strlen($content) >= 1 && strlen($upload_image) >= 1) {
              echo "

             <div class='card' data-aos='fade-left' style='width: 720px;'>
                    <div class='card-header'>
                    <img src='users/$user_image' class='rounded-circle' width=40px' height='40px'>                     
                        <h10><small style='color: black;'>You updated a post on  <strong>$post_date</strong></small></h10>
                    </div>
                    <div class='card-body'>
                      <div class='col-sm-12'>
                      $content
                        <img id='posts-img' src='imagepost/$upload_image' style='height: 450px; width: 100%;'>
                      </div>
                    </div><br>
                    <div class='card-footer'>
                    <a href='teacher_single.php?post_id=$post_id' style='float:left;'><button class='btn btn-success'>View</button></a>
                   <a href='teacher_delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-danger'>Delete</button></a>
                   </div>
                  </div></br>
                   
              ";
            }

            else{
              echo "

               <div class='card' data-aos='fade-right' style='width: 720px;'>
                    <div class='card-header'>
                    <img src='users/$user_image' class='rounded-circle' width='40px' height='40px'>                     
                        <h10><small style='color: black;'>You updated a post on  <strong>$post_date</strong></small></h10>
                    </div>
                    <div class='card-body'>
                      <div class='col-sm-12'>
                        <img id='posts-img' src='imagepost/$upload_image' style='height: 450px; width: 100%;'>
                      </div>
                    </div><br>
                    <div class='card-footer'>
                    <a href='teacher_single.php?post_id=$post_id' style='float:left;'><button class='btn btn-success'>View</button></a>
                   <a href='teacher_delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-danger'>Delete</button></a>
                   </div>
                  </div></br>
                   
              ";

            }

        }

	  	 	?>
       </div>
	  
</div>

</div>
</section>
 <footer id="footer" style="background-color: #178FAB">
    <div class="footer-top" style="background-color: #178FAB">
      <div class="container" style="background-color: #178FAB">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h3>OUR SCHOOL</h3>
             Welcome to Our School, an online schooling program for Kenyan students
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
              <strong>Email:</strong> ourschool@gmail.com<br>
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
        &copy; Copyright <strong><span>Our School</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Brian Kimutai
      </div>
    </div>
  </footer>

 <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
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

 