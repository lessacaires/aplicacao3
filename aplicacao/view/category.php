<article>
	<div class="pesquisa">
		<form name="frmBusca" method="post" action="index2.php?pag=search&a=buscar" >
		    <input type="text" name="palavra" />
		    <input type="submit"  value="Buscar" />
		</form>
	</div>
	<div class="articles">
		<h1>Lista de categorias</h1>
		<?php
		// Informações da query
			$campos_query = "*";
			$final_query  = "FROM categorias ORDER BY cat_id ASC";
			 
			// Maximo de registros por pagina
			$maximo = 10;
			 
			// Declaração da pagina inicial
			$pagina = $_GET["pagina"];
			if($pagina == "") {
			    $pagina = "1";
			}
			 
			// Calculando o registro inicial
			$inicio = $pagina - 1;
			$inicio = $maximo * $inicio;
			 
			// Conta os resultados no total da query
			$strCount = "SELECT COUNT(*) AS 'num_registros' $final_query";
			$query = mysqli_query($con, $strCount );
			$row = mysqli_fetch_array($query);
			$total = $row["num_registros"];
		?>
		<table class="tabela1">
			<thead>
			<tr class="titulo">
				<th>código</th>
				<th>Nome</th>
				<th>Data Cadastro</th>
				<th colspan="2">ação</th>
			</tr>
			</thead>
			<tbody>
			<?php
				// INICIO DO CONTEÚDO
 
			// Realizamos a query
			$sql = mysqli_query($con, "SELECT $campos_query $final_query LIMIT $inicio,$maximo");
			 
			// Exibimos os nomes dos produtos e seus repectivos valores
			while ($linha = mysqli_fetch_object($sql)) {
			?>							
			<tr bgcolor="<?=$bg;?>" class="dados">
				<td><?=$linha->cat_id;?></td>
				<td><?=$linha->cat_nome;?></td>
				<td><?=date("d/m/Y h:i:s", strtotime($linha->cat_data_cad));?></td>
				<td align="center"><a href="index2.php?pag=edit_cat&cat_id=<?=$linha->cat_id;?>"><img src="icons/edit.png" alt="" title="Editar cadastro" width="24" height="24"></a></td>
				<td align="center"><a href="index2.php?pag=del_cat&cat_id=<?=$linha->cat_id;?>"><img src="icons/delete.png" alt="" title="Excluir cadastro" width="24" height="24"></a></td>
			</tr>
				<?php }?>

			</tbody>
		</table>
		<div class="paginator">
			<?php
				$menos = $pagina - 1;
				$mais = $pagina + 1;
				 
				$pgs = ceil($total / $maximo);
				 
				if($pgs > 1 ) {
				 
					echo "<br />";
				 
				    // Mostragem de pagina
				    if($menos > 0) {
						echo "<a href=".$_SERVER['PHP_SELF']."?pag=category&pagina=$menos>anterior</a>&nbsp; ";
				    }
				 
				    // Listando as paginas
					for($i=1;$i <= $pgs;$i++) {
						if($i != $pagina) {
							echo " <a href=".$_SERVER['PHP_SELF']."?pag=category&pagina=".($i).">$i</a> ";
						} else {
							echo " <strong>".$i."</strong> ";
						}
					}
				 
					if($mais <= $pgs) {
						echo " <a href=".$_SERVER['PHP_SELF']."?pag=category&pagina=$mais>próxima</a>";
					}
				}
			?>
		</div>
	</div>
</article>