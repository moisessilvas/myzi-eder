<?php

require_once('../../administrator/pages/db.class.php');
require_once('e-mail-gmail.php');

$objDb = new db();
$link = $objDb->conecta_mysql();

$email	= $_POST['email'];

$sql = "INSERT INTO `email` (`idemail`, `email`) VALUES (NULL, '$email');";

mysqli_query($link, $sql);
envio_gmail_admin('Novo inscrito na newsletter', "O e-mail <b>$email</b> acabou de se inscrever para receber a newsletter de Mariana Menezes");
envio_gmail_user($email, "Inscripción newsletter", "Gracias por inscribirse al newsletter!<br><br>Mariana Menezes")

//$url = '../concertos/';
//echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


?>