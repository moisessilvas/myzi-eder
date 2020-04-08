<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
//require '../../vendor/autoload.php';
require '../../vendor/autoload.php';

    function envio_gmail_admin($subject, $text) {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'diegommobr@gmail.com';             // SMTP username
            $mail->Password = 'Tiatuke12';                        // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('diegommobr@gmail.com', 'Equipe Mariana Menezes');
            $mail->addAddress('diegommobr@gmail.com', 'Maikai Consultoria');
            //$mail->addAddress('atendimento@maikaiconsultoria.com', 'Maikai Consultoria');    // Add a recipient
            //$mail->addCC('emaildiegomo@gmail.com'); //para testar
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');       // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $text;   
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            //echo 'Message has been sent';
        } catch (Exception $e) {
            //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }

    function envio_gmail_user($email, $subject, $text) {
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'diegommobr@gmail.com';             // SMTP username
            $mail->Password = 'Tiatuke12';                        // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('diegommobr@gmail.com', 'Equipe Mariana Menezes');
            $mail->addAddress($email, $email);                    // Add a recipient
            //$mail->addCC('emaildiegomo@gmail.com');             //para testar
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');       // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');  // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $text;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            //echo 'Message has been sent';
        } catch (Exception $e) {
            //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
