<?php


/*LEMBRETE PARA WESLEY

ADICIONAR O CAMPO 'STATUS' NOS SCRIPTS 

*/
    class Sobre{
        public $id_sobre;
        public $missao;
        public $visao;
        public $valores;
        public $sobre;
        public $imagem1;
        public $imagem2;
        public $imagem3;
        public $status;
        public $ativo;
        
        //cria um construtor
        public function __construct(){
            include_once('bd_class.php');
        }
        
        /*insere o registro no DB*/
        public static function Insert($sobre_dados){
            
            $sql1="UPDATE tbl_sobre SET status = 0";
            
            $sql2 = "INSERT INTO tbl_sobre(sobre,missao,visao,valores,imagem1,imagem2,imagem3,status,ativo)
            VALUES('".$sobre_dados->sobre."','".$sobre_dados->missao."','".$sobre_dados->visao."','".$sobre_dados->valores."','".$sobre_dados->imagem1."','".$sobre_dados->imagem2."','".$sobre_dados->imagem3."','1','1');";
            
            //Instancia o banco e cria uma variavel
            $conex = new Mysql_db();
            
            /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
            $PDO_conex = $conex->Conectar();
            
            //Excutar o script no banco de dados
            if($PDO_conex->query($sql1) &&$PDO_conex->query($sql2)){
                echo "<script>location.reload();</script>";
                
			}else {
				//Mensagem de erro
				echo "Error inserir no Banco de Dados";
                echo $sql2;
			}
            //Fechar a conexão com o banco de dados
            $conex->Desconectar();
        }
        
        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_sobre ORDER BY id_sobre DESC;";

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
				#Cria um array de objetos na classe Sobre
				$lista_sobre[] = new Sobre();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_sobre[$cont]->id_sobre = $rs['id_sobre'];
				$lista_sobre[$cont]->sobre = $rs['sobre'];
				$lista_sobre[$cont]->missao = $rs['missao'];
                $lista_sobre[$cont]->visao = $rs['visao'];
                $lista_sobre[$cont]->valores = $rs['valores'];
                $lista_sobre[$cont]->imagem1 = $rs['imagem1'];
                $lista_sobre[$cont]->imagem2 = $rs['imagem2'];
                $lista_sobre[$cont]->imagem3 = $rs['imagem3'];
                $lista_sobre[$cont]->status = $rs['status'];
                $lista_sobre[$cont]->ativo = $rs['ativo'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_sobre)) {
				# code...
				return $lista_sobre;
			}

		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($sobre){
			$sql = "SELECT * FROM tbl_sobre WHERE id_sobre =". $sobre->id_sobre;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela
              
                
				$sobre = new Sobre();

				$sobre->id_sobre = $rs['id_sobre'];
                $sobre->sobre = $rs['sobre'];
                $sobre->missao = $rs['missao'];
				$sobre->visao = $rs['visao'];
				$sobre->valores = $rs['valores'];
                $sobre->imagem1 = $rs['imagem1'];
                $sobre->imagem2 = $rs['imagem2'];
                $sobre->imagem3 = $rs['imagem3'];
                $sobre->status = $rs['status'];
                $sobre->ativo = $rs['ativo'];
				
				return $sobre;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        public function Update($sobre){
			$sql = "UPDATE tbl_sobre set sobre = '".$sobre->sobre."', missao = '".$sobre->missao. "',visao = '".$sobre->visao. "',valores = '".$sobre->valores. "',imagem1 = '".$sobre->imagem1. "',imagem2 = '".$sobre->imagem2. "',imagem3 = '".$sobre->imagem3. "' WHERE id_sobre =".$sobre->id_sobre;
		

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
        public function DesativarPorId($sobre){
            $sql1 = "UPDATE tbl_sobre set status=0";
            $sql2 = "UPDATE tbl_sobre set status=1 WHERE id_sobre=".$sobre->id_sobre;
            
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
        public function Deletar($sobre){
            $sql="UPDATE tbl_sobre set ativo=0 WHERE id_sobre=".$sobre->id_sobre;
        
            //Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();
        
            //Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				echo "<script>confirm('Deseja realmente excluir?');</script>";
                echo "<script>location.reload();</script>";
                
			}else {
				//Mensagem de erro
				echo "Error atualizar no Banco de Dados";
                echo $sql;
			}
            
            //Fecha a conexão com o banco de dados
			$conex->Desconectar();
        }
        
        
		
        
    }





?>