<?php

require_once('../../administrator/pages/db.class.php');
require_once('e-mail-gmail.php');

$objDb = new db();
$link = $objDb->conecta_mysql();

$email	= $_POST['email'];

$sql = "INSERT INTO `email` (`idemail`, `email`) VALUES (NULL, '$email');";

mysqli_query($link, $sql);
envio_gmail_admin('Novo inscrito na newsletter', "O e-mail <b>$email</b> acabou de se inscrever para receber a newsletter de Mariana Menezes");
envio_gmail_user($email, "Inscrição na newsletter de Mariana Menezes", "Obrigado por se cadastrar na minha Newsletter! Assim que houverem novidades você será informad@!<br><br>Cordialmente,<br>Mariana Menezes")

$url = 'index.php';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


?>