<?php

//include the file that has connection to database
require_once 'connection.php';

//Declaration of variables that will store data from the input fields from the user
$Username = $_POST['username'];
$Email    = $_POST['email'];
$Phone    = $_POST'phone'];
$Password = $_POST['password'];
$Jobs     = $_POST['jobs'];

if (isset(var)) {

//Hash the password so that it cannot be readable in the database incase of hacking
$pass = sha1($Password);

//First check if there us user in the database with the same email
$search = "SELECT * FROM registration WHERE email = '$Email'";
$execute_search_query = mysqli_query($conn,$search);

//Count the number of users with the same email
$count = mysqli_num_rows($execute_search_query);
  if($count > 0){
  	echo "<script>alert('Someone already regsitered with this email. Please use another email.')</script>";
  }
  else{
  	//Insert data into database and remembe rto insert the hashed password($pass)
  	$insert_data = "INSERT INTO registration(username,email,phone,password,jobs) VALUES('$Username','$Email','$Phone','$pass','$Jobs')";
  	$execute_query = mysqli_query($conn,$insert_data);

  	if ($execute_query) {
  		echo "<script>alert('User registerd to the system successfully')</script>";
  	}
  	else{
  		echo "<script>alert('An error occurred. Please use relevant details or try again another time')</script>";
  	}
  }
}

?>