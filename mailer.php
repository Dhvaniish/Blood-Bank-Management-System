<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

    //Server settings                  //Enable verbose debug outpu                                   //Send using SMTP
      
    $mail->isSMTP();                            //Set the SMTP server to send through
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';    
    $mail->SMTPDebug = 1;                                       //Enable SMTP authentication
    $mail->Port       = 587; 
    $mail->Username   = 'harshnegi1434@gmail.com';                     //SMTP username
    $mail->Password   = 'liklohgirafsglww';    
    $mail->Subject = 'Here is the subject for onlinecode';                            //SMTP password
    
    $mail->setFrom('harshnegi1434@gmail.com');
    $mail->IsHTML(true);
    $mail->From = 'harshnegi1434@gmail.com';
    $mail->FromName = 'Blood Bank';// frome name
    $mail->Body    = 'Hey Dhvanish, thank you for signing up for Blood Donation. We have verified your profile and you will be shortly notified for your preffered time slot to Donate Blood from Home. <br>Have a Great Day!';
    $mail->AddAddress('dspam3@outlook.com', 'Dhvanish');  // Add a recipient  to name  
    if(!$mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
    }
    else
    {
    echo 'Message of Send email using Gmail SMTP server has been sent';
    }
?>