<?php 

    class controllerNivelFuncionario{
       public function Novo(){
			require_once('modulo_img.php');
           
            //Instancia da classe Contato
			$nivel = new NivelFuncionario();
            
           
			//Carregando os dados digitados pelo usuário nos atributos da classe
			$nivel->nivel = $_POST['txt_nivel'];
            $nivel->descricao = $_POST['txt_descricao'];
            
           
			//Chama o metodo Insert da classe Contato
			//Existe também a posibilidade de chamar o metodo da seguinte forma:
			//$contato::Insert($contato);
			$nivel::Insert($nivel);

		} 
        
		public function Listar(){
			//Instancia da classe contatos
			$nivel_funcionario = new NivelFuncionario();

			//Chama o método para selecionar os registros
            
            
            
			return $nivel_funcionario::Select();
		}
        
        public function listarPermissoes(){
            //Instancia da classe contatos
			$nivel_funcionario = new NivelFuncionario();

			//Chama o método para selecionar os registros
            
            
            
			return $nivel_funcionario::SelectPermitions();
        }
        
        
        public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idNivel = $_GET['codigo'];
            
			//INSTANCIA A CLASSE CONTATO
			$nivel_funcionario = new NivelFuncionario();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$nivel_funcionario->id_nivel_funcionario = $idNivel;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$nivel_funcionario = $nivel_funcionario::SelectById($nivel_funcionario);
            
           return $nivel_funcionario;
			//require_once('../modals/modal_cad_especialidade.php');
		}
        
        /*Atualiza um registro existente*/
		public function Editar(){
            
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idNivel = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$nivel_funcionario = new NivelFuncionario();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$nivel_funcionario->id_nivel_funcionario = $idNivel;

			$nivel_funcionario->nivel = $_POST['txt_nivel'];
			$nivel_funcionario->descricao = $_POST['txt_descricao'];
			
            $nivel_funcionario::update($nivel_funcionario);
		}
        
        public function Excluir(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idNivel = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$nivel_funcionario = new NivelFuncionario();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$nivel_funcionario->id_nivel_funcionario = $idNivel;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$nivel_funcionario::Delete($nivel_funcionario);

		}
        
        
    }


?>