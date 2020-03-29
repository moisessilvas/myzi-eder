<?php
	session_start();
    require_once('db.class.php');
	$login = $_POST['email'];
	$senha = sha1($_POST['senha']);
	$sql = "SELECT id_user, email_user, password FROM user WHERE email_user = '$login' AND password = '$senha' ";
	echo $sql;
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	$resultado_id = mysqli_query($link, $sql);
	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['email_user'])){
            
            $_SESSION['id_usuario'] = $dados_usuario['id_user'];
            $_SESSION['login'] = $dados_usuario['email_user'];
            $_SESSION['senha'] = $dados_usuario['password'];
            $_SESSION['nome'] = $dados_usuario['name_user'];
			header('Location: ./pages/');
            
        } else {
            header('Location: index.php?erro=1');
        }
	} else {
		echo 'Usuário não encontrado. Tente novamente mais tarde.';
	}
?>