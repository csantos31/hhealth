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
        break;

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
        break;

       case 'fale_conosco':
            require_once('controllers/contatos_controller.php');//inclusão dos arquivos
            require_once('models/contato_class.php');

            switch($modo){

                case 'inserir':
                  //Instanciando a classe da controller
                  $controller_contato = new controllerContatos();
                  //Chama o método novo da controller
                  $controller_contato::Novo();
                  break;

                case 'deletar':
                  //Instanciando a classe da controller
                  $controller_contato = new controllerContatos();
                  //Chama o método novo da controller
                  $controller_contato::Deletar();

                  break;


            }
        break;

        case 'trabalhe_conosco':
             require_once('controllers/contatos_controller.php');//inclusão dos arquivos
             require_once('models/contato_class.php');

             switch($modo){

                 case 'inserir':
                   //Instanciando a classe da controller
                   $controller_contato = new controllerTrabalheConosco();
                   //Chama o método novo da controller
                   $controller_contato::Novo();
                   break;

                 case 'deletar':
                   //Instanciando a classe da controller
                   $controller_contato = new controllerTrabalheConosco();
                   //Chama o método novo da controller
                   $controller_contato::Deletar();

                   break;


             }
         break;

        case 'ambiente':
            require_once('/CMS/controller_cms/gerenciamento_ambiente_controller.php');
            require_once('/CMS/model_cms/gerenciamento_ambiente_class.php');
            switch($modo){
                case 'mostrar':
                    // Instanciando a classe da controller
                    $controller_gerenciamento_ambiente =  new controller_ambiente();
                    //Chama o metodo Novo da controller

                    $controller_gerenciamento_ambiente::Buscar();

                    break;


        break;



         case 'exame':
             require_once('CMS/controller_cms/gerenciamento_exame_controller.php');
             require_once('CMS/model_cms/bd_class.php');
             require_once('CMS/model_cms/gerenciamento_exames_class.php');
             require_once('CMS/modulo_img.php');
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

    }
    }

?>
