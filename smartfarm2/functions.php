<?php
//Check if user already exists
function checkUser($conn){
     //Getting input from user
     $first_name = $_POST['fname'];
     $last_name = $_POST['lname'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $password = $_POST['password'];
     $confirm = $_POST['confirm'];
     //Check if passwords match
     if($password == $confirm){
     $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
     $stmt->bind_param('s', $email);
     $stmt->execute();
     $stmt->store_result();
     if($stmt->num_rows == 0){
         echo registerUser($first_name, $last_name, $email, $phone, $password);
     }
     else{
              echo "
                      <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>The email you submitted has already been used to register an account with us! Please use another email.
                          <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                      </div>
                   ";  
     }
 }
 else{
     echo "
              <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>The passwords you submitted do not match!
                   <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                </div>
            ";  
        }
}

//Register new user
function registerUser($first_name, $last_name, $email, $phone, $password){
      $dbServername = "Localhost";
      $dbUsername   = "root";
      $dbPassword   = "";
      $dbName       = "smart"; 
      $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
      $time = time();
      $activationcode = sha1($email."_".$time);
      $status = 0;
      $name = $first_name." ".$last_name;
      $pass = sha1($password);
      $stmt = $conn->prepare("INSERT INTO `users`(`first_name`, `last_name`, `email`, `phone`, `password`, `email_activation_key`, `status`) VALUES(?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssss", $first_name, $last_name, $email, $phone, $pass, $activationcode, $status);
      if($stmt->execute()){
          echo sendMail($email,$activationcode,$name);
      }
      else{ 

       echo "
                  <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>An error occured while processing your request. Please use relevant details or try again later
                     <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                  </div>
              ";
      }
}

//Send verification mail
function sendMail($email, $activationcode, $name){
       $headers ="";
       $ms = "";
       $subject="Email verification (smartfarm.com)";
       $headers .= "MIME-Version: 1.0"."\r\n";
       $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
       $headers .= 'From:Smart Farm | Modern Transition, Greater Farming <info@phpgurukul.com>'."\r\n";
       $ms.="<html></body><h1><font color='#000' face='Bradley Hand ITC'>Smart Farm</font></h1></br><div><div>Dear <strong>$name<strong>,</div></br></br>";
       $ms.="<div style='padding-top:8px;'>Please click the following button to verify your email and activate your account.</div>
       <div style='padding-top:10px;'><a href='http://192.168.100.128/smartfarm2/email_verification.php?code=$activationcode'><button style='width: 150px; height: 40px; background-color: #18d26e; border-radius: 7px;'><font color='white'>Verify</font></button></a></div></br>
       <div style='padding-top:4px;'><p style='float: left; font-size: 12px;'>&copy; Copyright <strong>Smart Farm</strong>. All Rights Reserved</p></div></div>
       </body></html>";
       if(mail($email,$subject,$ms,$headers)){
          
         echo "
                  <div class='alert alert-success' alert-dismissible fade show role='alert' style='margin-top: 20px;'>Your account is created successfully, please check your email for verification link to activate your account.
                         <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                  </div>
                     
                ";   

       }

       else{
          
          echo "
                  <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>The email you submitted does not exist or is not functional. Please use another email.
                      <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                  </div>
               "; 

       }

}

//Email Verification
function verifyEmail($conn,$code){
       $stmt = $conn->prepare("SELECT * FROM users WHERE email_activation_key = ?");
       $stmt->bind_param('s', $code);
       $stmt->execute();
       $stmt->store_result();
            if($stmt->num_rows > 0)
            {
       $st = 0;
       $stmt1 = $conn->prepare("SELECT * FROM users WHERE email_activation_key = ? AND status = ?");
       $stmt1->bind_param('si', $code, $st);
       $stmt1->execute();
       $stmt1->store_result();
            if($stmt1->num_rows > 0)
             {
            $new_status = 1;
            $stmt2 = $conn->prepare("UPDATE users SET status = ? WHERE email_activation_key = ?");
            $stmt2->bind_param('is', $new_status, $code);
            $stmt2->execute();
                if ($stmt2->execute()) {
                   echo "
                      <div class='alert alert-success'  alert-dismissible fade show role='alert'>Your account has been successfully verified. Please Click the following button to go to login page.
                         <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                      </div>
                      ";

                    echo "

                            <center><a href='192.168.100.128/smartfarm2/signin.php'><button class='btn btn-warning' style='width: 200px;'><strong><font color='white'>LOGIN</font></strong></button></a></center>


                         ";

                }
                else{

                }
            }
                else
                {
                 echo "

                      <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>Your account is already active, no need to activate again.
                         <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                      </div>

                      ";
                }
        }
        else
        {
         echo "

              <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>Code does not exist!
                 <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
              </div>

              ";
     }

}

//Sign in user
function signIn($conn){
    //Getting input from user
     $email = $_POST['email'];
     $pass = sha1($_POST['password']);
     $stmt = $conn->prepare("SELECT user_id, status FROM users WHERE email = ? AND password = ?");
     $stmt->bind_param("ss", $email, $pass);
     $stmt->execute();
     $stmt->store_result();
     $stmt->bind_result($user_id, $status);
     if ($stmt->num_rows > 0) {
        while ($stmt -> fetch()) {
        if($status == 1){
         $_SESSION['user_id'] = $user_id;
         echo "<script>window.open('dashboard.php', '_self')</script>";
         }
         else{
            echo "
                    <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>Your Account is not active! Please verify your email to activate your account.
                       <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                    </div>
                  ";
         }
         }
     }
     else{
         echo "
                <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>Incorrect password or email!
                   <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                </div>
              ";   
     }
}

//Forgot password
function forgotPassword($conn){
     //Getting input from user
     $email = $_POST['email'];
     $headers ="";
     $ms = "";
     $subject="Password Recovery (smartfarm.com)";
     $headers .= "MIME-Version: 1.0"."\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
     $headers .= 'From:Smart Farm | Modern Transition, Greater Farming <info@phpgurukul.com>'."\r\n";
     $ms.="<html></body><h1><font color='#000' face='Bradley Hand ITC'>Smart Farm</font></h1></br><div><div></div></br></br>";
     $ms.="<div style='padding-top:8px;'>Please click the following button to verify your email and reset your password.</div>
     <div style='padding-top:10px;'><a href='http://192.168.100.128/smartfarm2/reset_password.php?email=$email'><button style='width: 150px; height: 40px; background-color: #18d26e; border-radius: 7px;'><font color='white'>Reset Password</font></button></a></div></br>
     <div style='padding-top:4px;'><p style='float: left; font-size: 12px;'>&copy; Copyright <strong>Smart Farm</strong>. All Rights Reserved</p></div></div>
     </body></html>";
     if(mail($email,$subject,$ms,$headers)){
          
         echo "
                  <div class='alert alert-success' alert-dismissible fade show role='alert' style='margin-top: 20px;'>We have sent you an e-mail with instructions on how to reset your password. Check your inbox and click on the link provided.
                         <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                  </div>
                     
                ";   

    }

    else{
          
          echo "
                  <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>The email you submitted does not exist or is not functional. Please use another email.
                      <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                  </div>
               "; 

    }
}

function resetPassword($conn, $email){
    //Getting input from user
    $pass = sha1($_POST['password']);
    $confirm = sha1($_POST['confirm']);

    //Check if passwords match
    if ($pass == $confirm) {
    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
    $stmt->bind_param("ss", $pass, $email);
    $stmt->execute();
    if ($stmt->execute()) {
        echo "
                  <div class='alert alert-success' alert-dismissible fade show role='alert' style='margin-top: 20px;'>You have successfully updated your password. Please visit the login page and try to login.
                       <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                    </div>
              "; 
    }
    else{
         echo "
                  <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>An error occured while processing your request! Pleasetry again later or use relevant details.
                       <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                    </div>
              ";  
    }
    }
    else{
          echo "
                  <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>The passwords you submitted do not match!
                       <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                    </div>
               ";  
    }
}

//Sending message to Admin
function sendMessage($conn){    
   //Getting input from user
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     //Insert data into database
     $stmt = $conn->prepare("INSERT INTO messages(name,email,phone,subject,message) VALUES(?,?,?,?,?)");
     $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

     if($stmt->execute()){
         
        echo "
                  <div class='alert alert-success' alert-dismissible fade show role='alert' style='margin-top: 20px;'>Your mesaage was successfully sent.
                         <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                      </div>
                ";   

         $stmt->close();
         $conn->close();

     }
     else{

          echo "
                  <div class='alert alert-danger' alert-dismissible fade show role='alert' style='margin-top: 20px;'>Your mesaage was not sent. Please use relevant details or try again later
                         <span type='button' class='close' data-dismiss='alert' aria-label='Close' aria-hidden='true'>&times;</span>
                      </div>
                ";      

     }

}

?>