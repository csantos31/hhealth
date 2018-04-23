<?php

class Funcionario{
        public $id_funcionario;
        public $id_cargo;
        public $id_endereco;
        public $nome;
        public $sobrenome;
        public $dt_nasc;
        public $rg;
        public $cpf;
        public $status;

        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}

        /*insere o registro no DB*/
		public static function Insert($funcionario){
			$sql = "INSERT INTO tbl_funcionario (id_cargo, id_endereco, nome, sobrenome, dt_nasc, rg, cpf, ativo) VALUES ('".$funcionario->id_cargo."', '".$funcionario->id_endereco."', '".$funcionario->nome."', '".$funcionario->sobrenome."', '".$funcionario->dt_nasc."', '".$funcionario->rg."', '".$funcionario->cpf."','1');";

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
			$sql="SELECT f.*, e.* FROM tbl_funcionario AS f INNER JOIN tbl_endereco AS e ON f.id_endereco = e.id_endereco WHERE ativo = 1;";

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

            $lista_funcionario = array();

			while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
				#Cria um array de objetos na classe contatos

                //var_dump($rs);exit();

				$lista_funcionario[] = $rs;

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_funcionario)) {
				# code...
				return $lista_funcionario;
			}

		}

        /*Busca um registro especifico no BD*/
		public function SelectById($funcionario){
			$sql = "SELECT f.*, e.* FROM tbl_funcionario AS f INNER JOIN tbl_endereco AS e ON f.id_endereco = e.id_endereco WHERE id_funcionario = ". $funcionario->id_funcionario;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela

				$funcionario = array();

                $funcionario = $rs;

                return $funcionario;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

    public function Update($funcionario){

			$sql = "UPDATE tbl_funcionario SET nome='".$funcionario->nome."', sobrenome='".$funcionario->sobrenome."', dt_nasc='".$funcionario->dt_nasc."', rg='".$funcionario->rg."', cpf='".$funcionario->cpf."' WHERE id_funcionario=".$funcionario->id_funcionario.";";

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
				echo "Error atualizar no Banco de Dados";
        echo $sql;
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        /*Delete o registro no BD*/
		public function Delete($funcionario){

			$sql = "UPDATE tbl_funcionario SET ativo ='0' WHERE id_funcionario ='" . $funcionario->id_funcionario . "';";
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

      public function Login_usuario($usuario){
            $_SESSION["login"]=0;
            $count=0;
            $sql = "SELECT usuario,id_nivel_acesso, senha FROM tbl_usuario_funcionario WHERE usuario = '" .$usuario->cpf . "'
             AND senha = '".$usuario->senha. "';";

            //Instancia da classe do BD
            $conn = new Mysql_db();

            //chama o metodo para conectar no BD e guarda o retorno da conexao na variavel $PDO_conn
            $PDO_conn = $conn->Conectar();
            // Executa a query e salva em uma variavel
            $queryExecutada  = $PDO_conn->query($sql);
            //Conta quantidade de linha
            $count = $queryExecutada->rowCount();
            if($count == 1){
                //IF para puxar um dado do banco de dados
                if ($puxaDadosDB = $queryExecutada->fetch(PDO::FETCH_ASSOC)) {
                  # code...
                  $id_nivel_funcionario = $puxaDadosDB['id_nivel_acesso'];

                  $_SESSION["login"]=$count;

                }

            }
            if($_SESSION["login"]==1 && $id_nivel_funcionario == 1){

                header('location:views/dashboard.php');
            }else if($_SESSION["login"]==0){
                //header('location:index.php');
                header('location:views/dashboard.php');
            }

            // echo($count."To Aki");
            //Executa o Script no BD



            //Fecha a conexao com o Banco de Dados
            $conn -> Desconectar();

                //var_dump($sql);
            }



    }


?>
