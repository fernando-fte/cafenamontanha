<nav class="navbar navbar-default container">

	<div class="container-fluid">

		<!-- Botões e logo -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
				<span class="sr-only">Exibir</span>
				<span class="fa fa-bars"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="assets/img/pagina.logo.menu.svg" height="100%"></a>
		</div>

		<div class="collapse navbar-collapse" id="navbar">

			<!-- Menu de navegação do site -->
			<ul class="nav navbar-nav">

				<li class="active">
					<a href="">Home</a>
				</li>

				<li>
					<a href="sobre/">Sobre</a>
				</li>

				<li>
					<a href="contato/">Contato</a>
				</li>
			</ul>

			<!-- Menu do usuario -->
			<ul class="nav navbar-nav navbar-right">

				<!-- Carrinho de compra -->
				<li>
					<a href="carrinho/"><i class="fa fa-shopping-cart" aria-hidden="true"></i> R$ <?php echo $usuario['carrinho']['valor']; ?></a>
				</li>

				<!-- Usuario -->
				<li class="dropdown">

					<a href="usuario/conta/" 
					   class="dropdown-toggle" 
					   data-toggle="dropdown" 
					   role="button" 
					   aria-haspopup="true" 
					   aria-expanded="false"
					><?php echo $usuario['nome']['primeiro nome']; ?> <span class="caret"></span></a>

					<ul class="dropdown-menu">
						<li><a href="usuario/compras/">Minhas compras</a></li>
						<li><a href="usuario/endereco/">Meu endereço</a></li>
						<li><a href="usuario/conta/">Minha conta</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
