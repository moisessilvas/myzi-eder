<?php
    require_once('email-gmail.php');

      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

    envio_gmail("$email", "$name", "Mensagem recebida do site, de $name", "A mensagem recebida de $name diz: <br><br> <b>$message</b>");
    envio_gmail_user("$email", "$name", "Confirmation: your message was sent to Mariana Menezes' team", "Thank you for you message, $name! As soon as possible it is going to be replied<br><br>Best regards,<br>Mariana Menezes' team");
    header("Location: index.php");
?>