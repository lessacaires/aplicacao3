<div class="clear"></div><!--fechamento da clear-->
<aside>
	<section class="search">
		<form action="" method="post" name="search">
			<label for="pesquisa">
				<input type="submit" value="" name="ok">
				<input type="text" name="search">
			</label>
		</form>
	</section>
	<nav class="menu">
		<ul>
			<li <?php if($paginaLink == 'dashboard') {echo 'class="ativo"';} ?>><a href="index2.php?pag=dashboard" class="dashboard" >Dashboard</a></li>
			<li <?php if($paginaLink == 'category') {echo 'class="ativo"';} ?>><a href="index2.php?pag=category" class="category <?php if($paginaLink == '/aplicacao/category.php') {echo 'ativo';} ?>">Categorias</a></li>
			<li <?php if($paginaLink == 'users') {echo 'class="ativo"';} ?>><a href="index2.php?pag=users" class="users <?php if($paginaLink == '/aplicacao/users.php') {echo 'ativo';} ?>">Usuários</a></li>
			<li <?php if($paginaLink == 'config') {echo 'class="ativo"';} ?>><a href="index2.php?pag=config" class="config <?php if($paginaLink == '/aplicacao/config.php') {echo 'ativo';} ?>">Configurações</a></li>
			<li <?php if($paginaLink == 'message') {echo 'class="ativo"';} ?>><a href="index2.php?pag=message" class="message <?php if($paginaLink == '/aplicacao/message.php') {echo 'ativo';} ?>">Mensagens</a></li>
			<li><a href="deslogar.php" class="getout">Sair</a></li>
		</ul>
	</nav>
</aside>