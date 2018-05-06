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

                case 'inserir':
                    require_once('controllers/endereco_controller.php');
                    require_once('models/endereco_class.php');

                    // Instanciando a classe da controller
                    $controller_endereco =  new controller_endereco();
                    //Chama o metodo Novo da controller
                    $id_endereco = $controller_endereco::Novo();
                    //$_POST['id_endereco'] = $id_endereco;
                    require_once('controllers/paciente_controller.php');
                    require_once('models/paciente_class.php');
                    $controller_paciente = new controllerPaciente();
                    $controller_paciente::Novo($id_endereco);

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
             require_once('/controllers/endereco_controller.php');
             require_once('/models/endereco_class.php');
             require_once('controllers/trabalhe_controller.php');//inclusão dos arquivos
             require_once('models/trabalhe_conosco_class.php');

             switch($modo){

                 case 'inserir':
                    $controller_endereco = new controller_endereco();
                    $id_endereco=$controller_endereco::Novo();

                   //Instanciando a classe da controller
                   $controller_contato = new controllerTrabalheConosco();
                   //Chama o método novo da controller
                   $controller_contato::Novo($id_endereco);
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
                    $controller_gerenciamento_ambiente::Buscar(); // Chama método buscar

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
                 $controller_gerenciamento_ambiente::Novo(); // Chama método Novo

                 break;

               case 'editar':
                   // Instanciando a classe da controller
                   $controller_gerenciamento_ambiente = new controller_exame();
                   $controller_gerenciamento_ambiente::Editar(); // Chama Editar

                   break;

               case 'desativar':
                   // Instanciando a classe da controller
                   $controller_gerenciamento_ambiente = new controller_exame();
                   $controller_gerenciamento_ambiente::Desativar(); // Chama desativar

                   break;

               case 'ativar':
                   // Instanciando a classe da controller
                   $controller_gerenciamento_ambiente = new controller_exame();
                   $controller_gerenciamento_ambiente::Ativar(); // Chama ativar

                   break;

               case 'deletar':
                   // Instanciando a classe da controller
                   $controller_gerenciamento_ambiente = new controller_exame();
                   $controller_gerenciamento_ambiente::Deletar(); // Chama deletar

                   break;

               case 'buscar':
                   // Instanciando a classe da controller
                   $controller_gerenciamento_ambiente = new controller_exame();
                   $controller_gerenciamento_ambiente::Buscar(); // Chama método buscar

                 break;

                 }
             break;

             case 'convenio':

         			require_once 'CMS/controller_cms/convenios_controller.php';
              require_once 'CMS/model_cms/bd_class.php';
              require_once 'CMS/model_cms/gerenciamento_convenio_class.php';
              require_once 'CMS/modulo_img.php';

         			switch ($modo) {
         				case 'inserir':
         					// Instanciando a classe da controller
         					$controller_gerenciamento_convenios = new controller_convenios();
         					$controller_gerenciamento_convenios::Novo_convenio(); // Chama novo convênio

         					break;

         				case 'editar':
         					// Instanciando a classe da controller
         					$controller_gerenciamento_convenios = new controller_convenios();
                  $controller_gerenciamento_convenios::Editar(); // Chama Editar

         					break;

         				case 'desativar':
         					// Instanciando a classe da controller
         					$controller_gerenciamento_convenios = new controller_convenios();
                  $controller_gerenciamento_convenios::Desativar(); // Chama desativar

         					break;

         				case 'ativar':
         					// Instanciando a classe da controller
         					$controller_gerenciamento_convenios = new controller_convenios();
                  $controller_gerenciamento_convenios::Ativar(); // Chama ativar

         					break;

         				case 'deletar':
         					// Instanciando a classe da controller
         					$controller_gerenciamento_convenios = new controller_convenios();
                  $controller_gerenciamento_convenios::Deletar(); //Chama Deletar

         					break;

                case 'buscar':
                  // Instanciando a classe da controller
                  $controller_gerenciamento_convenios = new controller_convenios();
                  $controller_gerenciamento_convenios::Buscar(); // Chama método buscar

                  break;

         				default:
         					# code...
         					break;
         			}
        	break;

    }
    }

?>
