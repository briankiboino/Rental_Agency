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
                  <a href='my_posts.php'>My Posts <span class='badge'>$posts</span></a>
                  ";
                  ?>
                </li>
                  <li><a href="profile.php">Edit Account</a></li>
                  <li><a href="logout.php">Sign out</a></li>
                </ul>
           </li>
            <li class="active drop-down"><a href="starter.php"><font color="white"><i class="icofont-home" style="color: #fff"></i></font></a>
              <ul>
                <li><a href="home">Home</a></li>
              </ul>
            </li>
        <li class="active drop-down"><a href="members.php"><font color="white"><i class="icofont-users" style="color: #fff"></i></font></a>
          <ul>
            <li><a href="members.php">Find students</a></li>
          </ul>
        </li>
        <li class="active drop-down"><a href="teachers.php"><font color="white"><i class="icofont-user" style="color: #50d8af;"></i></font></a>
          <ul>
            <li><a href="teachers.php">Find teachers</a></li>
          </ul>
        </li>
        <li class="active drop-down">
          <a href="messages.php">
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
          <li><a href="messages.php">Notifications</a></li>
        </ul>
      </li>
        <li>
          <form class="form-inline" method="get" action="results.php">
            <div class="form-group">
           <input type="text" class="form-control" name="upload_image" size="30" placeholder="Search post..." required="required">
           </div>
           <div style="height: 20px;"></div>
           <div>
           <button class="btn btn-success" style="height: 39px; width: 100px;" name="sub">Search</button>
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
<div class="counts section-bg" id="about">
    <center><h2><strong>My posts</strong></h2><br></center>
     <div class="col-md-12">
    <?php echo get_posts(); ?>
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
        &copy; Copyright <strong><span>Our school</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by Brian Kimutai
      </div>
    </div>
  </footer>
  <?php
   

$conn = mysqli_connect("Localhost","root","","our_school") or die("Connection was not established");

//function for inserting post



function get_posts(){

  require 'connect.php';

  $id = $_SESSION['user_id'];

  $get_posts = "SELECT * FROM posts WHERE user_id = '$id'  ORDER by 1 DESC ";

  $run_posts = mysqli_query($conn, $get_posts);

  while($row_posts = mysqli_fetch_array($run_posts)){

    $post_id = $row_posts['post_id'];
    $user_id = $row_posts['user_id'];
    $content = substr($row_posts['post_content'], 0,1000);
    $upload_image = $row_posts['upload_image'];
    $post_date = $row_posts['post_date'];

    $user = "select *from users where user_id='$user_id' AND posts='yes'";
    $run_user = mysqli_query($conn,$user);
    $row_user = mysqli_fetch_array($run_user);

    $user_image = $row_user['image'];

    //now displaying posts from database

    if($content=="No" && strlen($upload_image) >= 1){
      echo"
      <div class='row'>
        <div class='col-sm-2'>
        </div>
        <div id='posts' class='col-sm-8 text-center' data-aos='fade-right'>
        <div class='card' style='width: 800px;'>
          <div class='card-header'>       
            <img src='users/$user_image' class='rounded-circle' width='35px' height='35px' class='rounded-circle'>
              <h10><small style='color:black;'>You updated a post on <strong>$post_date</strong></small></10>
          </div>
          <div class='card-body'>
              <center>
              <img id='posts-img' src='imagepost/$upload_image' style='height:500px; width: 100%;'>
              </center>
          </div>
          <div class='card-footer' style='height: 60px;'>
           <a href='single.php?post_id=$post_id' style='float:left;'><button class='btn btn-success'>View</button></a>
           <a href='delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-danger'>Delete</button></a>
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
            <img src='users/$user_image' class='rounded-circle' width='35px' height='35px' class='rounded-circle'>
              <h10><small style='color:black;'>You updated a post on <strong>$post_date</strong></small></10>
          </div>
          <div class='card-body'>
              <center>
              <img id='posts-img' src='imagepost/$upload_image' style='height:500px; width: 100%;'>
              </center>
          </div>
          <div class='card-footer' style='height: 60px;'>
          <a href='single.php?post_id=$post_id' style='float:left;'><button class='btn btn-success'>View</button></a>
          <a href='delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-danger'>Delete</button></a>
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
            <img src='users/$user_image' class='rounded-circle' width='35px' height='35px' class='rounded-circle'>
              <h10><small style='color:black;'>You pdated a post on <strong>$post_date</strong></small></10>
          </div>
          <div class='card-body'>
              <center>
              <img id='posts-img' src='imagepost/$upload_image' style='height:500px; width: 100%;'>
              </center>
          </div>
          <div class='card-footer' style='height: 60px;'>
          <a href='single.php?post_id=$post_id' style='float:left;'><button class='btn btn-success'>View</button></a>
          <a href='delete_post.php?post_id=$post_id' style='float:right;'><button class='btn btn-danger'>Delete</button></a>
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




   function single_post()
    {
      if(isset($_GET['first_name'])){
                $First_name = $_GET['first_name'];
                   if(isset($_GET['last_name'])) {
                    $Last_name = $_GET['last_name'];
      if (isset($_GET['post_id'])) {
        global $conn;

        $get_id = $_GET['post_id'];
        $get_post = "SELECT * FROM `posts` WHERE `post_id` = '$get_id'";
        $run_post = mysqli_query($conn,$get_post);
        $row_posts = mysqli_fetch_array($run_post);
            
            $post_id = $row_posts['post_id'];
            $user_id = $row_posts['user_id'];
            $content = $row_posts['post_content'];
            $upload_image = $row_posts['upload_image'];
            $post_date = $row_posts['post_date'];

            $user = "SELECT * FROM `student_details` WHERE `user_id` = '$user_id' AND `posts` = 'yes'";
            $run_user = mysqli_query($conn,$user);
            $row_user = mysqli_fetch_array($run_user);

            $username = $row_user['username'];
            $user_image = $row_user['image'];

            $user_comment = $_SESSION['username'];
            $get_comment = "SELECT * FROM `student_details` WHERE `username` = '$user_comment'";

            $run_comment = mysqli_query($conn,$get_comment);
            $row_comments = mysqli_fetch_array($run_comment);

            $user_comment_id = $row_comments['user_id'];
            $user_comment_name = $row_comments['username'];

            if (isset($_GET['post_id'])) {
              $post_id = $_GET['post_id'];

            }

            //$get_post = "SELECT post_id FROM `users` WHERE `post_id` = '$post_id'";
            //$run_post = mysqli_query($con, $get_post);
           
            $post_id = $_GET['post_id'];

            $post = $_GET['post_id'];
            $get_user = "SELECT * FROM `posts` WHERE `post_id` = '$post'";
            $run_user = mysqli_query($conn,$get_user);
            $row = mysqli_fetch_array($run_user);

            $p_id = $row['post_id'];

            if ($p_id != $post_id) {
              echo "<script>alert('ERROR')</script>";
              echo "<script>window.open('home.php','_self')</script>";
            }
            else{
              if($content=="No" && strlen($upload_image) >= 1){
      echo"
      <div class='row'>
        <div class='col-sm-3'>
        </div>
        <div id='posts' class='col-sm-6'>
          <div class='row'>
            <div class='col-sm-2'>
            <p><img src='$user_image' class='img-circle' width='100px' height='100px'></p>
            </div>
            <div class='col-sm-6'>
              <h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$username</a></h3>
              <h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
            </div>
            <div class='col-sm-4'>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-12'>
              <img id='posts-img' src='imagepost/$upload_image' style='height:350px;'>
            </div>
          </div><br>
        </div>
        <div class='col-sm-3'>
        </div>
      </div><br><br>
      ";
    }

    else if(strlen($content) >= 1 && strlen($upload_image) >= 1){
      echo"
      <div class='row'>
        <div class='col-sm-3'>
        </div>
        <div id='posts' class='col-sm-6'>
          <div class='row'>
            <div class='col-sm-2'>
            <p><img src='$user_image' class='img-circle' width='100px' height='100px'></p>
            </div>
            <div class='col-sm-6'>
              <h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$username</a></h3>
              <h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
            </div>
            <div class='col-sm-4'>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-12'>
              <p>$content</p>
              <img id='posts-img' src='imagepost/$upload_image' style='height:350px;'>
            </div>
          </div><br>
        </div>
        <div class='col-sm-3'>
        </div>
      </div><br><br>
      ";
    }

    else{
      echo"
      <div class='row'>
        <div class='col-sm-3'>
        </div>
        <div id='posts' class='col-sm-6'>
          <div class='row'>
            <div class='col-sm-2'>
            <p><img src='$user_image' class='img-circle' width='100px' height='100px'></p>
            </div>
            <div class='col-sm-6'>
              <h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$username</a></h3>
              <h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
            </div>
            <div class='col-sm-4'>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-12'>
              <h3><p>$content</p></h3>
            </div>
          </div><br>
        </div>
        <div class='col-sm-3'>
        </div>
      </div><br><br> 
      ";
      //else not ending
    }
         include("comments.php");

          echo "
                  <div class='row'>
                    <div class='col-md-6 col-md-offset-3'>
                       <div class='panel panel-info'>
                           <div class='panel-body'>
                             <form action='' method='post' class='form-inline'>
                               <textarea placeholder='Write your comment here!' class='pb-cmnt-textarea'
                               name='comment'>
                               </textarea>
                               <button class='btn btn-info pull-right' name='reply'>Comment</button>
                             </form>
                           </div>
                       </div>
                    </div>
                  </div>

          ";

          if (isset($_POST['reply'])) {
              $comment = htmlentities($_POST['comment']);

              if ($comment == "") {
                  echo "<script>alert('Enter your comment')</script>";
                    echo "<script>window.open('single.php?post_id=$post_id','_self')</script>";
              }
              else{
                $insert_comment = "INSERT INTO `comments`(`post_id`, `user_id`, `comment`, `comment_author`, `date`) VALUES ('$post_id','$user_id','$comment','$user_comment_name',NOW())";

                $run = mysqli_query($conn,$insert_comment);

                if ($run) {
                  echo "<script>alert('Thank you for your comment')</script>";
                      echo "<script>window.open('single.php?post_id=$post_id','_self')</script>";
                }
              }
          }
            }


      }
    }
  }
}

    function search_user()
    {
      if(isset($_GET['first_name'])){
                $First_name = $_GET['first_name'];
                   if(isset($_GET['last_name'])) {
                    $Last_name = $_GET['last_name'];
                     echo "$First_name $Last_name ";
      global $conn;

      if (isset($_GET['search_user_btn'])) {
        $search_query = htmlentities($_GET['search_user']);

        $get_user = "SELECT * FROM `users` WHERE `firstName` LIKE '%$search_query%' OR `lastName` LIKE '%$search_query%' OR `username` LIKE '%$search_query%'";
      }
      else{
        $get_user = "SELECT * FROM `users`";
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
                       <div class='row' id='find_students'>
                           <div class='col-sm-4'>
                             <a href='user_profile.php?u_id=$user_id'>
                               <img src='users/$user_image' width='150px' height='140px'
                                title='$user_name' style='float: left;margin: 1px;'/>
                             </a>
                           </div><br><br>
                           <div class='col-sm-6'>
                             <a style='text-decoration: none; cursor:pointer; color: #3897f0;' href='user_profile.php?u_id=$user_id'>
                                <strong><h3>$firstName  $lastName</h3></strong>
                                <strong><h4>$user_school</h4></strong>
                               
                             </a>
                           </div>
                           <div class='col-sm-3'>
                           </div>
                       </div>
                    </div>
                    <div class='col-sm-4'>
                    </div>
                  </div><br>
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
