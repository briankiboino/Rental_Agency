<?php
include("connection.php"); 
include("functions/functions.php");

if (!isset($_SESSION['user_id'])) {
 header('Location: index.php');
}

$id = $_SESSION['user_id'];


?>
<nav class="nav-menu float-right d-none d-lg-block bg-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse"
			aria-expanded="false">
			<span class="sr-only">Toogle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a href="home.php" class="navbar-brand"><strong><font color="white">Our School</font></strong></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<?php 
				   $id = $_SESSION['user_id'];
				   $get_user = "SELECT * FROM `users` WHERE `user_id` = '$id'";
				   $run_user = mysqli_query($con,$get_user);
				   $row = mysqli_fetch_array($run_user);

				   $user_id = $row['user_id'];
				   $firstName = $row['firstName'];
				   $lastName = $row['lastName'];
				   $user_name = $row['username'];
				   $school = $row['school'];
				   $admission = $row['admission'];
				   $password = $row['password'];
				   $image = $row['image'];
				   $reg_date = $row['reg_date'];
				   $status = $row['status'];
				   $posts = $row['posts'];

				   $user_posts = "SELECT * FROM `posts` WHERE `user_id` = '$user_id'";
				   $run_user_posts = mysqli_query($con,$user_posts);
				   $posts = mysqli_num_rows($run_user_posts);
				 ?>

				<li><a href='profile.php?<?php echo "u_id=$user_id" ?>'><?php echo "<font color='white'>$firstName</font>"; ?></a></li>
		       	<li><a href="home.php"><font color="white">Home</font></a></li>
				<li><a href="members.php"><font color="white">Find Students</font></a></li>
				<li><a href="messages.php?u_id=new"><font color="white">Messages</font></a></li>

				<?php
						echo"
						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span><i class='glyphicon glyphicon-chevron-down' style='color: white;'></i></span></a>
							<ul class='dropdown-menu'>
								<li>
									<a href='my_post.php?u_id=$user_id'>My Posts <span class='badge badge-secondary'>$posts</span></a>
								</li>
								<li>
									<a href='edit_profile.php?u_id=$user_id'>Edit Account</a>
								</li>
								<li role='separator' class='divider'></li>
								<li>
									<a href='logout.php'>Logout</a>
								</li>
							</ul>
						</li>
						";
				?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<form class="navbar-form navbar-left" method="get" action="results.php">
						<div class="form-group">
							<input type="text" class="form-control" name="user_query" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-success" name="search">Search</button>
					</form>
				</li>
			</ul>
		</div>
	</div>
</nav>