<?php 

    class controllerEspecialidade{
       public function Novo(){
			require_once('modulo_img.php');
           
            //Instancia da classe Contato
			$especialidade = new Especialidade();
            
           
           $fle_foto = salvar_imagem($_FILES['file_especialidade'],'arquivos');
           
           
			//Carregando os dados digitados pelo usuário nos atributos da classe
			$especialidade->especialidade = $_POST['txt_especialidade'];
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
			
            //var_dump($_FILES['file_especialidade']); exit();
            
            if($_FILES['file_especialidade']->size > 0){
                $fle_foto = salvar_imagem($_FILES['file_especialidade'],'arquivos');
                $especialidade->imagem = $fle_foto;
                $especialidade::updateWithFile($especialidade);
            }else{
                $especialidade->imagem = null;
                $especialidade::updateWithoutFile($especialidade);
            }
			
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