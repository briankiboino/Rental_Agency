<?php
  
   $subject = "Masomo";
   $message = "Heey there";
   $from = "From: brianoproff@gmail.com";
   $to = "brianoproff@gmail.com";
   $mail = mail($to, $subject, $message, $from);
  
   if($mail){
      echo"Email sent successfully"; 
   }
   else{
       echo"Email was not sent";
   }

?>