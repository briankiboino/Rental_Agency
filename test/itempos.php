<?php 
$p = ($_GET['p']);
$itno=$p;
require_once 'connect.php'; 
$sql="SELECT * FROM tools WHERE tool_id ='$itno'";
$result=$conn->query($sql);
$counter=0;
if($result->num_rows >0){
while($row=$result->fetch_assoc()){
	$counter=$counter+1;
	date_default_timezone_set("Africa/Nairobi");
	echo "
	<font color=black>
	<div id=enteritem style='position:relative;top:110px;'>
	<p>
	
	<div class='group'>
		Item name
		<input type=text value='".$row['name']."' name=txtitemname placeholder='item description' id='signuptbx'>
		<input type=text value='".$row['tool_id']."' name=txtino placeholder='item description' id='signuptbx' hidden>
	</div>
	
	<div class='group' style='display:none;'>
		BP
		<input type=text value='".$row['price']."' name=txtbp placeholder='item description' id='signuptbx'>
	</div>
	
	
	
	<div class='group'>
		Quantity
		<input type=text name=txtqnty onkeyup='multip()'>
	</div>
	<div class='group'>
		Tax (VAT)
		<input type=text name=txttax onkeyup='multip()' value=0>
	</div>
	<div class='group'>
		Discount
		<input type=text name=txtdisc onkeyup='multip()' value='0'>
	</div>
	<div class='group'>
	<font color=blue>
		SELLING PRICE
	</font>
			<input type=text value='".$row['price']."' name=txtsp placeholder='item description' id='signuptbx'>
	</div>
	
	
	<div class='group'>
	<font color=blue>
		TOTAL COST
	</font>
		<input type=text name=txttotal id='signuptbx' value='0' style='color:red;background-color:yellow;'>
	</div>
	<div class='group'>
		Stock Balance
		<input type=text value='".$row['tool_id']."' name=txtstock placeholder='item description' id='signuptbx' readonly style='color:blue;'>
		
		<input type=text value='".$row['tool_id']."' name=txtistock placeholder='item description' id='signuptbx' readonly style='color:blue; display:none;'>
	</div>
	<div class='group'>
		Unit
		<input type=text value='".$row['tool_id']."' name=txtunit placeholder='item description' id='signuptbx'>
	</div>
	<div class='group'>
		Category
		<input type=text value='".$row['tool_id']."' name=txtcat placeholder='item description' id='signuptbx'>
	</div>
	<div class='group'>
		Remarks
		<input type=text name=txtremark placeholder='remark on sale' id='signuptbx'>
	</div>
	
	<div class='group'>
		#BatchCode
		<input type=text value=0 name=txtbcode placeholder='batchcode' id='signuptbx'>
	</div>
	
<input type=submit value='Record sale' class='btn' id='btnsell'  style='background-color:orange;width:48%;max-width:200px;float:left;margin:5px;background-image:url(additemicon.png);background-size:45px 80%;background-repeat:no-repeat;background-position:right;border-radius:20px 0px;float:right;'>
</a>
</div>

";
}}
$conn->close();
?>