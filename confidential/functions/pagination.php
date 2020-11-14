<style>
.conatiner{
	color: black;
	padding: 8px 16px;
	text-decoration: none;
	transition: background-color .3s;
}
.pagination a:hover:not(.active){background-color: #ddd;}
</style>
<?php
	
	$query = "select * from posts";

	$result = mysqli_query($conn, $query);

	$total_posts = mysqli_num_rows($result);

	$total_pages = ceil($total_posts / $per_page);

	echo"
		<center>
		<div class='conatainer'>
		<div class='row'>
		<div class='col'>
		<a href='social_home.php?page=1'><font color='black'>First Page</font></a>
		</div>
	";

	for ($i=1; $i <= $total_pages ; $i++) { 
		echo"<a href='social_home.php?page=$i'>
		<div class='col'>
		<font color='black'>$i</font>
		</div>
		</a>"
		;
	}

	echo" <div class='col'>
	   <a href='social_home.php?page=$total_pages'><font color='black'>Last Page</font></a>
	   </div>
	   </div>
	     </div>
	     ";
?>