<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2 style="color: blue">Your Transaction is successfully completed !!</h2></center>
</body>
</html>

<?php

// $url = "send_mail.php";
// header("url = $url")
$delay = 5;

$url = "index.html";

header("Refresh: $delay; url=$url");

// Use the header() function to set the Refresh parameter




// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// //Load Composer's autoloader
// require 'PHPMailer-master/src/PHPMailer.php';
// require 'PHPMailer-master/src/Exception.php';
// require 'PHPMailer-master/src/SMTP.php';

// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
//     //Server settings
//     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'heetp0101@gmail.com';                     //SMTP username
//     $mail->Password   = 'fyjnuzagsfbntfhg';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
//     $mail->setFrom('heetp0101@gmail.com', 'Testing');
//     $mail->addAddress($email, 'Joe User');     //Add a recipient
//  //   $mail->addAddress('ellen@example.com');               //Name is optional
//     $mail->addReplyTo($email, 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Here is the subject';
    // $mail->Body    = 'Name ='.$name."<br>"."Email = ".$email."<br>"."Phoneno = ".$phoneno."<br>"."Payment id = ".$payment_id."<br>".
    //                   "Amount Debited = ".$amount."<br>"."Plan Selected = ".$plan;
//     // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

?>

