<?php

class Paciente{
        public $id_paciente;
        public $id_convenio;
        public $id_endereco;
        public $nome;
        public $sobrenome;
        public $dt_nasc;
        public $rg;
        public $cpf;
        public $carteirinha_convenio;
        public $foto;
        public $status;

        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}

        /*insere o registro no DB*/
		public static function Insert($paciente){
			$sql = "INSERT INTO tbl_paciente (id_endereco, id_convenio, nome, sobrenome, dt_nasc, rg, cpf, carterinha_convenio, foto, status) VALUES ('".$paciente->id_endereco."', '".$paciente->id_convenio."', '".$paciente->nome."', '".$paciente->sobrenome."', '".$paciente->dt_nasc."', '".$paciente->rg."', '".$paciente->cpf."', '".$paciente->carteirinha_convenio."', '".$paciente->foto."', '1');";

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
			$sql="SELECT p.*, e.* FROM tbl_paciente AS p INNER JOIN tbl_endereco AS e ON p.id_endereco = e.id_endereco WHERE ativo = 1 AND status = 1;";

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

            $lista_pacientes = array();

			while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
				#Cria um array de objetos na classe contatos

                //var_dump($rs);exit();

				$lista_paciente[] = $rs;


				// Guarda os dados no banco de dados em cada indice do objeto criado
				/*$lista_pacientes[$cont]->id_paciente = $rs['id_paciente'];
                $lista_pacientes[$cont]->id_endereco = $rs['id_endereco'];
                $lista_pacientes[$cont]->id_convenio = $rs['id_convenio'];
                $lista_pacientes[$cont]->nome = $rs['nome'];
                $lista_pacientes[$cont]->sobrenome = $rs['sobrenome'];
                $lista_pacientes[$cont]->dt_nasc = $rs['dt_nasc'];
                $lista_pacientes[$cont]->rg = $rs['rg'];
                $lista_pacientes[$cont]->cpf = $rs['cpf'];
                $lista_pacientes[$cont]->carteirinha_convenio = $rs['carteirinha_convenio'];
                $lista_pacientes[$cont]->foto = $rs['foto'];
                $lista_pacientes[$cont]->status = $rs['status'];
				$lista_pacientes[$cont]->id_endereco = $rs['id_endereco'];
                $lista_pacientes[$cont]->cep = $rs['cep'];
                $lista_pacientes[$cont]->logradouro = $rs['logradouro'];
                $lista_pacientes[$cont]->numero = $rs['numero'];
                $lista_pacientes[$cont]->id_estado = $rs['id_estado'];
                $lista_pacientes[$cont]->cidade = $rs['cidade'];
                $lista_pacientes[$cont]->bairro = $rs['bairro'];*/

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_paciente)) {
				# code...
				return $lista_paciente;
			}

		}
    
        public function Select_pendentes(){
            //Query para selecionar a tabela contatos
			$sql="SELECT p.*, e.* FROM tbl_paciente AS p INNER JOIN tbl_endereco AS e ON p.id_endereco = e.id_endereco WHERE status = 0;";

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

            $lista_pacientes = array();

			while ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
				#Cria um array de objetos na classe contatos

                //var_dump($rs);exit();

				$lista_paciente[] = $rs;

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_paciente)) {
				# code...
				return $lista_paciente;
			}
        }

        /*Busca um registro especifico no BD*/
		public function SelectById($paciente){
			$sql = "SELECT p.*, e.* FROM tbl_paciente AS p INNER JOIN tbl_endereco AS e ON p.id_endereco = e.id_endereco WHERE id_paciente = ". $paciente->id_paciente;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela

				$paciente = array();

        $paciente = $rs;

				// Guarda os dados no banco de dados em cada indice do objeto criado
				/*$paciente->id_paciente = $rs['id_paciente'];
                $paciente->id_endereco = $rs['id_endereco'];
                $paciente->id_convenio = $rs['id_convenio'];
                $paciente->nome = $rs['nome'];
                $paciente->sobrenome = $rs['sobrenome'];
                $paciente->dt_nasc = $rs['dt_nasc'];
                $paciente->rg = $rs['rg'];
                $paciente->cpf = $rs['cpf'];
                $paciente->carteirinha_convenio = $rs['carteirinha_convenio'];
                $paciente->foto = $rs['foto'];
                $paciente->status = $rs['status'];
				        $paciente->id_endereco = $rs['id_endereco'];
                $paciente->cep = $rs['cep'];
                $paciente->logradouro = $rs['logradouro'];
                $paciente->numero = $rs['numero'];
                $paciente->id_estado = $rs['id_estado'];
                $paciente->cidade = $rs['cidade'];
                $paciente->bairro = $rs['bairro']; */

                return $paciente;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

    public function Update($paciente){
            
			$sql = "UPDATE tbl_paciente SET nome='".$paciente->nome."', sobrenome='".$paciente->sobrenome."', dt_nasc='".$paciente->dt_nasc."', rg='".$paciente->rg."', cpf='".$paciente->cpf."' WHERE id_paciente='".$paciente->id_paciente."';";

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
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
    
        public function updateCarteirinhaConvenio($paciente){
            $sql = "UPDATE tbl_paciente SET carterinha_convenio='".$paciente->carteirinha_convenio ."' WHERE id_paciente='".$paciente->id_paciente."';";

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

			$conex->Desconectar();
        }
    
        public function updateFoto($paciente){
            $sql = "UPDATE tbl_paciente SET foto='".$paciente->foto ."' WHERE id_paciente='".$paciente->id_paciente."';";

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

			$conex->Desconectar();
        }
    

        /*Delete o registro no BD*/
		public function Delete($paciente){

			$sql = "UPDATE tbl_paciente SET ativo ='0' WHERE id_paciente ='" . $paciente->id_paciente . "';";

            echo $sql;
            
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
