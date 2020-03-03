<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
    require_once ('../../vendor/autoload.php');

    function envio($titulo, $email, $senha) {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'ns904.hostgator.com.br';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'noreply@clifops.com.br';                 // SMTP username
            $mail->Password = 'ges2018@)!*';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('noreply@clifops.com.br', 'Clifops');
            $mail->addAddress("$email", "$titulo");    // Add a recipient
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('emaildiegomo@gmail.com'); //para testar
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Bem-vindo ao Clifops!';
            $mail->Body    = 'Olá '.$titulo.',<br/> Você foi cadastrado(a) na plataforma Clifops.<br/>Sua senha é <b>'.$senha.'</b>, troque assim que acessar a plataforma.<br/>Atenciosamente,<br/>Equipe Clifops';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
