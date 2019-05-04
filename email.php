<?php
// the message
echo "set";
// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// // send email
// ini_set("SMTP", "smtp.gmail.com");
// ini_set("smtp_port", "587");
// // ini_set("sendmail_from", "zarkalijan@gmail.com");
// // mail("zarkali8@gmail.com","My subject",$msg);



// $to = "zarkali8@gmail.com";
// $subject = "The mail subject goes here";
// $content= "And this is the mail content!";
// $headers = "From:Me@Mywebsite.Com\r\n";

// mail($to,$subject,$content,$headers
// <?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
 require 'F:\e-rozgar\xampp\vendor\autoload.php';
/* If you installed PHPMailer without Composer do this instead: */
/*
require 'C:\PHPMailer\src\Exception.php';
require 'C:\PHPMailer\src\PHPMailer.php';

require 'C:\PHPMailer\src\SMTP.php';
*/
  require 'F:\e-rozgar\xampp\vendor\phpmailer\phpmailer\src\PHPMailer.php';
  require 'F:\e-rozgar\xampp\vendor\phpmailer\phpmailer\src\SMTP.php';
  require 'F:\e-rozgar\xampp\vendor\phpmailer\phpmailer\src\Exception.php';
/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
 $mail = new PHPMailer(TRUE);
	// $mail = new PHPMailer\PHPMailer\PHPMailer();
/* Open the try/catch block. */
try {
   /* Set the mail sender. */
$mail->isSMTP(); # SMTP is enabled now.
$mail->Host = 'smtp.gmail.com'; //smtp.gmail.com
$mail->SMTPDebug   = 2;
$mail->SMTPAuth = true;
    $mail->Port = 587; // Your Outgoing Port
     $mail->Username = "techzns@gmail.com"; // Your Email Address
     $mail->Password = "enter gmail Password";//enter your email password
     $mail->SMTPSecure = 'tls';
     $mail->Username ='techzns@gmail.com';
     // $mail->SMTPAuth = true; 
   $mail->setFrom('only4rdrive@gmail.com' ,"ZNS Tech");

   /* Add a recipient. */
   $mail->addAddress('only4rdrive@gmail.com');

   /* Set the subject. */
   $mail->Subject = 'test';

   /* Set the mail message body. */
   $mail->Body = 'i try to test a send mail';

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{ 
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}

echo "your email is send";
?>