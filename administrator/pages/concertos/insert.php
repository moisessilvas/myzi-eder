<?php

require_once('../db.class.php');

$objDb = new db();
$link = $objDb->conecta_mysql();

$nome	= $_POST['nome'];
$email	= $_POST['concerto'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];
$sitio = $_POST['link'];


$sql = "INSERT INTO `concerto` (`idconcerto`, `nome_evento`, `nome_concerto`, `data`, `endereco`, `link_endereco`) VALUES (NULL, '$nome', '$email', '$data', '$endereco', '$sitio');";

mysqli_query($link, $sql);

$url = '../concertos/';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


?>