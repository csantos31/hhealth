<?php 

    class Nivel{
        public $id_nivel;
		public $nome;
		public $descricao;
        
        //cria um construtor
		public function __construct(){
            include_once('bd_class.php');
		}
        
        /*insere o registro no DB*/
		public static function Insert($nivel_dados){
			$sql = "INSERT INTO tbl_nivel_acesso(nome,descricao)
			VALUES ('".$nivel_dados->nome."',
			'".$nivel_dados->descricao."'
			);";
            
            echo $sql;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				//header('location: index.php');
                echo "<script>location.reload();</script>";
			}else {
				//Mensagem de erro
				echo "Error inserir no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();

		}
        
        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_nivel_acesso ORDER BY id_nivel DESC;";

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
				$lista_niveis[] = new Nivel();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_niveis[$cont]->id_nivel = $rs['id_nivel'];
				$lista_niveis[$cont]->nome = $rs['nome'];
				$lista_niveis[$cont]->descricao = $rs['descricao'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_niveis)) {
				# code...
				return $lista_niveis;
			}

		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($nivel){
			$sql = "SELECT * FROM tbl_nivel_acesso WHERE id_nivel =". $nivel->id_nivel;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela
              
                
				$nivel = new Nivel();

				$nivel->id_nivel = $rs['id_nivel'];
				$nivel->nome = $rs['nome'];
				$nivel->descricao = $rs['descricao'];
				
				return $nivel;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        public function Update($nivel){
			$sql = "UPDATE tbl_nivel_acesso set nome = '".$nivel->nome."', descricao = '".$nivel->descricao. "' WHERE id_nivel =".$nivel->id_nivel;
		

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
        
        /*Delete o registro no BD*/
		public function Delete($nivel_dados){

			$sql = "DELETE FROM tbl_nivel_acesso WHERE id_nivel =". $nivel_dados->id_nivel;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				//require('views_cms/nivel_usuario.php');
                echo("<script>location.reload();</script>");
                //echo("funcionou");
			}else {
				//Mensagem de erro
				echo "Error ao deletar no Banco de Dados";
                echo($nivel_dados->id_nivel);
                echo($sql);
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();

		}
        
        
    }


?>