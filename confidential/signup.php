<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #178FAB;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
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
    	<div class="col-sm-12">
    		<div class="main-content">
    			<div class="header">
    				<h3 style="text-align: center;"><strong>Join Our School</strong></h3><hr>
    			</div>
    			<div class="l-part">
    				<form action="" method="post">
    					<div class="input-group">
    						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
    						<input type="text" class="form-control" placeholder="First Name" name="first_name" required="required">
    					</div><br>
    					<div class="input-group">
    						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
    						<input type="text" class="form-control" placeholder="Last Name" name="last_name" required="required">
    					</div><br>
    					<div class="input-group">
    						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
    						<input type="text" class="form-control" placeholder="School Name e.g Kisumu Boys High School" name="school_name" required="required">
    					</div><br>
    					<div class="input-group">
    						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    						<input type="text" class="form-control" placeholder="Admission Number" name="u_admission" required="required">
    					</div><br>
    					<div class="input-group">
    						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    						<input id="password" type="password" class="form-control" placeholder="Password" name="u_pass" required="required">
    					</div><br>
    					<div class="input-group">
    						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
    						<select class="form-control" name="u_county" required="required">
    							<option disabled>Select your county</option>
    							<option>Mombasa</option>
    							<option>Kwale</option>
    							<option>Kilifi</option>
    							<option>Tana River</option>
    							<option>Lamu</option>
    							<option>Taita-Taveta</option>
    							<option>Garisa</option>
    							<option>Wajir</option>
    							<option>Mandera</option>
    							<option>Marsabit</option>
    						</select>
    					</div><br>
    					<div class="input-group">
    						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
    						<select class="form-control input-md" name="u_gender" required="required">
    							<option disabled>Select your gender</option>
    							<option>Male</option>
    							<option>Female</option>
    							<option>Others</option>
    						</select>
    					</div><br>
    					<div class="input-group">
    						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
    						<input type="date" class="form-control input-md" placeholder="Date of birth" name="u_birthd" required="required">
    					</div><br>
    					<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Signin" href="signin.php" >Already have an account?</a><br><br>
    					<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center>
    					
    					<?php include("insert_user.php");?>
    				</form>
    			</div>
    		</div>
    	</div>
    </div>
</body>
</html>