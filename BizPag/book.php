<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Book room</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
      <nav class=" navbar navbar-expand-lg navbar-dark" style="background-color: #000;">
        <ul class="navbar-nav mr-auto">
          <div id="logo" class="pull-left">

        <h1><a href="#intro" class="scrollto"><font color="white"><b>Halsodas Generation</b></font></a></h1>
      </div>
        </ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="index.php"><b>Home</b></a></li>
          <li class="nav-item active"><a class="nav-link" href="index.php"><b>About Us</b></a></li>
          <li class="nav-item active"><a class="nav-link" href="index.php"><b>Location</b></a></li>
          <li class="nav-item active"><a class="nav-link" href="index.php"><b>Reservations</b></a></li>
          <li class="nav-item active"><a class="nav-link" href="index.php"><b>Contact Us</b></a></li>
        </ul>
      </div>
      </nav>
   
  

  <main id="main">
    <div class="container" style="border: 1px solid; margin-top: 20px; height: 700px;">
     <div class="row">
        <div class="col-md-12">

          <div class="box" >
            <div class="box-header">
              <center><h4 class="box-title">Choose room number</h4></center>
            </div>
            <form method="POST" action="executive.php">
            <div class="box-body">
     <?php
     require 'connect.php';
  if(isset($_GET['room'])){
    $Room = $_GET['room'];
  if ($Room == "Executive") {
                           
      $sql = "SELECT * FROM rooms WHERE type_of_room = 'Executive' ";
      $run = mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $icon  = $row['Icon'];
            $value = $row['room_name'];
                  echo "
                                     
                    <input type='radio' name='number' value='$value'>
                    <img src='img/$icon' class='rounded-circle' height='30px' width='30px'>{$row['room_name']}
                                      
                       ";                                       
                }
                              
                          
  }
  elseif ($Room == "Standard") {
    $sql = "SELECT * FROM rooms WHERE type_of_room = 'Standard' ";
      $run = mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $icon  = $row['Icon'];
            $value = $row['room_name'];
                  echo "
                                     
                    <input type='radio' name='number' value='$value'>
                    <img src='img/$icon' class='rounded-circle' height='30px' width='30px'>{$row['room_name']}
                                      
                       ";                                       
                }
  }
  elseif ($Room == "Regular") {
    $sql = "SELECT * FROM rooms WHERE type_of_room = 'Regular' ";
      $run = mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $icon  = $row['Icon'];
            $value = $row['room_name'];
                  echo "
                                     
                    <input type='radio' name='number' value='$value'>
                    <img src='img/$icon' class='rounded-circle' height='30px' width='30px'>{$row['room_name']}
                                      
                       ";                                       
                }
  }
  elseif ($Room == "Family") {
     $sql = "SELECT * FROM rooms WHERE type_of_room = 'Family' ";
      $run = mysqli_query($conn,$sql);
          while($row=mysqli_fetch_assoc($run)) {
            $icon  = $row['Icon'];
            $value = $row['room_name'];
                  echo "
                                     
                    <input type='radio' name='number' value='$value'>
                    <img src='img/$icon' class='rounded-circle' height='30px' width='30px'>{$row['room_name']}
                                      
                       ";                                       
                }
  }
}
  ?>
   </div>
          </div>
          <div class="box box-info">
            <div class="box-header">
              <center><h4 class="box-title">Enter dates</h4></center>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col">
             <div class="form-group">
                <label><b>Checkin:</b></label>

                <div class="input-group date">
                  <input type="date" name="checkin" required="required" class="form-control pull-right" id="datepicker">
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label><b>Checkout:</b></label>

                <div class="input-group date">
                  <input type="date" name="checkout" required="required" class="form-control pull-right" id="datepicker">
                </div>
              </div>
              </div>
            </div>
              
          </div>

        </div>

        <div class="col-md-13">
          <div class="box box-primary">
            <div class="box-header">
              <center><h4 class="box-title">Enter your details</h4></center>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label><b>Your name:</b></label>

                <div class="input-group date">
                  <input type="text" name="name" required="required" class="form-control pull-right" id="datepicker">
                </div>
              </div>
              <div class="form-group">
                <label><b>Phone number:</b></label>
                <div class="input-group">
                  <input type="number" name="phone" required="required" class="form-control pull-right" id="reservation">
                </div>
              </div>
              <div class="form-group">
                <label><b>Your email:</b></label>

                <div class="input-group">
                  <input type="text" name="email" required="required" class="form-control pull-right" id="reservationtime">
                </div>
              </div>
              <div class="form-group">
                <label><b>Place of residence:</b></label>

                <div class="input-group">
                  <input type="text" name="residence" required="required" class="form-control pull-right" id="reservationtime">
                </div>
              </div>
            </div>
          </div>
</div>
<center>
  <button class="btn btn-danger" style="border-radius: 30px; height: 40px; width: 250px;">
    <font color="white">BOOK</font>
  </button>
</center>
</form>
</div>
  </main>
  <div style="height: 20px;"></div>
 <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Halsodas</h3>
            <p>Welcome to Halsodas Generation Limited. Halsodas was established in the year 2017. Halsodas is lodging company. We are located in Rumuruti in Laikipia county. Year in year out we offer continuous services at an affordable price and at any time.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Our location</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Reservations</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Rumuruti <br>
              Laikipia<br>
              Kenya <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> halsodasgeneration@yahoo.com<br>
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
        &copy; Copyright <strong>Halsodas Generation Ltd</strong>.<a href="login.php"> All Rights Reserved</a>
      </div>
      <div class="credits">
        Designed by Brian Kimutai</a>
      </div>
    </div>
  </footer>

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
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>







     