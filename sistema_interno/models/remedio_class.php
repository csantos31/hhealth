<?php 

    class Remedio{
        public $id_remedio;
		public $remedio;
		public $descricao;
        
        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}
        
        /*insere o registro no DB*/
		public static function Insert($remedio_dados){
			$sql = "INSERT INTO tbl_remedio(remedio,descricao)
			VALUES ('".$remedio_dados->remedio."',
			'".$remedio_dados->descricao."'
			);";
            
        
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				echo "<script>location.reload();</script>";
			}else {
                echo $sql;
				//Mensagem de erro
				echo "Error inserir no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();

		}
        
        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_remedio ORDER BY id_remedio DESC;";

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
				$lista_remedio[] = new Remedio();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_remedio[$cont]->id_remedio = $rs['id_remedio'];
				$lista_remedio[$cont]->remedio = $rs['remedio'];
				$lista_remedio[$cont]->descricao = $rs['descricao'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_remedio)) {
				# code...
				return $lista_remedio;
			}

		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($remedio){
			$sql = "SELECT * FROM tbl_remedio WHERE id_remedio =". $remedio->id_remedio;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela
              
                
				$remedio = new Remedio();

				$remedio->id_remedio = $rs['id_remedio'];
				$remedio->remedio = $rs['remedio'];
				$remedio->descricao = $rs['descricao'];
				
				return $remedio;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        public function Update($remedio){
			$sql = "UPDATE tbl_remedio set remedio = '".$remedio->remedio."', descricao = '".$remedio->descricao. "' WHERE id_remedio =".$remedio->id_remedio;
		
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
                //echo $sql;
				echo "<script>location.reload();</script>";
			}else {
				//Mensagem de erro
				echo "Error atualizar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        /*Delete o registro no BD*/
		public function Delete($remedio){

			$sql = "DELETE FROM tbl_remedio WHERE id_remedio = ". $remedio->id_remedio;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				echo "<script>location.reload();</script>";
			}else {
				//Mensagem de erro
				echo "Error ao deletar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();

		}
        
        
    }


?>