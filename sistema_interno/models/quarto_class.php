<?php 

    class Quarto{
        public $id_quarto;
		public $id_tipo_quarto;
		public $id_unidade;
        public $numero;
        
        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}
        
        /*insere o registro no DB*/
		public static function Insert($quarto_dados){
			$sql = "INSERT INTO tbl_quarto(numero,id_tipo_quarto,id_unidade)
			VALUES ('".$quarto_dados->numero."',
			'".$quarto_dados->id_tipo_quarto."','".$quarto_dados->id_unidade."'
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
				//Mensagem de erro
                echo $sql;
				echo "Error inserir no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();

		}
        
        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_quarto ORDER BY id_quarto DESC;";

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
				$lista_quarto[] = new Quarto();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_quarto[$cont]->id_quarto = $rs['id_quarto'];
				$lista_quarto[$cont]->id_unidade = $rs['id_unidade'];
				$lista_quarto[$cont]->id_tipo_quarto = $rs['id_tipo_quarto'];
                $lista_quarto[$cont]->numero = $rs['numero'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_quarto)) {
				# code...
				return $lista_quarto;
			}

		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($quarto){
			$sql = "SELECT * FROM tbl_quarto WHERE id_quarto =". $quarto->id_quarto;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela
              
                
				$quarto = new Quarto();

				$quarto->id_quarto = $rs['id_quarto'];
				$quarto->id_tipo_quarto = $rs['id_tipo_quarto'];
				$quarto->descricao = $rs['id_unidade'];
                $quarto->numero = $rs['numero'];
				
				return $quarto;

			}else {
                echo $sql;
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        public function Update($quarto){
			$sql = "UPDATE tbl_quarto set id_tipo_quarto = '".$quarto->id_tipo_quarto."', id_unidade = '".$quarto->id_unidade. "',numero='".$quarto->numero."' WHERE id_quarto =".$quarto->id_quarto;
		
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
				echo "Error atualizar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        /*Delete o registro no BD*/
		public function Delete($quarto_dados){

			$sql = "DELETE FROM tbl_quarto WHERE id_quarto = ". $quarto_dados->id_quarto;

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
        
        public function SelectTipoQuarto(){
            $sql="SELECT * FROM tbl_tipo_quarto as tq, tbl_quarto as q WHERE q.id_tipo_quarto = tq.id_tipo_quarto;";
            
            $conex = new Mysql_db();
            
            $PDO_conex = $conex->Conectar();
            
            $select = $PDO_conex->query($sql);
            
            $cont=0;
            //Estrutura de repetição para pegar dados
			while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
				#Cria um array de objetos na classe contatos
				$lista_quarto[] = new Quarto();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_quarto[$cont]->id_quarto = $rs['id_quarto'];
				$lista_quarto[$cont]->id_unidade = $rs['id_unidade'];
				$lista_quarto[$cont]->id_tipo_quarto = $rs['id_tipo_quarto'];
                $lista_quarto[$cont]->numero = $rs['numero'];
                $lista_quarto[$cont]->tipo = $rs['nivel'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_quarto)) {
				# code...
				return $lista_quarto;
			}
            
            $conex->Desconectar();
        }
        
        
    }


?>