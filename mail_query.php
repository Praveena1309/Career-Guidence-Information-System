<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$query = $_POST["query"];

header('Location: /overdose/q&a.html');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// PHPMailer classes into the global namespace
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// create object of PHPMailer class with boolean parameter which sets/unsets exception.
$mail = new PHPMailer(true);                              
try {
    $mail->isSMTP(); // using SMTP protocol                                     
    $mail->Host = 'smtp.gmail.com'; // SMTP host as gmail 
    $mail->SMTPAuth = true;  // enable smtp authentication                             
    $mail->Username = 'guidencecareer1@gmail.com';  // sender gmail host              
    $mail->Password = '9842262903'; // sender gmail host password                          
    $mail->SMTPSecure = 'tls';  // for encrypted connection                           
    $mail->Port = 587;   // port for SMTP     

    $mail->setFrom('guidencecareer1@gmail.com', "Career Guidance"); // sender's email and name
    $mail->addAddress('guidencecareer1@gmail.com', "Career Guidance");  // receiver's email and name

    $mail->Subject = 'Query on ' . $subject . ' from '. $name;
    $mail->Body    = "Hi Career Guidance admin, \n" . $query . "\n Thanks,\n" . $name . "\nEmail:" . $email;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) { // handle error.
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


echo "<h2>" . $name . $email . $subject . $query . "</h2>";
?>