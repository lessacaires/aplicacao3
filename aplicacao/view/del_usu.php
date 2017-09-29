<article>
<?php
	$usu_id = mysqli_real_escape_string($con, $_GET['usu_id']);
	$sql= "SELECT * FROM usuarios WHERE usu_id = ".$usu_id."";
	$query = mysqli_query($con,$sql);
	while($result = mysqli_fetch_array($query))
		$usu_nome = $result['usu_nome'];
?>
		<h1>Exclusão do usuário <?=$usu8_nome;?></h1>
		<form action="index2.php?pag=del" method="post" name="form_del">
			<label>
				<span class="titulo">Nome:</span>
				<input type="hidden" name="usu_id" value="<?=$usu_id?>"> 
				<input type="text" name="usu_nome" value="<?=$usu_nome;?>">
			</label>
			<input type="submit" value="Excluir" name="usu_del">
		</form>
</article>
