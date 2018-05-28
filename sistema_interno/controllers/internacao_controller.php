<?php 

    class controllerInternacao{
       public function Novo($id){
            require_once ('models/internacao_class.php');
			//Instancia da classe Contato
			$internacao = new Internacao();

			//Carregando os dados digitados pelo usuário nos atributos da classe
			$internacao->id_paciente = $_GET['id_paciente'];
			$internacao->id_funcionario = $id;
            $internacao->id_quarto = $_POST['slt_quarto'];
            $internacao->id_unidade = $_POST['slt_unidade'];
            $internacao->data = $_POST['data'];
            $internacao->hora = $_POST['hora'];

			//Chama o metodo Insert da classe Contato
			//Existe também a posibilidade de chamar o metodo da seguinte forma:
			//$contato::Insert($contato);
			$internacao::Insert($internacao);

		} 
        
		public function Listar(){
			//Instancia da classe contatos
			$internacao = new Internacao();

			//Chama o método para selecionar os registros
			return $internacao::Select();
		}
        
        public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idInternacao = $_GET['id'];
            
			//INSTANCIA A CLASSE CONTATO
			$internacao = new Internacao();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$internacao->id_paciente_internacao = $idInternacao;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$internacao = $internacao::SelectById($internacao);
			//require_once('views_cms/tipo_quarto.php');
            return $internacao;
		}
        
        /*Atualiza um registro existente*/
		public function Editar(){
            require_once ('models/internacao_class.php');
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idInternacao = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$internacao = new Internacao();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$internacao->id_paciente_internacao = $idInternacao;

			$internacao->id_paciente = $_POST['slt_paciente'];
            $internacao->id_quarto = $_POST['slt_quarto'];
            $internacao->id_unidade = $_POST['slt_unidade'];
            $internacao->data = $_POST['data'];
            $internacao->hora = $_POST['hora'];
			

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$internacao::Update($internacao);
			
		}
        
        public function Excluir(){
            require_once ('models/internacao_class.php');
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idInternacao = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$internacao = new Internacao();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$internacao->id_paciente_internacao = $idInternacao;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$internacao::Delete($internacao);

		}
        
        
    }


?>