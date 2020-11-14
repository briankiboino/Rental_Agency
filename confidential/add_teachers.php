<?php
session_start();

if (!isset($_SESSION['user_id'])) {
 header('Location: index.php');
}

$id = $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Teachers</title>
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
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span><font color="white"><strong>MASOMO KWETU</strong></font></span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block bg-default">
        <ul>
          <li class="active"><a href="admin.php"><font color="white">Home</font></a></li>
          <li class="active drop-down">
          	<a href="#"><font color="white">Students</font></a>
          	<ul>
          		<li><a href="view_students.php">View students</a></li>
          		<li><a href="suspend_students.php">Suspend students</a></li>
          	</ul>
          </li>
          <li class="active drop-down">
          	<a href="#"><font color="white">Teachers</font></a>
          	<ul>
          		<li><a href="view_teachers.php">View teachers</a></li>
          		<li><a href="add_teachers.php">Add teachers</a></li>
          		<li><a href="suspend_teachers.php">Suspend teachers</a></li>
          	</ul>
          </li>
          <li class="active drop-down"><a href="subscriptions.php"><font color="white">Subscriptions</font></a></li>
          <li class="active drop-down">
          	<a href="#h"><font color="white">Administrators</font></a>
          	<ul>
          		<li><a href="add_administrators.php">Add administrators</a></li>
              <li><a href="remove_administrators.php">Remove administrators</a></li>
          	</ul>
          </li>
          <li><a class="bg-danger rounded" href="logout.php"><font color="white">Sign out</font></a></li>
        </ul>
      </nav>

    </div>
  </header>

  <main>
   <section class="counts section-bg">
    <div class="container">
        <div class="col text-center" data-aos='fade-up' data-aos-delay='200;'>
            <div class="count-box">
              <h3>
                <font color="red">
                  Enter details of teacher here
                </font>
              </h3></br>
              <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
             <input type="text" name="first" required="required" class="form-control" placeholder="First name"></br>
             <input type="text" name="last" required="required" class="form-control" placeholder="Last name"></br>
             <input type="email" name="email" required="required" class="form-control" placeholder="Email"></br>
             <input type="text" name="school" required="required" class="form-control" placeholder="High School"></br>
             <input type="text" name="subject" required="required" class="form-control" placeholder="Preferred subject"></br>
             <input type="password" name="password" required="required" class="form-control" placeholder="Password"></br>
             <input type="password" name="confirm" required="required" class="form-control" placeholder="Confirm password"></br>
             <center>
             <button class="rounded" name="add_teacher" style="background: #50d8af; width: 170px; height: 40px; border-color: transparent;">
              <font color="white">
              Add teacher
              </font>
              </button>
            </center>
             <br><br>
             </form>
           </div>
         </div>
    </div>
<?php
                         
          require 'connect.php';

          if (isset($_POST['add_teacher'])) {     

          $First_name = $_POST['first'];
          $Last_name  = $_POST['last'];
          $Email = $_POST['email'];
          $School     = $_POST['school'];
          $Password   = $_POST['password'];
          $Confirm    = $_POST['confirm'];
          $Subject = $_POST['subject'];
          $status = "Offline";
          $role = "Teacher";
          $cover_image = "user_sunflower.jpg";
          $profile_image = "user_turqoise.jpg";
          $newgid = sprintf('%05d', rand(0, 999999));
          $Username = strtolower($First_name . "_" . $Last_name . "_" . $newgid);
          $from = "From: brianoproff@gmail.com";
          $subject = "Request for Masomo Kwetu Registration Report";
          $message = "We received your request to become a teacher in Masomo Kwetu. We are happy to inform that we reveiwed your application and we you were successfully chosen. The following are your account details. Username: ".$Username." Password: ".$Password.". Kindly proceed to masomokwetu.com and log in using these details and change your password. Incase of any error while logging in dont hesitate to contact us. Thank you for choosing Masomo Kwetu. Tusome Kikwetu";

          if($Password == $Confirm){
                    if(strlen($Password) < 6){
                       echo"<script>alert('Password should have a minimum of 6 characters!')</script>";
                       exit();
                    }
                    else{

                      $check_user = "SELECT * FROM users WHERE email = '$Email' AND school = '$School'";
                      $run_query = mysqli_query($conn,$check_user);
                      $count = mysqli_num_rows($run_query);
                      if($count > 0 ){
                        echo "<script>alert('Registration unsuccessful. A user with the same email and high school exists!')</script>";
                      }
                        else{

                     $pass = sha1($Password);

                     $sqli = "INSERT INTO users(firstName,lastName,email,username,school,password,u_cover,image,reg_date,status,role,subject) VALUES('$First_name','$Last_name','$Email','$Username','$School','$pass','$cover_image','$profile_image',NOW(),'$status','$role','$Subject')";
                     $result = mysqli_query($conn,$sqli);

                     if ($result) {
                      $mail = mail($Email, $subject, $message, $from);
                       if ($mail) {
                         echo "<script>alert('You have successfully added $Username to the system.')</script>";
                       }
                       else{
                      echo "<script>alert('An error occured.')</script>";
                     }
                     }
                     else{
                      echo "<script>alert('An error occured. Please give us relevant details.')</script>";
                     }
                   }
                   }
                 }
               }

?>

 
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
        &copy; Copyright <strong><span><a href="admin_login.php"><font color="white">Masomo Kwetu</font></a></span></strong>. <a href="admin_login.php"><font color="white">All Rights Reserved</font></a>
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