<?php 

    class controllerTipoQuarto{
       public function Novo(){
			//Instancia da classe Contato
			$tipo = new TipoQuarto();

			//Carregando os dados digitados pelo usuário nos atributos da classe
			$tipo->nivel = $_POST['txt_nivel_quarto'];
			$tipo->descricao = $_POST['txt_descricao'];

			//Chama o metodo Insert da classe Contato
			//Existe também a posibilidade de chamar o metodo da seguinte forma:
			//$contato::Insert($contato);
			$tipo::Insert($tipo);

		} 
        
		public function Listar(){
			//Instancia da classe contatos
			$tipo = new TipoQuarto();

			//Chama o método para selecionar os registros
            
            
            
			return $tipo::Select();
		}
        
        public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idNivel = $_GET['codigo'];
            
			//INSTANCIA A CLASSE CONTATO
			$tipo = new TipoQuarto();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$tipo->id_tipo_quarto = $idNivel;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$tipo_quarto = $tipo::SelectById($tipo);
			require_once('views_cms/tipo_quarto.php');
		}
        
        /*Atualiza um registro existente*/
		public function Editar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idNivel = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$tipo = new TipoQuarto();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$tipo->id_tipo_quarto = $idNivel;

			$tipo->nivel = $_POST['txt_nivel_quarto'];
			$tipo->descricao = $_POST['txt_descricao'];
			

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$tipo::Update($tipo);
			
		}
        
        public function Excluir(){

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idNivel = $_GET['codigo'];

			//INSTANCIA A CLASSE CONTATO
			$tipo = new TipoQuarto();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$tipo->id_tipo_quarto = $idNivel;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$tipo::Delete($tipo);

		}
        
        
    }


?>