<?php
	define("HOST", 'localhost');
	define("USER", 'root');
	define("PASS", '');
	define("DB", 'teste');
	
	$con = mysqli_connect(HOST, USER, PASS, DB)or die(mysql_error("Erro ao tentar conectar ao servidor de banco de dados: ".mysql_error()));
?>