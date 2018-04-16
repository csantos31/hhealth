<?php

class Endereco{

      public $id_endereco;
      public  $cep;
      public  $logradouro;
      public  $numero;
      public $id_estado;
      public $cidade;
      public $bairro;

        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}

        /*insere o registro no DB*/
		public static function Insert($endereco_dados){
			$sql = "INSERT INTO tbl_endereco(cep, logradouro, numero, id_estado,cidade,bairro) VALUES ('". $endereco_dados->cep ."', '". $endereco_dados->logradouro ."', '". $endereco_dados->numero ."', '". $endereco_dados->id_estado ."' , '". $endereco_dados->cidade ."', '". $endereco_dados->bairro ."');";

            //echo $sql;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
            
        
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
                
                $endereco = new Endereco;
                
                $id_endereco = $endereco::SelectLast();
                
                return $id_endereco;
                
				echo "<script>location.reload();</script>";
			}else {
				//Mensagem de erro
                echo $sql;
				echo "Error inserir no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar(); 
            
		}
    
        /*Busca um registro especifico no BD*/
		public function SelectLast(){
			$sql = "SELECT id_endereco FROM tbl_endereco ORDER BY id_endereco DESC LIMIT 1";

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$endereco = new Endereco();

				$endereco = $rs['id_endereco'];

                return $endereco;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_endereco  ORDER BY id_endereco;";

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

				$lista_endereco[] = new Endereco();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_endereco[$cont]->id_endereco = $rs['id_endereco'];
                $lista_endereco[$cont]->cep = $rs['cep'];
                $lista_endereco[$cont]->logradouro = $rs['logradouro'];
                $lista_endereco[$cont]->numero = $rs['numero'];
                $lista_endereco[$cont]->id_estado = $rs['id_estado'];
                $lista_endereco[$cont]->cidade = $rs['cidade'];
                $lista_endereco[$cont]->bairro = $rs['bairro'];


				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_endereco)) {
				# code...
				return $lista_endereco;
			}

		}

    public function SelectAllStates(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_estado";

			$conex = new Mysql_db();
			$PDO_conex = $conex->Conectar();
			$select = $PDO_conex->query($sql);

			//Contador
			$cont = 0;

      $lista_estados = array();

			while ($rs = $select->fetchALL(PDO::FETCH_ASSOC)) {
				#Cria um array de objetos na classe contatos

				$lista_estados= $rs;

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();
				return $lista_estados;
		}

        /*Busca um registro especifico no BD*/
		public function SelectById($endereco){
			$sql = "SELECT * FROM tbl_endereco WHERE id_endereco =". $endereco->id_endereco;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$endereco = new Endereco();

				$endereco->id_endereco = $rs['id_endereco'];
                $endereco->cep = $rs['cep'];
                $endereco->logradouro = $rs['logradouro'];
                $endereco->numero = $rs['numero'];
                $endereco->id_estado = $rs['id_estado'];
                $endereco->cidade = $rs['cidade'];
                $endereco->bairro = $rs['bairro'];

                return $endereco;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        public function Update($endereco){

			$sql = "UPDATE tbl_endereco SET cep='". $endereco->cep ."', logradouro='". $endereco->logradouro ."', numero='". $endereco->numero ."', id_estado='". $endereco->id_estado ."', cidade='". $endereco->cidade ."', bairro='". $endereco->bairro ."' WHERE id_endereco='". $endereco->id_endereco ."';";

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
		public function Delete($endereco){

			$sql = "DELETE FROM tbl_endereco  WHERE id_endereco = " . $endereco->id;

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


    }


?>
