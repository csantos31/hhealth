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
           // cargos
//            especialidade
//            funcionario
//            agendamento
//            paciente_pendente
//            paciente_ativo
//            remedio
//            receita
//            internacao
//            quarto
//            tipo_quarto
//            nivel_usuario
//            pagamento
			$sql = "INSERT INTO tbl_nivel_funcionario(nivel, descricao,  ativo,cargo,especialidade,
            funcionario, agendamento, paciente_pendente, paciente_ativo, remedio, receita,internacao,
            quarto, tipo_quarto,nivel_usuario, pagamento, senha) VALUES ('".$nivel_dados->nivel."', '".$nivel_dados->descricao."', 1
            , '".$nivel_dados->cargo."', '".$nivel_dados->especialidade."', '".$nivel_dados->funcionario."'
            , '".$nivel_dados->agendamento."', '".$nivel_dados->paciente_pendente."', '".$nivel_dados->paciente_ativo."'
            , '".$nivel_dados->remedio."', '".$nivel_dados->receita."', '".$nivel_dados->internacao."'
            , '".$nivel_dados->quarto."', '".$nivel_dados->tipo_quarto."', '".$nivel_dados->nivel_usuario."'
            , '".$nivel_dados->pagamento."','".$nivel_dados->senha."');";

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
                        $lista_nivel[$cont]->cargo = $rs['cargo'];
                        $lista_nivel[$cont]->especialidade = $rs['especialidade'];
                        $lista_nivel[$cont]->funcionario = $rs['funcionario'];
                        $lista_nivel[$cont]->agendamento = $rs['agendamento'];
                        $lista_nivel[$cont]->paciente_pendente = $rs['paciente_pendente'];
                        $lista_nivel[$cont]->paciente_ativo = $rs['paciente_ativo'];
                        $lista_nivel[$cont]->remedio = $rs['remedio'];
                        $lista_nivel[$cont]->receita = $rs['receita'];
                        $lista_nivel[$cont]->internacao = $rs['internacao'];
                        $lista_nivel[$cont]->quarto = $rs['quarto'];
                        $lista_nivel[$cont]->tipo_quarto = $rs['tipo_quarto'];
                        $lista_nivel[$cont]->nivel_usuario = $rs['nivel_usuario'];
                        $lista_nivel[$cont]->pagamento = $rs['pagamento'];
                        
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
    
        public function SelectById2($dados_nivel){
            //Query para selecionar a tabela contatos
			$sql="SELECT f.id_funcionario as id_funcionario, n.cargo, n.especialidade, n.funcionario, n.agendamento, n.paciente_pendente, n.paciente_ativo,n.remedio,
            n.receita,n.internacao, n.quarto,n.tipo_quarto, n.nivel_usuario, n.pagamento, n.senha
            FROM tbl_nivel_funcionario as n,tbl_cargo as c, tbl_funcionario as f WHERE f.id_cargo = c.id_cargo and c.id_nivel_funcionario = n.id_nivel_funcionario and f.id_funcionario=".$dados_nivel->id_funcionario;

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
                    if($rs = $select->fetch(PDO::FETCH_ASSOC)) {
                        #Cria um array de objetos na classe contatos

                        $lista_nivel = new NivelFuncionario();

                        // Guarda os dados no banco de dados em cada indice do objeto criado
                        
                        
                        $lista_nivel->cargo = $rs['cargo'];
                        $lista_nivel->especialidade = $rs['especialidade'];
                        $lista_nivel->funcionario = $rs['funcionario'];
                        $lista_nivel->agendamento = $rs['agendamento'];
                        $lista_nivel->paciente_pendente = $rs['paciente_pendente'];
                        $lista_nivel->paciente_ativo = $rs['paciente_ativo'];
                        $lista_nivel->remedio = $rs['remedio'];
                        $lista_nivel->receita = $rs['receita'];
                        $lista_nivel->internacao = $rs['internacao'];
                        $lista_nivel->quarto = $rs['quarto'];
                        $lista_nivel->tipo_quarto = $rs['tipo_quarto'];
                        $lista_nivel->nivel_usuario = $rs['nivel_usuario'];
                        $lista_nivel->pagamento = $rs['pagamento'];
                        $lista_nivel->senha = $rs['senha'];
                        // Soma mais um no contador
                        
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
                $nivel_funcionario->cargo = $rs['cargo'];
                $nivel_funcionario->especialidade = $rs['especialidade'];
                $nivel_funcionario->funcionario = $rs['funcionario'];
                $nivel_funcionario->agendamento = $rs['agendamento'];
                $nivel_funcionario->paciente_pendente = $rs['paciente_pendente'];
                $nivel_funcionario->paciente_ativo = $rs['paciente_ativo'];
                $nivel_funcionario->remedio = $rs['remedio'];
                $nivel_funcionario->receita = $rs['receita'];
                $nivel_funcionario->internacao = $rs['internacao'];
                $nivel_funcionario->quarto = $rs['quarto'];
                $nivel_funcionario->tipo_quarto = $rs['tipo_quarto'];
                $nivel_funcionario->nivel_usuario = $rs['nivel_usuario'];
                $nivel_funcionario->pagamento = $rs['pagamento'];
                $nivel_funcionario->senha = $rs['senha'];

                return $nivel_funcionario;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        public function Update($nivel){
// cargos
//            especialidade
//            funcionario
//            agendamento
//            paciente_pendente
//            paciente_ativo
//            remedio
//            receita
//            internacao
//            quarto
//            tipo_quarto
//            nivel_usuario
//            pagamento
			$sql = "UPDATE tbl_nivel_funcionario SET nivel = '".$nivel->nivel."', descricao = '".$nivel->descricao. "',
            cargo='".$nivel->cargo."',
            especialidade='".$nivel->especialidade."',
            funcionario='".$nivel->funcionario."',
            agendamento='".$nivel->agendamento."',
            paciente_pendente='".$nivel->paciente_pendente."',
            paciente_ativo='".$nivel->paciente_ativo."',
            remedio='".$nivel->remedio."',
            receita='".$nivel->receita."',
            internacao='".$nivel->internacao."',
            quarto='".$nivel->quarto."',
            tipo_quarto='".$nivel->tipo_quarto."',
            nivel_usuario='".$nivel->nivel_usuario."',
            pagamento='".$nivel->pagamento."',
            senha='".$nivel->senha."'
            WHERE id_nivel_funcionario = ".$nivel->id_nivel_funcionario;

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
