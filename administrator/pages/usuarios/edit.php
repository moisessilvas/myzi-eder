<?php
  session_start();
  if(!isset($_SESSION['login'])){
    header('Location: index.php?erro=1');
  }
?>
<?php

require_once('../db.class.php');

$objDb = new db();
$link = $objDb->conecta_mysql();
$id = $_POST['id'];

$nome	= $_POST['nome'];
$email	= $_POST['email'];

$usuarios = (isset($_POST['usuarios'])) ? 1 : 0;
$imagens = (isset($_POST['imagens'])) ? 1 : 0;
$videos = (isset($_POST['videos'])) ? 1 : 0;

$sql = "UPDATE `user` SET `name_user`= '$nome',`email_user`='$email',`photo_permission`='$imagens',`video_permission`='$videos',`concert_permission`= '$usuarios' WHERE id_user = '$id'";

mysqli_query($link, $sql);

$url = '../usuarios/';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


?>