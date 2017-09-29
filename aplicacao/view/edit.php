<?php
	/* ALTERAÇÕES NO CADASTRO DE CATEGORIAS */
	$cat_nome = mysqli_real_escape_string($con, $_POST['cat_nome']);
	$cat_id = mysqli_real_escape_string($con, $_POST['cat_id']);

	if(isset($_POST['cat_edit']) && $_POST['cat_edit'] == 'Editar'){
		$sql = "UPDATE categorias  SET cat_nome = '".$cat_nome."' WHERE cat_id = '".$cat_id."'";
		$execQuery = mysqli_query($con, $sql);
		if($execQuery){
			echo '<script>alert("Registro alterado com sucesso!")</script>';
			echo'<script>window.location="index2.php?pag=category";</script>';
		}else{
			echo '<script>alert("Erro ao alterar o registro!")</script>';
			echo'<script>window.location="index2.php?pag=category";</script>';
		}
	}

	/* ALTERAÇÕES NO CADASTRO DE USUÁRIOS */
	$usu_nome = mysqli_real_escape_string($con, $_POST['usu_nome']);
	$usu_id = mysqli_real_escape_string($con, $_POST['usu_id']);

	if(isset($_POST['usu_edit']) && $_POST['usu_edit'] == 'Editar'){
		$sql = "UPDATE usuarios  SET usu_nome = '".$usu_nome."' WHERE usu_id = '".$usu_id."'";
		$execQuery = mysqli_query($con, $sql);
		if($execQuery){
			echo '<script>alert("Registro alterado com sucesso!")</script>';
			echo'<script>window.location="index2.php?pag=users";</script>';
		}else{
			echo '<script>alert("Erro ao alterar o registro!")</script>';
			echo'<script>window.location="index2.php?pag=users";</script>';
		}
	}
	mysqli_close($con);
?>