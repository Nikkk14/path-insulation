<?php
   $name = $_Post['name'];
    $Email = $_Post['email'];
       $Numbe r= $_Post['number'];
     $message = $_Post['message'];

$email_from = 'hct36679@zwoho.com';
    $email_subject = "New Form";
$email_body = "User Name: $name.\n 
                User Email: $Email.\n
                User Message: $message.\n";
    
    $to = "panchal@pathinsulation.com";
    
    $headers = "From: $email_form \r\n";
$headers = "Reply To: $Email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: index.html");
?>
