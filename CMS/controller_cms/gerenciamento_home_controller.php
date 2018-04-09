<?php

    class controller_home{
        public function Novo(){
            require_once ('model_cms/gerenciamento_home_class.php');
            require_once ('modulo_img.php');
            $home = new Home();
            $home ->frase = $_POST['txt_frase'];
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
            
            //pega slide1
            if(!empty($_FILES['fle_img_home1']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['fle_img_home1'],'imagem_home');
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
                $diretorio_completo2=salvar_imagem($_FILES['fle_img_home2'],'imagem_home');
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
                $diretorio_completo3=salvar_imagem($_FILES['fle_img_home3'],'imagem_home');
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
            
            $home -> slide1 = $diretorio_completo1;
            $home -> slide2 = $diretorio_completo2;
            $home -> slide3 = $diretorio_completo3;
            
            $home::Insert($home);
        }
        
        public function Listar(){
			//Instancia da classe contatos
			$home = new Home();

			//Chama o método para selecionar os registros
			return $home::Select();
		}
        
        
        
        
        
    }
































?>