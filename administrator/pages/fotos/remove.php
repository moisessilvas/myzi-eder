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
if(!empty($id)){
  $sql_evento	= "DELETE FROM photo WHERE id_photo='$id'";
  mysqli_query($link, $sql_evento);
  if(mysqli_query($link, $sql_evento)){
   $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Postagem deletada com sucesso
   <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
   &times;</span></button></div>";
   header("Location: ../fotos");
 }
 else{
       //$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro na conexão<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
       //header("Location: ../atualidades.php");
 }
}
else{
 $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao apagar a postagem
 <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>
 &times;</span></button></div>";
 header("Location: ../fotos");
 
}

$url = '../fotos';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

?>
