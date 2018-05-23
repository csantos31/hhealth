<?php 

    class ViewAgendamentoPacienteFuncionarioController{
       
        
		public function Listar(){
			//Instancia da classe contatos
			$view_agendamento = new ViewAgendamentoPacienteFuncionarioClass();

			//Chama o método para selecionar os registros
            
            
            
			return $view_agendamento::Select();
		}
        
        public function Buscar($id_funcionario){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idFuncionario = $id_funcionario;
            
			//INSTANCIA A CLASSE CONTATO
			$view_agendamento = new ViewAgendamentoPacienteFuncionarioClass();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$view_agendamento ->id_funcionario = $idFuncionario;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$view = $view_agendamento::SelectById($view_agendamento);
			//require_once('views_cms/tipo_quarto.php');
            return $view;
		}
        
        public function Ativar(){
            //require_once ('../../views/include_area_paciente/models/agendamento_class.php');
            

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idAgendamento = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$agendamento = new Agendamento();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$agendamento->id_agendamento_consulta = $idAgendamento;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$agendamento::AtivarPorId($agendamento);
            

		}
        
        
        public function Desativar(){
             //require_once ('../../views/include_area_paciente/models/agendamento_class.php');
            

			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idAgendamento = $_GET['id'];

			//INSTANCIA A CLASSE CONTATO
			$agendamento = new Agendamento();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$agendamento->id_agendamento_consulta = $idAgendamento;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$agendamento::AtivarPorId($agendamento);
            

		}
        
        
        
        
    }


?>