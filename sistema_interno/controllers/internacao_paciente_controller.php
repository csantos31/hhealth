<?php 

    class ViewInternacaoPacienteController{
       
        
		public function Listar(){
			//Instancia da classe contatos
			$view_internacao = new ViewInternacaoPacienteClass();

			//Chama o método para selecionar os registros
            
            
            
			return $view_internacao::Select();
		}
        
        public function Buscar($id_funcionario){
			//GUARDA O ID DO CONTATO PASSADO NA VIEW
			$idPaciente = $id_paciente;
            
			//INSTANCIA A CLASSE CONTATO
			$view_internacao = new ViewInternacaoPacienteClass();

			//DEFINE O ID DO CONTATO COM O VALOR DA VARIÁVEL
			$view_internacao ->id_paciente = $idPaciente;

			//CHAMA O MÉTODO DA MODEL PARA APAGAR O REGISTRO
			$view = $view_internacao::SelectById($view_agendamento);
			//require_once('views_cms/tipo_quarto.php');
            return $view;
		}
         
    }


?>