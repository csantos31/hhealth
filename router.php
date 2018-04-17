<?php

    //As variaveis controller e modo estão sendo enviadas pela view na ação do fonrmulário
    
    $controller = $_GET['controller'];
    $modo = $_GET['modo'];

    //Verifica qual o tipo da controller estamos usando
    
    switch($controller){
            
        case 'usuario':
            require_once('controllers/usuario_controller.php');//inclusão dos arquivos
            require_once('models/usuario_class.php');
            
            switch($modo){
                    
                //verifica as ações a serem executadas pela controller

                case'login':

                    //Instancia a classe Usuario
                    $controller_usuario = new controllerUsuario();

                    $controller_usuario->Login();

                    break;
            }
            
            
        case 'paciente':    
            require_once('controllers/paciente_controller.php');//inclusão dos arquivos
            require_once('models/paciente_class.php');

             switch($modo){
            
                case'login':
                
                  
    
                    //Instancia a classe Usuario
                    $controller_paciente = new controllerPaciente();

                    $controller_paciente->Login();

                    break;
             
            }
      
       case 'fale_conosco':
            require_once('controllers/fale_conosco_controller.php');//inclusão dos arquivos
            require_once('models/fale_conosco_class.php');
            
            switch($modo){
                    
                case 'novo':

                    //Instanciando a classe da controller
                    $controller_contato = new controllerContatos();
                    //Chama o método novo da controller
                    $controller_contato::Novo();
                    break;
                    
                    
            }
    }

?>