<?php
    require_once('e-mail-gmail.php');
    
    
      $name = $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];
    
    envio_gmail("$email", "$name", "Mensagem recebida do site, de $name", "A mensagem recebida de $name diz: <br><br> $message");
    header("Location: index.php");
?>
