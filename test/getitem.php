
<?php

$q = ($_GET['q']);
require_once 'connect.php';
$sql="SELECT * FROM tools WHERE name LIKE '%$q%'";
$result=$conn->query($sql);
$counter=0;
if($result->num_rows >0){
	echo "
	<div id='srcdiv' style='width:100%;'><table border=0><tr>";
while($row=$result->fetch_assoc()){
	$counter=$counter+1;
	echo "<td width=100%><font color=darkblue>";
	echo $row['name'];
	echo "</font>
	</td><td>
	
	<form>
	
	<input type=button value='".$row['tool_id']."' class='btnadd' onClick='showSitem(this.value)'>
	</form>
	
	";
	echo "</td></tr>";
}
}else{
	echo "<b><font color=red>No such item(s) found</font></b>";
}
echo "</table></div>";


$conn->close();
?>