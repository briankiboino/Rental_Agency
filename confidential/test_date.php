<?php

require_once 'connect.php';

$data = "SELECT * FROM comments WHERE user_id = 21";
$execute = mysqli_query($conn,$data);
$difference = array();
$datefrom = new DateTime();
$dates = array();
$week_count = array();
$month_count = array();
$semester_count = array();
$year_count = array();

while($row = mysqli_fetch_assoc($execute)){
$date = $row['date'];

array_push($dates,$date);

}

for($i=0; $i<=count($dates); $i++){
 $dateto = new DateTime($dates[$i]);
 $years =  ($datefrom->format('Y')) - ($dateto->format('Y'));
 $months =  ($datefrom->format('m')) - ($dateto->format('m'));
 $days =  ($datefrom->format('d')) - ($dateto->format('d'));
 
 if ($years < 1 && $months < 12 && $days < 30)  {
 	array_push($year_count, 1);
 	
 }



}

for($i=0; $i<=count($dates); $i++){
 $dateto = new DateTime($dates[$i]);
 $years =  ($datefrom->format('Y')) - ($dateto->format('Y'));
 $months =  ($datefrom->format('m')) - ($dateto->format('m'));
 $days =  ($datefrom->format('d')) - ($dateto->format('d'));
 
 if ($years < 1 && $months < 1 && $days < 30)  {
 	array_push($month_count, 1);
 	
 }

 

}

for($i=0; $i<=count($dates); $i++){
 $dateto = new DateTime($dates[$i]);
 $years =  ($datefrom->format('Y')) - ($dateto->format('Y'));
 $months =  ($datefrom->format('m')) - ($dateto->format('m'));
 $days =  ($datefrom->format('d')) - ($dateto->format('d'));
 
 if ($years < 1 && $months < 4 && $days < 30)  {
 	array_push($semester_count, 1);
 	
 }

 

}

for($i=0; $i<=count($dates); $i++){
 $dateto = new DateTime($dates[$i]);
 $years =  ($datefrom->format('Y')) - ($dateto->format('Y'));
 $months =  ($datefrom->format('m')) - ($dateto->format('m'));
 $days =  ($datefrom->format('d')) - ($dateto->format('d'));
 
 if ($years < 1 && $months < 1 && $days < 7)  {
 	array_push($week_count, 1);
 	
 }

 

}

$weekly = (count($week_count)/15)*100;
$monthly = (count($month_count)/60)*100;
$semester = (count($semester_count)/240)*100;
$yearly = (count($year_count)/720)*100;

$index['weeklyprogress'] = $weekly;
$index['monthlyprogress'] = $monthly;
$index['semesterprogress'] = $semester;
$index['yearprogress'] = $yearly;

echo $weekly."_".$monthly."_".$semester."_".$yearly."</br>";
echo count($week_count)."</br>";
echo count($month_count)."</br>";
echo count($semester_count)."</br>";
echo count($year_count)."</br>";
echo count($dates);

?>