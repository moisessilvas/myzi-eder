<?php

require_once('../db.class.php');

$objDb = new db();
$link = $objDb->conecta_mysql();

$titulo = $_POST['titulo'];
$video = $_POST['iframe'];

$sql = "INSERT INTO `video` (`id_video`, `titulo`, `link_youtube`) VALUES (NULL, '$titulo' ,'$video');";

mysqli_query($link, $sql);

$url = '../videos/';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


?>