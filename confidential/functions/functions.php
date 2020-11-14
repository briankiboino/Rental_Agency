<?php

$con = mysqli_connect("Localhost","root","","our_school") or die("Connection was not established");

//function for inserting post

function insertPost(){
	if(isset($_POST['sub'])){
		global $con;
		global $user_id;

		$content = htmlentities($_POST['content']);
		$upload_image = $_FILES['upload_image']['name'];
		$image_tmp = $_FILES['upload_image']['tmp_name'];
		$random_number = rand(1, 100);

		if(strlen($content) > 1000){
			echo "<script>alert('Please Use 1000 or less than 1000 words!')</script>";
			echo "<script>window.open('home.php', '_self')</script>";
		}else{
			if(strlen($upload_image) >= 1 && strlen($content) >= 1){
				move_uploaded_file($image_tmp, "imagepost/$upload_image.$random_number");
				$insert = "insert into posts (user_id, post_content, upload_image, post_date) values('$user_id', '$content', '$upload_image.$random_number', NOW())";

				$run = mysqli_query($con, $insert);

				if($run){
					echo "<script>alert('Your Post updated a moment ago!')</script>";
					echo "<script>window.open('home.php', '_self')</script>";

					$update = "update users set posts='yes' where user_id='$user_id'";
					$run_update = mysqli_query($con, $update);
				}

				exit();
			}else{
				if($upload_image=='' && $content == ''){
					echo "<script>alert('Error Occured while uploading!')</script>";
					echo "<script>window.open('home.php', '_self')</script>";
				}else{
					if($content==''){
						move_uploaded_file($image_tmp, "imagepost/$upload_image.$random_number");
						$insert = "insert into posts (user_id,post_content,upload_image,post_date) values ('$user_id','No','$upload_image.$random_number',NOW())";
						$run = mysqli_query($con, $insert);

						if($run){
							echo "<script>alert('Your Post updated a moment ago!')</script>";
							echo "<script>window.open('home.php', '_self')</script>";

							$update = "update users set posts='yes' where user_id='$user_id'";
							$run_update = mysqli_query($con, $update);
						}

						exit();
					}else{
						$insert = "insert into posts (user_id, post_content, post_date) values('$user_id', '$content', NOW())";
						$run = mysqli_query($con, $insert);

						if($run){
							echo "<script>alert('Your Post updated a moment ago!')</script>";
							echo "<script>window.open('home.php', '_self')</script>";

							$update = "update users set posts='yes' where user_id='$user_id'";
							$run_update = mysqli_query($con, $update);
						}
					}
				}
			}
		}
	}
}

function get_posts(){
	global $conn;
	$per_page = 4;

	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}else{
		$page=1;
	}

	$start_from = ($page-1) * $per_page;

	$get_posts = "SELECT * FROM posts ORDER by 1 DESC LIMIT $start_from, $per_page";

	$run_posts = mysqli_query($conn, $get_posts);

	while($row_posts = mysqli_fetch_array($run_posts)){

		$post_id = $row_posts['post_id'];
		$user_id = $row_posts['user_id'];
		$content = substr($row_posts['post_content'], 0,1000);
		$upload_image = $row_posts['upload_image'];
		$post_date = $row_posts['post_date'];

		$user = "select *from users where user_id='$user_id' AND posts='yes'";
		$run_user = mysqli_query($conn,$user);
		$row_user = mysqli_fetch_array($run_user);

		$user_name = $row_user['username'];
		$user_image = $row_user['image'];

		if($content=="No" && strlen($upload_image) >= 1){
			echo"
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6 text-center' data-aos='fade-right'>
				<div class='card'>
					<div class='card-header'>				
						<img src='users/$user_image' class='rounded-circle' width='35px' height='35px' class='rounded-circle'>
							<h10><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h10>
							<h10><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></10>
					</div>
					<div class='card-body'>
							<center>
							<img id='posts-img' src='imagepost/$upload_image' style='height:500px; width: 100%;'>
							</center>
					</div>
					<div class='card-footer' style='height: 60px;'>
					<a href='single.php?post_id=$post_id'<button class='btn btn-info' name='comment' style='float: right;'>Comment</button></a>
					</div>
					</div>
					<br>
				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
		}

		else if(strlen($content) >= 1 && strlen($upload_image) >= 1){
			echo"
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6 text-center' data-aos='fade-up'>
				<div class='card'>
					<div class='card-header'>				
						<img src='users/$user_image' class='rounded-circle' width='35px' height='35px' class='rounded-circle'>
							<h10><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h10>
							<h10><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></10>
					</div>
					<div class='card-body'>
							<center>
							<img id='posts-img' src='imagepost/$upload_image' style='height:500px; width: 100%;'>
							</center>
					</div>
					<div class='card-footer' style='height: 60px;'>
					<a href='single.php?post_id=$post_id'<button class='btn btn-info' name='comment' style='float: right;'>Comment</button></a>
					</div>
					</div>
					<br>
				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
		}

		else{
			echo"
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6 text-center' data-aos='fade-left'>
				<div class='card'>
					<div class='card-header'>				
						<img src='users/$user_image' class='rounded-circle' width='35px' height='35px' class='rounded-circle'>
							<h10><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$user_name</a></h10>
							<h10><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></10>
					</div>
					<div class='card-body'>
							<center>
							<img id='posts-img' src='imagepost/$upload_image' style='height:500px; width: 100%;'>
							</center>
					</div>
					<div class='card-footer' style='height: 60px;'>
					<a href='single.php?post_id=$post_id'<button class='btn btn-info' name='comment' style='float: right;'>Comment</button></a>
					</div>
					</div>
					<br>
				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
		}
	}

	include("pagination.php");
}

   function single_post()
    {
    	if (isset($_GET['post_id'])) {
    		global $con;

    		$get_id = $_GET['post_id'];
    		$get_post = "SELECT * FROM `posts` WHERE `post_id` = '$get_id'";
    		$run_post = mysqli_query($con,$get_post);
    		$row_posts = mysqli_fetch_array($run_post);
            
            $post_id = $row_posts['post_id'];
            $user_id = $row_posts['user_id'];
            $content = $row_posts['post_content'];
            $upload_image = $row_posts['upload_image'];
            $post_date = $row_posts['post_date'];

            $user = "SELECT * FROM `users` WHERE `user_id` = '$user_id' AND `posts` = 'yes'";
            $run_user = mysqli_query($con,$user);
            $row_user = mysqli_fetch_array($run_user);

            $username = $row_user['username'];
            $user_image = $row_user['image'];

            $user_comment = $_SESSION['username'];
            $get_comment = "SELECT * FROM `users` WHERE `username` = '$user_comment'";

            $run_comment = mysqli_query($con,$get_comment);
            $row_comments = mysqli_fetch_array($run_comment);

            $user_comment_id = $row_comments['user_id'];
            $user_comment_name = $row_comments['username'];

            if (isset($_GET['post_id'])) {
            	$post_id = $_GET['post_id'];

            }

            //$get_post = "SELECT post_id FROM `users` WHERE `post_id` = '$post_id'";
            //$run_post = mysqli_query($con, $get_post);
           
            $post_id = $_GET['post_id'];

            $post = $_GET['post_id'];
            $get_user = "SELECT * FROM `posts` WHERE `post_id` = '$post'";
            $run_user = mysqli_query($con,$get_user);
            $row = mysqli_fetch_array($run_user);

            $p_id = $row['post_id'];

            if ($p_id != $post_id) {
            	echo "<script>alert('ERROR')</script>";
            	echo "<script>window.open('home.php','_self')</script>";
            }
            else{
            	if($content=="No" && strlen($upload_image) >= 1){
			echo"
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6'>
					<div class='row'>
						<div class='col-sm-2'>
						<p><img src='users/$user_image' class='img-circle' width='100px' height='100px'></p>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$username</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<img id='posts-img' src='imagepost/$upload_image' style='height:350px;'>
						</div>
					</div><br>
				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
		}

		else if(strlen($content) >= 1 && strlen($upload_image) >= 1){
			echo"
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6'>
					<div class='row'>
						<div class='col-sm-2'>
						<p><img src='users/$user_image' class='img-circle' width='100px' height='100px'></p>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$username</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<p>$content</p>
							<img id='posts-img' src='imagepost/$upload_image' style='height:350px;'>
						</div>
					</div><br>
				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
		}

		else{
			echo"
			<div class='row'>
				<div class='col-sm-3'>
				</div>
				<div id='posts' class='col-sm-6'>
					<div class='row'>
						<div class='col-sm-2'>
						<p><img src='users/$user_image' class='img-circle' width='100px' height='100px'></p>
						</div>
						<div class='col-sm-6'>
							<h3><a style='text-decoration:none; cursor:pointer;color #3897f0;' href='user_profile.php?u_id=$user_id'>$username</a></h3>
							<h4><small style='color:black;'>Updated a post on <strong>$post_date</strong></small></h4>
						</div>
						<div class='col-sm-4'>
						</div>
					</div>
					<div class='row'>
						<div class='col-sm-12'>
							<h3><p>$content</p></h3>
						</div>
					</div><br>
				</div>
				<div class='col-sm-3'>
				</div>
			</div><br><br>
			";
			//else not ending
		}
		     include("comments.php");

		      echo "
                  <div class='row'>
                    <div class='col-md-6 col-md-offset-3'>
                       <div class='panel panel-info'>
                           <div class='panel-body'>
                             <form action='' method='post' class='form-inline'>
                               <textarea placeholder='Write your comment here!' class='pb-cmnt-textarea'
                               name='comment'>
                               </textarea>
                               <button class='btn btn-info pull-right' name='reply'>Comment</button>
                             </form>
                           </div>
                       </div>
                    </div>
                  </div>

		      ";

		      if (isset($_POST['reply'])) {
		      	  $comment = htmlentities($_POST['comment']);

		      	  if ($comment == "") {
		      	  	  echo "<script>alert('Enter your comment')</script>";
            	      echo "<script>window.open('single.php?post_id=$post_id','_self')</script>";
		      	  }
		      	  else{
		      	  	$insert_comment = "INSERT INTO `comments`(`post_id`, `user_id`, `comment`, `comment_author`, `date`) VALUES ('$post_id','$user_id','$comment','$user_comment_name',NOW())";

		      	  	$run = mysqli_query($con,$insert_comment);

		      	  	if ($run) {
		      	  		echo "<script>alert('Thank you for your comment')</script>";
            	        echo "<script>window.open('single.php?post_id=$post_id','_self')</script>";
		      	  	}
		      	  }
		      }
            }


    	}
    }


    function search_user()
    {
    	global $con;

    	if (isset($_GET['search_user_btn'])) {
    		$search_query = htmlentities($_GET['search_user']);

    		$get_user = "SELECT * FROM `users` WHERE `firstName` LIKE '%$search_query%' OR `lastName` LIKE '%$search_query%' OR `username` LIKE '%$search_query%'";
    	}
    	else{
    		$get_user = "SELECT * FROM `users`";
    	}

    	$run_user = mysqli_query($con,$get_user);

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
                       <div class='row' id='find_students'>
                           <div class='col-sm-4'>
                             <a href='user_profile.php?u_id=$user_id'>
                               <img src='users/$user_image' width='150px' height='140px'
                                title='$user_name' style='float: left;margin: 1px;'/>
                             </a>
                           </div><br><br>
                           <div class='col-sm-6'>
                             <a style='text-decoration: none; cursor:pointer; color: #3897f0;' href='user_profile.php?u_id=$user_id'>
                                <strong><h3>$firstName  $lastName</h3></strong>
                                <strong><h4>$user_school</h4></strong>
                               
                             </a>
                           </div>
                           <div class='col-sm-3'>
                           </div>
                       </div>
                    </div>
                    <div class='col-sm-4'>
                    </div>
                  </div><br>
    		";
    	}
    }

?>