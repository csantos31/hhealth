<?php
	// exemplos: clientes, produtos, etc...
	// a variavel controller virá como essas opções

	$controller = $_GET['controller'];
	$modo = $_GET['modo'];

	require_once('controller_cms/gerenciamento_sobre_controller.php');
	require_once('controller_cms/gerenciamento_slide_saude_controller.php');
	require_once('controller_cms/gerenciamento_ambiente_controller.php');
	require_once('controller_cms/gerenciamento_home_controller.php');
	require_once('controller_cms/nivel_controller.php');
	require_once('model_cms/nivel_class.php');
	require_once('controller_cms/tipo_quarto_controller.php');
	require_once('model_cms/tipo_quarto_class.php');
	require_once('controller_cms/convenios_controller.php');

	// verifica qual o tipo da controller iremos trabalhar
	switch ($controller) {
		case 'nivel':
            require_once('controller_cms/nivel_controller.php');
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

        case 'tipo_quarto':

            // Verifica as ações a serem executadas pela controller (novo, editar ou excluir)
            switch ($modo) {
				case 'inserir':
					// Instanciando a classe da controller
					$controller_tipo_quarto =  new controllerTipoQuarto();
					//Chama o metodo Novo da controller

					$controller_tipo_quarto::Novo();

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

        /*home*/
        case 'home':
            require_once('controller_cms/gerenciamento_home_controller.php');
            switch($modo){
                case 'inserir':
					// Instanciando a classe da controller
					$controller_gerenciamento_home =  new controller_home();
					//Chama o metodo Novo da controller

					$controller_gerenciamento_home::Novo();

					break;

                case 'editar':

                    $controller_gerenciamento_home = new controller_home();

                    $controller_gerenciamento_home::Editar();

                    break;

                case 'desativar':
                    $controller_gerenciamento_home = new controller_home();

                    $controller_gerenciamento_home::Desativar();

                    break;

                case 'deletar':

                    //if(confirm('Deseja realmente excluir?')){
                        $controller_gerenciamento_home = new controller_home();

                        $controller_gerenciamento_home::Deletar();
                    //}

                    break;
            }
        break;

		// especialidades
		case 'convenio':
			# code...
			switch ($modo) {
				case 'inserir':
					# code...
					// Instanciando a classe da controller
					$controller_gerenciamento_convenios = new controller_convenios();
					$controller_gerenciamento_convenios::Novo_convenio();

					break;

				case 'editar':
					# code...
					$controller_gerenciamento_ambiente = new controller_convenios();

	                $controller_gerenciamento_ambiente::Editar();
					break;

				case 'desativar':
					# code...
					$controller_gerenciamento_ambiente = new controller_convenios();

	                        $controller_gerenciamento_ambiente::Desativar();
					break;

				case 'ativar':
					# code...
					$controller_gerenciamento_ambiente = new controller_convenios();

	                        $controller_gerenciamento_ambiente::Ativar();
					break;

				case 'deletar':
					# code...
					$controller_gerenciamento_ambiente = new controller_convenios();

	                        $controller_gerenciamento_ambiente::Deletar();
					break;

				default:
					# code...
					break;
			}
			break;

        /*home*/
        case 'ambiente':
            require_once('controller_cms/gerenciamento_ambiente_controller.php');
            switch($modo){
                case 'inserir':
					// Instanciando a classe da controller
					$controller_gerenciamento_ambiente =  new controller_ambiente();
					//Chama o metodo Novo da controller

					$controller_gerenciamento_ambiente::Novo();

					break;

                case 'editar':

                    $controller_gerenciamento_ambiente = new controller_ambiente();

                    $controller_gerenciamento_ambiente::Editar();

                    break;

                case 'desativar':
                    $controller_gerenciamento_ambiente = new controller_ambiente();

                    $controller_gerenciamento_ambiente::Desativar();

                    break;

                case 'deletar':

                    //if(confirm('Deseja realmente excluir?')){
                        $controller_gerenciamento_ambiente = new controller_ambiente();

                        $controller_gerenciamento_ambiente::Deletar();
                    //}

                    break;
                }
            break;

						/*Case para crud da tela de exame*/
		        case 'exame':
		            require_once('controller_cms/gerenciamento_exame_controller.php');
		            switch($modo){
		            	case 'inserir':
										// Instanciando a classe da controller
										$controller_gerenciamento_ambiente =  new controller_exame();
										//Chama o metodo Novo da controller

										$controller_gerenciamento_ambiente::Novo();

									break;

		                case 'editar':

		                    $controller_gerenciamento_ambiente = new controller_exame();

		                    $controller_gerenciamento_ambiente::Editar();

		                    break;

		                case 'desativar':
		                    $controller_gerenciamento_ambiente = new controller_exame();

		                    $controller_gerenciamento_ambiente::Desativar();

		                    break;

										case 'ativar':
		                    $controller_gerenciamento_ambiente = new controller_exame();

		                    $controller_gerenciamento_ambiente::Ativar();

		                    break;

		                case 'deletar':

		                    //if(confirm('Deseja realmente excluir?')){
		                        $controller_gerenciamento_ambiente = new controller_exame();

		                        $controller_gerenciamento_ambiente::Deletar();

		                    break;

										case 'buscar':

										//if(confirm('Deseja realmente excluir?')){
												$controller_gerenciamento_ambiente = new controller_exame();

												$controller_gerenciamento_ambiente::Buscar();
											break;

		                }
		            break;

            case 'saude_n':
                require_once('controller_cms/gerenciamento_dica_saude_controller.php');
                switch($modo){
                    case 'inserir':
                        // Instanciando a classe da controller
                        $controller_gerenciamento_dica_saude =  new controller_dica_saude();
                        //Chama o metodo Novo da controller

                        $controller_gerenciamento_dica_saude::Novo();

                        break;

                    case 'editar':

                        $controller_gerenciamento_dica_saude = new controller_dica_saude();

                        $controller_gerenciamento_dica_saude::Editar();

                        break;

                    case 'ativar':
                        $controller_gerenciamento_dica_saude = new controller_dica_saude();

                        $controller_gerenciamento_dica_saude::Ativar();

                        break;

                    case 'desativar':
                        $controller_gerenciamento_dica_saude = new controller_dica_saude();

                        $controller_gerenciamento_dica_saude::Desativar();

                        break;

                    case 'deletar':

                        //if(confirm('Deseja realmente excluir?')){
                            $controller_gerenciamento_dica_saude = new controller_dica_saude();

                            $controller_gerenciamento_dica_saude::Deletar();
                        //}

                        break;
                }
            break;

            case 'slide_saude':
                require_once('controller_cms/gerenciamento_slide_saude_controller.php');
                switch($modo){
                    case 'inserir':
												// Instanciando a classe da controller
												$controller_gerenciamento_slide_saude =  new controller_slide_saude();
												//Chama o metodo Novo da controller

												$controller_gerenciamento_slide_saude::Novo();

                        break;

                    case 'editar':

                            $controller_gerenciamento_slide_saude = new controller_slide_saude();

                            $controller_gerenciamento_slide_saude::Editar();

                        break;

                    case 'ativar':
                        $controller_gerenciamento_slide_saude = new controller_slide_saude();

                        $controller_gerenciamento_slide_saude::Ativar();

                        break;

                    case 'desativar':
                        $controller_gerenciamento_slide_saude = new controller_slide_saude();

                        $controller_gerenciamento_slide_saude::Desativar();

                        break;

                    case 'deletar':

                        //if(confirm('Deseja realmente excluir?')){
                        $controller_gerenciamento_slide_saude = new controller_slide_saude();

                        $controller_gerenciamento_slide_saude::Deletar();
                        //}

                        break;
                }
            break;


            case 'sobre':
                switch($modo){
                    case 'inserir':
                        // Instanciando a classe da controller
                        $controller_gerenciamento_sobre =  new controllerSobre();
                        //Chama o metodo Novo da controller

                        $controller_gerenciamento_sobre::Novo();

                        break;

                    case 'editar':

                        $controller_gerenciamento_sobre = new controllerSobre();

                        $controller_gerenciamento_sobre::Editar();

                        break;
                        
                    case 'ativar':
                        $controller_gerenciamento_sobre = new controllerSobre();

                        $controller_gerenciamento_sobre::Ativar();

                        break;
                        
                    case 'desativar':
                        $controller_gerenciamento_sobre = new controllerSobre();

                        $controller_gerenciamento_sobre::Desativar();

                        break;

                    case 'deletar':

                        //if(confirm('Deseja realmente excluir?')){
                            $controller_gerenciamento_sobre = new controllerSobre();

                            $controller_gerenciamento_sobre::Deletar();
                        //}

                        break;
                }
            break;

            case 'unidade':
            require_once('controller_cms/unidade_controller.php');
            require_once('controller_cms/endereco_controller.php');
			// Verifica as ações a serem executadas pela controller (novo, editar ou excluir)
			switch ($modo) {
				case 'inserir':
                    $controller_endereco = new controller_endereco();
                    //$controller_endereco::Novo();
                    $idEndereco=$controller_endereco::Novo();
					// Instanciando a classe da controller
					$controller_unidade =  new controller_unidade();
					//Chama o metodo Novo da controller

					$controller_unidade::Novo($idEndereco);

					break;

				case 'buscar_id':
					// Instanciando a classe da controller
					//Chama o metodo Novo da controller

                    $controller_endereco =  new controller_endereco();
					//Chama o metodo Novo da controller
					$controller_endereco::Buscar();


                    $controller_unidade =  new controller_unidade();
					//Chama o metodo Novo da controller
					$controller_unidade::Buscar();


					break;


				case 'editar':
				// Instanciando a classe da controller
					$controller_endereco =  new controller_endereco();
					//Chama o metodo Novo da controller
					$controller_endereco::Editar();

                // Instanciando a classe da controller
					$controller_unidade =  new controller_unidade();
					//Chama o metodo Novo da controller
					$controller_unidade::Editar();
					break;

                case 'ativar':


                // Instanciando a classe da controller
					$controller_unidade =  new controller_unidade();
					//Chama o metodo Novo da controller
					$controller_unidade::Ativar();
					break;

                case 'desativar':
					// Instanciando a classe da controller
					$controller_unidade =  new controller_unidade();
					//Chama o metodo Novo da controller
					$controller_unidade::Desativar();
					break;

				case 'deletar':
					// Instanciando a classe da controller
					$controller_unidade =  new controller_unidade();
					//Chama o metodo Novo da controller
					$controller_unidade::Deletar();
					break;
			}

			break;


	  	case 'fale_conosco':
    		require_once('controller_cms/contatos_controller.php');
				// Verifica as ações a serem executadas pela controller (novo, editar ou excluir)
				switch ($modo) {

					case 'buscar_id':
						// Instanciando a classe da controller
						//Chama o metodo Novo da controller
		        $controller_contatos =  new controllerContatos();
						//Chama o metodo Novo da controller
						$controller_contatos::Buscar();

						break;

					case 'deletar':
						// Instanciando a classe da controller
						$controller_contatos =  new controllerContatos();
						//Chama o metodo Novo da controller
						$controller_contatos::Deletar();

						break;
					}
			break;

            /*
            case 'saude':
            switch($modo){
                case 'inserir':
					// Instanciando a classe da controller
					$controller_gerenciamento_saude =  new controller_saude();
					//Chama o metodo Novo da controller

					$controller_gerenciamento_saude::Novo();

					break;

                case 'editar':

                    $controller_gerenciamento_saude = new controller_saude();

                    $controller_gerenciamento_saude::Editar();

                    break;

                case 'desativar':
                    $controller_gerenciamento_saude = new controller_saude();

                    $controller_gerenciamento_saude::Desativar();

                    break;

                case 'deletar':

                    //if(confirm('Deseja realmente excluir?')){
                        $controller_gerenciamento_saude = new controller_saude();

                        $controller_gerenciamento_saude::Deletar();
                    //}

                    break;
            }*/

		default:
			# code...
			break;
	}

?>
