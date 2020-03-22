<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings                                                               
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'thiagodepaula.jornalismo@gmail.com';                     // SMTP username
    $mail->Password   = '';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('thiagodepaula.jornalismo@gmail.com', 'Blog');
    $mail->addAddress('thiagodepaula.jornalismo@gmail.com', 'Thiago de Paula');     // Add a recipient
    $mail->addReplyTo($email, 'Usuário');

    // Content
    $mail->isHTML(true);    
    $mail->Subject = $assunto.' // Blog';
    $mail->Body    = "Nome: ".$nome. "\r\n".
                        "<br>".
                     "Email: ".$email. "\r\n".
                        "<br>"."<br>".
                     "Mensagem: ".$mensagem; 
    $mail->CharSet = 'UTF-8';

    $mail->send();
    $sucesso = 'E-mail enviado com sucesso!';

?>
