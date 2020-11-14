  <?php

require 'connect.php';

$First_name = $_POST['first'];
$Last_name  = $_POST['last'];
$Email = $_POST['email'];
$School     = $_POST['school'];
$Admission_number = $_POST['number'];
$Password   = $_POST['password'];
$Confirm    = $_POST['confirm'];
$Status     = "Pending";
$newgid = sprintf('%05d', rand(0, 999999));
$verification_code = sprintf('%05d', rand(0, 999999));
$Username = strtolower($First_name . "_" . $Last_name . "_" . $newgid);

 if($Password == $Confirm){
          if(strlen($Password) < 6){
             echo"<script>alert('Password should have a minimum of 6 characters!')</script>";
             exit();
          }
          else{

           $pass = sha1($Password);

           $query = "SELECT  * FROM users WHERE admission = '$Admission_number' AND school = '$School'";
           $check = mysqli_query($conn,$query);
                if(mysqli_num_rows($check) > 0 ){
                    echo"<script>alert('Dear $First_name, your regsitration number was used to register an account in our system. You cannot register more than once!')</script>";
                    echo "<script>window.open('index.php', '_self')</script>";
                    exit();
                }
                else{

                    $sqli = "INSERT INTO student_details(firstName,lastName,email,username,school,password,admission,reg_date,status) VALUES('$First_name','$Last_name','$Email','$Username','$School','$pass','$Admission_number',NOW(),'$Status')";
                    $result = mysqli_query($conn,$sqli);
                        if ($result) {
                            $sql = "INSERT INTO verification_codes(email,verification_code) VALUES('$Email','$verification_code')";
                            $insert = mysqli_query($conn,$sql);
                            if($insert){
                              $message = "Your account registration was successful. Your verification code is ".$verification_code;
                              $Subject = "Account registration report"; 
                              $From = "From: brianoproff@gmail.com";

                             $mail = mail($Email, $subject, $message, $From);
                             if ($mail){
                             
                             echo "<script>window.open('code_verifier.php', '_self')</script>";
                             }
                             else{
                              echo "<script>alert('Invalid email')</script>";
                             }
                           }
                           else{
                               echo"<script>alert('An error occurred please try again using relevant details.')</script>";
                               echo "<script>window.open('index.php', '_self')</script>";
                               }
                             }
                    }
           }         
  }
else{
  echo "<font color='red'>Dear $First_name, the passwords you submitted do not match!!!</font>";
}


  
?>