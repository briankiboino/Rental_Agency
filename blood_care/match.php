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

  <title>Matching</title>
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
<center><h4>Match Donor with recepient</h4></center>
  <div class="container-fluid" style="overflow: scroll; height: 910px; max-height: 910px;">
    <div class="row">
      <div class="col-md-7">
 <table border="1px" width="100%" cellpadding="1px" cellspacing="1px">
      <tr>
        <th><center>Recepient_id</center></th>
        <th><center>First name</center></th>
        <th><center>Last name</center></th>
        <th><center>Age</center></th>
        <th><center>Hospital</center></th>
        <th><center>County</center></th>
        <th><center>Blood group</center></th>
        <th><center>Number of units</center></th>
        <th><center>Deadline of donation</center></th>
        <th><center>Click to find donor</center></th>
      </tr>
<?php

              require 'connect.php';
                  
                  $sqli = "SELECT * FROM recepients WHERE status = 'Pending'";
                  $result = mysqli_query($conn,$sqli);
                  if($result){
                   while($row=mysqli_fetch_assoc($result)) {
                    $recepient_id = $row['id'];
                             echo "<tr>";
                             echo "<td><center>".$row['id']."</center></td>";
                             echo "<td><center>".$row['first_name']."</center></td>";
                             echo "<td><center>".$row['last_name']."</center></td>";
                             echo "<td><center>".$row['age']."</center></td>";
                             echo "<td><center>".$row['hospital']."</center></td>";
                             echo "<td><center>".$row['county']."</center></td>";
                             echo "<td><center>".$row['blood_group']."</center></td>";
                             echo "<td><center>".$row['units']."</center></td>";
                             echo "<td><center>".$row['deadline_for_donation']."</center></td>";
                             echo "<td><center><form action='match.php?recepient_id=$recepient_id' method='POST'><button class='btn' name='find_donor'><font color='red'>Find donor</font></button></form></center></td>";
                             echo "</tr>";

                     }
                   }

              

?>
     </table><br><br>
   </div>
   <div class="col-md-5">
<?php

        if (isset($_POST['find_donor'])) {
          if (isset($_GET['recepient_id'])) {
          $recepient_id = $_GET['recepient_id'];
        echo"
       <table border='1px' width='100%' cellpadding='1px' cellspacing='1px'>
      <tr>
        <th><center>Donor_id</center></th>
        <th><center>First name</center></th>
        <th><center>Last name</center></th>
        <th><center>Age</center></th>
        <th><center>County</center></th>
        <th><center>Blood group</center></th>
        <th><center>Click to match</center></th>
      </tr>
      ";


              require 'connect.php';
                  
                  $sqli = "SELECT * FROM donors WHERE status = 'Pending'";
                  $result = mysqli_query($conn,$sqli);
                  if($result){
                   while($row = mysqli_fetch_assoc($result)) {
                    $donor_id = $row['id'];
                             echo "<tr>";
                             echo "<td><center>".$row['id']."</center></td>";
                             echo "<td><center>".$row['first_name']."</center></td>";
                             echo "<td><center>".$row['last_name']."</center></td>";
                             echo "<td><center>".$row['age']."</center></td>";
                             echo "<td><center>".$row['county']."</center></td>";
                             echo "<td><center>".$row['blood_group']."</center></td>";
                             echo "<td><center><form action='match.php?recepient_id=$recepient_id&donor_id=$donor_id' method='POST'><button class='btn' name='match'><font color='orange'>Match with recepient</font></button></form></center></td>";
                             echo "</tr>";

                     }
                   }
       } 
       }      

?>
<?php
          
           require 'connect.php';

           if (isset($_POST['match'])) {
            if (isset($_GET['recepient_id'])) {
                $recepient_id = $_GET['recepient_id'];
               if (isset($_GET['donor_id'])) {
                   $donor_id = $_GET['donor_id'];
                   $search_recepient = "SELECT * FROM recepients WHERE id = '$recepient_id'";
                   $execute_query = mysqli_query($conn,$search_recepient);
                   if ($execute_query) {
                     while ($row = mysqli_fetch_assoc($execute_query)) {
                       $recepient_name = $row['first_name']." ".$row['last_name'];
                       $recepient_age = $row['age'];
                       $recepient_email = $row['email'];
                       $recepient_hospital = $row['hospital'];
                       $recepient_county = $row['county'];
                       $recepient_blood_group = $row['blood_group'];
                       $deadline_for_donation = $row['deadline_for_donation'];
                       $status = "Pending";
                    
                      
                      $search_donor = "SELECT * FROM donors WHERE id = '$donor_id'";
                      $execute_search_query = mysqli_query($conn,$search_donor);
                      if ($execute_search_query){
                        while($row = mysqli_fetch_assoc($execute_search_query)) {
                       $donor_name = $row['first_name']." ".$row['last_name'];
                       $donor_age = $row['age'];
                       $donor_email = $row['email'];
                       $donor_county = $row['county'];
                       $donor_blood_group = $row['blood_group'];
                       $from = "From: brianoproff@gmail.com";

                       //Recipient's mail message
                       $recepient_subject = "Blood donation request report";
                       $recepient_message = "Dear ".$recepient_name.", we received your blood donation request. We are glad to inform you that we got a willing donor just for you. The following are your donor's details. We have contacted your donor. We will contact you as soon as possible for the further instructions. Thank you for choosing blood care</br>
                                             Name: ".$donor_name."</br>
                                             Age: ".$donor_age."</br>
                                             County: ".$donor_county."</br>
                                             Blood group: ".$donor_blood_group;

                       //Donor's mail message
                       $donor_subject = "Blood donation request report";
                       $donor_message = "Dear ".$donor_name.", We received your request. We are glad to inform you that your donation will save a life. We found a suitable recepient matching your blood group. Below are the details of the recepient. Please visit the nearest hospital that offers blood donation services and we will conatct you. Thank you for choosing blood care. </br>
                         Name: ".$recepient_name."</br>
                         Age: ".$recepient_age."</br>
                         Blood group: ".$recepient_blood_group."</br>
                         Hospital: ".$recepient_hospital."</br>
                         County: ".$recepient_county."</br>
                         Deadline for donation: ".$deadline_for_donation;
                       
                       $mail_the_recepient = mail($recepient_email, $recepient_subject, $recepient_message, $from);
                       if ($mail_the_recepient) {
                         $mail_the_donor = mail($donor_email, $donor_subject, $donor_message, $from);
                          if ($mail_the_donor) {
                            $record_donation = "INSERT INTO blood_donations(donor,recepient,blood_group,deadline_for_donation,recepient_hospital,status) VALUES('$donor_name','$recepient_name','$donor_blood_group','$deadline_for_donation','$recepient_hospital','$status')";
                            $execute_record_query = mysqli_query($conn,$$record_donation);
                               if ($execute_record_query) {
                                 echo "<script>window.alert('You have successfully matched $donor_name with $recepient_name for blood donation.')</script>";
                               }
                               else{
                                 echo "<script>window.alert('An error occured while matching. Please try again later.')</script>";
                               }
                          }
                          else{
                            echo "<script>window.alert('An error occured. Please try again later.')</script>";
                          }
                       }
                       else{
                        echo "<script>window.alert('An error occured. Please try again later.')</script>";
                       }
                       }
                      }
                     }
                   }
                 }
               }
             }
?>
</table><br><br>
   </div>
 </div>
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