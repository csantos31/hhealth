<?php
	// exemplos: clientes, produtos, etc...
	// a variavel controller virá como essas opções

	$controller = $_GET['controller'];
	$modo = $_GET['modo'];


	require_once('controller_cms/nivel_controller.php');
	require_once('model_cms/nivel_class.php');
	// verifica qual o tipo da controller iremos trabalhar
	switch ($controller) {
		case 'nivel':
			// Verifica as ações a serem executadas pela controller (novo, editar ou excluir)
			switch ($modo) {
				case 'inserir':
					// Instanciando a classe da controller
					$controller_nivel =  new controllerNivel();
					//Chama o metodo Novo da controller
                    
					$controller_nivel::Novo();

					break;

				case 'buscar_id':
					// Instanciando a classe da controller
					//Chama o metodo Novo da controller
                    
                    $controller_nivel =  new controllerNivel();
					//Chama o metodo Novo da controller
					$controller_nivel::Buscar();
					require_once('views_cms/nivel_usuario.php');
                    
					break;


				case 'editar':
				// Instanciando a classe da controller
					//Chama o metodo Novo da controller
					break;

				case 'excluir':
					// Instanciando a classe da controller
					//Chama o metodo Novo da controller
					break;
			}

			break;

		default:
			# code...
			break;
	}

?>
