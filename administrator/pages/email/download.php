<?php
  session_start();
  if(!isset($_SESSION['login'])){
    header('Location: index.php?erro=1');
  }
?>
 <?php
 session_start();
 include_once('../db.class.php');
 $objDb = new db();
 $link = $objDb->conecta_mysql();
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<title>Contato</title>
 	<head>
 		<body>
 			<?php
		// Definimos o nome do arquivo que será exportado
 			$arquivo = 'newsletters.xls';

		// Criamos uma tabela HTML com o formato da planilha
 			$html = '';
 			$html .= '<table border="1">';
 			$html .= '<tr>';
 			$html .= '<td><b>E-mail</b></td>';
 			$html .= '</tr>';

		//Selecionar todos os itens da tabela 
 			$result_msg_contatos = "SELECT * FROM email";
 			$resultado_msg_contatos = mysqli_query($link , $result_msg_contatos);

 			while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
 				$html .= '<tr>';
 				$html .= '<td>'.$row_msg_contatos["email"].'</td>';
 				$html .= '</tr>';
 				;
 			}
		// Configurações header para forçar o download
 			header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
 			header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
 			header ("Cache-Control: no-cache, must-revalidate");
 			header ("Pragma: no-cache");
 			header ("Content-type: application/x-msexcel");
 			header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
 			header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
 			echo $html;
 			exit; ?>
 		</body>
 		</html>