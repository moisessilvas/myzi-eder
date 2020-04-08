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
$nome = $_POST['evento'];
$evento = $_POST['concerto'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];
$sql  = "UPDATE `concerto` SET `nome_evento`= '$nome',`nome_concerto`='$evento',`data`='$data',`endereco`='$endereco' WHERE idconcerto = '$id';";
mysqli_query($link, $sql);

$url = '../concertos/';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

?>
