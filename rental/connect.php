<?php

//error_reporting(0);
'session_start';

$conn = new mysqli('localhost', 'root', '', 'rentz_agency');

if($conn->connect_errno > 0){

die('Sorry, We\'re experiencing some connection problems.');

}

?>