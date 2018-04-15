<?php
     $controller = $_GET['controller'];
    $modo = $_GET['modo'];
    // verifica qual o tipo da controller iremos trabalhar
	switch ($controller) {
		case 'especialidade':
			// Verifica as ações a serem executadas pela controller (novo, editar ou excluir)
			switch ($modo) {
				case 'inserir':
					// Instanciando a classe da controller

                    require_once('controllers/especialidade_controller.php');
                    require_once('models/especialidade_class.php');

					$controller_especialidade =  new controllerEspecialidade();
					//Chama o metodo Novo da controller

					$controller_especialidade::Novo();

					break;

				case 'editar':
				// Instanciando a classe da controller
                    require_once('controllers/especialidade_controller.php');
                    require_once('models/especialidade_class.php');
					$controller_especialidade =  new controllerEspecialidade();
					//Chama o metodo Novo da controller
					$controller_especialidade::Editar();
					break;

				case 'excluir':
                    require_once('controllers/especialidade_controller.php');
                    require_once('models/especialidade_class.php');

					// Instanciando a classe da controller
					$controller_especialidade =  new controllerEspecialidade();
					//Chama o metodo Novo da controller
					$controller_especialidade::Excluir();

					break;
			}

			break;

        case 'paciente':

            // Verifica as ações a serem executadas pela controller (novo, editar ou excluir)
            switch ($modo) {
				case 'inserir':

                    require_once('controllers/paciente_controller.php');
                    require_once('controllers/endereco_controller.php');
                    require_once('models/paciente_class.php');
                    require_once('models/endereco_class.php');


					// Instanciando a classe da controller
					$controller_endereco =  new controllerEndereco();
					//Chama o metodo Novo da controller

					$id_endereco = $controller_endereco::Novo();

                    $controller_paciente = new controllerPaciente();
                    $controller_paciente::Novo();

					break;

				case 'buscar_id':
					// Instanciando a classe da controller
					//Chama o metodo Novo da controller

                    $controller_tipo_quarto =  new controllerTipoQuarto();
					//Chama o metodo Novo da controller
					$controller_tipo_quarto::Buscar();
					require_once('views_cms/tipo_quarto.php');

					break;


				case 'editar':
				// Instanciando a classe da controller
					$controller_tipo_quarto =  new controllerTipoQuarto();
					//Chama o metodo Novo da controller
					$controller_tipo_quarto::Editar();
					break;

				case 'excluir':
					// Instanciando a classe da controller
					$controller_tipo_quarto =  new controllerTipoQuarto();
					//Chama o metodo Novo da controller
					$controller_tipo_quarto::Excluir();
					break;
			}

			break;


		default:
			# code...
			break;
	}


?>
