<?php 

	// TODO: Selecinoa no banco o produto
	$nagevacao['home']['produtos'];
	print_r(count($nagevacao['home']['produtos']['destaque']['itens']));
?>

<section class="page produtos-content container">

	<!-- Produto de destaque -->
	<div class="produtos-group <?php echo $nagevacao['home']['produtos']['destaque']['classe']; ?> row">

		<!-- Título -->
		<h1><?php echo $nagevacao['home']['produtos']['destaque']['titulo']; ?></h1>

		<?php 

			$ListaDeItens = array_keys($nagevacao['home']['produtos']['destaque']['itens']);

			for ($i=0; count($ListaDeItens) > $i; $i++) { 
		?>
		<a href="camisa/<?php echo $nagevacao['home']['produtos']['destaque']['itens'][$ListaDeItens[$i]]['url'] ?>" class="produtos-item col-md-<?php echo $nagevacao['home']['produtos']['destaque']['itens'][$ListaDeItens[$i]]['size']; ?>">

			<img src="<?php echo $nagevacao['home']['produtos']['destaque']['itens'][$ListaDeItens[$i]]['foto']['mokup'] ?>" width="100%">
		</a>
		<?php 
			}
			unset($i, $ListaDeItens);
		?>
	</div>

</section>
