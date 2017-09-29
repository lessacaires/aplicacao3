<?php
	/* EXCLUSÕES NO CADASTRO DE CATEGORIAS */
	$cat_nome = mysqli_real_escape_string($con, $_POST['cat_nome']);
	$cat_id = mysqli_real_escape_string($con, $_POST['cat_id']);

	if(isset($_POST['cat_del']) && $_POST['cat_del'] == 'Excluir'){
		$sql = "DELETE FROM categorias WHERE cat_id = '".$cat_id."'";
		$execQuery = mysqli_query($con, $sql);
		if($execQuery){
			echo '<script>alert("Registro deletado com sucesso!")</script>';
			echo'<script>window.location="index2.php?pag=category";</script>';
		}else{
			echo '<script>alert("Erro ao deletar o registro!")</script>';
			echo'<script>window.location="index2.php?pag=category";</script>';
		}
	}

	/* EXCLUSÕES NO CADASTRO DE USUÁRIOS */
	$usu_nome = mysqli_real_escape_string($con, $_POST['usu_nome']);
	$usu_id = mysqli_real_escape_string($con, $_POST['usu_id']);

	if(isset($_POST['usu_del']) && $_POST['usu_del'] == 'Excluir'){
		$sql = "DELETE FROM usuarios  WHERE usu_id = '".$usu_id."'";
		$execQuery = mysqli_query($con, $sql);
		if($execQuery){
			echo '<script>alert("Registro excluido com sucesso!")</script>';
			echo'<script>window.location="index2.php?pag=users";</script>';
		}else{
			echo '<script>alert("Erro ao excluir o registro!")</script>';
			echo'<script>window.location="index2.php?pag=users";</script>';
		}
	}
	mysqli_close($con);
?>