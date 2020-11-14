<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="img/icon.png" rel="icon">
  <link href="" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://use.fontawesome.com/releases/v5.0.6/css/all.css">
</head>

<body>
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Rentz Agency</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Get started</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Rental Rooms</h2>
                 <div class="container wow fadeInDown" data-wow-delay="0.5s" style="width: 300px;"><marquee behavior="alternate"><marquee width="200"><h3><b>Bed-sitter,  Single,  1-Bedroom,  2-Bedroom, Self-contained, Business-rooms</b></h3></marquee></marquee></div>
                <button class="btn btn-primary wow fadeInLeft" data-wow-delay="0.2s" data-toggle="modal" data-target="#registerLogin" ><i class="ion-person" style="font-size: 20px;"></i> User login</button>
                <button class="btn btn-success wow fadeInRight" data-wow-delay="0.2s" data-toggle="modal" data-target="#searchRooms"><i class="ion-home" style="font-size: 20px;"></i> View rooms</button><br><br>
                <button class="btn btn-warning wow fadeInUp" data-wow-delay="0.2s" data-toggle="modal" data-target="#searchAgencies"><i class="ion-search" style="font-size: 20px; color: white;"></i> <font color="white">Search property Agencies</font></button>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Dive in</h3>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/4.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Find Rooms</a></h2>
              <p>
                Looking for a room to rent? Start your search today.
              </p>
              <div>
              <button class="btn" type="button" data-toggle="modal" data-target="#searchRooms" id="find_room"><font color="white"><i class="ion-home" style="font-size: 18px;"></i> View rooms</font></button>
            </div>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/5.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Explore Agencies</a></h2>
              <p>
                Find the best Management Agencies in your region.
              </p>
              <div>
              <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#searchAgencies"  id="find_agency"><a href="#featured-services" class="btn-get-started scrollto"><font color="white"><i class="ion-android-search" style="font-size: 20px;"></i> Search agency</font></a></button>
            </div>
            </div>
          </div>

           <div class="col-md-4 wow fadeInRight" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/6.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title"><a href="#">Login/Register</a></h2>
              <p>
                Dont have an account? Register today and be a part of the journey.(Agents,Landlords,Tenants)
              </p>
              <div>
              <button class="btn" type="button" data-toggle="modal" data-target="#registerLogin" id="register_login"><a href="#featured-services" class="btn-get-started scrollto"><font color="white"><i class="ion-android-desktop" style="font-size: 15px;"></i> Login/Rgister</font></a></button>
            </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
          <p>Rentz Agency is a rental management system/tool that handles rental housing across Kenya. We offer access to rooms and rental management services.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInRight" data-wow-duration="2s">
            <div class="card">
            <div class="card-body">  
            <h4>Agencies portal</h4>
            <p>Manage tenants records, Payment disbursement, Rent collection, Access and Blacklist notorious tenants, instant sms & mails to tenants & clients, monthly statements generation +more</p></br>
          </div>
          <div class="card-footer bg-transparent">
          <a href="agent_login.php"><button class="btn btn-warning pull-right" id="services_buttons"><i class="ion-edit" style="color: white; font-size: 20px;"></i> <font color="white">Visit portal</font></button></a>
          </div>
          </div>
          </div>
           <div class="col-lg-4 col-md-6 box wow bounceInDown" data-wow-delay="0.2s">
            <div class="card">
            <div class="card-body">  
            <h4>Landlords portal</h4>
            <p>Manage tenants records, Payment disbursement, Rent collection, Access and Blacklist notorious tenants, instant sms & mails to tenants & clients, monthly statements generation +more</p></br>
          </div>
          <div class="card-footer bg-transparent">
          <a href="landlord_login.php"><button class="btn btn-success pull-right" id="services_buttons"><i class="ion-ios-world-outline" style="color: white; font-size: 20px;"></i> <font color="white">Visit portal</font></button></a>
          </div>
          </div>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInLeft" data-wow-delay="0.2s">
            <div class="card">
            <div class="card-body">  
            <h4>Tenants portal</h4>
            <p>As a tenant, you can now access your rent payment records, easily communicate with your neighbours via sms without concealing their numbers, buy or sell items you don't need +more</p></br>
          </div>
          <div class="card-footer bg-transparent">
          <a href="tenant_login.php"><button class="btn btn-danger pull-right" id="services_buttons"><i class="ion-person" style="font-size: 20px;"></i> <font color="white">Visit portal</font></button></a>
          </div>
          </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
    <section id="skills">
      <div class="container">

        <header class="section-header">
          <h3>Our Vision</h3>
          <p>A nation with better housing Management. To have all rentals all over Kenya to be connected to each other as one by an Intelligent tool. Technology inspires change. Register today and be part of the journey.</p>
        </header>


      </div>
    </section>

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Our clients</h3>
          <p>We offer 2407 services to oour clients all year. Your comfort, Our priority</p>
        </header>

        <div class="row counters">

<?php

          //Query to get the number of users of the system respective to their roles

          require_once 'connect.php';
 
          $pick_agents = "SELECT * FROM users WHERE role ='Agent'";
          $pick_landlords = "SELECT * FROM users WHERE role ='Landlord'";
          $pick_tenants = "SELECT * FROM users WHERE role ='Tenant'";
          $all_users = "SELECT * FROM users";

          $execute_query1 = mysqli_query($conn,$pick_agents);
          $agents = mysqli_num_rows($execute_query1);

          $execute_query2 = mysqli_query($conn,$pick_landlords);
          $landlords = mysqli_num_rows($execute_query2);

          $execute_query3 = mysqli_query($conn,$pick_tenants);
          $tenants = mysqli_num_rows($execute_query3);

          $execute_query4 = mysqli_query($conn,$all_users);
          $clients = mysqli_num_rows($execute_query4);


          echo "

  				<div class='col-lg-3 col-6 text-center'>
            <span data-toggle='counter-up'>$agents</span>
            <p>Agents</p>
  				</div>

          <div class='col-lg-3 col-6 text-center'>
            <span data-toggle='counter-up'>$landlords</span>
            <p>Landlords</p>
  				</div>

          <div class='col-lg-3 col-6 text-center'>
            <span data-toggle='counter-up'>$tenants</span>
            <p>Tenants</p>
  				</div>

           <div class='col-lg-3 col-6 text-center'>
            <span data-toggle='counter-up'>$clients</span>
            <p>Clients</p>
          </div>


         "; 

?>

  			</div>
      </div>
    </section>
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>NAKURU 3295, KENYA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+254726159508">+254726159508</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:rentzagency@gmail.com">rentzagency@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" required="required" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" required="required" name="email" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" required="required" name="subject" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" required="required" name="message" rows="5" name="message" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button class="btn" id="send_message" name="send_message"><font color="white">Send Message</font></button></div></br>
          </form>
<?php
 
         //Query to send message to the adminiistrator of the system
         require_once 'connect.php';

         if(isset($_POST['send_message'])){

            $name    = $_POST['name'];
            $email   = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            $insert  = "INSERT INTO user_messages(name,email,subject,message) VALUES('$name','$email','$subject','$message')";
            $execute = mysqli_query($conn,$insert);

            if ($execute) {
              
              echo "<div class='alert alert-success' alert-dismissible fade show role='alert'>We have received your message. We will get back to you as soon as possible. Thank you!
                       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";

            }
            else{

             echo "<div class='alert alert-danger' alert-dismissible fade show role='alert'>An error occured while processing your request. Please user relevant details or try agian later!
                       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";

            }

         }

?>
        </div>
      </div>
      </div>
    </section><!-- #contact -->

     <footer id="footer">
          <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Rentz Agency</h3>
            <p>Rentz Agency is a rental management system/tool that handles rental housing across Kenya. We offer access to rooms and rental management services.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#header">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">Get Strated</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Our services</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#contact">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Kiamunyi <br>
              Nakuru <br>
              Kenya <br>
              <strong>Phone:</strong> +254726159508<br>
              <strong>Email:</strong> rentzagency@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rentz Agency</strong>. <a href="admin_login.php"><font color="white">All rights Reserved</font></a>
      </div>
      <div class="credits">
        Designed by <a href="http://www.halsodasgenerationlimited.com/brian_kim.html">Brian Kimutai</a>
      </div>
    </div>
  </footer>

  </main>

  <!-- Modals -->

   <!-- Register/Login Modal -->
          <div class="modal fade" id="registerLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bg-dark" style="border-color: white;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"><font color="white"><i class="ion-person"></i> User Login</font></h5>
                  <button type="button" style="color: #fff;" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <div>
                  <center>
                    <img src="img/users.jpg" class="rounded-circle" height="150px" width="150px;">
                  </center>
                </div></br>
                <center><a href="agent_login.php"><button class="btn btn-primary" style="width: 100%;"><i class="ion-search"></i> Agencies Portal</button></a></center></br>
                <center><a href="landlord_login.php"><button class="btn btn-warning" style="width: 100%;"><i class="ion-person"></i> Landlords Portal</button></a></center></br>
                <center><a href="tenant_login.php"><button class="btn btn-success" style="width: 100%;"><i class="ion-key"></i> Tenants Portal</button></a></center></br>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
 

          <!-- Search Agencies Modal -->
          <div class="modal fade" id="searchAgencies" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bg-dark" style="border-color: white;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"><font color="white"><i class="ion-person"></i> Find Agents/Managers</font></h5>
                  <button type="button" style="color: #fff;" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <h6><font color="white">Find a Rental Agent property in your region</font></h6>
                <select class="form-control" name="location">
                  <option value="Nakuru">Nakuru</option>
                  <option value="Nairobi">Nairobi</option>
                </select></br>
                <center><button class="btn btn-success" name="search_agency" style="width: 100%;"><i class="ion-search"></i> Search</button></center>

                <?php
                
                //Query to pass data from the user to another page which displays results in respect to the user's data.
                
                if(isset($_POST['search_agency'])){

                $location = $_POST['location'];

                echo "<script>window.open('results.php?location=$location','_self')</script>";

                }

                ?>

                </form>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>

          <!-- Find Rooms Modal -->
          <div class="modal fade" id="searchRooms" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content bg-dark" style="border-color: white;">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"><font color="white"><i class="ion-home"></i> Find Room</font></h5>
                  <button type="button" style="color: #fff;" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div>
                  <center>
                    <img src="img/home.png" class="rounded-circle" height="155px" width="150px;">
                  </center>
                </div></br>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="location"><font color="white">Select location:</font></label>
                <select class="form-control" name="location">
                  <option value="Nakuru">Nakuru</option>
                  <option value="Nairobi">Nairobi</option>
                </select></br>
                <label for="room"><font color="white">Select type of room:</font></label>
                <select class="form-control" name="room">
                  <option value="Single">Single</option>
                  <option value="Bed-sitter">Bed-sitter</option>
                  <option value="2-Bedroom">2-Bedroom</option>
                  <option value="1-Bedroom">1-Bedroom</option>
                  <option value="Self-contained">Self-contained</option>
                  <option value="Business-rooms">Business-rooms</option>
                </select></br>
                <center><button class="btn btn-success" name="search_room" style="width: 100%;"><i class="ion-search"></i> <font color="white">Search</font></button></center>

                <?php
                
                //Query to pass data from the user to another page which displays results in respect to the user's data.
                
                if(isset($_POST['search_room'])){

                $room     = $_POST['room'];
                $location = $_POST['location'];

                echo "<script>window.open('results.php?location=$location&room=$room','_self')</script>";

                }

                ?>

              </form>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
