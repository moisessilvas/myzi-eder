<?php
    require_once('email-gmail.php');

      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

    envio_gmail("$email", "$name", "Mensagem recebida do site, de $name", "A mensagem recebida de $name diz: <br><br> <b>$message</b>");
    envio_gmail_user("$email", "$name", "Confirmação: mensagem enviada à Equipe de Mariana Menezes", "Agradecemos sua mensagem,$name! Em breve ela será respondida!<br><br>Cordialmente,<br>Equipe Mariana Menezes");
    header("Location: index.php");
?>