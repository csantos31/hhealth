<?php 

    class  ViewInternacaoPacienteClass{
        public $id_paciente_internacao;
        public $id_paciente;
		public $nome;
		public $id_quarto;
        public $numero;
        public $id_unidade;
        public $unidade;
        
        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}
        
        
        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM internacao_paciente;";

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
				$internacao_paciente[] = new ViewInternacaoPacienteClass();

				// Guarda os dados no banco de dados em cada indice do objeto criado
                $internacao_paciente[$cont]->id_paciente_internacao = $rs['id_paciente_internacao'];
				$internacao_paciente[$cont]->id_paciente = $rs['id_paciente'];
				$internacao_paciente[$cont]->nome_paciente = $rs['nome'];
				$internacao_paciente[$cont]->id_quarto = $rs['id_quarto'];
                $internacao_paciente[$cont]->numero = $rs['numero'];
                $internacao_paciente[$cont]->id_unidade = $rs['id_unidade'];
                $internacao_paciente[$cont]->unidade = $rs['unidade'];
                

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($internacao_paciente)) {
				# code...
				return $internacao_paciente;
			}else{
                echo $sql;
            }

		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($dados_view){
			$sql = "SELECT * FROM internacao_paciente WHERE id_paciente =". $dados_view->id_funcionario;
            
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
              
                
				$internacao_paciente[] = new ViewInternacaoPacienteClass();

                // Guarda os dados no banco de dados em cada indice do objeto criado
				$internacao_paciente[$cont]->id_paciente_internacao = $rs['id_paciente_internacao'];
				$internacao_paciente[$cont]->id_paciente = $rs['id_paciente'];
				$internacao_paciente[$cont]->nome_paciente = $rs['nome'];
				$internacao_paciente[$cont]->id_quarto = $rs['id_quarto'];
                $internacao_paciente[$cont]->numero = $rs['numero'];
                $internacao_paciente[$cont]->id_unidade = $rs['nome_paciente'];
                $internacao_paciente[$cont]->unidade = $rs['unidade'];
				
				$cont++;

			}
            
            //Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($internacao_paciente)) {
				# code...
				return $internacao_paciente;
			}else{
                echo $sql;
            }
            

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        
       
        
        
        
        
    }


?>