<?php 

    class controllerQuarto{
       public function Novo(){
            require_once ('models/quarto_class.php');
			//Instancia da classe Contato
			$quarto = new Quarto();

			//Carregando os dados digitados pelo usuário nos atributos da classe
			$quarto->numero = $_POST['txt_numero'];
			$quarto->id_tipo_quarto = $_POST['slt_tipo_quarto'];
            $quarto->id_unidade = $_POST['slt_unidade'];

			//Chama o metodo Insert da classe Contato
			//Existe também a posibilidade de chamar o metodo da seguinte forma:
			//$contato::Insert($contato);
			$quarto::Insert($quarto);

		} 
        
		public function Listar(){
			//Instancia da classe contatos
			$quarto = new Quarto();

			//Chama o método para selecionar os registros
			return $quarto::Select();
		}
        
        public function ListarTipoQuarto(){
            //Instancia da classe contatos
			$quarto = new Quarto();

			//Chama o método para selecionar os registros
			return $quarto::SelectTipoQuarto();
        }
        
        public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idQuarto = $_GET['id'];
            
			//INSTANCIA A CLASSE CONTATO
			$quarto = new Quarto();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$quarto->id_quarto = $idQuarto;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$quart = $quarto::SelectById($quarto);
			//require_once('views_cms/tipo_quarto.php');
            return $quart;
		}
        
        /*Atualiza um registro existente*/
		public function Editar(){
            require_once ('models/quarto_class.php');
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idQuarto = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$quarto = new Quarto();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$quarto->id_quarto = $idQuarto;
			$quarto->numero = $_POST['txt_numero'];
			$quarto->id_tipo_quarto = $_POST['slt_tipo_quarto'];
            $quarto->id_unidade = $_POST['slt_unidade'];
			

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$quarto::Update($quarto);
			
		}
        
        public function Excluir(){
            require_once ('models/quarto_class.php');
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idQuarto = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$quarto = new Quarto();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$quarto->id_quarto = $idQuarto;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$quarto::Delete($quarto);

		}
        
        
    }


?>