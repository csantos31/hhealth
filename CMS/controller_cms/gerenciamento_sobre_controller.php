<?php

    class controllerSobre{
        public function Novo(){
            require_once ('model_cms/gerenciamento_sobre_class.php');
            require_once ('modulo_img.php');
            
            $sobre = new Sobre();
            $sobre ->sobre = $_POST['txt_sobre'];
            $sobre ->missao = $_POST['txt_missao'];
            $sobre ->visao = $_POST['txt_visao'];
            $sobre ->valores = $_POST['txt_valores'];
            
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
            
            //pega slide1
             $fle_foto1 = salvar_imagem($_FILES['fle_img_sobre1'],'imagem_sobre');
             $fle_foto2 = salvar_imagem($_FILES['fle_img_sobre2'],'imagem_sobre');
             $fle_foto3 = salvar_imagem($_FILES['fle_img_sobre3'],'imagem_sobre');
            
            $sobre -> imagem1 = $fle_foto1;
            $sobre -> imagem2 = $fle_foto2;
            $sobre -> imagem3 = $fle_foto3;
            
            $sobre::Insert($sobre);
        }
        
        public function Listar(){
			//Instancia da classe 
			$sobre = new Sobre();

			//Chama o método para selecionar os registros
			return $sobre::Select();
		}
        
        public function Buscar(){
            $idSobre = $_GET['id'];
            
            $sobre = new Sobre ();
            
            $sobre ->id_sobre=$idSobre;
           
            $sbr = $sobre::SelectById($sobre);
        
            return $sbr;
        }
        
        public function Editar(){
            require_once ('model_cms/gerenciamento_sobre_class.php');
            require_once ('modulo_img.php');
            //guarda o id da home passado na view
            $idSobre = $_GET['id'];
            
            $sobre = new Sobre();
            $sobre ->sobre = $_POST['txt_sobre'];
            $sobre ->missao = $_POST['txt_missao'];
            $sobre ->visao = $_POST['txt_visao'];
            $sobre ->valores = $_POST['txt_valores'];
            
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
            
            //pega slide1
            if(!empty($_FILES['fle_img_home1']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['fle_img_sobre1'],'imagem_sobre');
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
                $diretorio_completo2=salvar_imagem($_FILES['fle_img_sobre2'],'imagem_sobre');
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
                $diretorio_completo3=salvar_imagem($_FILES['fle_img_sobre3'],'imagem_sobre');
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
            
            
            $sobre -> imagem1 = $diretorio_completo1;
            $sobre -> imagem2 = $diretorio_completo2;
            $sobre -> imagem3 = $diretorio_completo3;
            
            $sobre::Update($sobre);
            
        }
        
        
        public function Desativar(){
            require_once ('model_cms/gerenciamento_sobre_class.php');
            require_once ('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idSobre = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$sobre = new Sobre();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$sobre->id_sobre = $idSobre;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$sobre::DesativarPorId($sobre);
            

		}
        
        public function Deletar(){
            require_once ('model_cms/gerenciamento_sobre_class.php');
            require_once ('modulo_img.php');
            
            //GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idSobre = $_GET['id'];
            
            //INSTANCIA A CLASSE CONTATO
			$sobre = new Sobre();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$sobre->id_sobre = $idSobre;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$sobre::Deletar($sobre);
            
        }
        
        
        
        
        
    }
































?>