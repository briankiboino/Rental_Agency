<?php
session_start();


if (!isset($_SESSION['user_id'])) {
 header('Location: admin.php');
}

$id = $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Messages</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- title icon -->
  <link href="images/donate.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="http://use.fontawesome.com/releases/v5.0.6/css/all.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="bg-danger">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span><font color="white">Blood Care</font></span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="admin.php"><font color="white">Home</font></a></li>
          <li><a href="donors.php"><font color="white">Donors</font></a></li>
          <li><a href="recepients.php"><font color="white">Recepients</font></a></li>
          <li><a href="match.php"><font color="white">Match</font></a></li>
           <li class="drop-down"><a href=""><font color="white">Donations</font></a>
            <ul>
              <li><a href="view_donations.php">View Donations</a></li>
              <li><a href="confirm_donations.php">Confirm Donations</a></li>
            </ul>
          </li>
           <li class="drop-down"><a href=""><font color="white">Administrators</font></a>
            <ul>
              <li><a href="add_admin.php">Add administrator</a></li>
              <li><a href="remove_admin.php">Remove Admnistrator</a></li>
            </ul>
          </li>
          <li><a href="messages.php"><font color="white">Messages</font></a></li>
          <li><a href="logout.php"><button class="btn" style="background-color: white; font-size: 12px; height: 30px; width: 100px;">Sign out</button></a></li>
        </ul>
      </nav>

    </div>
  </header>
  <main id="main">
<section style="overflow: scroll; max-height: 910px; height: 830px;">
  <div class="section-title">
    <h3>Messages</h3>
  </div>
<div class="container">
<?php
       
       require_once 'connect.php';

      $select_all_messages = "SELECT * FROM messages WHERE seen = 'No'";
       $execute_query = mysqli_query($conn,$select_all_messages);
       if ($execute_query) {
        while ($row = mysqli_fetch_assoc($execute_query)) {
          $name = $row['name'];
          $email = $row['email'];
          $message = $row['message'];
          $date_time = $row['date_time'];

          echo "
          <div class='card'>
              <div class='card-header'>
                  <h5 style='float: left;'>$name</h5><h6 style='float: right'>$date_time</h6>
              </div>
              <div class='card-body'>
              $message
              </div>
              <div class='card-footer'>
              <form action='messages.php?email=$email' method='POST'>
              <div class='input-group mb-3'>
                <input type='text' class='form-control' placeholder='Enter reply' required='required' name='reply'>
                <div class='input-group-append'>
                  <button class='btn btn-success' name='send_reply'>Send</button>
                </div>
              </div>
              </form>
              </div>
              </div></br>
          ";
        }
       }
?>
<?php
      
      require_once 'connect.php';

      if (isset($_POST['send_reply'])) {
         if (isset($_GET['email'])) {
          $email = $_GET['email'];
          $reply = $_POST['reply'];
          $subject = "Response to your query.";
          $from = "From: brianoproff@gmail.com"; 
          $message_status = "Yes";

           $mail_client = mail($email, $subject, $reply, $from);

           if ($mail_client) {
            $update_message_status = "UPDATE messages SET seen = '$message_status' WHERE email = '$email'";
            $execute_update_query = mysqli_query($conn,$update_message_status);
            if ($execute_update_query) {
              echo "<script>window.alert('Your message has been successfully sent')</script>";
            }
            else{
              echo "<script>window.alert('An error occured while processing your request')</script>";
            }
           }
           else{
            echo "<script>window.alert('An error occured while trying to send your message.')</script>";
           }
         }
      }
?>
</div>
</section>
<section>

</section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="bg-danger">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Blood Care</span></strong>.<a href="admin_login.php"> <font color="white">All Rights Reserved</font></a>
      </div>
      <div class="credits">
        Designed by <a href="http://www.halsodasgenerationlimited.com/brian_kim.html">Brian Kimutai</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top" style="background-color: #50d8af;"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
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

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>