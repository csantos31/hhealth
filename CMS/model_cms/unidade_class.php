<?php


/*LEMBRETE PARA WESLEY

ADICIONAR O CAMPO 'STATUS' NOS SCRIPTS 

*/
    class Unidade{
        public $id_unidade;
        public $imagem;
        public $ativo;
        public $status;
        
        //cria um construtor
        public function __construct(){
            include_once('bd_class.php');
        }
        
        /*insere o registro no DB*/
        public static function Insert($unidade_dados){
            
            //$sql1="UPDATE tbl_home SET status = 0";
            
            $sql = "INSERT INTO tbl_unidade(id_endereco,imagem,nome_unidade,status,ativo)
            VALUES('".$unidade_dados->id_endereco."','".$unidade_dados->imagem."','".$unidade_dados->nome_unidade."','1','1');";
            
            //Instancia o banco e cria uma variavel
            $conex = new Mysql_db();
            
            /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
            $PDO_conex = $conex->Conectar();
            
            //Excutar o script no banco de dados
            if($PDO_conex->query($sql)){
                echo "<script>location.reload();</script>";
                //echo $sql;
                
			}else {
				//Mensagem de erro
				echo "Error inserir no Banco de Dados";
                echo $sql;
			}
            //Fechar a conexão com o banco de dados
            $conex->Desconectar();
        }
        
        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_unidade ORDER BY id_unidade DESC;";

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
				$lista_unidade[] = new Unidade();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_unidade[$cont]->id_unidade = $rs['id_unidade'];
				$lista_unidade[$cont]->imagem = $rs['imagem'];
				$lista_unidade[$cont]->nome_unidade = $rs['nome_unidade'];
                $lista_unidade[$cont]->status = $rs['status'];
                $lista_unidade[$cont]->ativo = $rs['ativo'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de dados
			if (isset($lista_unidade)) {
				# code...
				return $lista_unidade;
			}

		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($dados_unidade){
			$sql = "SELECT * FROM tbl_unidade WHERE id_unidade =". $dados_unidade->id_unidade;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela
              
                
				$unidade = new Unidade();

				$unidade->id_unidade = $rs['id_unidade'];
				$unidade->imagem = $rs['imagem'];
				$unidade->nome_unidade = $rs['nome_unidade'];
                $unidade->status = $rs['status'];
                $unidade->ativo = $rs['ativo'];

				
				return $unidade;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        public function Update($dados_unidade){
			$sql = "UPDATE tbl_unidade set imagem = '".$dados_unidade->imagem."', nome_unidade = '".$dados_unidade->nome_unidade."' WHERE id_home =".$dados_unidade->id_unidade;
		

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
        
        /*Desativar o registro no BD*/
        public function DesativarPorId($dados_unidade){
            $sql1 = "UPDATE tbl_unidade set status=0";
            $sql2 = "UPDATE tbl_unidade set status=1 WHERE id_unidade=".$dados_unidade->id_unidade;
            
            //Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql1)&&$PDO_conex->query($sql2)){
				//Se der true redireciona a tela
				echo "<script>location.reload();</script>";
                
			}else {
				//Mensagem de erro
				echo "Error atualizar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
            
        }
        
        
        /*DELETAR*/
        public function Deletar($home){
            $sql="UPDATE tbl_unidade set ativo=0 WHERE id_unidade=".$home->id_home;
        
            //Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();
        
            //Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				//echo "<script>confirm('Deseja realmente excluir?');</script>";
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