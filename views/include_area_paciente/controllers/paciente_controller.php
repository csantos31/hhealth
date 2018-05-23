<?php


    class controllerPaciente{
        
        
         public function Buscar($id){
            //include_once ('../models/paciente_class.php');
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			
            $idPaciente = $id;
            

			//INSTANCIA A CLASSE CONTATO
			$paciente = new Paciente();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$paciente->id_paciente = $idPaciente;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$paciente = $paciente::SelectByIdUsuario($paciente);

            return $paciente;
		}

        /*Atualiza um registro existente*/
		public function Editar($id){
            require_once('models/paciente_class.php');
            //require_once ('models/endereco_class.php');
            require_once ('modulo_img.php');
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idPaciente = $id;
            
			//INSTANCIA A CLASSE CONTATO
			$paciente = new Paciente();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$paciente->id_paciente = $idPaciente;
            
            //variaveis de upload de imagem
            $diretorio_completo1 = null;
            $mov_upload1=false;
            $img_file1=null;
            
            //pega slide1
            if(!empty($_FILES['file_arquivo_convenio']['name'])){
                $img_file1 = true;
                $diretorio_completo1=salvar_imagem($_FILES['file_arquivo_convenio'],'arquivos');
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

			$paciente->nome = $_POST['txt_nome'];
            $paciente->sobrenome = $_POST['txt_sobrenome'];
            $paciente->dt_nasc = $_POST['txt_dt_nasc'];
            $paciente->rg = $_POST['txt_rg'];
            $paciente->cpf = $_POST['txt_cpf'];
            
            $paciente->foto = null;

            $paciente::Update($paciente);
		}

    
    
    }

?>
