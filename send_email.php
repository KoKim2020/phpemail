<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

/**
 * Receiver Data
 */
$name =$_POST['name'];
$email =$_POST['email'];
$subject =$_POST['subject'];
$body =$_POST['body'];

$mail = new PHPMailer(true);


//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "zarchi1111110@gmail.com";     // sender email  
        //    
$mail->Password = "" ; // <= enter your email password        // sender password                   
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to
$mail->Port = 587;                                   

$mail->From = "zarchi1111110@gmail.com"; //sender email
$mail->FromName = "Zar Chi Htun";

$mail->addAddress($email, $name); // recevier email 

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $body;

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}