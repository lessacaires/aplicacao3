<!DOCTYPE html>
<head>
	<title></title>
	<script type=text/javascript src="js/script.js"></script>
	<link href="css/style" rel="stylesheet" />
</head>
	<body>
		<div class="login">
			<form action="logar.php" method="post" name="logar">
				<fieldset>
				<legend>Formulário de Login</legend>
					<label for="login">
						<span class="titulo">Usuário:</span>
						<input type="text" name="txtLogin" />
					</label>
					<label for="senha">
						<span class="titulo">Senha:</span>
						<input type="password" name="txtSenha" />
					</label>
					<input type="reset" value="Limpar">
					<input type="submit" value="Logar" name="login">
					<input type="checkbox" name="salvar">Manter conectado
					<a href="#">Esqueci minha senha</a>
				</fieldset>
			</form>
		</div><!--fechamento da div login-->
	</body>
</html>