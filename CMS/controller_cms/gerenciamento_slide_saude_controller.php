<?php

    class controller_slide_saude{
        public function Novo(){
            require_once ('model_cms/gerenciamento_slide_saude_class.php');
            require_once ('modulo_img.php');
            $slide_saude = new Slide_saude();
            //$home ->frase = $_POST['txt_frase'];
            //$home ->status = $_POST['status'];
            
            //variaveis de upload de imagem
            $diretorio_completo1 = null;
            $mov_upload1=false;
            $img_file1=null;
            
            
            //pega slide1
            if(!empty($_FILES['fle_img_home1']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['fle_img_home1'],'imagem_slide_saude');
                if($diretorio_completo1 == "Erro"){
                    echo "<script>
                     alert('Erro ao inserir a imagem');
                     window.history.go(-1);
                     </script>";
                   $mov_upload1=false;
                }else{
                    $mov_upload1=true;
                }
            }else{
                $img_file1=false;
            }
            
            
            $slide_saude -> slide = $diretorio_completo1;
            
            $slide_saude::Insert($slide_saude);
        }
        
        public function Listar(){
			//Instancia da classe contatos
			$slide_saude = new Slide_saude();

			//Chama o método para selecionar os registros
			return $slide_saude::Select();
		}
        
        public function Buscar(){
            $idSlideSaude = $_GET['id'];
            
            $slide_saude = new Slide_saude();
            
            $slide_saude->id_slide_saude=$idSlideSaude;
           
            $sli_sau = $slide_saude::SelectById($slide_saude);
            
            
            
            return $sli_sau;
        }
        
        public function Editar(){
            require_once ('model_cms/gerenciamento_slide_saude_class.php');
            require_once ('modulo_img.php');
            //guarda o id da home passado na view
            $idSlideSaude = $_GET['id'];
            
            //Instancia a classe home
            $slide_saude = new Slide_saude();
            
            $slide_saude->id_slide_saude = $idSlideSaude;
            //$home ->frase = $_POST['txt_frase'];
            //$home ->status = $_POST['status'];
            
            //variaveis de upload de imagem
            $diretorio_completo1 = null;
            $mov_upload1=false;
            $img_file1=null;
            
            
            
            //pega slide1
            if(!empty($_FILES['fle_img_home1']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['fle_img_home1'],'imagem_slide_saude');
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
            
           
           
            
            $slide_saude -> slide = $diretorio_completo1;
            $slide_saude::Update($slide_saude);
        }
        
        public function Ativar(){
            require_once ('model_cms/gerenciamento_slide_saude_class.php');
            require_once ('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idSlideSaude = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$slide_saude = new Slide_saude();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$slide_saude->id_slide_saude = $idSlideSaude;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$slide_saude::AtivarPorId($slide_saude);
            

		}
        
        
        public function Desativar(){
            require_once ('model_cms/gerenciamento_slide_saude_class.php');
            require_once ('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idSlideSaude = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$slide_saude = new Slide_saude();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$slide_saude->id_slide_saude = $idSlideSaude;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$slide_saude::DesativarPorId($slide_saude);
            

		}
        
        public function Deletar(){
            require_once ('model_cms/gerenciamento_slide_saude_class.php');
            require_once ('modulo_img.php');
            
            //GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idSlideSaude = $_GET['id'];
            
            //INSTANCIA A CLASSE CONTATO
			$slide_saude = new Slide_saude();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$slide_saude->id_slide_saude = $idSlideSaude;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$slide_saude::Deletar($slide_saude);
            
        }
        
        
        
        
        
    }


?>