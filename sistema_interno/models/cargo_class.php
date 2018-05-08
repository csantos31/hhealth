<?php

class Cargo{
      public $id_cargo;
      public $cargo;
      public $descricao;
      public $id_nivel_funcionario;
      public $ativo;
      
        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}

        /*insere o registro no DB*/
		public static function Insert($cargo){
			$sql = "INSERT INTO tbl_cargo(cargo, descricao, id_nivel_funcionario) VALUES ('".$cargo->cargo."', '".$cargo->descricao."','". $cargo->id_nivel_funcionario ."' );";

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
    
        public function SelectPermitions(){
            //Query para selecionar a tabela contatos
			$sql="SELECT * FROM usuario_medico_administrador;";

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
                    
                    $lista_adm = array();
                  
                    //Estrutura de repetição para pegar dados
                    while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
                        
                    // Guarda os dados no banco de dados em cada indice do objeto criado
                    $lista_adm[$cont] = $rs['id_usuario_medico_administrador'];


                    // Soma mais um no contador
                    $cont+=1;
                    }
            }else{
              $lista_adm = array();
            }

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_cargo)) {
				# code...
				return $lista_cargo;
			}
        }

        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_cargo WHERE ativo = 1 ORDER BY id_cargo DESC;";

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

                        $lista_cargo[] = new Cargo();

                        // Guarda os dados no banco de dados em cada indice do objeto criado
                        $lista_cargo[$cont]->id_cargo = $rs['id_cargo'];
                        $lista_cargo[$cont]->id_nivel_funcionario = $rs['id_nivel_funcionario'];
                        $lista_cargo[$cont]->cargo = $rs['cargo'];
                        $lista_cargo[$cont]->descricao = $rs['descricao'];
                        $lista_cargo[$cont]->ativo = $rs['ativo'];

                        // Soma mais um no contador
                        $cont+=1;
                    }
            }else{
              $lista_cargo = array();
            }

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_cargo)) {
				# code...
				return $lista_cargo;
			}

	   }

        /*Busca um registro especifico no BD*/
		public function SelectById($cargo){
			$sql = "SELECT * FROM tbl_cargo WHERE id_cargo =". $cargo->id_cargo;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$cargo = new Cargo();

				$cargo->id_cargo = $rs['id_cargo'];
                $cargo->id_nivel_funcionario = $rs['id_nivel_funcionario'];
				$cargo->cargo = $rs['cargo'];
				$cargo->descricao = $rs['descricao'];
                $cargo->ativo = $rs['ativo'];

                return $cargo;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        public function Update($cargo){

			$sql = "UPDATE tbl_cargo SET id_nivel_funcionario = '".$cargo->id_nivel_funcionario."',cargo = '". $cargo->cargo ."', descricao = '".$cargo->descricao. "' WHERE id_cargo = ".$cargo->id_cargo;

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
		public function Delete($cargo){

			$sql = "UPDATE tbl_cargo SET ativo = 0 WHERE id_cargo = ".$cargo->id_cargo;

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
