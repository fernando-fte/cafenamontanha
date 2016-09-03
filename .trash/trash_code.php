
	// TODO: Produtos
	$produtos = array (

		'P000001' => array (

			'id' => 'P000001',

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


	// TODO: Figuras
	$img = array (

		'IMG0001' => array (
			'link' => 'http://placehold.it/800x600',
			'titulo' => 'Arte da Logo'
		),

		'IMG0002' => array (
			'link' => 'http://placehold.it/800x600',
			'titulo' => 'Mokup da logo'
		)
	);


	// TODO: Configura navegação
	$nagevacao = array (

		'home' => array (

			'produtos' => array (

				'destaque' =>  array (

					'titulo' => 'Principais camisas',

					'itens' => array('P000001', 'P000002')
				)
			)
		)
	);