 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Messages</title>
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<style>
  body{
    overflow-x: hidden;
  }
	#scroll_messages{
		max-height: 500px;
		overflow: scroll;
	}
	#btn_msg{
		width: 20%;
		height: 32px;
		border-radius: 5px;
		margin: 5px;
		border: none;
		color: #fff;
		float: right;
		background-color: #2ecc71;
	}
	#select_user{
		max-height: 500px;
		overflow: scroll;
	}
	#green{
		background-color: #3ecc71;
		border-color: #27ae60;
		width: 45%;
		padding: 2.5px;
		font-size: 16px;
		border-radius: 3px;
		float: left;
		margin-bottom: 5px;
		border-radius: 20px;
	}
	#blue{
		background-color: #3498db;
		border-color: #2980b9;
		width: 45%;
		padding: 2.5px;
		font-size: 16px;
		border-radius: 3px;
		float: right;
		margin-bottom: 5px;
		border-radius: 20px;
	}
  #image{
    background-color: #3498db;
    border-color: #2980b9;
    width: 100%;
    padding: 2.5px;
    font-size: 16px; 
    float: right;
    margin-bottom: 5px;
    border-radius: 20px;
  }
  #pdf{
    background-color: #3498db;
    border-color: #2980b9;
    width: 100%;
    padding: 2.5px;
    font-size: 16px;
    float: right;
    margin-bottom: 5px;
    border-radius: 20px;
  }
  #image2{
    background-color: #3ecc71;
    border-color: #27ae60;
    width: 100%;
    padding: 2.5px;
    font-size: 16px;
    float: left;
    margin-bottom: 5px;
    border-radius: 20px;
  }
  #pdf2{
    background-color: #3ecc71;
    border-color: #27ae60;
    width: 100%;
    padding: 2.5px;
    font-size: 16px;
    float: left;
    margin-bottom: 5px;
    border-radius: 20px;
  }

</style>

<body>
   <header id="header" style="background-color: #178FAB;">
    <div class="container-fluid">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span><font color="white"><strong>OUR SCHOOL</strong></font></span></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block bg-default">
       
         <?php 
         require 'connect.php';

           $get_user = "SELECT * FROM `users` WHERE `user_id` = '$id'";
           $run_user = mysqli_query($conn,$get_user);
           $row = mysqli_fetch_array($run_user);

           $user_id = $row['user_id'];
           $firstName = $row['firstName'];
           $lastName = $row['lastName'];
           $user_name = $row['username'];
           $school = $row['school'];
           $admission = $row['admission'];
           $image = $row['image'];

           $user_posts = "SELECT * FROM `posts` WHERE `user_id` = '$user_id'";
           $run_user_posts = mysqli_query($conn,$user_posts);
           $posts = mysqli_num_rows($run_user_posts);

         ?>
        <ul>
          <li class="active drop-down">
            <a href="">
              <?php

              require 'connect.php';

                  $sqli = "SELECT * FROM users WHERE user_id = '$id'";
                  $result = mysqli_query($conn,$sqli);
                  if($result){
                   while($row=mysqli_fetch_assoc($result)) {
                         echo"   
                            <img src='users/$image' width='30px' height='30px' class='rounded-circle'>
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
                     }
                     echo "<font color='white'>".$first_name." ".$last_name."</font>";
                   }

               ?>
                 
               </font>
             </a>
              <ul>
                  <li>
                    <?php
                    echo "
                  <a href='my_posts.php'>My Posts <span class='badge'>$posts</span></a>
                  ";
                  ?>
                </li>
                  <li><a href="profile.php">Edit Account</a></li>
                  <li><a href="logout.php">Sign out</a></li>
                </ul>
           </li>
            <li class="active drop-down"><a href="starter.php"><font color="white"><i class="icofont-home" style="color: #fff"></i></font></a>
              <ul>
                <li><a href="home">Home</a></li>
              </ul>
            </li>
        <li class="active drop-down"><a href="members.php"><font color="white"><i class="icofont-users" style="color: #fff"></i></font></a>
          <ul>
            <li><a href="members.php">Find students</a></li>
          </ul>
        </li>
        <li class="active drop-down"><a href="teachers.php"><font color="white"><i class="icofont-user" style="color: #50d8af;"></i></font></a>
          <ul>
            <li><a href="teachers.php">Find teachers</a></li>
          </ul>
        </li>
        <li class="active drop-down">
          <a href="messages.php">
            <font color="white"><i class="icofont-notification" style="color: #fff"></i>
              <span class='counter counter-lg' data-hover="yes">
                <?php
                 $sql = "SELECT * FROM user_messages WHERE user_to = '$id' AND msg_seen = 'no'";
                   $query = mysqli_query($conn,$sql);
                   $count = mysqli_num_rows($query);
                   if($count == 0){}
                    else{
                 echo "<font color='orange'>$count</font>";
                    }
                  ?>
                  
                </span>
              </font>
            </a>
          <ul>
          <li><a href="messages.php">Notifications</a></li>
        </ul>
      </li>
        </ul>
      </nav>

    </div>
  </header>
  	<section>
  		<div class="container-fluid">
  		<div class="row">
<?php

if (isset($_GET['u_id'])) {
	
	require_once 'connect.php';
    
    $get_id = $_GET['u_id'];

    $get_user = "SELECT * FROM users WHERE user_id = '$get_id'";

    $run_user = mysqli_query($conn,$get_user);
    $row_user = mysqli_fetch_assoc($run_user);

    $user_to_msg = $row_user['user_id'];
    $user_to_name = $row_user['username'];


}

require_once 'connect.php';

$user = $_SESSION['user_id'];
$get_use = "SELECT * FROM users WHERE user_id = '$user'";
$run = mysqli_query($conn,$get_use);
$row = mysqli_fetch_assoc($run);

$user_from_msg = $row['user_id'];
$user_from_name = $row['username']; 


?>
<div class="col-sm-3" id="select_user">
  <form class="search-form" action="">
    <div class='input-group mb-3'>
      <input type="text" name="search_user" required="required" class="form-control" placeholder="Search user here...">
        <div class='input-group-append'>
        <button class='fas fa-search' type="submit" name="search_user_btn" title='Search user by username'></span>
        </div>
        </div></br>
    
  </form>
<?php

    require_once 'connect.php';

    $id = $_SESSION['user_id'];

    if (isset($_GET['search_user_btn'])) {
        $search_query = htmlentities($_GET['search_user']);

        $get_user = "SELECT * FROM `users` WHERE `firstName` LIKE '%$search_query%' OR `lastName` LIKE '%$search_query%' OR `username` LIKE '%$search_query%'";
         $run_user = mysqli_query($conn,$get_user);
    while ($row_user = mysqli_fetch_assoc($run_user)) {
      
         $user_id = $row_user['user_id'];
         $use_name = $row_user['username'];
         $first_name = $row_user['firstName'];
         $last_name = $row_user['lastName'];
         $user_image = $row_user['image'];

         $sql = "SELECT * FROM user_messages WHERE user_to = '$id' AND user_from = '$user_id' AND msg_seen = 'no'";
         $query = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($query);

         echo "
           <div class='container-fluid'>
           <a href='messages.php?u_id=$user_id' name='view' style='text-dcoration: none; cursor: pointer; color: #3897F0'>
           <img class='rounded-circle' src='users/$user_image' width='90px' height='80px' title='user_name'>
           <strong>&nbsp $first_name $last_name</strong>
           ";

           if($count == 0){
           }
           else{
            echo "
           <label class='bg-success' style='float: right; width: 20px; border-radius: 50%;'>
               <font color='white'>
                  <center>
                      $count
                  </center>    
                </font>
           </label><br><br>
           "; 
       }
           echo "
           </a>
           </div>
           <div class='border-bottom bg-dark'></div><br><br>

         ";

          if (isset($_POST['view'])) {    
               require_once 'connect.php';
               $sqli = "UPDATE user_messages SET msg_seen ='$seen' WHERE user_to = '$id' AND use_from = '$user_id'";
               $query_run = mysqli_query($sqli);

               if ($query_run) {
               }
               else{
                echo "unsuccess";
               }

         }

    }
      }
      else{
        $get_user = "SELECT * FROM `users`";
          $run_user = mysqli_query($conn,$get_user);
    while ($row_user = mysqli_fetch_assoc($run_user)) {
      
         $user_id = $row_user['user_id'];
         $use_name = $row_user['username'];
         $first_name = $row_user['firstName'];
         $last_name = $row_user['lastName'];
         $user_image = $row_user['image'];

         $sql = "SELECT * FROM user_messages WHERE user_to = '$id' AND user_from = '$user_id' AND msg_seen = 'no'";
         $query = mysqli_query($conn,$sql);
         $count = mysqli_num_rows($query);

         echo "
           <div class='container-fluid'>
           <a href='messages.php?u_id=$user_id' name='view' style='text-dcoration: none; cursor: pointer; color: #3897F0'>
           <img class='rounded-circle' src='users/$user_image' width='90px' height='80px' title='user_name'>
           <strong>&nbsp $first_name $last_name</strong>
           ";

           if($count == 0){
           }
           else{
            echo "
           <label class='bg-success' style='float: right; width: 20px; border-radius: 50%;'>
               <font color='white'>
                  <center>
                      $count
                  </center>    
                </font>
           </label><br><br>
           "; 
       }
           echo "
           </a>
           </div>
           <div class='border-bottom bg-dark'></div><br><br>

         ";

          if (isset($_POST['view'])) {    
               require_once 'connect.php';
               $sqli = "UPDATE user_messages SET msg_seen ='$seen' WHERE user_to = '$id' AND use_from = '$user_id'";
               $query_run = mysqli_query($sqli);

               if ($query_run) {
               }
               else{
                echo "unsuccess";
               }

         }
       }
      }


   

?>
	</div>
	<div class="col-sm-6">
		<div class="load_msg" id="scroll_messages">
<div>
	<p>	

<?php
       
    if (isset($_GET['u_id'])) {
    	$to = $_GET['u_id'];

    	$from = $_SESSION['user_id'];
     
      $select_msg = "SELECT * FROM user_messages WHERE (user_to = '$to' AND user_from = '$from') OR (user_from = '$to' AND user_to = '$from' ) ORDER by 1 ASC";
      $run_msg = mysqli_query($conn,$select_msg);

      while ($row_msg = mysqli_fetch_assoc($run_msg)) {
      
      $user_to = $row_msg['user_to'];
      $user_from = $row_msg['user_from'];
      $msg_body = $row_msg['msg_body'];
      $pdf = $row_msg['pdf'];
      $image = $row_msg['img'];
      $msg_date = $row_msg['date'];
     
     if ($user_to == $to AND $user_from == $from) {
      if(!$msg_body == "" && $pdf == "" && $image == ""){
     	echo "
           <div class='message' id='blue' data-toggle='tooltip' title='$msg_date'>$msg_body</div><br><br>
     	";
     }
      elseif($image == "" && !$msg_body == "" && !$pdf == ""){
        echo "
        <div class='row'>
        <div class='col'></div>
        <div class='col'>
           <div class='message' id='pdf' data-toggle='tooltip' title='$msg_date'>
           <div style='margin-left: 3px; margin-right: 3px; margin-top: 3px; margin-bottom: 3px;'>
           <embed src='uploads/$pdf' type='application/pdf' width='100%' height='400px;'>
           </div>
           <p style='margin-left: 5px;'>$msg_body</p>
           </div>
           </div>
           </div></br>
      ";
     }
      elseif(!$image == "" && !$msg_body == "" && $pdf == ""){
        echo "
        <div class='row'>
        <div class='col'></div>
        <div class='col'>
           <div class='rounded' id='image' data-toggle='tooltip' title='$msg_date'>
           <div style='margin-left: 3px; margin-right: 3px; margin-top: 3px; margin-bottom: 3px;'>
           <img src='uploads/$image' width='100%' height='400px;'>
           </div>
           <p style='margin-left: 5px;'>$msg_body</p>
           </div>
           </div>
           </div></br>
      ";
     }
     elseif($image == "" && $msg_body == "" && !$pdf == ""){
        echo "
        <div class='row'>
        <div class='col'></div>
        <div class='col'>
           <div class='rounded' id='pdf' data-toggle='tooltip' title='$msg_date'>
           <div style='margin-left: 3px; margin-right: 3px; margin-top: 3px; margin-bottom: 3px;'>
           <embed src='uploads/$pdf' type='application/pdf' width='100%' height='400px;'>
           </div>
           </div><br><br>
           </div>
           </div></br>
      ";
     }
      elseif(!$image == "" && $msg_body == "" && $pdf == ""){
        echo "
        <div class='row'>
        <div class='col'></div>
        <div class='col'>
           <div class='rounded' id='image' data-toggle='tooltip' title='$msg_date'>
           <div style='margin-left: 3px; margin-right: 3px; margin-top: 3px; margin-bottom: 3px;'>
           <img class='rounded' src='uploads/$image' width='100%' height='400px;'>
           </div>
           </div><br><br>
           </div>
           </div></br>
      ";
     }
     }
     
     elseif ($user_to == $from AND $user_from == $to) {
       if($pdf == "" && $image == "" && !$msg_body == ""){
      echo "
         <div class='message' id='green' data-toggle='tooltip' title='$msg_date'>$msg_body</div></br><br>
      ";
     }
     elseif($image == "" && !$msg_body == "" && !$pdf == ""){
        echo "
        <div class='row'>
        <div class='col'>
           <div class='rounded' id='pdf2' data-toggle='tooltip' title='$msg_date'>
           <div style='margin-left: 3px; margin-right: 3px; margin-top: 3px; margin-bottom: 3px;'>
           <embed src='uploads/$pdf' type='application/pdf' width='100%' height='400px;' >
           </div>
           <p style='margin-left: 5px;'>$msg_body</p>
           </div>
           </div>
           <div class='col'></div>
           </div></br>
      ";
     }
      elseif(!$image == "" && !$msg_body == "" && $pdf == ""){
        echo "
        <div class='row'>
        <div class='col'>
           <div class='rounded' id='image2' data-toggle='tooltip' title='$msg_date'>
           <div style='margin-left: 3px; margin-right: 3px; margin-top: 3px; margin-bottom: 3px;'>
           <img src='uploads/$image' width='100%' height='400px;'>
           </div>
           <p style='margin-left: 5px;'>$msg_body</p>
           </div>
           </div>
           <div class='col'></div>
           </div></br>
      ";
     }
     elseif($image == "" && $msg_body == "" && !$pdf == ""){
        echo "
        <div class='row'>
        <div class='col'>
           <div class='rounded' id='pdf2' data-toggle='tooltip' title='$msg_date'>
           <div style='margin-left: 3px; margin-right: 3px; margin-top: 3px; margin-bottom: 3px;'>
           <embed src='uploads/$pdf' type='application/pdf' width='100%' height='400px;'>
           </div>
           </div><br><br>
           </div>
           <div class='col'></div>
           </div></br>
      ";
     }
      elseif(!$image == "" && $msg_body == "" && $pdf == ""){
        echo "
        <div class='row'>
        <div class='col'>
           <div class='rounded' id='image2' data-toggle='tooltip' title='$msg_date'>
           <div style='margin-left: 3px; margin-right: 3px; margin-top: 3px; margin-bottom: 3px;'>
           <img src='uploads/$image' width='100%'>
           </div>
           </div><br><br>
           </div>
           <div class='col'></div>
           </div></br>
      ";
     }
 }
   }
 }

 if (isset($_POST['view'])) {
    
    require_once 'connect.php';

     
 }

?>
        </p>
    </div>
	</div>
<?php
     if (isset($_GET['u_id'])) {
     	$u_id = $_GET['u_id'];

     	if ($u_id == "new") {
     		echo "

     		<form>
     		<center>
     		<h3>Select someone to start a conversation</h3>
     		<div class='input-group mb-3'>
        <textarea disabled placeholder='Enter your message' name='msg_box' id='message_textarea'></textarea>
        <div class='input-group-append'>
        <span class='input-group-text' title='Share document/pdf'><label class='fas fa-paperclip'></label></span>
        <span class='input-group-text' title='Share image'><label class='fas fa-camera'></label></span>
        </div>
        </div>
     		<br>
     		<button id='btn_msg' disabled>Send<button>
     		</center>
     		</form><br><br>

     		";
     	}
     	else{
     		echo " 
            

        <form atcion='messages.php' method='POST' enctype='multipart/form-data'>
     		<center>
     		<h3>Start a conversation</h3>
        <div class='input-group mb-3'>
     		<textarea class='form-control' placeholder='Enter your message' name='msg_box' id='message_textarea'></textarea>
        <div class='input-group-append'>
        <span class='input-group-text' title='Share document/pdf'><label class='fas fa-paperclip'><input type='file' name='upload_pdf' style='width: 0px;'></label></span>
        <span class='input-group-text' title='Share image'><label class='fas fa-camera'><input type='file' name='upload_image' style='width: 0px;'></label></span>
        </div>
        </div>
     		<button onClick=;window.location.reload(); name='send_msg' id='btn_msg'>Send</button>
     		</center>
     		</form><br><br>

     		";


     	}
     }
?>
<?php
    
    require_once 'connect.php';

    if (isset($_POST['send_msg'])) {
    	$msg = $_POST['msg_box'];
      $pdf = $_FILES['upload_pdf']['name'];
      $pdf_tmp = $_FILES['upload_pdf']['tmp_name'];
      $image = $_FILES['upload_image']['name'];
      $image_tmp = $_FILES['upload_image']['tmp_name'];
      $null = "No";

    	if ($pdf_tmp == "" && $image_tmp == "" && !$msg == "") {
    		$insert = "INSERT INTO user_messages(user_to,user_from,msg_body,date,msg_seen) VALUES('$user_to_msg','$user_from_msg','$msg',NOW(), 'no')";
        $run = mysqli_query($conn,$insert);
    	}
      elseif($image == "" && !$msg == "" && !$pdf = ""){
        move_uploaded_file($pdf_tmp, "uploads/$pdf");
        $insert = "INSERT INTO user_messages(user_to,user_from,msg_body,pdf,date,msg_seen) VALUES('$user_to_msg','$user_from_msg','$msg','$pdf',NOW(), 'no')";
        $run = mysqli_query($conn,$insert);
      }
    	elseif ($pdf == "" && !$msg == "" && !$image == "") {
    		move_uploaded_file($image_tmp, "uploads/$image");
        $insert = "INSERT INTO user_messages(user_to,user_from,msg_body,img,date,msg_seen) VALUES('$user_to_msg','$user_from_msg','$msg','$image',NOW(), 'no')";
        $run = mysqli_query($conn,$insert);
    	}
      elseif ($msg == "" && $image == "" && !$pdf == "") {
        move_uploaded_file($pdf_tmp, "uploads/$pdf");
        $insert = "INSERT INTO user_messages(user_to,user_from,pdf,date,msg_seen) VALUES('$user_to_msg','$user_from_msg','$pdf',NOW(), 'no')";
        $run = mysqli_query($conn,$insert);
      }
      elseif ($msg == "" && !$image == "" && $pdf == "") {
        move_uploaded_file($image_tmp, "uploads/$image");
        $insert = "INSERT INTO user_messages(user_to,user_from,img,date,msg_seen) VALUES('$user_to_msg','$user_from_msg','$image',NOW(), 'no')";
        $run = mysqli_query($conn,$insert);
      }
    	else{
    	echo "<script>alert('Message cannot be blank!!!')</script>";
    }
  }

?>
</div>
<div class="col-sm-3">
<?php

  if (isset($_GET['u_id'])) {
	
	require_once 'connect.php';
    
    $get_id = $_GET['u_id'];

    $get_user = "SELECT * FROM users WHERE user_id = '$get_id'";

    $run_user = mysqli_query($conn,$get_user);
    $row = mysqli_fetch_assoc($run_user);

   $user_id = $row['user_id'];
   $firstName = $row['firstName'];
   $lastName = $row['lastName'];
   $user_name = $row['username'];
   $school = $row['school'];
   $admission = $row['admission'];
   $image = $row['image'];
   $status = $row['status'];
   $reg_date = $row['reg_date'];



if ($get_id == "new") {
	
}
else{
	echo "
       <div class='col' data-aos='fade-right'>
      	<center>
      		<div style='background-color: #e6e6e6; height: 550px;' class='col'>
      			<h3>Information about</h3>
      			<img src='users/$image' class='rounded-circle' width='150' height='150'>
      			<br><br>
      			<ul class='list-group'>
      				<li class='list-group-item'>Name:<strong>$firstName $lastName</strong></li>
      				<li class='list-group-item'>Status:<strong style='color: grey;'>$status</strong></li>
      				<li class='list-group-item'>School:<strong>$school</strong></li>
      				<li class='list-group-item'>Admission:<strong>$admission</strong></li>
      				<li class='list-group-item'>Member since:<strong>$reg_date</strong></li>
      			</ul></br>	

	";
}
}

?>	
</div>
</div>
  	</section>
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
        <a href="halsodasgenerationlimited.com/briankim"> Designed by Brian Kimutai</a>
      </div>
    </div>
  </footer <?php
   

$conn = mysqli_connect("Localhost","root","","our_school") or die("Connection was not established");

  
      
  function search_user()
    {
      global $conn;

      if (isset($_GET['search_user_btn'])) {
        $search_query = htmlentities($_GET['search_user']);

        $get_user = "SELECT * FROM `users` WHERE `firstName` LIKE '%$search_query%' OR `lastName` LIKE '%$search_query%' OR `username` LIKE '%$search_query%'";
      }
      else{
        $get_user = "SELECT * FROM `users` WHERE role = 'Student'";
      }

      $run_user = mysqli_query($conn,$get_user);

      while ($row_user = mysqli_fetch_array($run_user)) {
        $user_id = $row_user['user_id'];
        $firstName = $row_user['firstName'];
        $lastName = $row_user['lastName'];
        $user_name = $row_user['username'];
        $user_image = $row_user['image'];
        $user_school = $row_user['school'];

        echo "
                  <div class='row'>
                    <div class='col-sm-3'>
                    </div>
                    <div class='col-sm-6'>
                       <div class='card' id='find_students'>
                          <div class='card-body'>
                             <div class='row'>
                                 <div class='col-md-5 m-1'>
                                   <a href='user_profile.php?u_id=$user_id'>
                                     <img src='users/$user_image'  width='100%' height='170px'
                                      title='$user_name' style='float: left;margin: 1px;'/>
                                   </a>
                                   </div>
                                   <div class='col-md-6'>
                                   <a style='text-decoration: none; cursor:pointer; color: #3897f0;' href='user_profile.php?u_id=$user_id'>
                                      <strong><h5 style='margin-top: 80px;'>$firstName  $lastName</h5></strong>
                                      <strong><h5>$user_school</h5></strong>     
                                   </a>
                                   </div>
                             </div>
                           </div>
                         </div>
                    </div>
                    <div class='col-sm-3'>
                    </div>
                  </div><br>
        ";
      }
    }




?>>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <script>
  	var div = document.getElementById("scroll_messages");
  	div.scrollTop = div.scrollHeight;
  </script>
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