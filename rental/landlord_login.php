<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Landlord login</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <style>
    
    body{

     background: linear-gradient(rgba(0, 142, 99, 0.92), rgba(0, 0, 0, 0)), url(img/8.jpg) fixed center center;
     max-width: 100%;
     height: 100vh;
     background-size: cover;
     background-repeat: no-repeat;
     background-position: center;
     background-color: rgba(0, 0, 0, 0.7);
     overflow: hidden;

    }

  </style>
</head>

<body>
  <main>
  <section id="landlord_login_section" class="p-5">
    <div class="row p-5">
      <div class="col-md-7 p-3">
        <center>
          
          <h1 class="wow fadeInUp" data-wow-delay="0.2s">
            <font color="white">
              Rentz Agency
            </font>
          </h1>
          <h4 class="box wow bounceInDown" data-wow-delay="0.2s">
            <font face="Bradley Hand ITC" color="white">
             A Powerful Rental Management Tool
            </font>
          </h4>
          <a href="home.php"><button class="btn wow fadeInLeft" data-wow-delay="0.2s"><font color="white"><i class="ion-home"></i> Homepage</font></button></a> <a href="register_landlord.php"><button class="btn wow fadeInRight" data-wow-delay="0.2s"><font color="white"><i class="ion-person"></i> Register</font></button></a>
        </center>
      </div></br>
      <div class="col-md-5 p-3">
             <div class="container wow fadeInDown" data-wow-delay="0.2s" id="tenant_login_container">
               <div>
                  <center>
                    <img src="img/home1.jfif" height="155px" width="150px;">
                  </center>
                </div></br>
                <center>
                  <h6>
                    <font color="blue">
                     <b>LANDLORD LOGIN</b>
                   </font>
                   </h6>
                </center>
               <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
               <input type="text" style="font-family: FontAwesome;" name="email" placeholder="&#xf003; | Email" required="required"><br><br>
               <input type="password" name="password" style="font-family: FontAwesome;" placeholder="&#61475; | Password" required="required"><br><br>
               <button id="landlord_login_button" name="landlord_login_button" class="btn btn-primary">LOGIN</button><br><br>
               <center>
                  <a href="forgot.php"><font color="blue">Forgot password</font></a> <span class="border border-dark m-2"></span> <a href="register_landlord.php"><b><font color="blue">Create Account</font></b></a>
               </center></br>
               <?php

                    //Query to login current user
                    require_once 'connect.php';

                    if(isset($_POST['landlord_login_button'])){

                    $username = $_POST['email'];
                    $password = md5($_POST['password']);

                    $stmt = $conn->prepare("SELECT user_id, email, password, status, role FROM users WHERE email = ? AND password = ? LIMIT 1");
                    $stmt->bind_param('ss', $username, $password);
                    $stmt->execute();
                    $stmt->bind_result($user_id,$username, $password, $status, $role);
                    $stmt->store_result();          
                    $result = $stmt->get_result();

                    if($stmt->num_rows == 1)  //To check if the row exists
                      {
                                while ($stmt->fetch()){

                                if($role == 'Landlord'){                                

                                if($status == 'Deactivated'){

                                    echo "
                                      <div class='alert alert-danger' alert-dismissible fade show role='alert'>Your account is deactivated!
                                                <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                                          </div>
                                    ";

                                }
                                else{
                                    
                                    session_start();

                                    $_SESSION['user_id'] = $user_id;

                                    echo "<script>window.open('landlord_dashboard.php','_self')</script>";

                                   exit();
                                }
                              }
                                 else{

                                    echo "
                                       <div class='alert alert-danger' alert-dismissible fade show role='alert'>You are not registered as a Landlord!
                                                     <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                                                  </div>

                                        ";

                            }

                              }
                            }
                            else {
                                
                                echo "
                                      <div class='alert alert-danger' alert-dismissible fade show role='alert'>Incorrect password or email!
                                             <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                                          </div>
                                    ";

                            }
                            $stmt->free_result();
                            $stmt->close();
                            
                        }
                        else 
                        {   

                        }
                     $conn->close();
                ?>
             </form>
             </div>
       </div>
    </div>
  </section>
   <footer id="landlord_login_page_footer">
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
