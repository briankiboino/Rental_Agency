<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Forgot Password</title>
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

     background: linear-gradient(rgba(0, 142, 99, 0.92), rgba(0, 0, 0, 0)), url(img/2.jpg) fixed center center;
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
  <section id="forgot_password_section" class="p-5">
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
          <a href="home.php"><button class="btn wow fadeInLeft" data-wow-delay="0.2s"><font color="white"><i class="ion-home"></i> Homepage</font></button></a> 
        </center>
      </div></br>
      <div class="col-md-5 p-3">
             <div class="container wow fadeInDown" data-wow-delay="0.2s" id="forgot_password_container">
               <div>
                  <center>
                    <img src="img/mail.png" height="155px" width="150px;" id="icon">
                  </center>
                </div></br>
                <center>
                  <h6>
                    <font color="blue">
                     <b id="heading" >EMAIL VERIFICATION</b>
                   </font>
                   </h6>
                </center>
               <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
               <input id="email_input" type="text" style="font-family: FontAwesome;" name="email" placeholder="&#xf003; | Email" required="required"><br><br>
               <button id="forgot_password_button" name="forgot_password_button" class="btn btn-primary">VERIFY</button><br><br>
             </form>
             </div>
             <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
              <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
               <?php

                    //Query to login current user
                    require_once 'connect.php';

                    if(isset($_POST['forgot_password_button'])){

                    $email = $_POST['email'];

                    $stmt = $conn->prepare("SELECT email, user_id FROM users WHERE email = ? LIMIT 1");
                    $stmt->bind_param('s', $email);
                    $stmt->execute();
                    $stmt->store_result();
                    $stmt->bind_result($email, $user_id); 
                    $result = $stmt->fetch();

 
                    //To check if the row exists
                    if($stmt->num_rows == 1)
                            {

                                session_start();
                                $_SESSION['user_id'] = $user_id;
                                $_SESSION['email'] = $email;
                                
                                //Generate a random code and store into databse then send code to user via email.(Email verification code)
                                $code = sprintf('%05d', rand(0, 999999)); 
                                $subject = "Password recovery report";
                                $message = "We successfully received your request for password recovery. Please verify that this is your email. Your verification code is ".$code."";
                                $from = "From: brianoproff@gmail.com";

                                $stmt2 = $conn->prepare("INSERT INTO verification_codes(email, verification_code) VALUES(?, ?)");
                                $stmt2->bind_param("ss", $email, $code);
                                
                                if($stmt2->execute()){
                                  //Send mail to user
                                  if(mail($email, $subject, $message, $from)){

                                      //Prompt user to enter code sent to his/her email.
                                      echo "

                                      
                                             
                                             <script>
                                                 
                                                 document.getElementById('forgot_password_container').style.display = 'none';


                                             </script>

                                             <div class='container wow fadeInDown' data-wow-delay='0.2s' id='verify_code'>

                                                <div>
                                                <center>
                                                  <img src='img/edit.png' height='155px' width='150px;'>
                                                </center>
                                              </div></br>
                                              <center>
                                                <h6 id='heading'>
                                                  <font color='blue'>
                                                   <b>CODE VERIFICATION</b>
                                                 </font>
                                                 </h6>
                                              </center>
                                             <input type='number' style='font-family: FontAwesome;' name='code' placeholder='&#x270f; | Enter the code sent to your email' required='required'><br><br>
                                             <button id='verify_code_button' name='verify_code_button' class='btn'><font color='white'>VERIFY CODE</font></button><br><br>
                                             </form>

                                             </div>


                                           ";

                                  }
                                  else{

                                      echo "
                                      <div class='alert alert-danger' alert-dismissible fade show role='alert'>The email you submitted does not exist. Please use another email.
                                             <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                                          </div>
                                    ";

                                  }

                                  $stmt2->close();

                                }
                                else{

                                     echo "
                                      <div class='alert alert-danger' alert-dismissible fade show role='alert'>An error occured while processing your request. Try again later.
                                             <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                                          </div>
                                    ";                                     

                                }

                            }
                            else {
                                
                                echo "
                                      <div class='alert alert-danger' alert-dismissible fade show role='alert'>User does not exist! Use another email.
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
                         
                          //Query to verify code sent to the user's email

                          if(isset($_POST['verify_code_button'])){

                                      echo "
                                            
                                            <script>

                                            document.getElementById('forgot_password_container').style.display = 'none';
                                            </script>

                                      ";

                                    $code = $_POST['code'];
                                    
                                    session_start();
                                    $mail = $_SESSION['email'];

                                    $stmt3 = $conn->prepare("SELECT email, verification_code FROM verification_codes WHERE  email = ? AND verification_code = ? LIMIT 1");
                                    $stmt3->bind_param('ss', $mail, $code);
                                    $stmt3->execute();
                                    $stmt3->bind_result($code, $mail);
                                    $stmt3->store_result(); 

                                    $_SESSION['user_email'] = $mail;       

                                    //To check if the row exists
                                    if($stmt3->num_rows == 1){

                                      echo "

                                            
                                            <div class='container wow fadeInDown' data-wow-delay='0.2s' id='update_password'>

                                                <div>
                                                <center>
                                                  <img src='img/lock.png' height='155px' width='150px;'>
                                                </center>
                                              </div></br>
                                              <center>
                                                <h6 id='heading'>
                                                  <font color='blue'>
                                                   <b>UPDATE PASSWORD</b>
                                                 </font>
                                                 </h6>
                                              </center>
                                             <input type='password' style='font-family: FontAwesome;' name='password' placeholder='&#xf023; | Enter your new password' required='required'><br><br>
                                             <input type='password' style='font-family: FontAwesome;' name='confirm' placeholder='&#xf023; | Confirm your new password' required='required'><br><br>
                                             <button id='update_password_button' name='update_password_button' class='btn btn-danger'><font color='white'>UPDATE</font></button><br><br>
                                             </form>

                                             </div>



                                           ";

                                    }
                                    else{

                                      echo "

                                             <div class='container wow fadeInDown' data-wow-delay='0.2s' id='verify_code'>

                                                <div>
                                                <center>
                                                  <img src='img/edit.png' height='155px' width='150px;'>
                                                </center>
                                              </div></br>
                                              <center>
                                                <h6 id='heading'>
                                                  <font color='blue'>
                                                   <b>CODE VERIFICATION</b>
                                                 </font>
                                                 </h6>
                                              </center>
                                             <input type='number' style='font-family: FontAwesome;' name='code' placeholder='&#x270f; | Enter the code sent to your email' required='required'><br><br>
                                             <button id='verify_code_button' name='verify_code_button' class='btn'><font color='white'>VERIFY CODE</font></button><br><br>
                                             </form>

                                             <div class='alert alert-danger' alert-dismissible fade show role='alert'>The code you submitted does not exist!
                                                      <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                                             </div>

                                             </div>

                                          ";

                                      }

                                       $stmt3->free_result();
                                       $stmt3->close();

                                    }

                                    //Query to update password

                                    if(isset($_POST['update_password_button'])){

                                              $password = md5($_POST['password']);
                                              $confirm  = md5($_POST['confirm']);
                                              
                                              session_start();
                                              $id = $_SESSION['user_id'];

                                              if($password == $confirm){

                                              $stmt4 = $conn->prepare("UPDATE users SET password = ? WHERE user_id = ?");
                                              $stmt4->bind_param('si', $password, $id);

                                              if($stmt4->execute()){



                                                echo "
                                                      
                                                      <script>

                                                      document.getElementById('forgot_password_container').style.display = 'none';
                                                      </script>

                                                ";

                                                echo "

                                                       <div class='container wow fadeInDown' data-wow-delay='0.2s' id='update_password'>

                                                          <div>
                                                          <center>
                                                            <img src='img/lock.png' height='155px' width='150px;'>
                                                          </center>
                                                        </div></br>
                                                        <center>
                                                          <h6 id='heading'>
                                                            <font color='blue'>
                                                             <b>UPDATE PASSWORD</b>
                                                           </font>
                                                           </h6>
                                                        </center>
                                                       <input type='password' style='font-family: FontAwesome;' name='password' placeholder='&#xf023; | Enter your new password' required='required'><br><br>
                                                       <input type='password' style='font-family: FontAwesome;' name='confirm' placeholder='&#xf023; | Confirm your new password' required='required'><br><br>
                                                       <button id='update_password_button' name='update_password_button' class='btn btn-danger'><font color='white'>UPDATE</font></button><br><br>
                                                       </form>

                                                       <div class='alert alert-success' alert-dismissible fade show role='alert'>You have successfully updated your password. Please proceed to logging in.
                                                                <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                                                       </div>



                                                       </div>
                                                    ";

                                              }
                                              else{

                                                  echo "

                                                       <div class='container wow fadeInDown' data-wow-delay='0.2s' id='update_password'>

                                                          <div>
                                                          <center>
                                                            <img src='img/lock.png' height='155px' width='150px;'>
                                                          </center>
                                                        </div></br>
                                                        <center>
                                                          <h6 id='heading'>
                                                            <font color='blue'>
                                                             <b>UPDATE PASSWORD</b>
                                                           </font>
                                                           </h6>
                                                        </center>
                                                       <input type='password' style='font-family: FontAwesome;' name='password' placeholder='&#xf023; | Enter your new password' required='required'><br><br>
                                                       <input type='password' style='font-family: FontAwesome;' name='confirm' placeholder='&#xf023; | Confirm your new password' required='required'><br><br>
                                                       <button id='update_password_button' name='update_password_button' class='btn btn-danger'><font color='white'>UPDATE</font></button><br><br>
                                                       </form>

                                                       <div class='alert alert-danger' alert-dismissible fade show role='alert'>An error occured while processing your request. Please try again later.
                                                                <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                                                       </div>


                                                       </div>
                                                    ";

                                              }

                                            }

                                               else{

                                                 echo "
                                                      
                                                      <script>

                                                      document.getElementById('forgot_password_container').style.display = 'none';
                                                      </script>

                                                ";

                                                echo "

                                                       <div class='container wow fadeInDown' data-wow-delay='0.2s' id='update_password'>

                                                          <div>
                                                          <center>
                                                            <img src='img/lock.png' height='155px' width='150px;'>
                                                          </center>
                                                        </div></br>
                                                        <center>
                                                          <h6 id='heading'>
                                                            <font color='blue'>
                                                             <b>UPDATE PASSWORD</b>
                                                           </font>
                                                           </h6>
                                                        </center>
                                                       <input type='password' style='font-family: FontAwesome;' name='password' placeholder='&#xf023; | Enter your new password' required='required'><br><br>
                                                       <input type='password' style='font-family: FontAwesome;' name='confirm' placeholder='&#xf023; | Confirm your new password' required='required'><br><br>
                                                       <button id='update_password_button' name='update_password_button' class='btn btn-danger'><font color='white'>UPDATE</font></button><br><br>
                                                       </form>

                                                       <div class='alert alert-danger' alert-dismissible fade show role='alert'>The passswords you submitted do not match!
                                                                <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                                                       </div>


                                                       </div>
                                                    ";

                                               }

                                             }

?>

       </div>
    </div>
  </section>
   <footer id="forgot_password_page_footer">
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
