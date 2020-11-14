<?php 
 session_start();

 include 'includes/connection.php';

 if (isset($_POST['login'])) {
 	
 	$username = htmlentities(mysqli_real_escape_string($conn,$_POST['username']));
 	$password = htmlentities(mysqli_real_escape_string($conn,$_POST['password']));

 	$password = sha1($password);

 	$sql = "SELECT * FROM `student_login` WHERE `username`= '$username' AND `password` = '$password'";

 	$query = mysqli_query($conn,$sql);
 	$check_user = mysqli_num_rows($query);

 	if ($check_user == 1) {
 		$_SESSION['username'] = $username;

 		echo "<script>window.open('home.php','_self')</script>";
 	}
 	else{
 		echo "<script>alert('Your email or password is incorrect!')</script>";
 	}
 }
 ?>