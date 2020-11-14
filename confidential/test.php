<?php

$subject = "Account registration report";
$message = "Your account registration was authorized";
$from = "From: salimcreators@gmail.com";
$to = "salimcreators@gmail.com";

$mail = mail($to, $subject, $message, $from);

if ($mail) {
	echo "Email sent";
}
 else{
	echo "Email not sent";
}


?>