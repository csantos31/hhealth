<?php


    class controllerPaciente{
        
        
         public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idPaciente = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$paciente = new Paciente();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$paciente->id_endereco = $idEndereco;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$paciente = $paciente::SelectById($paciente);

            return $paciente;
		}

        /*Atualiza um registro existente*/
		public function Editar(){
            require_once ('models/endereco_class.php');
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idPaciente = $_GET['id'];
            
			//INSTANCIA A CLASSE CONTATO
			$paciente = new Paciente();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$paciente->id_paciente = $idPaciente;

			$paciente->nome = $_POST['txt_nome'];
            $paciente->sobrenome = $_POST['txt_sobrenome'];
            $paciente->dt_nasc = $_POST['txt_dt_nasc'];
            $paciente->rg = $_POST['txt_rg'];
            $paciente->cpf = $_POST['txt_cpf'];
            $paciente->carterinha_convenio = $_POST['txt_carterinha_convenio'];
            $paciente->foto = $_POST['fle_foto'];

            $paciente::Update($paciente);
		}

    
    
    }

?>
