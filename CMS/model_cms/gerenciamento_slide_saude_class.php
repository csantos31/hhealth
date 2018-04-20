<?php


/*LEMBRETE PARA WESLEY

ADICIONAR O CAMPO 'STATUS' NOS SCRIPTS 

*/
    class Slide_saude{
        public $id_slide_saude;
        public $slide;
        public $status;
        public $ativo;
        
        //cria um construtor
        public function __construct(){
            include_once('bd_class.php');
        }
        
        /*insere o registro no DB*/
        public static function Insert($slide_dados){
            
            //$sql1="UPDATE tbl_home SET status = 0";
            
            $sql = "INSERT INTO tbl_slide_saude(imagem,status,ativo)
            VALUES('".$slide_dados->slide."','1','1');";
            
            //Instancia o banco e cria uma variavel
            $conex = new Mysql_db();
            
            /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
            $PDO_conex = $conex->Conectar();
            
            //Excutar o script no banco de dados
            if($PDO_conex->query($sql)){
                echo "<script>location.reload();</script>";
                
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
			$sql="SELECT * FROM tbl_slide_saude ORDER BY id_slide_saude DESC;";

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
				$lista_slide_saude[] = new Slide_saude();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_slide_saude[$cont]->id_slide_saude = $rs['id_slide_saude'];
				$lista_slide_saude[$cont]->slide = $rs['imagem'];
                $lista_slide_saude[$cont]->status = $rs['status'];
                $lista_slide_saude[$cont]->ativo = $rs['ativo'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_slide_saude)) {
				# code...
				return $lista_slide_saude;
			}

		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($dados_saude){
			$sql = "SELECT * FROM tbl_slide_saude WHERE id_slide_saude =". $dados_saude->id_slide_saude;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela
              
                
				$slide_saude = new Slide_saude();

				$slide_saude->id_slide_saude = $rs['id_slide_saude'];
				$slide_saude->slide = $rs['imagem'];
                $slide_saude->status = $rs['status'];
                $slide_saude->ativo = $rs['ativo'];
				
				return $slide_saude;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        public function Update($dados_saude){
			$sql = "UPDATE tbl_slide_saude set imagem = '".$dados_saude->slide."' WHERE id_slide_saude =".$dados_saude->id_slide_saude;
		

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
        /*Ativar o registro no BD*/
        public function AtivarPorId($dados_saude){
            //$sql1 = "UPDATE tbl_home set status=0";
            $sql = "UPDATE tbl_slide_saude set status=1 WHERE id_slide_saude=".$dados_saude->id_slide_saude;
            
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
				//echo $sql;
                echo "Error atualizar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
            
        }
        
        /*Desativar o registro no BD*/
        public function DesativarPorId($dados_saude){
            //$sql1 = "UPDATE tbl_home set status=0";
            $sql = "UPDATE tbl_slide_saude set status=0 WHERE id_slide_saude=".$dados_saude->id_slide_saude;
            
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
				//echo $sql;
                echo "Error atualizar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
            
        }
        
        
        /*DELETAR*/
        public function Deletar($dados_saude){
            $sql="UPDATE tbl_slide_saude set ativo=0,status=0 WHERE id_slide_saude=".$dados_saude->id_slide_saude;
        
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