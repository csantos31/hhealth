<?php 

    class controllerPaciente{
       public function Novo(){
			require_once('modulo_img.php');
           
            //Instancia da classe Contato
			$paciente = new Paciente();
            
           
           $fle_foto = salvar_imagem($_FILES['file_especialidade'],'arquivos');
           
           
			//Carregando os dados digitados pelo usuário nos atributos da classe
			$paciente->especialidade = $_POST['txt_especialidade'];
            $especialidade->texto = $_POST['txt_texto'];
            $especialidade->imagem = $fle_foto;
           
			//Chama o metodo Insert da classe Contato
			//Existe também a posibilidade de chamar o metodo da seguinte forma:
			//$contato::Insert($contato);
			$especialidade::Insert($especialidade);

		} 
        
		public function Listar(){
			//Instancia da classe contatos
			$especialidade = new Especialidade();

			//Chama o método para selecionar os registros
            
            
            
			return $especialidade::Select();
		}
        
        public function Buscar(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idEspecialidade = $_GET['codigo'];
            
			//INSTANCIA A CLASSE CONTATO
			$especialidade = new Especialidade();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$especialidade->id_especialidade = $idEspecialidade;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$especialidade = $especialidade::SelectById($especialidade);
            
           return $especialidade;
			//require_once('../modals/modal_cad_especialidade.php');
		}
        
        /*Atualiza um registro existente*/
		public function Editar(){
            
            require_once('modulo_img.php');
            
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idEspecialidade = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$especialidade = new Especialidade();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$especialidade->id_especialidade = $idEspecialidade;

			$especialidade->especialidade = $_POST['txt_especialidade'];
			$especialidade->texto = $_POST['txt_texto'];
			
            if($_FILES['file_especialidade']['size'] == 0){
                $especialidade->imagem = null;
                $especialidade::updateWithoutFile($especialidade);
            }else{
                $fle_foto = salvar_imagem($_FILES['file_especialidade'],'arquivos');
                $especialidade->imagem = $fle_foto;
                $especialidade::updateWithFile($especialidade);
            }
			
		}
        
        public function Excluir(){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idEspecialidade = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$especialidade = new Especialidade();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$especialidade->id_especialidade = $idEspecialidade;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$especialidade::Delete($especialidade);

		}
        
        
    }


?>