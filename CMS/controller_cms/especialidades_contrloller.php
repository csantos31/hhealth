<?php

      /**
       *
       */
      class controller_especialidades{

            public function Nova_especialidade(){

                  require_once ('model_cms/especialidade_class.php');
                  require_once ('model_cms/bd_class.php');

                  // Instancia a class especialidade
                  $especialidades = new Especialidade();

                  //Carregando os dados digitados pelo usuário nos atributos da classe
                  $especialidade->titulo = $_POST['txt_especialidade'];
                  $especialidade->titulo = $_POST['txt_texto'];
                  $especialidade->imagem = $_POST['file_especialidade'];

                  /*Chama o metodo Insert da classe Contato*/
                  $especialidade::Insert($especialidade);
            }
      }

 ?>
