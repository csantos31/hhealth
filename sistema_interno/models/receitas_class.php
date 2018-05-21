<?php

    class Receita{
        public $id_paciente_internacao;
		public $id_paciente;
		public $id_funcionario;
        public $id_quarto;
        public $id_unidade;
        public $data;
        public $hora;

        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}

        /*insere o registro no DB*/
		public static function Insert($receita_dados){
			$sql = "INSERT INTO tbl_paciente_internacao(id_paciente,id_funcionario,id_quarto,id_unidade,data,hora)
			VALUES ('".$receita_dados->id_paciente."',
			'".$receita_dados->id_funcionario."','".$receita_dados->id_quarto."','".$receita_dados->id_unidade."','".$receita_dados->data."','".$receita_dados->hora."'
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
			$sql="SELECT * FROM tbl_paciente_internacao;";

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
				$lista_internacao[] = new Receita();

				// Guarda os dados no banco de dados em cada indice do objeto criado
                $lista_internacao[$cont]->id_paciente_internacao = $rs['id_paciente_internacao'];
                $lista_internacao[$cont]->id_paciente = $rs['id_paciente'];
                $lista_internacao[$cont]->id_funcionario = $rs['id_funcionario'];
				$lista_internacao[$cont]->id_quarto = $rs['id_quarto'];
				$lista_internacao[$cont]->id_unidade = $rs['id_unidade'];
				$lista_internacao[$cont]->data = $rs['data'];
                $lista_internacao[$cont]->hora = $rs['hora'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_internacao)) {
				# code...
				return $lista_internacao;
			}

		}

        /*Busca um registro especifico no BD*/
		public function SelectById($receita_dados){
			$sql = "SELECT * FROM tbl_paciente_internacao WHERE id_paciente_internacao =". $quarto->id_quarto;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$internacao = new Internacao();

				// Guarda os dados no banco de dados em cada indice do objeto criado
                $internacao->id_paciente_internacao = $rs['id_paciente_internacao'];
                $internacao->id_paciente = $rs['id_paciente'];
                $internacao->id_funcionario = $rs['id_funcionario'];
				$internacao->id_quarto = $rs['id_quarto'];
				$internacao->id_unidade = $rs['id_unidade'];
				$internacao->data = $rs['data'];
                $internacao->hora = $rs['hora'];

				return $internacao;

			}else {
                echo $sql;
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        public function Update($receita_dados){
			$sql = "UPDATE tbl_paciente_internacao set id_paciente = '".$receita_dados->id_paciente."', id_quarto = '".$receita_dados->id_quarto. "',id_unidade='".$receita_dados->id_unidade."',data='".$receita_dados->data."',hora='".$receita_dados->hora."' WHERE id_paciente_internacao =".$receita_dados->id_paciente_internacao;

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
				echo "Error atualizar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        /*Delete o registro no BD*/
		public function Delete($receita_dados){

			$sql = "DELETE FROM tbl_paciente_internacao WHERE id_paciente_internacao = ". $receita_dados->id_paciente_internacao;

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
				echo "Error ao deletar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();

		}




    }


?>
