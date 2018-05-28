<?php 
    class Senha{
        public $id_senha;
        public $emergencia;
        public $senha;
        public $atual;
        public $ativo;
        
        
        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}
        
        public function SelectEmergency(){
			$sql = "SELECT * FROM tbl_senha WHERE emergencia = 1  AND ativo = 1 ORDER BY id_senha ASC LIMIT 1;";

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$senha = new Senha();

				$senha->id_senha = $rs['id_senha'];
				$senha->emergencia = $rs['emergencia'];
                $senha->senha = $rs['senha'];
                $senha->atual = $rs['atual'];
                $senha->ativo = $rs['ativo'];

                return $senha;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
	     }

        public function DefineAtual($senha){

			$sql = "UPDATE tbl_senha SET atual = 1, ativo = 0 WHERE id_senha = ". $senha->id_senha;

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
        
        public function ResetaAtual(){

			$sql = "UPDATE tbl_senha SET atual = 0  WHERE id_senha > 0;";

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
        
        public function SelectSenha(){
			$sql = "SELECT * FROM tbl_senha WHERE ativo = 1 ORDER BY id_senha ASC LIMIT 1;";

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$senha = new Senha();

				$senha->id_senha = $rs['id_senha'];
				$senha->emergencia = $rs['emergencia'];
                $senha->senha = $rs['senha'];
                $senha->atual = $rs['atual'];
                $senha->ativo = $rs['ativo'];

                return $senha;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
	     }
    }

?>