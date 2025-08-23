<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$name= $_POST["name"];
$email= $_POST["email"];
$message= $_POST["message"];
$subject= "KS Website Inquery";
$txt = "You have received an e-mail from: " .$name.".\n\n\n\n".$message;


if(mail(

	//-----------------------------EDIT HERE-------------------------------------------------------------------------->
  'cukappasigma2023@hotmail.com', // To email address
  $subject, // Subject
  $txt, // Message body
  "From: " .$email // Message headers
)) {
  echo "Email sent!";
  
} else {
  $error = error_get_last();
  echo "Failed to send email";
  echo $error;
}



?>