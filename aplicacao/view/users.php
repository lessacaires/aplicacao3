<article>
	<div class="users">
		<h1>Lista de usuários</h1>
		<?php 
			$sql = mysqli_query($con, "select * from usuarios WHERE usu_id != 1");
			$cont = mysqli_num_rows($sql);

		?>
		<p>Temos <?=$cont;?>  usuários cadastrados</p>
		<table class="tabela1">
			<thead>
			<tr class="titulo">
				<th>id</th>
				<th>Nome</th>
				<th>e-mail</th>
				<th>cpf</th>
				<th>Data Nascimento</th>
				<th>Data Cadastro</th>
				<th colspan="2">ação</th>
			</tr>
			</thead>
			<tbody>
			<?php				
				while ($result=mysqli_fetch_array($sql)){
			?>
				<tr bgcolor="<?=$bg;?>" class="dados">
					<a href="index2.php?pag=users&userid=<?=$result['usu_id'];?>">
						<td><?=$result['usu_id'];?></td>
						<td><?=$result['usu_nome'];?></td>
						<td><?=$result['usu_email'];?></td>
						<td><?=$result['usu_cpf'];?></td>
						<td><?=date("d/m/Y h:i:s", strtotime($result['usu_data_nasc']));;?></td>
						<td><?=date("d/m/Y h:i:s", strtotime($result['usu_data_cad']));?></td>
						<td align="center"><a href="index2.php?pag=edit_usu&usu_id=<?=$result['usu_id'];?>"><img src="icons/edit.png" alt="" title="Editar cadastro" width="24" height="24"></a></td>
						<td align="center"><a href="index2.php?pag=del_usu&usu_id=<?=$result['usu_id'];?>"><img src="icons/delete.png" alt="" title="Excluir cadastro" width="24" height="24"></a></td>
					</a>
				</tr>
			
				<?php } mysqli_close($con); ?>
			</tbody>
		</table>
	</div>
</article>