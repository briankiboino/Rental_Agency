<?php
session_start();

$_SESSION['user_id'];
$id = $_SESSION['user_id'];

require_once 'connect.php';

$Status = "Offline";
$sql = "UPDATE users SET status ='$Status' WHERE user_id = '$id'";
$query = mysqli_query($conn,$sql);
if ($query) {
	session_unset();
	session_destroy();
	header("location:index.php");
}

?>