<article>
	
	<div class="pesquisa">
		<form name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?pag=category&a=buscar" >
		    <input type="text" name="palavra" />
		    <input type="submit"  value="Buscar" />
		</form>
		<div class="articles">

		<?php

		// Recuperamos a ação enviada pelo formulário
		$a = $_GET['a'];

		// Verificamos se a ação é de busca
		if ($a == "buscar") {

			// Pegamos a palavra
			$palavra = trim($_POST['palavra']);

			// Verificamos no banco de dados produtos equivalente a palavra digitada
			$sql = mysqli_query($con, "SELECT * FROM categorias WHERE cat_nome LIKE '%".$palavra."%' ORDER BY cat_nome");

			// Descobrimos o total de registros encontrados
			$numRegistros = mysqli_num_rows($sql);
			echo '<h1> '.$numRegistros.' objeto localizado de acordo com os critérios de busca.</h1>';
			// Se houver pelo menos um registro, exibe-o
			if ($numRegistros != 0) {

			?>
			<table class="tabela1">
			<thead>
			<tr class="titulo">
				<th>id</th>
				<th>Nome</th>
				<th>Data Cadastro</th>
				<th colspan="2">ação</th>
			</tr>
			</thead>
			<tbody>
			<?php

				// Exibe os produtos e seus respectivos preços
				while ($linha = mysqli_fetch_object($sql)) {?>
					<tr bgcolor="<?=$bg;?>" class="dados">
						<td><?=$linha->cat_id;?></td>
						<td><?=$linha->cat_nome;?></td>
						<td><?=date("d/m/Y h:i:s", strtotime($linha->cat_data_cad));?></td>
						<td align="center"><a href="index2.php?pag=edit_cat&cat_id=<?=$linha->cat_id;?>"><img src="icons/edit.png" alt="" title="Editar cadastro" width="24" height="24"></a></td>
						<td align="center"><a href="index2.php?pag=del_cat&cat_id=<?=$linha->cat_id;?>"><img src="icons/delete.png" alt="" title="Excluir cadastro" width="24" height="24"></a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
			<a class="link" href="index2.php?pag=category" title="Voltar para as categorias">Voltar para as categorias</a>
			<?php
			// Se não houver registros
			} else {
				echo "Nenhum produto foi encontrado com a palavra ".$palavra."";
			}
		}
	?>
	</div>
</article>