<!DOCTYPE html>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
 header('Location: index.php');
}

$id = $_SESSION['user_id'];

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Find students</title>
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
</head>

<body>
  <header id="header" style="background-color: #178FAB;">
    <div class="containe-fluid">

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
                  <a href='teacher_my_posts.php'>My Posts <span class='badge'>$posts</span></a>
                  ";
                  ?>
                </li>
                  <li><a href="teachers_profile.php">Edit Account</a></li>
                  <li><a href="logout.php">Sign out</a></li>
                </ul>
           </li>
             <li class="active drop-down"><a href="teacher_starter.php"><font color="white"><i class="icofont-home" style="color: #fff"></i></font></a>
              <ul>
                <li><a href="home">Home</a></li>
              </ul>
            </li>
        <li class="active drop-down"><a href="teacher_members.php"><font color="white"><i class="icofont-users" style="color: #fff"></i></font></a>
          <ul>
            <li><a href="teacher_members.php">Find students</a></li>
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

  <main id="main">
   <section class="counts section-bg" id="about">
   	<center>
    <h4>Find Students</h4>
    </center>
     <div class="container">
    		<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-3">
			</div>
			<div class="col-sm-6">
				<form class="search-form form-inline" action="">
					<input type="text" style="width: 85%;" class="form-control" placeholder="Search Field" required="required" name="search_user">
					<button class="btn btn-info" type="submit" name="search_user_btn">Search</button>
				</form>
			</div>
			<div class="col-sm-3">
			</div>
			</div><br><br>
            <?php  search_user(); ?>
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
  <?php
   

$conn = mysqli_connect("Localhost","root","","our_school") or die("Connection was not established");

  
      
  function search_user()
    {
    	global $conn;

    	if (isset($_GET['search_user_btn'])) {
    		$search_query = htmlentities($_GET['search_user']);

    		$get_user = "SELECT * FROM `users` WHERE `firstName` LIKE '%$search_query%' OR `lastName` LIKE '%$search_query%' OR `username` LIKE '%$search_query%'";
    	}
    	else{
    		$get_user = "SELECT * FROM `users` WHERE role = 'Student'";
    	}

    	$run_user = mysqli_query($conn,$get_user);

    	while ($row_user = mysqli_fetch_array($run_user)) {
    		$user_id = $row_user['user_id'];
    		$firstName = $row_user['firstName'];
    		$lastName = $row_user['lastName'];
    		$user_name = $row_user['username'];
    		$user_image = $row_user['image'];
    		$user_school = $row_user['school'];

    		echo "
                  <div class='row'>
                    <div class='col-sm-3'>
                    </div>
                    <div class='col-sm-6'>
                       <div class='card' id='find_students'>
                          <div class='card-body'>
                             <div class='row'>
                                 <div class='col-md-5 m-1'>
                                   <a href='user_profile.php?u_id=$user_id'>
                                     <img src='users/$user_image'  width='100%' height='170px'
                                      title='$user_name' style='float: left;margin: 1px;'/>
                                   </a>
                                   </div>
                                   <div class='col-md-6'>
                                   <a style='text-decoration: none; cursor:pointer; color: #3897f0;' href='user_profile.php?u_id=$user_id'>
                                      <strong><h5 style='margin-top: 80px;'>$firstName  $lastName</h5></strong>
                                      <strong><h5>$user_school</h5></strong>     
                                   </a>
                                   <a style='text-decoration: none; cursor:pointer;' href='teacher_messages.php?u_id=$user_id'>
                                   <strong><h5><font color='red'>Send message</font></h5></strong> 
                                   </a> 
                                   </div>
                             </div>
                           </div>
                         </div>
                    </div>
                    <div class='col-sm-3'>
                    </div>
                  </div><br>
    		";
    	}
    }




?>


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
