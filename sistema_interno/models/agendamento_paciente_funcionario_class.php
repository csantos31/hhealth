<?php 

    class  ViewAgendamentoPacienteFuncionarioClass{
        public $id_funcionario;
		public $nome_funcionario;
		public $id_paciente;
        public $nome_paciente;
        public $data;
        public $ativo;
        
        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}
        
        
        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM agendamento_paciente_funcionario;";

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o select no banco de dados e guarda o retorno na variavel select
			$select = $PDO_conex->query($sql);

			//Contador
			$cont = 0;

			//Estrutura de repetição para pegar dados
			while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
				#Cria um array de objetos na classe contatos
				$agendamento_paciente_funcionario[] = new ViewAgendamentoPacienteFuncionarioClass();

				// Guarda os dados no banco de dados em cada indice do objeto criado
                $agendamento_paciente_funcionario[$cont]->id_agendamento_consulta = $rs['id_agendamento_consulta'];
				$agendamento_paciente_funcionario[$cont]->id_funcionario = $rs['id_funcionario'];
				$agendamento_paciente_funcionario[$cont]->nome_funcionario = $rs['nome_funcionario'];
				$agendamento_paciente_funcionario[$cont]->id_paciente = $rs['id_paciente'];
                $agendamento_paciente_funcionario[$cont]->nome_paciente = $rs['nome_paciente'];
                $agendamento_paciente_funcionario[$cont]->ativo = $rs['data'];
                $agendamento_paciente_funcionario[$cont]->ativo = $rs['ativo'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($agendamento_paciente_funcionario)) {
				# code...
				return $agendamento_paciente_funcionario;
			}

		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($dados_view){
//			$sql = "SELECT * FROM agendamento_paciente_funcionario WHERE id_funcionario =". $dados_view->id_funcionario."AND ativo = 1;";
            $sql="SELECT a.id_funcionario, f.nome as nome_funcionario, a.id_paciente, p.nome as nome_paciente, a.id_agendamento_consulta, a.data, a.ativo FROM 
tbl_agendamento_consultas as a INNER JOIN tbl_funcionario as f ON a.id_funcionario = f.id_funcionario INNER JOIN tbl_paciente as p ON a.id_paciente = p.id_paciente; ";
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);
            $cont=0;
			//Executa o script no banco de dados
			while($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela
              
                
				$agendamento_paciente_funcionario[] = new ViewAgendamentoPacienteFuncionarioClass();

				// Guarda os dados no banco de dados em cada indice do objeto criado
                $agendamento_paciente_funcionario[$cont]->id_agendamento_consulta = $rs['id_agendamento_consulta'];
				$agendamento_paciente_funcionario[$cont]->id_paciente = $rs['id_paciente'];
                $agendamento_paciente_funcionario[$cont]->nome_paciente = $rs['nome_paciente'];
                $agendamento_paciente_funcionario[$cont]->data = $rs['data'];
                $agendamento_paciente_funcionario[$cont]->ativo = $rs['ativo'];
				
				$cont++;

			}
            
            //Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($agendamento_paciente_funcionario)) {
				# code...
				return $agendamento_paciente_funcionario;
			}
            

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        
       
        
        
        
        
    }


?>