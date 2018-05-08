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
			$sql="SELECT * FROM tbl_especialidade WHERE status = 1 ORDER BY id_especialidade;";

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o select no banco de dados e guarda o retorno na variavel select
			$select = $PDO_conex->query($sql);

			//Contador
			$cont = 0;

          if(!empty($select)){
                //Estrutura de repetição para pegar dados
                while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
                    #Cria um array de objetos na classe contatos

                    $lista_especialidade[] = new Especialidade();

                    // Guarda os dados no banco de dados em cada indice do objeto criado
                    $lista_especialidade[$cont]->id_especialidade = $rs['id_especialidade'];
                    $lista_especialidade[$cont]->especialidade = $rs['especialidade'];
                    $lista_especialidade[$cont]->texto = $rs['texto'];
                    $lista_especialidade[$cont]->imagem = $rs['imagem'];

                    // Soma mais um no contador
                    $cont+=1;
                    }
            }else{
              $lista_especialidade = array();
            }

			$conex->Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_especialidade)) {
				# code...
				return $lista_especialidade;
			}

		}

        /*Busca um registro especifico no BD*/
		public function SelectById($especialidade){
			$sql = "SELECT * FROM tbl_especialidade WHERE id_especialidade =". $especialidade->id_especialidade;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$especialidade = new Especialidade();

				$especialidade->id_especialidade = $rs['id_especialidade'];
				$especialidade->especialidade = $rs['especialidade'];
				$especialidade->texto = $rs['texto'];
                $especialidade->status = $rs['status'];
                $especialidade->imagem = $rs['imagem'];

                return $especialidade;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        public function UpdateWithFile($especialidade){

			$sql = "UPDATE tbl_especialidade SET especialidade = '".$especialidade->especialidade."', texto = '".$especialidade->texto. "', imagem = '". $especialidade->imagem ."' WHERE id_especialidade =".$especialidade->id_especialidade;




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

        public function UpdateWithoutFile($especialidade){

			$sql = "UPDATE tbl_especialidade SET especialidade = '".$especialidade->especialidade."', texto = '".$especialidade->texto. "' WHERE id_especialidade = ".$especialidade->id_especialidade;

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
		public function Delete($especialidade_dados){

			$sql = "UPDATE tbl_especialidade SET status = 0 WHERE id_especialidade = ".$especialidade_dados->id_especialidade;

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
