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
            
    }

?>