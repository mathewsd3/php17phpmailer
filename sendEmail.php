<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'src/Exception.php';

/* The main PHPMailer class. */
require 'src/PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "ssl://smtp.gmail.com"; // SMTP server example
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
$mail->Username   = "etudiant.isi.java2@gmail.com"; // SMTP account username example
$mail->Password   = "abc123...";
$mail->setFrom('etudiant.isi.java2@gmail.com' , 'JF L');

/* Add a recipient. */
$mail->addAddress('mathewsdawn3@gmail.com', 'This is test 1 d');


/* Set the subject. */
$mail->Subject = 'mail subject ';

/* Set the mail message body. */
$mail->Body = 'Demo mail is working';
try {
    $mail->send();

}catch (Exception $e){
    echo $e->getMessage();
}