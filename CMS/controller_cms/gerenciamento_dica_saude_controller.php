<?php

    class controller_dica_saude{
        public function Novo(){
            require_once ('model_cms/gerenciamento_dica_saude_class.php');
            require_once ('modulo_img.php');
            $dica_saude = new Dica_saude();
            $dica_saude->titulo = $_POST['txt_titulo'];
            $dica_saude->descricao = $_POST['txt_desc'];
            //$home ->frase = $_POST['txt_frase'];
            //$home ->status = $_POST['status'];
            
            //variaveis de upload de imagem
            $diretorio_completo1 = null;
            $mov_upload1=false;
            $img_file1=null;
            
            
            //pega slide1
            if(!empty($_FILES['fle_img_home1']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['fle_img_home1'],'imagem_dica_saude');
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
            
            
            $dica_saude -> imagem = $diretorio_completo1;
            
            $dica_saude::Insert($dica_saude);
        }
        
        public function Listar(){
			//Instancia da classe contatos
			$dica_saude = new Dica_saude();

			//Chama o método para selecionar os registros
			return $dica_saude::Select();
		}
        
        public function Buscar(){
            $idDicaSaude = $_GET['id'];
            
            $dica_saude = new Dica_saude();
            
            $dica_saude->id_dica_saude=$idDicaSaude;
           
            $dic_sau = $dica_saude::SelectById($dica_saude);
            
            
            
            return $dic_sau;
        }
        
        public function Editar(){
            require_once ('model_cms/gerenciamento_dica_saude_class.php');
            require_once ('modulo_img.php');
            //guarda o id da home passado na view
            $idDicaSaude = $_GET['id'];
            
            //Instancia a classe home
            $dica_saude = new Dica_saude();
            
            $dica_saude->id_dica_saude = $idDicaSaude;
            $dica_saude->titulo = $_POST['txt_titulo'];
            $dica_saude->descricao = $_POST['txt_desc'];
            //$home ->frase = $_POST['txt_frase'];
            //$home ->status = $_POST['status'];
            
            //variaveis de upload de imagem
            $diretorio_completo1 = null;
            $mov_upload1=false;
            $img_file1=null;
            
            
            
            //pega slide1
            if(!empty($_FILES['fle_img_home1']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['fle_img_home1'],'imagem_dica_saude');
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
            
           
           
            
            $dica_saude -> imagem = $diretorio_completo1;
            $dica_saude::Update($dica_saude);
        }
        
        public function Ativar(){
            require_once ('model_cms/gerenciamento_dica_saude_class.php');
            require_once ('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idDicaSaude = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$dica_saude = new Dica_saude();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$dica_saude->id_dica_saude = $idDicaSaude;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$dica_saude::AtivarPorId($dica_saude);
            

		}
        
        
        public function Desativar(){
            require_once ('model_cms/gerenciamento_dica_saude_class.php');
            require_once ('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idDicaSaude = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$dica_saude = new Dica_saude();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$dica_saude->id_dica_saude = $idDicaSaude;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$dica_saude::DesativarPorId($dica_saude);
            

		}
        
        public function Deletar(){
            require_once ('model_cms/gerenciamento_dica_saude_class.php');
            require_once ('modulo_img.php');
            
            //GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idDicaSaude = $_GET['id'];
            
            //INSTANCIA A CLASSE CONTATO
			$dica_saude = new Dica_saude();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$dica_saude->id_dica_saude = $idDicaSaude;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$dica_saude::Deletar($dica_saude);
            
        }
        
        
        
        
        
    }


?>