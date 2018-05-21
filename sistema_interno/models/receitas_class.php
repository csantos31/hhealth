<?php

    class Receita{

      public $id_paciente_internacao;
      public $id_paciente;
      public $id_funcionario;
      public $id_remedio;
      public $idReceita;
      public $id_unidade;
      public $data;
      public $tipo;

        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}

        /*insere o registro no DB*/
		public static function Insert($receita_dados){
			$sql = "INSERT INTO tbl_receita_medica(id_paciente,id_funcionario,id_remedio,data,tipo)
			VALUES ('".$receita_dados->id_paciente."',
			'".$receita_dados->id_funcionario."','".$receita_dados->id_remedio."','".$receita_dados->data."','".$receita_dados->tipo."'
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
			$sql="SELECT * FROM tbl_receita_medica;";

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
				$lista_receita[] = new Receita();

				// Guarda os dados no banco de dados em cada indice do objeto criado
        $lista_receita[$cont]->id_receita_medica = $rs['id_receita_medica'];
        $lista_receita[$cont]->id_paciente = $rs['id_paciente'];
        $lista_receita[$cont]->id_funcionario = $rs['id_funcionario'];
        $lista_receita[$cont]->id_remedio = $rs['id_remedio'];
        $lista_receita[$cont]->data = $rs['data'];
        $lista_receita[$cont]->tipo = $rs['tipo'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_receita)) {
				# code...
				return $lista_receita;
			}

		}

        /*Busca um registro especifico no BD*/
		public function SelectById($receita){
			$sql = "SELECT * FROM tbl_receita_medica WHERE id_receita_medica =". $receita->idReceita;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$receita = new Internacao();

				// Guarda os dados no banco de dados em cada indice do objeto criado
        $receita->id_receita_medica = $rs['id_receita_medica'];
        $receita->id_paciente = $rs['id_paciente'];
        $receita->id_funcionario = $rs['id_funcionario'];
        $receita->id_remedio = $rs['id_remedio'];
        $receita->data = $rs['data'];
        $receita->tipo = $rs['tipo'];

				return $receita;

			}else {
                echo $sql;
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

    public function Update($receita_dados){
			$sql = "UPDATE tbl_receita_medica set id_paciente = '".$receita_dados->id_paciente."', id_remedio = '".$receita_dados->id_remedio. "',
      data='".$receita_dados->data."',hora='".$receita_dados->tipo."' WHERE id_paciente_internacao =".$receita_dados->idReceita;

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

			$sql = "DELETE FROM tbl_receita_medica WHERE id_receita_medica = ". $receita_dados->idReceita;

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
