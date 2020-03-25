<?php
    require_once('e-mail-gmail.php', '../../../web/php/e-mail-gmail.php');
    
    
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];
    
    envio_gmail("$email", "$name", "Mensagem recebida do site, de $name", "$message");
?>
