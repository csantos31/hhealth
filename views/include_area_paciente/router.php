<?php
	// exemplos: clientes, produtos, etc...
	// a variavel controller virá como essas opções

	$controller = $_GET['controller'];
	$modo = $_GET['modo'];

    require_once('controllers/historico_controller.php');
    require_once('controllers/receitas_controller.php');
    require_once('controllers/resultados_exames_controller.php');
    require_once('controllers/agendamento_controller.php');
    
    session_start();

    if(isset($_SESSION['id_paciente'])){
      $id = $_SESSION['id_paciente'];  
    }

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
            
        case 'paciente':
            require_once('controllers/paciente_controller.php');
            
            switch($modo){
                    
                    
                case 'buscarid':
                    
                    $controller_paciente = new controllerPaciente();
                    $controller_paciente = Buscar();
                    
                    require_once('views/paciente_perfil.php');
                    
                    break;
                    
                case 'editar';
                    
                    $controller_paciente = new controllerPaciente();
                    $controller_paciente = Editar();
                    
                    break;       
            }
            break;
        
        case 'agendamento':
            require_once('controllers/agendamento_controller.php');
            require_once('models/agendamento_class.php');
            switch($modo){
                
                
                    
                case 'inserir':
                    
                    $controller_agendamento = new controller_agendamento();
                    $controller_agendamento::Novo($id);
                    break;
            }


		default:
			# code...
			break;
	}

?>
