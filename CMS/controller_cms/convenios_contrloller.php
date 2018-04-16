<?php

      /**
       *
       */
      class controller_convenios{

            public function Novo_convenios(){

                  require_once ('model_cms/convenio_class.php');
                  require_once ('model_cms/bd_class.php');

                  // Instancia a class especialidade
                  $convenios = new Convenio();

                  //Carregando os dados digitados pelo usuário nos atributos da classe
                  $convenios->titulo = $_POST['txt_convenio'];
                  $convenios->titulo = $_POST['txt_texto'];
                  $convenios->imagem = $_POST['file_convenio'];

                  /*Chama o metodo Insert da classe Contato*/
                  $convenios::Insert($convenios);
            }
      }

 ?>
