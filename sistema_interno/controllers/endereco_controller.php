<?php

    class controllerEndereco{
       public function Novo(){

            //Instancia da classe Contato
			$endereco = new Endereco();
           /*
                    atributos da classe
              public  cep
              public  logradouro
              public  numero
              public id_estado
              public cidade
              public bairro

           */
			//Carregando os dados digitados pelo usuário nos atributos da classe
            $endereco->cep = $_POST['txt_cep'];
            $endereco->logradouro = $_POST['txt_logradouro'];
            $endereco->numero = $_POST['txt_numero'];
            $endereco->id_estado = $_POST['slt_estado'];
            $endereco->cidade = $_POST['txt_cidade'];
            $endereco->bairro = $_POST['txt_bairro'];


			//Chama o metodo Insert da classe Contato
			//Existe também a posibilidade de chamar o metodo da seguinte forma:
			//$contato::Insert($contato);
			$id_ende = $endereco::Insert($endereco);
           
            return $id_ende;

		}

		public function Listar(){
			//Instancia da classe contatos
			$endereco = new Endereco();

			//Chama o método para selecionar os registros



			return $endereco::Select();
		}

    public function ListarEstados(){
			//Instancia da classe contatos
			$estados = new Endereco;

			//Chama o método para selecionar os registros

			return $estados::SelectAllStates();
		}

      public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idEndereco = $_GET['codigo'];

			//INSTANCIA A CLASSE CONTATO
			$endereco = new Endereco();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$endereco->id_endereco = $idEndereco;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$endereco = $endereco::SelectById($endereco);

           return $endereco;
			//require_once('../modals/modal_cad_especialidade.php');
		}

        /*Atualiza um registro existente*/
		public function Editar(){

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idEndereco = $_GET['id_end'];

			//INSTANCIA A CLASSE CONTATO
			$endereco = new Endereco();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$endereco->id_endereco = $idEndereco;

			$endereco->cep = $_POST['txt_cep'];
            $endereco->logradouro = $_POST['txt_logradouro'];
            $endereco->numero = $_POST['txt_numero'];
            $endereco->id_estado = $_POST['slt_estado'];
            $endereco->cidade = $_POST['txt_cidade'];
            $endereco->bairro = $_POST['txt_bairro'];

            $endereco::Update($endereco);

            return $endereco;

		}

        public function Excluir(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idEndereco = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$endereco = new Endereco();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$endereco->id_endereco = $idEndereco;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$endereco::Delete($endereco);
            
            return $endereco;

		}


    }


?>
