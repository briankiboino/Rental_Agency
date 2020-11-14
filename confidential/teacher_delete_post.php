<?php 
$con = mysqli_connect("localhost","root","","our_school") or die("Connection was not established");

if (isset($_GET['post_id'])) {
	$post_id = $_GET['post_id'];

	$delete_post = "DELETE FROM `posts` WHERE `post_id` = '$post_id'";
	$run_delete = mysqli_query($con,$delete_post);

	if ($run_delete) {
		echo "<script>alert('Post has been deleted successfully...')</script>";
		echo "<script>window.open('teacher_starter.php','_self')</script>";
	}
}
?>