<?php

require_once('../../administrator/pages/db.class.php');

$objDb = new db();
$link = $objDb->conecta_mysql();

$email	= $_POST['email'];

$sql = "INSERT INTO `email` (`idemail`, `email`) VALUES (NULL, '$email');";

mysqli_query($link, $sql);

//$url = '../concertos/';
//echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


?>