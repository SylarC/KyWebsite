<?php
/**
 * Created by PhpStorm.
 * User: kytis
 * Date: 9/3/2017
 * Time: 3:34 PM
 */

use PHPMailer\PHPMailer\PHPMailer;
require_once ("PHPMailer/PHPMailer.php");

$sender = $_POST["sender"];
$subject = $_POST["subject"];
$msg = $_POST["msg"];


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "kytishong@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "131Sy705Lar352";

//Set who the message is to be sent from
$mail->setFrom($sender);

//Set an alternative reply-to address
$mail->addReplyTo($sender);

//Set who the message is to be sent to
$mail->addAddress('kytishong@gmail.com', 'Kytis Hong');

//Set the subject line
$mail->Subject = $subject;

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($msg);

//Replace the plain text body with one created manually
$mail->AltBody = $msg;

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}