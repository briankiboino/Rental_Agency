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

  <title>Search results</title>
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
                 
               </font>
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
                <li><a href="teacher_starter.php">Home</a></li>
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
        <li>
          <form class="form-inline my-1 my-lg-1 ml-auto" method="get" action="teacher_results.php">
            <div class="form-group">
           <input type="text" class="form-control" name="search_post" size="30" placeholder="Search post..." required="required">
           </div>
           <div style="height: 20px;"></div>
           <div>
           <button class="btn btn-success btn-md my-2 my-sm-0 ml-1" style="height: 39px; width: 100px;" name="search">Search</button>
         </div>
          </form>
        </li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">
   <section class="counts section-bg" id="about">
     <div class="container">
          <center><h2>View your results here</h2></center>
          <?php results();?>
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
        &copy; Copyright <strong><span>Mamba</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Brian Kimutai
      </div>
    </div>
  </footer>
  <?php

  function results(){

   global $conn;

    if (isset($_GET['search'])) {
      $search_query = htmlentities($_GET['search_post']);

      $get_post = "SELECT * FROM `posts` WHERE `post_content` LIKE '%$search_query%' OR `upload_image` LIKE '%$search_query%'";
      $run_query = mysqli_query($conn,$get_post);

      while ($row_posts = mysqli_fetch_assoc($run_query)) {
        
      $post_id = $row_posts['post_id'];
      $user_id = $row_posts['user_id'];
      $upload_image = $row_posts['upload_image'];
      $post_date = $row_posts['post_date'];
      $content = $row_posts['post_content'];

      $user = "select *from users where user_id='$user_id' AND posts='yes'";
      $run_user = mysqli_query($conn,$user);
      $row_user = mysqli_fetch_array($run_user);

      $user_image = $row_user['image'];
      $user_name = $row_user['username'];

      if($content=="No" && strlen($upload_image) >= 1){
      echo"
      <div class='row'>
        <div class='col-sm-2'>
        </div>
        <div id='posts' class='col-sm-8 text-center' data-aos='fade-right'>
        <div class='card' style='width: 800px;'>
          <div class='card-header'>
          <div class='row'>
            <img src='users/$user_image' class='rounded-circle' width='45px' height='45px' class='rounded-circle'>
            <div class='col'>
             <div class='row'>
              <h10><a style='text-decoration:none; margin-left: 10px; cursor:pointer;color #3897f0;' href='teacher_user_profile.php?u_id=$user_id'>$user_name</a></h10>
              </div>
               <div class='row'>
              <h10><small style='color:black; margin-left: 10px;'>Updated a post on <strong>$post_date</strong></small></10>
              </div>
              </div>
              </div>
              <div class='row'>
               $content
              </div>
          </div>
          <div class='card-body'>
              <center>
             
              <img id='posts-img' src='imagepost/$upload_image' style='height:500px; width: 100%;'>
              </center>
          </div>
          <div class='card-footer' style='height: 60px;'>
          <a href='teacher_single.php?post_id=$post_id'><button class='btn btn-info' name='comment' style='float: right;'>Comment</button></a>
          </div>
          </div>
          <br>
        </div>
        <div class='col-sm-2'>
        </div>
      </div><br><br>
      ";
    }

    else if(strlen($content) >= 1 && strlen($upload_image) >= 1){
      echo"
      <div class='row'>
        <div class='col-sm-2'>
        </div>
        <div id='posts' class='col-sm-8 text-center' data-aos='fade-up'>
        <div class='card' style='width: 800px;'>
          <div class='card-header'>    
             <div class='row'>
            <img src='users/$user_image' class='rounded-circle' width='45px' height='45px' class='rounded-circle'>
            <div class='col'>
             <div class='row'>
              <h10><a style='text-decoration:none; margin-left: 10px; cursor:pointer;color #3897f0;' href='teacher_user_profile.php?u_id=$user_id'>$user_name</a></h10>
              </div>
               <div class='row'>
              <h10><small style='color:black; margin-left: 10px;'>Updated a post on <strong>$post_date</strong></small></10>
              </div>
              </div>
              </div>
              <div class='row'>
               $content
              </div>
          </div>
          <div class='card-body'>
              <center>
              <img id='posts-img' src='imagepost/$upload_image' style='height:500px; width: 100%;'>
              </center>
          </div>
          <div class='card-footer' style='height: 60px;'>
          <a href='teacher_single.php?post_id=$post_id'><button class='btn btn-info' name='comment' style='float: right;'>Comment</button></a>
          </div>
          </div>
          <br>
        </div>
        <div class='col-sm-2'>
        </div>
      </div><br><br>
      ";
    }

    else{
      echo"
     <div class='row'>
        <div class='col-sm-2'>
        </div>
        <div id='posts' class='col-sm-8 text-center' data-aos='fade-left'>
        <div class='card' style='width: 800px;'>
          <div class='card-header'>     
          <div class='row'>
            <img src='users/$user_image' class='rounded-circle' width='45px' height='45px' class='rounded-circle'>
            <div class='col'>
             <div class='row'>
              <h10><a style='text-decoration:none; margin-left: 10px; cursor:pointer;color #3897f0;' href='teacher_user_profile.php?u_id=$user_id'>$user_name</a></h10>
              </div>
               <div class='row'>
              <h10><small style='color:black; margin-left: 10px;'>Updated a post on <strong>$post_date</strong></small></10>
              </div>
              </div>
              </div>
              <div class='row'>
               $content
              </div>
          </div>
          <div class='card-body'>
              <center>
              <img id='posts-img' src='imagepost/$upload_image' style='height:500px; width: 100%;'>
              </center>
          </div>
          <div class='card-footer' style='height: 60px;'>
          <a href='teacher_single.php?post_id=$post_id'><button class='btn btn-info' name='comment' style='float: right;'>Comment</button></a>
          </div>
          </div>
          <br>
        </div>
        <div class='col-sm-2'>
        </div>
      </div><br><br>
      ";
    }

      }

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
