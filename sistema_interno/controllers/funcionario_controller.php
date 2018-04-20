<?php

    class controllerFuncionario{
       
        public function Novo($id_endereco){
			require_once('modulo_img.php');

            //Instancia da classe Contato
			$funcionario = new funcionario();

            /*
                public $id_funcionario;
                public $id_cargo;
                public $id_endereco;
                public $nome;
                public $sobrenome;
                public $dt_nasc;
                public $rg;
                public $cpf;
                public $status

            */

			//Carregando os dados digitados pelo usuário nos atributos da classe
			$funcionario->id_cargo = $_POST['slt_cargo'];
            $funcionario->id_endereco = $id_endereco;
            $funcionario->nome = $_POST['txt_nome'];
            $funcionario->sobrenome = $_POST['txt_sobrenome'];
            $funcionario->dt_nasc = $_POST['txt_dt_nasc'];
            $funcionario->rg = $_POST['txt_rg'];
            $funcionario->cpf = $_POST['txt_cpf'];
            
			//Chama o metodo Insert da classe Contato
			//Existe também a posibilidade de chamar o metodo da seguinte forma:
			//$contato::Insert($contato);
			$funcionario::Insert($funcionario);
		}

		public function Listar(){
			//Instancia da classe contatos
			$funcionario = new Funcionario();

			//Chama o método para selecionar os registros

			return $funcionario::Select();
		}

        public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idFuncionario = $_GET['codigo'];

			//INSTANCIA A CLASSE CONTATO
			$funcionario = new Funcionario();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$funcionario->id_funcionario = $idFuncionario;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$funcionario_new = $funcionario::SelectById($funcionario);

            return $funcionario_new;
			
		}

        /*Atualiza um registro existente*/
		public function Editar(){

          	//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idFuncionario = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$funcionario = new Funcionario();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$funcionario->id_funcionario = $idFuncionario;
            $funcionario->id_cargo = $_POST['slt_cargo'];
            $funcionario->nome = $_POST['txt_nome'];
            $funcionario->sobrenome = $_POST['txt_sobrenome'];
            $funcionario->dt_nasc = $_POST['txt_dt_nasc'];
            $funcionario->rg = $_POST['txt_rg'];
            $funcionario->cpf = $_POST['txt_cpf'];

            $funcionario::update($funcionario);
		}
        
       

        public function Excluir(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idFuncionario = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$funcionario = new Funcionario();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$funcionario->id_funcionario = $idFuncionario;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$funcionario::Delete($funcionario);

		}


    }


?>
