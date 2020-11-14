<!DOCTYPE html>
<html>
<head>
	<title>Our School Login and Signup</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style >
	body{
		overflow-x: hidden;
	}
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 30%;
		left: 30%;
		transform: translate(-50%,-50%);
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 50%;
		left: 40%;
		transform: translate(-50%,-50%);
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 70%;
		left: 40%;
		transform: translate(-50%,-50%);
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		border: 2px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	.well{
		background-color: #178FAB;
	}
</style>
<body>
    <div class="row">
    	<div class="col-sm-12">
    		<div class="well">
    			<center><h1 style="color: white;">Our School</h1></center>
    		</div>
    	</div>
    </div>
    <div class="row">
    	<div class="col-sm-6" style="left: 0.5%;">
    		<img src="images/students.jpg" class="img-rounded" title="Our School"
    		width="600px" height="565px">
    		<div id="centered1" class="center">
    			<h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp &nbsp<strong>Learning Made Simple</strong></h3>
    		</div>
    		<div id="centered2" class="center">
    			<h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp &nbsp<strong>Study from well Comprehensive notes and attempt quizes</strong></h3>
    		</div>
    		<div id="centered3" class="center">
    			<h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp &nbsp<strong>Hear what people are saying and join the conversation</strong></h3>
    		</div>
    	</div>
    	<div class="col-sm-6" style="left: 8%:">
    		<img src="images/logo.jpg" class="img-rounded" title="Our School"
    		width="80px" height="80px">
    		<h2><strong>See what every other student in the country<br>is reading now!</strong></h2><br><br>
    		<h4>Join Our School today.</h4>
    		<form method="post" action="">
    		  <button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
    		   <?php 
    		     if (isset($_POST['signup'])) {
    		     	echo "<script>window.open('signup.php','_self')</script>";
    		     }
    		   ?>
    		  <button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
    		  <?php 
    		     if (isset($_POST['login'])) {
    		     	echo "<script>window.open('signin.php','_self')</script>";
    		     }
    		   ?>
    		</form>
    	</div>
    </div>
</body>
</html>