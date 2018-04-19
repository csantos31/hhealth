<?php 

    class controllerCargo{
       public function Novo(){
            //Instancia da classe Contato
			$cargo = new Cargo();
            
           
			//Carregando os dados digitados pelo usuário nos atributos da classe
			$cargo->id_nivel_funcionario = $_POST['slt_nivel'];
            $cargo->cargo = $_POST['txt_cargo'];
            $cargo->descricao = $_POST['txt_descricao'];
           
			//Chama o metodo Insert da classe Contato
			//Existe também a posibilidade de chamar o metodo da seguinte forma:
			//$contato::Insert($contato);
			$cargo::Insert($cargo);

		} 
        
		public function Listar(){
			//Instancia da classe contatos
			$lista_cargos = new Cargo();

			//Chama o método para selecionar os registros
            
			return $lista_cargos::Select();
		}
        
        public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idCargo = $_GET['codigo'];
            
			//INSTANCIA A CLASSE CONTATO
			$cargo = new Cargo();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$cargo->id_cargo = $idCargo;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$cargo = $cargo::SelectById($cargo);
            
           return $cargo;
			//require_once('../modals/modal_cad_especialidade.php');
		}
        
        /*Atualiza um registro existente*/
		public function Editar(){
            
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idCargo = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$cargo = new Cargo();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$cargo->id_cargo = $idCargo;
            $cargo->id_nivel_funcionario = $_POST['slt_nivel'];
			$cargo->cargo = $_POST['txt_cargo'];
			$cargo->descricao = $_POST['txt_descricao'];
			
            $cargo::update($cargo);
		}
        
        public function Excluir(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idCargo = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$cargo = new Cargo();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$cargo->id_cargo = $idCargo;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$cargo::Delete($cargo);

		}
        
        
    }


?>