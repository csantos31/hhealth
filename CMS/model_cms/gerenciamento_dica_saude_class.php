<?php


/*LEMBRETE PARA WESLEY

ADICIONAR O CAMPO 'STATUS' NOS SCRIPTS 

*/
    class Dica_saude{
        public $id_dica_saude;
        public $titulo;
        public $descricao;
        public $imagem;
        public $status;
        public $ativo;
        
        //cria um construtor
         public function __construct(){
            include_once('bd_class.php');
            include_once('auditoria_class.php');
        }
        
        /*insere o registro no DB*/
        public static function Insert($dados_saude){
            
            //$sql1="UPDATE tbl_home SET status = 0";
            
            $sql = "INSERT INTO tbl_dica_saude(titulo,descricao,imagem,status,ativo)
            VALUES('".$dados_saude->titulo."','".$dados_saude->descricao."','".$dados_saude->imagem."','1','1');";
            
            //Instancia o banco e cria uma variavel
            $conex = new Mysql_db();
            
            /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
            $PDO_conex = $conex->Conectar();
            
            //Excutar o script no banco de dados
            if($PDO_conex->query($sql)){
                
                $auditoria = new Auditoria();
                
                $auditoria::Insert($auditoria);
                
                
                echo "<script>location.reload();</script>";
                echo $sql;
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
			$sql="SELECT * FROM tbl_dica_saude ORDER BY id_dica_saude DESC;";

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
				$lista_dica_saude[] = new Dica_saude();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_dica_saude[$cont]->id_dica_saude = $rs['id_dica_saude'];
                $lista_dica_saude[$cont]->titulo = $rs['titulo'];
                $lista_dica_saude[$cont]->descricao = $rs['descricao'];
				$lista_dica_saude[$cont]->imagem = $rs['imagem'];
                $lista_dica_saude[$cont]->status = $rs['status'];
                $lista_dica_saude[$cont]->ativo = $rs['ativo'];

				// Soma mais um no contador
				$cont+=1;
			}

			

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_dica_saude)) {
				# code...
				return $lista_dica_saude;
			}
            $conex::Desconectar();
		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($dados_saude){
			$sql = "SELECT * FROM tbl_dica_saude WHERE id_dica_saude =". $dados_saude->id_dica_saude;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela
              
                
				$dica_saude = new Dica_saude();

				$dica_saude->id_dica_saude = $rs['id_dica_saude'];
                $dica_saude->titulo = $rs['titulo'];
                $dica_saude->descricao = $rs['descricao'];
				$dica_saude->imagem = $rs['imagem'];
                $dica_saude->status = $rs['status'];
                $dica_saude->ativo = $rs['ativo'];
				
				return $dica_saude;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        public function Update($dados_saude){
			$sql = "UPDATE tbl_dica_saude set titulo='".$dados_saude->titulo."',descricao='".$dados_saude->descricao."',imagem = '".$dados_saude->imagem."' WHERE id_dica_saude =".$dados_saude->id_dica_saude;
		

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
        public function DesativarPorId($dados_saude){
            //$sql1 = "UPDATE tbl_home set status=0";
            $sql = "UPDATE tbl_dica_saude set status=0 WHERE id_dica_saude=".$dados_saude->id_dica_saude;
            
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
				//echo "Error atualizar no Banco de Dados";
                echo $sql;
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
            
        }
        
        /*Desativar o registro no BD*/
        public function AtivarPorId($dados_saude){
            //$sql1 = "UPDATE tbl_home set status=0";
            $sql = "UPDATE tbl_dica_saude set status=1 WHERE id_dica_saude=".$dados_saude->id_dica_saude;
            
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
//				/echo "Error atualizar no Banco de Dados";
                echo $sql;
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
            
        }
        
        
        /*DELETAR*/
        public function Deletar($dados_saude){
            $sql="UPDATE tbl_dica_saude set ativo=0, status=0 WHERE id_dica_saude=".$dados_saude->id_dica_saude;
        
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