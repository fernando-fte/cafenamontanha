<?php 
	
	// configurações basicas da pagina
	$pagina = array (

		'home' => array (

			'title' => 'Bem vindo ao Café na Montanha',
		),
	);



	// TODO: Configura as informações do usuario
	$usuario = array (

		'id' => 'U000001',

		'nome' => array (

			'completo' => 'Fernando Truculo Evangelista',

			'primeiro nome' => 'Fernando',

			'sobrenome' => 'Truculo Evangelista'
		),

		'carrinho' => array (

			'valor' => '20,20'
		),
	);

	// TODO: Produtos
	$produtos = array (

		'P000001' => array (

			'id' => 'P000001',

			'url' => 'logo-do-cafe-na-montanha',

			'nome' => array (

				'completo' => 'Camisa com a logo do café na montanha',

				'nome curto' => 'Café na montanha'

			),

			'descricao' => 'Camisa muito bonita',

			'preco' => array (

				'valor' => '10,00',

				'parcelas' => '5',

				'frete' => true
			),

			'navegacao' => array (

				'home' => array (

					'foto' => array (

						'arte' => 'IMG0001',
						'mokup' => 'IMG0002'
					),

					'size' => '5'
				)
			),

			'figuras' => array ('IMG0001', 'IMG0002')
		)
	);

	// TODO: Configura navegação
	$nagevacao = array (

		'home' => array (

			'produtos' => array (

				'destaque' =>  array (

					'titulo' => 'Principais camisas',

					'class' => 'destaque',

					'itens' => array(

						'P000001' => array (

							'url' => 'logo-do-cafe-na-montanha-1',

							'foto' => array (

								'arte' => 'http://placehold.it/800x700',
								'mokup' => 'http://placehold.it/800x700'
							),

							'size' => '6'
						),

						'P000002' => array (

							'url' => 'logo-do-cafe-na-montanha-2',

							'foto' => array (

								'arte' => 'http://placehold.it/800x700',
								'mokup' => 'http://placehold.it/800x700'
							),

							'size' => '3'
						),

						'P000003' => array (

							'url' => 'logo-do-cafe-na-montanha-3',

							'foto' => array (

								'arte' => 'http://placehold.it/800x700',
								'mokup' => 'http://placehold.it/800x700'
							),

							'size' => '3'
						),

						'P000004' => array (

							'url' => 'logo-do-cafe-na-montanha-4',

							'foto' => array (

								'arte' => 'http://placehold.it/800x700',
								'mokup' => 'http://placehold.it/800x700'
							),

							'size' => '3'
						),

						'P000005' => array (

							'url' => 'logo-do-cafe-na-montanha-5',

							'foto' => array (

								'arte' => 'http://placehold.it/800x700',
								'mokup' => 'http://placehold.it/800x700'
							),

							'size' => '3'
						),

						'P000006' => array (

							'url' => 'logo-do-cafe-na-montanha-6',

							'foto' => array (

								'arte' => 'http://placehold.it/800x700',
								'mokup' => 'http://placehold.it/800x700'
							),

							'size' => '3'
						),

						'P000007' => array (

							'url' => 'logo-do-cafe-na-montanha-7',

							'foto' => array (

								'arte' => 'http://placehold.it/800x700',
								'mokup' => 'http://placehold.it/800x700'
							),

							'size' => '3'
						)
					),
				),
			)
		)
	);
?>
