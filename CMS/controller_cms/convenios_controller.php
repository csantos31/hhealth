<?php

      /**
       *
       */
      class controller_convenios{

            public function Novo_convenio(){

                  require_once ('model_cms/convenio_class.php');
                  require_once ('model_cms/bd_class.php');
                  require_once ('modulo_img.php');

                  // Instancia a class convenios
                  $convenios = new Convenio();

                  //Carregando os dados digitados pelo usuário nos atributos da classe
                  $convenios->titulo = $_POST['txt_convenio'];
                  $convenios->texto = $_POST['txt_texto'];

                  //variaveis de upload de imagem
                  $diretorio_completo1 = null;
                  $mov_upload1=false;
                  $img_file1=null;


                  //pega slide1
                  if(!empty($_FILES['file_convenio']['name'])){
                      $img_file1 = true;
                      $diretorio_completo1=salvar_imagem($_FILES['file_convenio'],'imagem_convenio');
                      if($diretorio_completo1 == "Erro"){
                          echo "<script>
                           alert($diretorio_completo1);
                           window.history.go(-1);
                           </script>";
                         $mov_upload1=false;
                      }else{
                          $mov_upload1=true;
                      }
                  }else{
                      $img_file1=false;
                  }


                  $convenios -> imagem = $diretorio_completo1;

                  /*Chama o metodo Insert da classe Contato*/
                  $convenios::Insert($convenios);
            }

            public function Listar(){

                  // Instancia a classe $convenios
                  $convenios = new Convenio();

                  // Chama o metodo para selecionar os registros
                  return $convenios::Select();
            }

            public function Editar(){

                  require_once ('model_cms/convenio_class.php');
                  require_once ('model_cms/bd_class.php');
                  require_once ('modulo_img.php');

                  // Instancia a classe $convenios
                  $convenios = new Convenio();

                  // Chama o metodo para selecionar os registros
                  return $convenios::Select();
            }

            public function Desativar(){

                  // Instancia a classe $convenios
                  $convenios = new Convenio();

                  // Chama o metodo para selecionar os registros
                  return $convenios::Select();
            }

            public function Deletar(){

                  // Instancia a classe $convenios
                  $convenios = new Convenio();

                  // Chama o metodo para selecionar os registros
                  return $convenios::Select();
            }

      }

 ?>
