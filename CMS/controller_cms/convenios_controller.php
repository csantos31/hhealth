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
                  $convenios->titulo = $_POST['txt_titulo'];
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

            public function Buscar(){
                  $idConvenio = $_GET['id'];

                  echo $idConvenio;
                  $convenio = new Convenio();

                  $convenio->id_convenio=$idConvenio;

                  $metodo = $convenio::SelectById($convenio);

                  return $metodo;
            }

            public function Editar(){

                  require_once ('model_cms/convenio_class.php');
                  require_once ('model_cms/bd_class.php');
                  require_once ('modulo_img.php');

                  $idConvenio = $_GET['id'];

                  $convenio = new Convenio();

                  $convenio->id_convenio=$idConvenio;
                  $convenio->titulo=$_POST['txt_titulo'];
                  $convenio->texto=$_POST['txt_texto'];


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

                  $convenio -> imagem = $diretorio_completo1;
                  // Chama o metodo para selecionar os registros
                  $convenio::Update($convenio);
            }

            public function Desativar(){

                  require_once ('model_cms/convenio_class.php');
                  require_once ('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idConvenio = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$convenios = new Convenio();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$convenios->id_convenio = $idConvenio;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$convenios::DesativarPorId($convenios);
            }

            public function Ativar(){

                  require_once ('model_cms/convenio_class.php');
                  require_once ('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idConvenio = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$convenios = new Convenio();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$convenios->id_convenio = $idConvenio;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$convenios::AtivarPorId($convenios);
            }

            public function Deletar(){

                  //GUARDA O ID DO CONTATO PASSADO NA VIEW
                  $idConvenio = $_GET['id'];


                  require_once ('model_cms/convenio_class.php');
                  require_once ('modulo_img.php');


                  // Instancia a classe $convenios
                  $convenio = new Convenio();

                  $convenio->id_convenio=$idConvenio;

                  // Chama o metodo para deletar os registros
                  $convenio::Deletar($convenio);
            }

      }

 ?>
