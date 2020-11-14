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

  <title>Subjects</title>
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
        <h1 class="text-light"><a href="index.html"><span><font color="white">OUR SCHOOL</font></span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block bg-default">
        <ul class="ml-auto">
          <li class="active drop-down">
            <a href="">
              <?php

              require 'connect.php';
                  
                  $sqli = "SELECT * FROM users WHERE user_id = '$id'";
                  $result = mysqli_query($conn,$sqli);
                  if($result){
                   while($row=mysqli_fetch_assoc($result)) {
                         echo"   
                            <img src='users/{$row['image']}' width='30px' height='30px' class='rounded-circle'>
                            <font color='white'>
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
                        echo $first_name." ".$last_name;
                     }
                   }

               ?>
                 
               </font>
             </a>
              <ul>
                  <li><a href="#">View profile</a></li>
                  <li><a href="#">Update profile</a></li>
                  <li><a href="logout.php">Sign out</a></li>
                </ul>
           </li>
          <li class="active drop-down"><a href='social_home.php'><i class='icofont-comment' style='color: #fff'></i></a>
            <ul>
              <li><a href="social_home.php">Go social</a></li>
            </ul>
          </li>
          <li class="active drop-down"><a href=""><i class="icofont-notification" style="color: #fff"></i></a>
            <ul>
              <li><a href="">Notifications</a></li>
            </ul>
          </li>
        </ul>
      </nav>

    </div>
  </header>

  <main id="main">
  <section class="counts section-bg" id="about">
    <div class="container">
      <?php
      if (isset($_GET['Subject'])) {
        $subject = $_GET['Subject'];

        if ($subject == "Mathematics") {
        echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Mathematics&form=I'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Mathematics&form=II'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Mathematics&form=III'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Mathematics&form=IV'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Mathematics'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
        }

          elseif ($subject == "English") {
              echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=English'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=English'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=English'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=English'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=English'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
          elseif ($subject == "Kiswahili") {
              echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Kiswahili'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Kiswahili'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Kiswahili'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Kiswahili'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Kiswahili'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
          elseif ($subject == "Biology") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Biology'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Biology'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Biology'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Biology'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Biology'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
          elseif ($subject == "Chemistry") {
             echo"
              <center>
                 <h2>
                   Chemistry
                 </h2>  
             </center>
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Chemistry&form=I'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Chemistry'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Chemistry'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Chemistry'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Chemistry'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
          elseif ($subject == "Physics") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Physics'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Physics'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Physics'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Physics'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Physics'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
          elseif ($subject == "Geography") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject='>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Geography'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Geography'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Geography'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Geography'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
          elseif ($subject == "History") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=History'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=History'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=History'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=History'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=History'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
          elseif ($subject == "CRE") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=CRE'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=CRE'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=CRE'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=CRE'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=CRE'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
          elseif ($subject == "German") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=German'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=German'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=German'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=German'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=German'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
           elseif ($subject == "Business") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Business'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Business'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Business'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Business'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Business'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
          elseif ($subject == "French") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=French'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=French'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=French'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=French'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=French'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
           elseif ($subject == "Music") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Music'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Music'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Music'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Music'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Music'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
           elseif ($subject == "IRE") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=IRE'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=IRE'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=IRE'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=IRE'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=IRE'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
           elseif ($subject == "Computer") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Computer'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Computer'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Computer'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Computer'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Computer'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
           elseif ($subject == "Agriculture") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Agriculture'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Agriculture'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Agriculture'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Agriculture'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Agriculture'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
           elseif ($subject == "Homescience") {
             echo"
      <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Homescience'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM I</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Homescience'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM II</h4>
            </div>
            </a>
          </div>
        </div>

        <div class='row'>
          <div class='col-lg-5 col-md-6 text-center' data-aos='fade-left'>
             <a href='topics.php?Subject=Homescience'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM III</h4>
            </div>
            </a>
          </div>

           <div class='col-lg-5 col-md-6 text-center' data-aos='fade-right'>
             <a href='topics.php?Subject=Homescience'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>FORM IV</h4>
            </div>
            </a>
          </div>
        </div>
       
         <div class='row'>
            <div class='col-lg-10 col-md-6 text-center' data-aos='fade-up'>
             <a href='kcse.php?Subject=Homescience'>
            <div class='count-box'>
              <i class='icofont-calculator' style='color: #20b38e;'></i>
              <h4>KCSE Past Papers</h4>
            </div>
            </a>
          </div>
          ";
           
          }
          
          }

          ?>

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