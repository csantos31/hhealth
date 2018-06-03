<?php 

    class controllerNivelFuncionario{
       public function Novo(){
			require_once('modulo_img.php');
           
            //Instancia da classe Contato
			$nivel = new NivelFuncionario();
            
//            cargos
//            especialidade
//            funcionario
//            agendamento
//            paciente_pendente
//            paciente_ativo
//            remedio
//            receita
//            internacao
//            quarto
//            tipo_quarto
//            nivel_usuario
//            pagamento
			//Carregando os dados digitados pelo usuário nos atributos da classe
			$nivel->nivel = $_POST['txt_nivel'];
            $nivel->descricao = $_POST['txt_descricao'];
            $nivel->cargo = $_POST['ckCargo'] ? isset($_POST['ckCargo']) : 0;
            $nivel->especialidade = $_POST['ckEspecialidade'] ? isset($_POST['ckEspecialidade']) : 0;
            $nivel->funcionario = $_POST['ckFuncionario'] ? isset($_POST['ckFuncionario']) : 0;
            $nivel->agendamento = $_POST['ckAgendamento'] ? isset($_POST['ckAgendamento']) : 0;
            $nivel->paciente_pendente = $_POST['ckPacientePendente'] ? isset($_POST['ckPacientePendente']) : 0;
            $nivel->paciente_ativo = $_POST['ckPacienteAtivo'] ? isset($_POST['ckPacienteAtivo']) : 0;
            $nivel->remedio = $_POST['ckRemedio'] ? isset($_POST['ckRemedio']) : 0;
            $nivel->receita = $_POST['ckReceita'] ? isset($_POST['ckReceita']) : 0;
            $nivel->internacao = $_POST['ckInternacao'] ? isset($_POST['ckInternacao']) : 0;
            $nivel->quarto = $_POST['ckQuarto'] ? isset($_POST['ckQuarto']) : 0;
            $nivel->tipo_quarto = $_POST['ckTipoQuarto'] ? isset($_POST['ckTipoQuarto']) : 0;
            $nivel->nivel_usuario = $_POST['ckNivelUsuario'] ? isset($_POST['ckNivelUsuario']) : 0;
            $nivel->pagamento = $_POST['ckPagamento'] ? isset($_POST['ckPagamento']) : 0;
            $nivel->senha = $_POST['ckSenha'] ? isset($_POST['ckSenha']) : 0;
            
           
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
        
        public function listarNivelId($id_funcionario){
            $idFuncionario = $id_funcionario;
            
			//INSTANCIA A CLASSE CONTATO
			$nivel_funcionario = new NivelFuncionario();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$nivel_funcionario->id_funcionario = $idFuncionario;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$nivel = $nivel_funcionario::SelectById2($nivel_funcionario);
            
           return $nivel;
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
            $nivel_funcionario->cargo = $_POST['ckCargo'] ? isset($_POST['ckCargo']) : 0;
            $nivel_funcionario->especialidade = $_POST['ckEspecialidade'] ? isset($_POST['ckEspecialidade']) : 0;
            $nivel_funcionario->funcionario = $_POST['ckFuncionario'] ? isset($_POST['ckFuncionario']) : 0;
            $nivel_funcionario->agendamento = $_POST['ckAgendamento'] ? isset($_POST['ckAgendamento']) : 0;
            $nivel_funcionario->paciente_pendente = $_POST['ckPacientePendente'] ? isset($_POST['ckPacientePendente']) : 0;
            $nivel_funcionario->paciente_ativo = $_POST['ckPacienteAtivo'] ? isset($_POST['ckPacienteAtivo']) : 0;
            $nivel_funcionario->remedio = $_POST['ckRemedio'] ? isset($_POST['ckRemedio']) : 0;
            $nivel_funcionario->receita = $_POST['ckReceita'] ? isset($_POST['ckReceita']) : 0;
            $nivel_funcionario->internacao = $_POST['ckInternacao'] ? isset($_POST['ckInternacao']) : 0;
            $nivel_funcionario->quarto = $_POST['ckQuarto'] ? isset($_POST['ckQuarto']) : 0;
            $nivel_funcionario->tipo_quarto = $_POST['ckTipoQuarto'] ? isset($_POST['ckTipoQuarto']) : 0;
            $nivel_funcionario->nivel_usuario = $_POST['ckNivelUsuario'] ? isset($_POST['ckNivelUsuario']) : 0;
            $nivel_funcionario->pagamento = $_POST['ckPagamento'] ? isset($_POST['ckPagamento']) : 0;
            $nivel_funcionario->senha = $_POST['ckSenha'] ? isset($_POST['ckSenha']) : 0;
			
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