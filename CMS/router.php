<?php
	// exemplos: clientes, produtos, etc...
	// a variavel controller virá como essas opções

	$controller = $_GET['controller'];
	$modo = $_GET['modo'];

    require_once('controller_cms/gerenciamento_ambiente_controller.php');
    require_once('controller_cms/gerenciamento_home_controller.php');
	require_once('controller_cms/nivel_controller.php');
	require_once('model_cms/nivel_class.php');
    require_once('controller_cms/tipo_quarto_controller.php');
    require_once('model_cms/tipo_quarto_class.php');

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
        
        /*home*/
        case 'ambiente':
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
            
		default:
			# code...
			break;
	}

?>
