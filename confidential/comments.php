<?php  


require 'connect.php';
  $get_id = $_GET['post_id'];

  $get_com = "SELECT * FROM `comments` WHERE `post_id` = '$get_id' ORDER BY 1 DESC";
  $run_com = mysqli_query($conn,$get_com);
  	  
  	  while ($row = mysqli_fetch_array($run_com)) {
  	  	$com = $row['comment'];
  	  	$com_name = $row['comment_author'];
  	  	$date = $row['date'];

  	  	echo "
  	  	     <div class='row'>   
                 <div class='col-sm-3'>
                  </div>
                 <div class='col-sm-6 text-center' data-aos='fade-left'>
                 <div class='card'>
                           <h6><strong>$com_name</strong><i> commented</i> on  $date</h6>
                           <p class='text-primary' style='margin-left: 5px; font-size: 20pxx;'>$com</p>
                       <div class='col-sm-3'>
                  </div>
                 </div
                 </div>
                 </div>
  	  	";
  	  }
?>