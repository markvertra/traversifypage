<?php 
$email = $_POST['email'];
$formcontent="From: $email \r\n";
$recipient = "mark@traversify.com";
$subject = "Email Enquiry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>