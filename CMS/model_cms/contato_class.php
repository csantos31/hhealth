<?php


/*LEMBRETE PARA WESLEY

ADICIONAR O CAMPO 'STATUS' NOS SCRIPTS 

*/
    class Contato{
        public $id_fale_conosco;
        public $nome;
        public $email;
        public $telefone;
        public $celular;
        public $assunto;
        public $mensagem;
        public $ativo;
        
        //cria um construtor
        public function __construct(){
            include_once('bd_class.php');
        }
        
        
        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_fale_conosco ORDER BY id_fale_conosco DESC; WHERE ativo = 1";

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
				#Cria um array de objetos na classe contato
				$lista_contatos[] = new Contato();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_contatos[$cont]->id_fale_conosco = $rs['id_fale_conosco'];
				$lista_contatos[$cont]->nome = $rs['nome'];
				$lista_contatos[$cont]->email = $rs['email'];
                $lista_contatos[$cont]->telefone = $rs['telefone'];
                $lista_contatos[$cont]->celular = $rs['celular'];
                $lista_contatos[$cont]->assunto = $rs['assunto'];
                $lista_contatos[$cont]->mensagem = $rs['mensagem'];
                $lista_contatos[$cont]->ativo = $rs['ativo'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_contatos)) {
				# code...
				return $lista_contatos;
			}

		}
        
        /*Busca um registro especifico no BD*/
		public function SelectById($contato){
			$sql = "SELECT * FROM tbl_fale_conosco WHERE id_fale_conosco =". $contato->id_fale_conosco;
            
			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela
              
                
				$contato = new Contato();

				$contato->id_fale_conosco = $rs['id_fale_conosco'];
				$contato->nome = $rs['nome'];
				$contato->email = $rs['email'];
                $contato->telefone = $rs['telefone'];
                $contato->celular = $rs['celular'];
                $contato->assunto = $rs['assunto'];
                $contato->mensagem = $rs['mensagem'];
				
				return $contatos;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}
        
        /*DELETAR*/
        public function Deletar($contato){
            $sql="UPDATE tbl_fale_conosco set ativo=0 WHERE id_fale_conosco=".$contato->id_fale_conosco;
        
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