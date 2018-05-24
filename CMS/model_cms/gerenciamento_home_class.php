<?php


/*LEMBRETE PARA WESLEY

ADICIONAR O CAMPO 'STATUS' NOS SCRIPTS

*/
    class Home{
        public $id_home;
        public $slide1;
        public $slide2;
        public $slide3;
        public $frase;
        public $status;

        //cria um construtor
         public function __construct(){
            include_once('bd_class.php');
            include_once('auditoria_class.php');
        }

        /*insere o registro no DB*/
        public static function Insert($home_dados){

            $sql1="UPDATE tbl_home SET status = 0";

            $sql2 = "INSERT INTO tbl_home(slide1,slide2,slide3,frase,status,ativo)
            VALUES('".$home_dados->slide1."','".$home_dados->slide2."','".$home_dados->slide3."','".$home_dados->frase."','1','1');";

            //Instancia o banco e cria uma variavel
            $conex = new Mysql_db();

            /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
            $PDO_conex = $conex->Conectar();

            //Excutar o script no banco de dados
            if($PDO_conex->query($sql1) &&$PDO_conex->query($sql2)){

                $auditoria = new Auditoria();

                $auditoria::Insert($auditoria);

                echo "<script>location.reload();</script>";

			}else {
				//Mensagem de erro
				echo "Error inserir no Banco de Dados";
                echo $sql1;
                echo $sql2;
			}
            //Fechar a conexão com o banco de dados
            $conex->Desconectar();
        }

        /*Lista todos os registro no BD*/
		public function Select(){
			//Query para selecionar a tabela contatos
			$sql="SELECT * FROM tbl_home  WHERE ativo = 1 ORDER BY id_home;";

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
				$lista_home[] = new Home();

				// Guarda os dados no banco de dados em cada indice do objeto criado
				$lista_home[$cont]->id_home = $rs['id_home'];
				$lista_home[$cont]->slide1 = $rs['slide1'];
				$lista_home[$cont]->slide2 = $rs['slide2'];
                $lista_home[$cont]->slide3 = $rs['slide3'];
                $lista_home[$cont]->frase = $rs['frase'];
                $lista_home[$cont]->status = $rs['status'];
                $lista_home[$cont]->ativo = $rs['ativo'];

				// Soma mais um no contador
				$cont+=1;
			}

			$conex::Desconectar();

			//Apenas retorna o $list_contatos se existir dados no banco de daos
			if (isset($lista_home)) {
				# code...
				return $lista_home;
			}

		}

        /*Busca um registro especifico no BD*/
		public function SelectById($home){
			$sql = "SELECT * FROM tbl_home WHERE id_home =". $home->id_home;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$home = new Home();

				$home->id_nivel = $rs['id_home'];
				$home->slide1 = $rs['slide1'];
				$home->slide2 = $rs['slide2'];
                $home->slide3 = $rs['slide3'];
                $home->frase = $rs['frase'];
                $home->status = $rs['status'];
                $home->ativo = $rs['ativo'];

				return $home;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        public function Update($home){
			$sql = "UPDATE tbl_home set slide1 = '".$home->slide1."', slide2 = '".$home->slide2. "',slide3 = '".$home->slide3. "',frase = '".$home->frase. "' WHERE id_home =".$home->id_home;


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
        public function DesativarPorId($home){
            $sql1 = "UPDATE tbl_home set status=0";
            $sql2 = "UPDATE tbl_home set status=1 WHERE id_home=".$home->id_home;

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
            $sql="UPDATE tbl_home set ativo=0 WHERE id_home=".$home->id_home;

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
