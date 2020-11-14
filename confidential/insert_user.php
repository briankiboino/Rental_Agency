<?php
include 'includes/connection.php';

if (isset($_POST['sign_up'])) {
	
	$firstName = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
	$lastName = htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
	$school = htmlentities(mysqli_real_escape_string($con,$_POST['school_name']));
    $admission = htmlentities(mysqli_real_escape_string($con,$_POST['u_admission']));
    $pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
    $county = htmlentities(mysqli_real_escape_string($con,$_POST['u_county']));
    $gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
    $birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthd']));
    $status = "verified";
    $posts = "no";
    
    $newgid = sprintf('%05d',rand(0,999999));
    $username = strtolower($firstName."_".$lastName."_".$newgid);

    if (strlen($pass) < 6) {
    	echo "<script>alert('Password should be minimum 6 characters!');</script>";
    	exit();
    }

    $password = sha1($pass);

    $check_admission_school_query = "SELECT * FROM `users` WHERE `admission` = '$admission' AND school`= '$school'";
    $run_admission_school = mysqli_query($con, $check_admission_school_query);
    $check = mysqli_num_rows($run_admission_school);

    if ($check == 1) {
    	echo "<script>alert('User already exists, try again!')</script>";
    	echo "<script>window.open('signup.php','_self')</script>";
    	exit();
    }

    $rand = rand(1,3); //random number between 1 and 3
    if ($rand == 1) {
    	$profile_pic = "user_red.jpg";
    }
    elseif ($rand == 2) {
    	$profile_pic = "user_sunflower.jpg";
    }
    elseif ($rand == 3) {
    	$profile_pic = "user_turqoise.jpg";
    }
    
    $cover = "default_cover.jpg";
    
    $insert = "INSERT INTO `users`(`firstName`, `lastName`, `username`, `school`, `admission`, `password`, `county`, `gender`, `image`, `u_cover`, `reg_date`, `status`, `posts`, `birthday`, `recovery_account`) VALUES ('$firstName','$lastName','$username','$school','$admission','$password','$county','$gender','$profile_pic','$cover',NOW(),
        '$status','$posts','$birthday','I want to put a dig in the universe')";

    $query = mysqli_query($con,$insert);

    if ($query) {
    	echo "<script>alert('Well done $firstName, You are good to go! your username is $username 
    	Note: Write this username somewhere you will need for loging in')</script>";
    	echo "<script>window.open('signin.php','_self')</script>";
    }
    else{
    	echo "<script>alert('Registration failed, please try again!')</script>";
    	echo "<script>window.open('signup.php','_self')</script>";
    }
}
?>