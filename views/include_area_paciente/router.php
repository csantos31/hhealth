<?php
	// exemplos: clientes, produtos, etc...
	// a variavel controller virá como essas opções

	$controller = $_GET['controller'];
	$modo = $_GET['modo'];

    require_once('controller/historico_controller.php');
    require_once('controller/receitas_controller.php');
    require_once('controller/resultados_exames_controller.php');


	// verifica qual o tipo da controller iremos trabalhar
	switch ($controller) {
		case 'receitas':
            require_once('controller/receitas_controller.php');
			// Verifica as ações a serem executadas pela controller (novo, editar ou excluir)
			switch ($modo) {

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
					$controller_nivel =  new controllerNivel();
					//Chama o metodo Novo da controller
					$controller_nivel::Editar();
					break;

				case 'excluir':
					// Instanciando a classe da controller
					$controller_nivel =  new controllerNivel();
					//Chama o metodo Novo da controller
					$controller_nivel::Excluir();
					break;
			}

			break;



		default:
			# code...
			break;
	}

?>
