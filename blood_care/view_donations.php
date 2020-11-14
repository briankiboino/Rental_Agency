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

  <title>View Donations</title>
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
<center><h4>Blood Donations</h4></center>
  <div class="container-fluid" style="overflow: scroll; height: 910px; max-height: 910px;">
    <table border="1px" width="100%" cellpadding="1px" cellspacing="1px">
      <tr>
        <th><center>Donation_id</center></th>
        <th><center>Donor</center></th>
        <th><center>Recepient</center></th>
        <th><center>Blood group</center></th>
        <th><center>Deadline for Donation</center></th>
        <th><center>Recepient hospital</center></th>
        <th><center>Status</center></th>
      </tr>
<?php

              require 'connect.php';
                  
                  $sqli = "SELECT * FROM blood_donations";
                  $result = mysqli_query($conn,$sqli);
                  if($result){
                   while($row=mysqli_fetch_assoc($result)) {
                             echo "<tr>";
                             echo "<td><center>".$row['id']."</center></td>";
                             echo "<td><center>".$row['donor']."</center></td>";
                             echo "<td><center>".$row['recepient']."</center></td>";
                             echo "<td><center>".$row['blood_group']."</center></td>";
                             echo "<td><center>".$row['deadline_for_donation']."</center></td>";
                             echo "<td><center>".$row['recepient_hospital']."</center></td>";
                             echo "<td><center>".$row['status']."</center></td>";
                             echo "</tr>";

                     }
                   }

              

?>
     </table><br><br>
  </div>
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