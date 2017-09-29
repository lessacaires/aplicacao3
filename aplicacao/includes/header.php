<!DOCTYPE html>
<?php
session_start();
include_once 'config.php';
session_cache_expire(10);

$nome = htmlspecialchars(trim($_SESSION['NOME']));
$senha =htmlspecialchars(trim($_SESSION['SENHA']));

if((!isset ($nome) == true) and (!isset ($senha) == true)):

	unset($_SESSION['NOME']);
	unset($_SESSION['SENHA']);
	header('location:index.php');
else:
	$id 		=	$_SESSION['ID'];
	$nome 		= 	$_SESSION['NOME'];
	$senha 		= 	$_SESSION['SENHA'];
	$email 		= 	$_SESSION['EMAIL'];
	$thumb 		= 	$_SESSION['THUMB'];
	$dataNasc 	= 	$_SESSION['DATA_NASCIMENTO'];
	$dataCad 	= 	$_SESSION['DATA_CADASTRO'];
	$ip			= $_SERVER['RENOTE_ADDR'];
	$browser	= $_SERVER['HTTP_USER_AGENT'];
endif;
	$paginaLink = mysqli_real_escape_string($con,$_GET['pag']);
?>
<head>
	<title></title>
	<script type=text/javascript src="js/script.js"></script>
	<link href="css/style.css" rel="stylesheet" />
	<?php include_once 'js/scripts.php';?>
</head>
<body>
<div class="box">
	<header class="header">
		<div class="logo">
		</div><!--fechamento da logo-->
		<div class="usuario">
		</div><!--fechamento usuario-->
	</header>