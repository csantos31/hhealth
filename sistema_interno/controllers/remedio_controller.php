<?php 

    class controllerRemedio{
       public function Novo(){
            require_once ('models/remedio_class.php');
			//Instancia da classe Contato
			$remedio = new Remedio();

			//Carregando os dados digitados pelo usuário nos atributos da classe
			$remedio->remedio = $_POST['txt_remedio'];
			$remedio->descricao = $_POST['txt_descricao'];

			//Chama o metodo Insert da classe Contato
			//Existe também a posibilidade de chamar o metodo da seguinte forma:
			//$contato::Insert($contato);
			$remedio::Insert($remedio);

		} 
        
		public function Listar(){
			//Instancia da classe contatos
			$remedio = new Remedio();

			//Chama o método para selecionar os registros
            
            
            
			return $remedio::Select();
		}
        
        public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idRemedio = $_GET['id'];
            
			//INSTANCIA A CLASSE CONTATO
			$remedio = new Remedio();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$remedio->id_remedio = $idRemedio;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$rem = $remedio::SelectById($remedio);
			//require_once('views_cms/tipo_quarto.php');
            return $rem;
		}
        
        /*Atualiza um registro existente*/
		public function Editar(){
            require_once ('models/remedio_class.php');
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idRemedio = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$remedio = new Remedio();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$remedio->id_remedio = $idRemedio;

			$remedio->remedio = $_POST['txt_remedio'];
			$remedio->descricao = $_POST['txt_descricao'];
			

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$remedio::Update($remedio);
			
		}
        
        public function Excluir(){
            require_once ('models/remedio_class.php');
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idRemedio = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$remedio = new Remedio();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$remedio->id_remedio = $idRemedio;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$remedio::Delete($remedio);

		}
        
        
    }


?>