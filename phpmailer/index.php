<?php
//Include required phpmailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
//Define name spaces
use PHPMailer/PHPMailer/PHPMailer;
use PHPMailer/PHPMailer/SMTP;
use PHPMailer/PHPMailer/Exception;
//Create instance of phpmailer
$mail=new PHPMailer();
//Set mailer to use smtp
$mail->isSMTP();
//define smtp host
$mail->HOST = "smtp.gmail.com";
//enable smtp authentication
$mail->SMTPAuth = "true";
//set type of encryption (ssl/tls)
$mail->SMTPSecure = "tls";
//set port to connect smtp
$mail->Port = "587";
//set gmail username
$mail->Username = "kelompok167pmn1@gmail.com";
//set gmail password
$mail->Password = "rafimualif";
//Set email subject
$mail->Subject = "Using PHPMailer";
//Set sender email
$mail->setFrom("kelompok167pmn1@gmail.com");
//Enable HTML
$mail->isHTML(TRUE);
//Email body
$mail->body = "This is plain text email body";
//Add recipient
$mail->addAdress("kelompok167pmn1@gmail.com");
//Finally send email
if ($mail->Send ()) {
    echo "Email Sent..!";
}else{
    echo "Error..!";
}
//closing smtp connecting
$mail->smtpClose();