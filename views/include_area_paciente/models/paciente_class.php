<?php

    class Paciente{
        
        public $id_paciente;
        public $id_endereco;
        public $id_convenio;
        public $nome;
        public $sobrenome;
        public $dt_nasc;
        public $rg;
        public $cpf;
        public $carterinha_convenio;
        public $foto;
        
        
        public function __construct(){
            
            include_once('bd_clss.php');
            
        }
        
        /*Busca um registro especifico no BD*/
		public function SelectById($paciente){
			$sql = "SELECT * FROM tbl_paciente WHERE id_paciente =". $paciente->id_paciente;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$paciente = new Paciente();

				$paciente->id_paciente = $rs['id_paciente'];
                $paciente->id_endereco = $rs['id_endereco'];
                $paciente->id_convenio = $rs['id_convenio'];
                $paciente->nome = $rs['nome'];
                $paciente->sobrenome = $rs['sobrenome'];
                $paciente->dt_nasc = $rs['dt_nasc'];
                $paciente->rg = $rs['rg'];
                $paciente->cpf = $rs['cpf'];
                $paciente->carterinha_convenio = $rs['carterinha_convenio'];
                $paciente->foto = $rs['foto'];

                return $paciente;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        public function Update($paciente){

			$sql = "UPDATE tbl_paciente SET nome = '" .$paciente->nome. "', sobrenome = '" .$paciente->sobrenome. "', dt_nasc = '" .$paciente->dt_nasc. "', rg = '" .$paciente->rg. "', cpf = '" .$paciente->cpf. "', carterinha = '" .$paciente->carterinha. "', foto = '" .$paciente->foto. "' WHERE id_paciente = '" .$paciente->id_paciente."';";

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				//echo "<script>location.reload();</script>";
                echo $sql;
			}else {
				//Mensagem de erro
                echo $sql;
				echo "Error atualizar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}


?>