<?php

    class controllerPaciente{

       public function Novo($id_endereco){
    			     require_once('modulo_img.php');

                //Instancia da classe Contato
    			     $paciente = new Paciente();

                /*
            public id_convenio
            public id_endereco;
            public nome;
            public sobrenome;
            public dt_nasc;
            public rg;
            public cpf;
           **** public carteirinha_convenio;
           **** public foto;
            public status;

                */

               $fle_foto1 = salvar_imagem($_FILES['fle_foto1'],'arquivos');
               $fle_foto2 = salvar_imagem($_FILES['fle_foto2'],'arquivos');


    			        //Carregando os dados digitados pelo usuário nos atributos da classe
    			      $paciente->id_convenio = $_POST['slt_convenio'];
                $paciente->id_endereco = $id_endereco;
                $paciente->nome = $_POST['txt_nome'];
                $paciente->sobrenome = $_POST['txt_sobrenome'];
                $paciente->dt_nasc = $_POST['txt_dt_nasc'];
                $paciente->rg = $_POST['txt_rg'];
                $paciente->cpf = $_POST['txt_cpf'];
                $paciente->foto = $fle_foto1;
                $paciente->carteirinha_convenio = $fle_foto2;


    			//Chama o metodo Insert da classe Contato
    			//Existe também a posibilidade de chamar o metodo da seguinte forma:
    			//$contato::Insert($contato);
    			$paciente::Insert($paciente);

		}

		public function Listar(){
			//Instancia da classe contatos
			$paciente = new Paciente();

			//Chama o método para selecionar os registros

			return $paciente::Select();
		}
        
        public function Listar_pendentes(){
			//Instancia da classe contatos
			$paciente = new Paciente();

			//Chama o método para selecionar os registros

			return $paciente::Select_pendentes();
		}

        public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idPaciente = $_GET['codigo'];

			//INSTANCIA A CLASSE CONTATO
			$paciente = new Paciente();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$paciente->id_paciente = $idPaciente;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$paciente_new = $paciente::SelectById($paciente);

           return $paciente_new;
			//require_once('../modals/modal_cad_especialidade.php');
		}

        /*Atualiza um registro existente*/
		public function Editar(){

            require_once('modulo_img.php');

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idPaciente = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$paciente = new Paciente();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$paciente->id_paciente = $idPaciente;



          /* $fle_foto2 = salvar_imagem($_FILES['fle_foto2'],'arquivos');


            if($_FILES['fle_foto']['size']!='0'){
                $fle_foto1 = salvar_imagem($_FILES['fle_foto'],'arquivos');
                $paciente->foto = $fle_foto1;
            }

            if($_FILES['fle_foto2']['size']!='0'){
                $fle_foto1 = salvar_imagem($_FILES['fle_foto2'],'arquivos');
                $paciente->carteirinha_convenio = $fle_foto2;
            }*/


            $paciente->nome = $_POST['txt_nome'];
            $paciente->sobrenome = $_POST['txt_sobrenome'];
            $paciente->dt_nasc = $_POST['txt_dt_nasc'];
            $paciente->rg = $_POST['txt_rg'];
            $paciente->cpf = $_POST['txt_cpf'];

            $paciente::update($paciente);
		}

        public function EditarCarteirinha(){

            require_once('modulo_img.php');

			$idPaciente = $_GET['id'];


			$paciente = new Paciente();


			$paciente->id_paciente = $idPaciente;


            $fle_foto = salvar_imagem($_FILES['carteirinha_convenio'],'arquivos');


            $paciente->carteirinha_convenio = $fle_foto;

            $paciente::updateCarteirinhaConvenio($paciente);
		}
        
        public function ativarPaciente(){

			$idPaciente = $_GET['id'];


			$paciente = new Paciente();


			$paciente->id_paciente = $idPaciente;


            $paciente::ativePaciente($paciente);
		}

        public function EditarFoto(){

            require_once('modulo_img.php');

			$idPaciente = $_GET['id'];


			$paciente = new Paciente();


			$paciente->id_paciente = $idPaciente;


            $fle_foto = salvar_imagem($_FILES['foto'],'arquivos');


            $paciente->foto = $fle_foto;

            $paciente::updateFoto($paciente);
		}

        public function Excluir(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idPaciente = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$paciente = new Paciente();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$paciente->id_paciente = $idPaciente;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$paciente::Delete($paciente);

		}


    }


?>
