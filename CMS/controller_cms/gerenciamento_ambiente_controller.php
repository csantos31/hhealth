<?php

    class controller_ambiente{
        public function Novo(){
            require_once ('model_cms/gerenciamento_ambiente_class.php');
            require_once ('modulo_img.php');
            $ambiente = new Ambiente();
            $ambiente ->titulo = $_POST['txt_titulo'];
            $ambiente ->texto = $_POST['txt_texto'];
            //$home ->status = $_POST['status'];

            //variaveis de upload de imagem
            $diretorio_completo1 = null;
            $mov_upload1=false;
            $img_file1=null;

            $diretorio_completo2 = null;
            $mov_upload2=false;
            $img_file2=null;

            $diretorio_completo3 = null;
            $mov_upload3=false;
            $img_file3=null;

            $diretorio_completo4 = null;
            $mov_upload4=false;
            $img_file4=null;

            $diretorio_completo5 = null;
            $mov_upload5=false;
            $img_file5=null;

            $diretorio_completo6 = null;
            $mov_upload6=false;
            $img_file6=null;

            //pega slide1
            if(!empty($_FILES['fle_img_home1']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['fle_img_home1'],'imagem_ambiente');
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

            //pega slide2
            if(!empty($_FILES['fle_img_home2']['name'])){
                $img_file2 = true;
                $diretorio_completo2=salvar_imagem($_FILES['fle_img_home2'],'imagem_ambiente');
                if($diretorio_completo2 == "Erro"){
                    echo "<script>
                     alert('$diretorio_completo2');
                     window.history.go(-1);
                     </script>";

                   $mov_upload2=false;
                }else{
                    $mov_upload2=true;
                }
            }else{
                $img_file2=false;
            }

            //pega slide3
            if(!empty($_FILES['fle_img_home3']['name'])){
                $img_file3 = true;
                $diretorio_completo3=salvar_imagem($_FILES['fle_img_home3'],'imagem_ambiente');
                if($diretorio_completo3 == "Erro"){
                    echo "<script>
                     alert($diretorio_completo3);
                     window.history.go(-1);
                     </script>";
                   $mov_upload3=false;
                }else{
                    $mov_upload3=true;
                }
            }else{
                $img_file3=false;
            }

            //pega slide3
            if(!empty($_FILES['fle_img_home4']['name'])){
                $img_file4 = true;
                $diretorio_completo4=salvar_imagem($_FILES['fle_img_home4'],'imagem_ambiente');
                if($diretorio_completo4 == "Erro"){
                    echo "<script>
                     alert($diretorio_completo4);
                     window.history.go(-1);
                     </script>";
                   $mov_upload4=false;
                }else{
                    $mov_upload4=true;
                }
            }else{
                $img_file4=false;
            }

            //pega slide3
            if(!empty($_FILES['fle_img_home5']['name'])){
                $img_file5 = true;
                $diretorio_completo5=salvar_imagem($_FILES['fle_img_home5'],'imagem_ambiente');
                if($diretorio_completo5 == "Erro"){
                    echo "<script>
                     alert($diretorio_completo5);
                     window.history.go(-1);
                     </script>";
                   $mov_upload5=false;
                }else{
                    $mov_upload5=true;
                }
            }else{
                $img_file5=false;
            }

            //pega slide3
            if(!empty($_FILES['fle_img_home6']['name'])){
                $img_file6 = true;
                $diretorio_completo6=salvar_imagem($_FILES['fle_img_home6'],'imagem_ambiente');
                if($diretorio_completo6 == "Erro"){
                    echo "<script>
                     alert($diretorio_completo3);
                     window.history.go(-1);
                     </script>";
                   $mov_upload6=false;
                }else{
                    $mov_upload6=true;
                }
            }else{
                $img_file6=false;
            }

            $ambiente -> imagem = $diretorio_completo1;
            $ambiente -> imagem2 = $diretorio_completo2;
            $ambiente -> imagem3 = $diretorio_completo3;
            $ambiente -> imagem4 = $diretorio_completo4;
            $ambiente -> imagem5 = $diretorio_completo5;
            $ambiente -> imagem6 = $diretorio_completo6;

            $ambiente::Insert($ambiente);
        }

        public function Listar(){
    			//Instancia da classe contatos
    			$ambiente = new Ambiente();

    			//Chama o método para selecionar os registros
    			return $ambiente::Select();
    		}

        public function ListarPHome(){
          //Instancia da classe contatos
          $ambiente = new Ambiente();

          //Chama o método para selecionar os registros
          return $ambiente::SelectFHome();
        }

        public function Buscar(){


            $ambiente = new Ambiente();

            if(isset($_GET['id'])){
                $idAmbiente = $_GET['id'];
                $ambiente->id_ambiente=$idAmbiente;
                $amb = $ambiente::SelectById($ambiente);
            }else{
                $amb = $ambiente::SelectLast();
            }


            return $amb;
        }

        public function Editar(){
            require_once ('model_cms/gerenciamento_ambiente_class.php');
            require_once ('modulo_img.php');
            //guarda o id da home passado na view
            $idAmbiente = $_GET['id'];

            $ambiente = new Ambiente();
            $ambiente -> id_ambiente = $idAmbiente;
            $ambiente ->titulo = $_POST['txt_titulo'];
            $ambiente ->texto = $_POST['txt_texto'];
            //$home ->status = $_POST['status'];

            //variaveis de upload de imagem
            $diretorio_completo1 = null;
            $mov_upload1=false;
            $img_file1=null;

            $diretorio_completo2 = null;
            $mov_upload2=false;
            $img_file2=null;

            $diretorio_completo3 = null;
            $mov_upload3=false;
            $img_file3=null;

            $diretorio_completo4 = null;
            $mov_upload4=false;
            $img_file4=null;

            $diretorio_completo5 = null;
            $mov_upload5=false;
            $img_file5=null;

            $diretorio_completo6 = null;
            $mov_upload6=false;
            $img_file6=null;

            //pega slide1
            if(!empty($_FILES['fle_img_home1']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['fle_img_home1'],'imagem_ambiente');
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

            //pega slide2
            if(!empty($_FILES['fle_img_home2']['name'])){
                $img_file2 = true;
                $diretorio_completo2=salvar_imagem($_FILES['fle_img_home2'],'imagem_ambiente');
                if($diretorio_completo2 == "Erro"){
                    echo "<script>
                     alert('$diretorio_completo2');
                     window.history.go(-1);
                     </script>";

                   $mov_upload2=false;
                }else{
                    $mov_upload2=true;
                }
            }else{
                $img_file2=false;
            }

            //pega slide3
            if(!empty($_FILES['fle_img_home3']['name'])){
                $img_file3 = true;
                $diretorio_completo3=salvar_imagem($_FILES['fle_img_home3'],'imagem_ambiente');
                if($diretorio_completo3 == "Erro"){
                    echo "<script>
                     alert($diretorio_completo3);
                     window.history.go(-1);
                     </script>";
                   $mov_upload3=false;
                }else{
                    $mov_upload3=true;
                }
            }else{
                $img_file3=false;
            }

            //pega slide3
            if(!empty($_FILES['fle_img_home4']['name'])){
                $img_file4 = true;
                $diretorio_completo4=salvar_imagem($_FILES['fle_img_home4'],'imagem_ambiente');
                if($diretorio_completo4 == "Erro"){
                    echo "<script>
                     alert($diretorio_completo4);
                     window.history.go(-1);
                     </script>";
                   $mov_upload4=false;
                }else{
                    $mov_upload4=true;
                }
            }else{
                $img_file4=false;
            }

            //pega slide3
            if(!empty($_FILES['fle_img_home5']['name'])){
                $img_file5 = true;
                $diretorio_completo5=salvar_imagem($_FILES['fle_img_home5'],'imagem_ambiente');
                if($diretorio_completo5 == "Erro"){
                    echo "<script>
                     alert($diretorio_completo5);
                     window.history.go(-1);
                     </script>";
                   $mov_upload5=false;
                }else{
                    $mov_upload5=true;
                }
            }else{
                $img_file5=false;
            }

            //pega slide3
            if(!empty($_FILES['fle_img_home6']['name'])){
                $img_file6 = true;
                $diretorio_completo6=salvar_imagem($_FILES['fle_img_home6'],'imagem_ambiente');
                if($diretorio_completo6 == "Erro"){
                    echo "<script>
                     alert($diretorio_completo3);
                     window.history.go(-1);
                     </script>";
                   $mov_upload6=false;
                }else{
                    $mov_upload6=true;
                }
            }else{
                $img_file6=false;
            }

            $ambiente -> imagem = $diretorio_completo1;
            $ambiente -> imagem2 = $diretorio_completo2;
            $ambiente -> imagem3 = $diretorio_completo3;
            $ambiente -> imagem4 = $diretorio_completo4;
            $ambiente -> imagem5 = $diretorio_completo5;
            $ambiente -> imagem6 = $diretorio_completo6;

            $ambiente::Update($ambiente);

        }


    public function Desativar(){
        require_once ('model_cms/gerenciamento_ambiente_class.php');
        require_once ('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idAmbiente = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$ambiente = new Ambiente();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$ambiente->id_ambiente = $idAmbiente;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$ambiente::DesativarPorId($ambiente);


		}

        public function Deletar(){
            require_once ('model_cms/gerenciamento_ambiente_class.php');
            require_once ('modulo_img.php');

            //GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idAmbiente = $_GET['id'];

            //INSTANCIA A CLASSE CONTATO
			$ambiente = new Ambiente();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$ambiente->id_ambiente = $idAmbiente;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$ambiente::Deletar($ambiente);

        }





    }
































?>
