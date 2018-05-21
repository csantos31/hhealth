<?php
    @session_start();
    $modo = $_GET['modo'];
    $controller = $_GET['controller'];
    if(isset($modo)){
    $modo = $_GET['modo'];
    }

    if(isset($_SESSION['id_funcionario'])){
        $id=$_SESSION['id_funcionario'];
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

                case 'ativar_paciente':
                    require_once('controllers/paciente_controller.php');
                    require_once('models/paciente_class.php');
                    $controller_paciente = new controllerPaciente();
                    $controller_paciente::ativarPaciente();
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

        case 'tipo_quarto':
            switch($modo){

                case 'inserir':

                      require_once('controllers/tipo_quarto_controller.php');
                      require_once('models/tipo_quarto_class.php');
                      $controller_internacao = new controllerTipoQuarto();
                      $controller_internacao::Novo();

                      break;

                case 'editar':

                      require_once('controllers/tipo_quarto_controller.php');
                      require_once('models/tipo_quarto_class.php');
                      $controller_internacao = new controllerTipoQuarto();
                      $controller_internacao::Editar();

                      break;

                case 'excluir':
                    require_once('controllers/tipo_quarto_controller.php');
                    require_once('models/tipo_quarto_class.php');

                    // Instanciando a classe da controller
                    $controller_internacao =  new controllerTipoQuarto();
                    //Chama o metodo Novo da controller
                    $controller_internacao::Excluir();

                    break;

                case 'desativar':
					require_once('controllers/tipo_quarto_controller.php');
                    require_once('models/tipo_quarto_class.php');

                    $controller_gerenciamento_ambiente = new controllerTipoQuarto();

                    $controller_gerenciamento_ambiente::Desativar();
					break;

				case 'ativar':
					require_once('controllers/tipo_quarto_controller.php');
                    require_once('models/tipo_quarto_class.php');

                    $controller_gerenciamento_ambiente = new controllerTipoQuarto();

                    $controller_gerenciamento_ambiente::Ativar();
					break;
					break;
                }
            break;

            case 'quarto':
            switch($modo){

                case 'inserir':

                      require_once('controllers/quarto_controller.php');
                      require_once('models/quarto_class.php');
                      $controller_quarto = new controllerQuarto();
                      $controller_quarto::Novo();

                      break;

                case 'editar':

                      require_once('controllers/quarto_controller.php');
                      require_once('models/quarto_class.php');
                      $controller_quarto = new controllerQuarto();
                      $controller_quarto::Editar();

                      break;

                case 'excluir':
                    require_once('controllers/quarto_controller.php');
                    require_once('models/quarto_class.php');

                    // Instanciando a classe da controller
                    $controller_quarto =  new controllerQuarto();
                    //Chama o metodo Novo da controller
                    $controller_quarto::Excluir();

                    break;


                }
            break;

            case 'internacao':
            switch($modo){


                case 'inserir':

                      require_once('controllers/internacao_controller.php');
                      require_once('models/internacao_class.php');
                      $controller_internacao = new controllerInternacao();
                      $controller_internacao::Novo($id);

                      break;

                case 'editar':

                      require_once('controllers/internacao_controller.php');
                      require_once('models/internacao_class.php');
                      $controller_internacao = new controllerInternacao();
                      $controller_internacao::Editar();

                      break;

                case 'excluir':
                    require_once('controllers/internacao_controller.php');
                    require_once('models/internacao_class.php');

                    // Instanciando a classe da controller
                    $controller_internacao =  new controllerInternacao();
                    //Chama o metodo Novo da controller
                    $controller_internacao::Excluir();

                    break;


                }
            break;

            case 'remedio':
            switch($modo){


                case 'inserir':

                      require_once('controllers/remedio_controller.php');
                      require_once('models/remedio_class.php');
                      $controller_remedio = new controllerRemedio();
                      $controller_remedio::Novo();

                      break;

                case 'editar':

                      require_once('controllers/remedio_controller.php');
                      require_once('models/remedio_class.php');
                      $controller_remedio = new controllerRemedio();
                      $controller_remedio::Editar();

                      break;

                case 'excluir':
                    require_once('controllers/remedio_controller.php');
                    require_once('models/remedio_class.php');

                    // Instanciando a classe da controller
                    $controller_remedio =  new controllerRemedio();
                    //Chama o metodo Novo da controller
                    $controller_remedio::Excluir();

                    break;


                }
            break;

            case 'receita':
            switch($modo){


                case 'inserir':

                      require_once('controllers/receitas_controller.php');
                      require_once('models/receitas_class.php');
                      $controller_receitas = new controllerReceita();
                      $controller_receitas::Novo($id);

                      break;

                case 'editar':

                      require_once('controllers/receitas_controller.php');
                      require_once('models/receitas_class.php');
                      $controller_receitas = new controllerReceita();
                      $controller_receitas::Editar();

                      break;

                case 'excluir':
                    require_once('controllers/receitas_controller.php');
                    require_once('models/receitas_class.php');

                    // Instanciando a classe da controller
                    $controller_receitas =  new controllerReceita();
                    //Chama o metodo Novo da controller
                    $controller_receitas::Excluir();

                    break;


                }
            break;

		default:
			# code...
			break;
	}


?>
