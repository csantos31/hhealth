<?php

class NivelFuncionario{
      public $id_nivel_funcionario;
      public $nivel;
      public $descricao;
      public $ativo;
      
        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}

        /*insere o registro no DB*/
		public static function Insert($nivel_dados){
			$sql = "INSERT INTO tbl_nivel_funcionario(nivel, descricao,  ativo) VALUES ('".$nivel_dados->nivel."', '".$nivel_dados->descricao."', 1);";

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
			$sql="SELECT * FROM tbl_nivel_funcionario WHERE ativo = 1 ORDER BY id_nivel_funcionario DESC;";

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

                        $lista_nivel[] = new NivelFuncionario();

                        // Guarda os dados no banco de dados em cada indice do objeto criado
                        $lista_nivel[$cont]->id_nivel_funcionario = $rs['id_nivel_funcionario'];
                        $lista_nivel[$cont]->nivel = $rs['nivel'];
                        $lista_nivel[$cont]->descricao = $rs['descricao'];
                        $lista_nivel[$cont]->ativo = $rs['ativo'];

                        // Soma mais um no contador
                        $cont+=1;
                    }
            }else{
              $lista_nivel = array();
            }

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_nivel)) {
				# code...
				return $lista_nivel;
			}
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
                    $niv[] = new NivelFuncionario();
                    //Estrutura de repetição para pegar dados
                    while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
                        #Cria um array de objetos na classe contatos
                        $niv[$cont]->id_usuario_medico = $rs['id_usuario_medico_administrador'];
                        $niv[$cont]->permissao = $rs['permissao'];
                        // Soma mais um no contador
                        $cont+=1;
                    }
            }
            

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($niv)) {
				# code...
				return $niv;
			}
        }
    

        /*Busca um registro especifico no BD*/
		public function SelectById($nivel){
			$sql = "SELECT * FROM tbl_nivel_funcionario WHERE id_nivel_funcionario =". $nivel->id_nivel_funcionario;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$nivel_funcionario = new NivelFuncionario();

				$nivel_funcionario->id_nivel_funcionario = $rs['id_nivel_funcionario'];
				$nivel_funcionario->nivel = $rs['nivel'];
				$nivel_funcionario->descricao = $rs['descricao'];
                $nivel_funcionario->ativo = $rs['ativo'];

                return $nivel_funcionario;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        public function Update($nivel){

			$sql = "UPDATE tbl_nivel_funcionario SET nivel = '".$nivel->nivel."', descricao = '".$nivel->descricao. "',set WHERE id_nivel_funcionario = ".$nivel->id_nivel_funcionario;

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
		public function Delete($nivel){

			$sql = "UPDATE tbl_nivel_funcionario SET ativo = 0 WHERE id_nivel_funcionario = ".$nivel->id_nivel_funcionario;

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
