<?php
    require_once('email-gmail.php');

      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];

    envio_gmail("$email", "$name", "Mensagem recebida do site, de $name", "A mensagem recebida de $name diz: <br><br> <b>$message</b>");
    envio_gmail_user("$email", "$name", "Confirmación: mensaje enviada a Equipo de Mariana Menezes", "Grácias por su mensaje, $name!<br><br>Equipo de Mariana Menezes");
    header("Location: index.php");
?>