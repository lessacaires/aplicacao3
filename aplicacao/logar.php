<?php
	session_start();
	
	include_once 'config.php';
	
	if(!isset($_POST['login']) && $_POST['login']== "Logar"){
		echo 'erro';
	}else{
		
		$login = htmlspecialchars(trim($_POST['txtLogin']));
		$senha = htmlspecialchars(trim($_POST['txtSenha']));
		
		$user = "SELECT * FROM usuarios WHERE usu_nome = '".$login."' AND usu_senha = '".md5($senha)."' AND usu_status = '1'";
		$result = mysqli_query($con,$user);
		if($cont = mysqli_fetch_array($result)):
			
			$_SESSION['ID'] 				= $cont['usu_id'];
			$_SESSION['NOME'] 				= $cont['usu_nome'];
			$_SESSION['SENHA'] 				= $cont['usu_senha'];
			$_SESSION['EMAIL'] 				= $cont['usu_email'];
			$_SESSION['THUMB'] 				= $cont['usu_thumb'];
			$_SESSION['DATA_NASCIMENTO'] 	= $cont['usu_data_nasc'];
			$_SESSION['DATA_CADASTRO'] 		= $cont['usu_data_cad'];
			$_SESSION['IP']					= $_SERVER['RENOTE_ADDR'];
			$_SESSION['BROWSER']			= $_SERVER['HTTP_USER_AGENT'];
			
			header('Location: index2.php');
		else:
			unset($_SESSION['ID']);
			unset($_SESSION['NOME']);
			unset($_SESSION['SENHA']);
			unset($_SESSION['EMAIL']);
			unset($_SESSION['THUMB']);
			unset($_SESSION['DATA_NASCIMENTO']);
			unset($_SESSION['DATA_CADASTRO']);
			unset($_SESSION['IP']);
			unset($_SESSION['BROWSER']);
			header('Location: index.php');
		endif;	
	}
	


?>