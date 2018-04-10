<?php 

    class controllerNivel{
       public function Novo(){
			//Instancia da classe Contato
			$nivel = new Nivel();

			//Carregando os dados digitados pelo usuário nos atributos da classe
			$nivel->nome = $_POST['txt_nome'];
			$nivel->descricao = $_POST['txt_descricao'];

			//Chama o metodo Insert da classe Contato
			//Existe também a posibilidade de chamar o metodo da seguinte forma:
			//$contato::Insert($contato);
			Nivel::Insert($nivel);

		} 
        
		public function Listar(){
			//Instancia da classe contatos
			$nivel = new Nivel();

			//Chama o método para selecionar os registros
			return $nivel::Select();
		}
        
        
        public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idNivel = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$nivel = new Nivel();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$nivel->id_nivel = $idNivel;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$niv = $nivel::SelectById($nivel);
			//require_once('views_cms/nivel_usuario.php');
		}
        
        /*Atualiza um registro existente*/
		public function Editar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idNivel = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$nivel = new Nivel();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$nivel->id_nivel = $idNivel;

			$nivel->nome = $_POST['txt_nome'];
			$nivel->descricao = $_POST['txt_descricao'];
			

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$nivel::Update($nivel);
			
		}
        
        public function Excluir(){

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idNivel = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$nivel = new Nivel();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$nivel->id_nivel = $idNivel;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$nivel::Delete($nivel);

		}
        
        
    }


?>