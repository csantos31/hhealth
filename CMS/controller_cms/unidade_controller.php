<?php
    class controller_unidade{
        
        
        
        public function Novo($id_endereco){
            require_once ('model_cms/unidade_class.php');
            require_once ('modulo_img.php');
            $unidade = new Unidade();
            $unidade->nome_unidade= $_POST['txt_unidade'];
            $unidade->telefone= $_POST['txt_telefone'];
            $unidade->texto= $_POST['txt_texto'];
            $unidade->latitude= $_POST['txt_latitude'];
            $unidade->longitude= $_POST['txt_longitude'];
            $unidade->id_endereco=$id_endereco;
            
            //variaveis de upload de imagem
            $diretorio_completo1 = null;
            $mov_upload1=false;
            $img_file1=null;
        
            
            //pega slide1
            if(!empty($_FILES['fle_img_home1']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['fle_img_home1'],'imagem_unidade');
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
            
            $unidade->imagem=$diretorio_completo1;
            
            $unidade::Insert($unidade);
        }
        
        public function Listar(){
			//Instancia da classe contatos
			$unidade = new Unidade();

			//Chama o método para selecionar os registros
			return $unidade::Select();
		}
        
        public function Buscar(){
            $idUnidade = $_GET['id_uni'];
            
            $unidade = new Unidade();
            
            $unidade->id_unidade=$idUnidade;
           
            $uni = $unidade::SelectById($unidade);
            
            
            
            return $uni;
        }
        
        public function Editar(){
            require_once ('model_cms/unidade_class.php');
            require_once ('modulo_img.php');
            //guarda o id da home passado na view
            $idUnidade = $_GET['id_uni'];
            
            //Instancia a classe home
            $unidade = new Unidade();
            
            $unidade->id_unidade = $idUnidade;
            $unidade ->nome_unidade = $_POST['txt_unidade'];
            $unidade->telefone= $_POST['txt_telefone'];
            $unidade->texto= $_POST['txt_texto'];
            $unidade->latitude= $_POST['txt_latitude'];
            $unidade->longitude= $_POST['txt_longitude'];
            
            //$home ->status = $_POST['status'];
            
            //variaveis de upload de imagem
            $diretorio_completo1 = null;
            $mov_upload1=false;
            $img_file1=null;
            
            
            //pega slide1
            if(!empty($_FILES['fle_img_home1']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['fle_img_home1'],'imagem_unidade');
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
            
           
            $unidade -> imagem = $diretorio_completo1;
            
            $unidade::Update($unidade);
        }
        
        public function Ativar(){
            require_once ('model_cms/unidade_class.php');
            require_once ('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idUnidade = $_GET['id_uni'];

			//INSTANCIA A CLASSE CONTATO
			$unidade = new Unidade();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$unidade->id_unidade = $idUnidade;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$unidade::AtivarPorId($unidade);
            

		}
        
        
        public function Desativar(){
            require_once ('model_cms/unidade_class.php');
            require_once ('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idUnidade = $_GET['id_uni'];

			//INSTANCIA A CLASSE CONTATO
			$unidade = new Unidade();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$unidade->id_unidade = $idUnidade;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$unidade::DesativarPorId($unidade);
            

		}
        
        public function Deletar(){
            require_once ('model_cms/unidade_class.php');
            require_once ('modulo_img.php');
            
            //GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idUnidade = $_GET['id_uni'];
            
            //INSTANCIA A CLASSE CONTATO
			$unidade = new Unidade();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$unidade->id_unidade = $idUnidade;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$unidade::Deletar($unidade);
            
        }
        
        
        
        
        
    }
































?>