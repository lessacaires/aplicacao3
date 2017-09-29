<article>
<?php
	$cat_id = mysqli_real_escape_string($con, $_GET['cat_id']);
	$sql= "SELECT * FROM categorias WHERE cat_id = ".$cat_id."";
	$query = mysqli_query($con,$sql);
	while($result = mysqli_fetch_array($query))
		$cat_nome = $result['cat_nome'];
?>
		<h1>Edição da Categoria <?=$cat_nome;?></h1>
		<form action="index2.php?pag=edit" method="post" name="form_edit">
			<label>
				<span class="titulo">Nome:</span>
				<input type="hidden" name="cat_id" value="<?=$cat_id?>"> 
				<input type="text" name="cat_nome" value="<?=$cat_nome;?>">
			</label>
			<input type="submit" value="Editar" name="cat_edit">
		</form>
</article>
