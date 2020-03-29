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

$titulo = $_POST['titulo'];
$video = $_POST['iframe'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO `video` (`id_video`, `titulo`, `link_youtube`, `categoria`) VALUES (NULL, '$titulo' ,'$video', '$categoria');";

mysqli_query($link, $sql);

$url = '../videos/';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


?>