<?php


/*LEMBRETE PARA WESLEY

ADICIONAR O CAMPO 'STATUS' NOS SCRIPTS

*/
    class Ambiente{
        public $id_ambiente;
        public $titulo;
        public $texto;
        public $texto2;
        public $texto3;
        public $texto4;
        public $texto5;
        public $texto6;
        public $imagem;
        public $imagem2;
        public $imagem3;
        public $imagem4;
        public $imagem5;
        public $imagem6;
        public $status;
        public $ativo;

        //cria um construtor
         public function __construct(){
            include_once('bd_class.php');
            include_once('auditoria_class.php');
        }

        /*insere o registro no DB*/
        public static function Insert($ambiente_dados){

            $sql1="UPDATE tbl_ambiente SET status = 0";

            $sql2 = "INSERT INTO tbl_ambiente(titulo,imagem,imagem2,imagem3,imagem4,imagem5,imagem6,texto,texto2,
            texto3,texto4,texto5,texto6,status,ativo)
            VALUES('".$ambiente_dados->titulo."','".$ambiente_dados->imagem."','".$ambiente_dados->imagem2."',
            '".$ambiente_dados->imagem3."','".$ambiente_dados->imagem4."','".$ambiente_dados->imagem5."',
            '".$ambiente_dados->imagem6."','".$ambiente_dados->texto."','".$ambiente_dados->texto2."','".$ambiente_dados->texto3."'
            ,'".$ambiente_dados->texto4."','".$ambiente_dados->texto5."','".$ambiente_dados->texto6."','1','1');";

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
                echo $sql;
			}
            //Fechar a conexão com o banco de dados
            $conex->Desconectar();
        }

        /*Lista todos os registro no BD*/

        public function SelectFHome(){
          //Query para selecionar a tabela contatos
          $sql="SELECT * FROM tbl_ambiente WHERE ativo = 1 ORDER BY id_ambiente DESC LIMIT 1;";

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
            $lista_ambiente[] = new Ambiente();

            // Guarda os dados no banco de dados em cada indice do objeto criado
            $lista_ambiente[$cont]->id_ambiente = $rs['id_ambiente'];
            $lista_ambiente[$cont]->titulo = $rs['titulo'];
            $lista_ambiente[$cont]->texto = $rs['texto'];
            $lista_ambiente[$cont]->texto2 = $rs['texto2'];
            $lista_ambiente[$cont]->texto3 = $rs['texto3'];
            $lista_ambiente[$cont]->texto4 = $rs['texto4'];
            $lista_ambiente[$cont]->texto5 = $rs['texto5'];
            $lista_ambiente[$cont]->texto6 = $rs['texto6'];
            $lista_ambiente[$cont]->imagem = $rs['imagem'];
            $lista_ambiente[$cont]->imagem2 = $rs['imagem2'];
            $lista_ambiente[$cont]->imagem3 = $rs['imagem3'];
            $lista_ambiente[$cont]->imagem4 = $rs['imagem4'];
            $lista_ambiente[$cont]->imagem5 = $rs['imagem5'];
            $lista_ambiente[$cont]->imagem6 = $rs['imagem6'];
            $lista_ambiente[$cont]->status = $rs['status'];
            $lista_ambiente[$cont]->ativo = $rs['ativo'];

            // Soma mais um no contador
            $cont+=1;
          }

          $conex::Desconectar();

          //Apenas retorna o $list_contatos se existir dados no banco de daos
          if (isset($lista_ambiente)) {
            # code...
            return $lista_ambiente;
          }
        }


  		public function Select(){
  			//Query para selecionar a tabela contatos
  			$sql="SELECT * FROM tbl_ambiente ORDER BY id_ambiente DESC;";

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
  				$lista_ambiente[] = new Ambiente();

  				// Guarda os dados no banco de dados em cada indice do objeto criado
  				$lista_ambiente[$cont]->id_ambiente = $rs['id_ambiente'];
  				$lista_ambiente[$cont]->titulo = $rs['titulo'];
          $lista_ambiente[$cont]->texto = $rs['texto'];
          $lista_ambiente[$cont]->texto2 = $rs['texto2'];
          $lista_ambiente[$cont]->texto3 = $rs['texto3'];
          $lista_ambiente[$cont]->texto4 = $rs['texto4'];
          $lista_ambiente[$cont]->texto5 = $rs['texto5'];
          $lista_ambiente[$cont]->texto6 = $rs['texto6'];
          $lista_ambiente[$cont]->imagem = $rs['imagem'];
          $lista_ambiente[$cont]->imagem2 = $rs['imagem2'];
          $lista_ambiente[$cont]->imagem3 = $rs['imagem3'];
          $lista_ambiente[$cont]->imagem4 = $rs['imagem4'];
          $lista_ambiente[$cont]->imagem5 = $rs['imagem5'];
          $lista_ambiente[$cont]->imagem6 = $rs['imagem6'];
          $lista_ambiente[$cont]->status = $rs['status'];
          $lista_ambiente[$cont]->ativo = $rs['ativo'];

  				// Soma mais um no contador
  				$cont+=1;
  			}

  			$conex::Desconectar();

  			//Apenas retorna o $list_contatos se existir dados no banco de daos
  			if (isset($lista_ambiente)) {
  				# code...
  				return $lista_ambiente;
  			}

  		}

        /*Busca um registro especifico no BD*/
		public function SelectById($ambiente){
			$sql = "SELECT * FROM tbl_ambiente WHERE ativo=1 AND id_ambiente =". $ambiente->id_ambiente;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela

				$ambiente = new Ambiente();

				$ambiente->id_ambiente = $rs['id_ambiente'];

        $ambiente->titulo = $rs['titulo'];
        $ambiente->texto = $rs['texto'];
        $ambiente->texto1 = $rs['texto2'];
        $ambiente->texto2 = $rs['texto3'];
        $ambiente->texto3 = $rs['texto4'];
        $ambiente->texto4 = $rs['texto5'];
        $ambiente->texto5 = $rs['texto6'];
        $ambiente->imagem = $rs['imagem'];
        $ambiente->imagem2 = $rs['imagem2'];
        $ambiente->imagem3 = $rs['imagem3'];
        $ambiente->imagem4 = $rs['imagem4'];
        $ambiente->imagem5 = $rs['imagem5'];
        $ambiente->imagem6 = $rs['imagem6'];
        $ambiente->status = $rs['status'];
        $ambiente->ativo = $rs['ativo'];


				return $ambiente;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

        /*Busca um registro especifico no BD*/
		public function SelectLast(){
			$sql = "SELECT * FROM tbl_ambiente WHERE ativo=1 AND status=1 ORDER BY id_ambiente DESC LIMIT 1";

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$ambiente = new Ambiente();

				$ambiente->id_ambiente = $rs['id_ambiente'];

        $ambiente->titulo = $rs['titulo'];
        $ambiente->texto = $rs['texto'];
        $ambiente->texto2 = $rs['texto2'];
        $ambiente->texto3 = $rs['texto3'];
        $ambiente->texto4 = $rs['texto4'];
        $ambiente->texto5 = $rs['texto5'];
        $ambiente->texto6 = $rs['texto6'];
        $ambiente->imagem = $rs['imagem'];
        $ambiente->imagem2 = $rs['imagem2'];
        $ambiente->imagem3 = $rs['imagem3'];
        $ambiente->imagem4 = $rs['imagem4'];
        $ambiente->imagem5 = $rs['imagem5'];
        $ambiente->imagem6 = $rs['imagem6'];
        $ambiente->status = $rs['status'];
        $ambiente->ativo = $rs['ativo'];



                return $ambiente;
                //return $endereco;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

    public function Update($ambiente){

      $sql = "UPDATE tbl_ambiente set titulo = '".$ambiente->titulo."',
      imagem = '".$ambiente->imagem. "',imagem2 = '".$ambiente->imagem2. "',imagem3 = '".$ambiente->imagem3. "',
      imagem4 = '".$ambiente->imagem4. "',imagem5 = '".$ambiente->imagem5. "',imagem6 = '".$ambiente->imagem6. "',
       texto = '".$ambiente->texto. "', texto2 = '".$ambiente->texto2. "', texto3 = '".$ambiente->texto3. "'
       , texto4 = '".$ambiente->texto4. "', texto5 = '".$ambiente->texto5. "', texto6 = '".$ambiente->texto6. "'
       WHERE id_ambiente =".$ambiente->id_ambiente;


      $sql = "UPDATE tbl_ambiente set titulo = '".$ambiente->titulo."',imagem = '".$ambiente->imagem. "',
      imagem2 = '".$ambiente->imagem2. "',imagem3 = '".$ambiente->imagem3. "',imagem4 = '".$ambiente->imagem4. "',
      imagem5 = '".$ambiente->imagem5. "',imagem6 = '".$ambiente->imagem6. "', texto = '".$ambiente->texto. "'
      , texto2 = '".$ambiente->texto2. "', texto3 = '".$ambiente->texto3. "', texto4 = '".$ambiente->texto4. "'
      , texto5 = '".$ambiente->texto5. "', texto6 = '".$ambiente->texto6. "'
      WHERE id_ambiente =".$ambiente->id_ambiente;



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
        public function DesativarPorId($ambiente){
            $sql1 = "UPDATE tbl_ambiente set status=0";
            $sql2 = "UPDATE tbl_ambiente set status=1 WHERE id_ambiente=".$ambiente->id_ambiente;

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
        public function Deletar($ambiente){
            $sql="UPDATE tbl_ambiente set ativo=0 WHERE id_ambiente=".$ambiente->id_ambiente;

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
