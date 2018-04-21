<?php
     $controller = $_GET['controller'];
     if(isset($modo)){
        $modo = $_GET['modo'];
     }
    // verifica qual o tipo da controller iremos trabalhar
	switch ($controller) {

    case 'logar':
          require_once('controllers/funcionario_controller.php');//inclusão dos arquivos
          require_once('models/funcionario_class.php');

          //Instancia a classe Usuario
          $controller_funcionario = new controllerFuncionario();

          $controller_funcionario->Login();

      break;

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
                      require_once('controllers/endereco_controller.php');
                      require_once('models/endereco_class.php');

                        // Instanciando a classe da controller
                        $controller_endereco =  new controllerEndereco();
                        //Chama o metodo Novo da controller
                        $id_endereco = $controller_endereco::Novo();
                      //$_POST['id_endereco'] = $id_endereco;
                      require_once('controllers/paciente_controller.php');
                      require_once('models/paciente_class.php');
                      $controller_paciente = new controllerPaciente();
                      $controller_paciente::Novo($id_endereco);

					            break;

				case 'editar':
                    require_once('controllers/endereco_controller.php');
                    require_once('models/endereco_class.php');
                    // Instanciando a classe da controller
                    $controller_endereco =  new controllerEndereco();
                    //Chama o metodo Novo da controller
                    $controller_endereco::Editar();

                    require_once('controllers/paciente_controller.php');
                    require_once('models/paciente_class.php');
                    $controller_paciente = new controllerPaciente();
                    $controller_paciente::Editar();

                    break;

                case 'alterar_foto':
                    require_once('controllers/paciente_controller.php');
                    require_once('models/paciente_class.php');
                    $controller_paciente = new controllerPaciente();
                    $controller_paciente::EditarFoto();
                    break;

                case 'alterar_carteirinha':
                    require_once('controllers/paciente_controller.php');
                    require_once('models/paciente_class.php');
                    $controller_paciente = new controllerPaciente();
                    $controller_paciente::EditarCarteirinha();
                    break;

				case 'excluir':
                    require_once('controllers/paciente_controller.php');
                    require_once('models/paciente_class.php');
                    // Instanciando a classe da controller
                    $controller_paciente =  new controllerPaciente();
                    //Chama o metodo Novo da controller
                    $controller_paciente::Excluir();
                    echo "here";
                    break;
		}

    break;


   case 'nivel_funcionario':
			// Verifica as ações a serem executadas pela controller (novo, editar ou excluir)
        switch ($modo) {
            case 'inserir':
                // Instanciando a classe da controller

                    require_once('controllers/nivel_funcionario_controller.php');
                    require_once('models/nivel_funcionario_class.php');

                    $controller_nivel =  new controllerNivelFuncionario();
                    //Chama o metodo Novo da controller

                    $controller_nivel::Novo();

                    break;

            case 'editar':
            // Instanciando a classe da controller
                require_once('controllers/nivel_funcionario_controller.php');
                require_once('models/nivel_funcionario_class.php');
                $controller_nivel =  new controllerNivelFuncionario();
                //Chama o metodo Novo da controller
                $controller_nivel::Editar();
                break;

            case 'excluir':
                require_once('controllers/nivel_funcionario_controller.php');
                require_once('models/nivel_funcionario_class.php');

                // Instanciando a classe da controller
                $controller_nivel =  new controllerNivelFuncionario();
                //Chama o metodo Novo da controller
                $controller_nivel::Excluir();

                break;
        }

        break;

   case 'cargo':
			// Verifica as ações a serem executadas pela controller (novo, editar ou excluir)
        switch ($modo) {
            case 'inserir':
                // Instanciando a classe da controller

                    require_once('controllers/cargo_controller.php');
                    require_once('models/cargo_class.php');

                    $controller_cargo =  new controllerCargo();
                    //Chama o metodo Novo da controller

                    $controller_cargo::Novo();

                    break;

            case 'editar':
            // Instanciando a classe da controller
                require_once('controllers/cargo_controller.php');
                    require_once('models/cargo_class.php');
                $controller_cargo =  new controllerCargo();
                //Chama o metodo Novo da controller
                $controller_cargo::Editar();
                break;

            case 'excluir':
                require_once('controllers/cargo_controller.php');
                    require_once('models/cargo_class.php');

                // Instanciando a classe da controller
                $controller_cargo =  new controllerCargo();
                //Chama o metodo Novo da controller
                $controller_cargo::Excluir();

                break;
        }

        break;
    case 'funcionario':
 			// Verifica as ações a serem executadas pela controller (novo, editar ou excluir)
         switch ($modo) {
             case 'inserir':
                   require_once('controllers/endereco_controller.php');
                   require_once('models/endereco_class.php');

                     // Instanciando a classe da controller
                   $controller_endereco =  new controllerEndereco();
                   //Chama o metodo Novo da controller
                   $id_endereco = $controller_endereco::Novo();
                   //$_POST['id_endereco'] = $id_endereco;
                   require_once('controllers/funcionario_controller.php');
                   require_once('models/funcionario_class.php');
                   $controller_funcionario = new controllerFuncionario();
                   $controller_funcionario::Novo($id_endereco);

                   break;

             case 'editar':
                   require_once('controllers/endereco_controller.php');
                   require_once('models/endereco_class.php');
                   // Instanciando a classe da controller
                   $controller_endereco =  new controllerEndereco();
                   //Chama o metodo Novo da controller
                   $controller_endereco::Editar();

                   require_once('controllers/funcionario_controller.php');
                   require_once('models/funcionario_class.php');
                   $controller_funcionario = new controllerFuncionario();
                   $controller_funcionario::Editar();

                   break;

             case 'excluir':
                 require_once('controllers/funcionario_controller.php');
                     require_once('models/funcionario_class.php');

                 // Instanciando a classe da controller
                 $controller_funcionario =  new controllerFuncionario();
                 //Chama o metodo Novo da controller
                 $controller_funcionario::Excluir();

                 break;
             }

             break;

		default:
			# code...
			break;
	}


?>
