<?php 

class Especialidade{
      public $id_especialidade;
      public $especialidade;
      public $texto;
      public $imagem;
      public $status;
        
        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}
        
        /*insere o registro no DB*/
		public static function Insert($especialidade_dados){
			$sql = "INSERT INTO tbl_especialidade(especialidade, texto, imagem, status) VALUES ('".$especialidade_dados->especialidade."', '".$especialidade_dados->texto."', '".$especialidade_dados->imagem."',1);";
            
            //echo $sql;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				header('location: index.php');
			}else {
				//Mensagem de erro
                echo $sql;
				//echo "Error inserir no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();

		}
        
        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_tipo_quarto ORDER BY id_tipo_quarto DESC;";

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
				$lista_niveis[] = new TipoQuarto();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_niveis[$cont]->id_tipo_quarto = $rs['id_tipo_quarto'];
				$lista_niveis[$cont]->nivel = $rs['nivel'];
				$lista_niveis[$cont]->descricao = $rs['descricao'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_niveis)) {
				# code...
				return $lista_niveis;
			}

		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($nivel){
			$sql = "SELECT * FROM tbl_tipo_quarto WHERE id_tipo_quarto =". $nivel->id_tipo_quarto;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela
              
                
				$nivel = new TipoQuarto();

				$nivel->id_tipo_quarto = $rs['id_tipo_quarto'];
				$nivel->nivel = $rs['nivel'];
				$nivel->descricao = $rs['descricao'];
				
				return $nivel;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        public function Update($nivel){
			$sql = "UPDATE tbl_tipo_quarto set nivel = '".$nivel->nivel."', descricao = '".$nivel->descricao. "' WHERE id_tipo_quarto =".$nivel->id_tipo_quarto;
		
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				header('location: index.php');
			}else {
				//Mensagem de erro
				echo "Error atualizar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        /*Delete o registro no BD*/
		public function Delete($nivel_dados){

			$sql = "DELETE FROM tbl_tipo_quarto WHERE id_tipo_quarto = ". $nivel_dados->id_tipo_quarto;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				header('location: index.php');
			}else {
				//Mensagem de erro
				echo "Error ao deletar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();

		}
        
        
    }


?>