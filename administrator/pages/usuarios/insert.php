<?php

require_once('../db.class.php');

$objDb = new db();
$link = $objDb->conecta_mysql();

$nome	= $_POST['nome'];
$email	= $_POST['email'];
$senha = sha1($_POST['senha']);
$confirma_senha = sha1($_POST['check']);

$usuarios = (isset($_POST['usuarios'])) ? 1 : 0;
$imagens = (isset($_POST['imagens'])) ? 1 : 0;
$videos = (isset($_POST['videos'])) ? 1 : 0;

if($senha == $confirma_senha){

	$sql = "INSERT INTO `user` (`id_user`, `name_user`, `email_user`, `photo_permission`, `video_permission`, `concert_permission`, `password`) VALUES (NULL, '$nome', '$email', '$usuarios', '$imagens', '$videos', '$senha');";

}else{

	echo 'Senhas não correspondentes!';
}

mysqli_query($link, $sql);

echo $statusMsg;
$url = '../usuarios/';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


?>