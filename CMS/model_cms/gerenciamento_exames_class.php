<?php

/*LEMBRETE PARA WESLEY

ADICIONAR O CAMPO 'STATUS' NOS SCRIPTS

*/
    class Exame{
        public $id_exame;
        public $titulo;
        public $texto_descricao;
        public $texto_procedimento;
        public $status;
        public $ativo;

        //cria um construtor
        public function __construct(){
            include_once('bd_class.php');
        }

        /*insere o registro no DB*/
        public static function Insert($exames_dados){

            $sql1="UPDATE tbl_ambiente SET status = 0";

            $sql2 = "INSERT INTO tbl_exame(titulo,texto,procedimento,status,ativo)
            VALUES('".$exames_dados->titulo."','".$exames_dados->texto_descricao."','".$exames_dados->texto_procedimento."','1','1');";


            //Instancia o banco e cria uma variavel
            $conex = new Mysql_db();

            /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
            $PDO_conex = $conex->Conectar();

            //Excutar o script no banco de dados
            if($PDO_conex->query($sql1) && $PDO_conex->query($sql2)){
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
  			$sql="SELECT * FROM tbl_exame WHERE ativo=1 ORDER BY id_exame DESC;";

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
  				$lista_exame[] = new Exame();

  				// Guarda os dados no banco de dados em cada indice do objeto criado
  				$lista_exame[$cont]->id_exame = $rs['id_exame'];
  				$lista_exame[$cont]->titulo = $rs['titulo'];
  				$lista_exame[$cont]->texto_descricao = $rs['texto'];
          $lista_exame[$cont]->texto_procedimento = $rs['procedimento'];
          $lista_exame[$cont]->status = $rs['status'];
          $lista_exame[$cont]->ativo = $rs['ativo'];

  				// Soma mais um no contador
  				$cont+=1;
  			}

  			$conex::Desconectar();

  			//Apenas retorna o $list_contatos se existir dados no banco de daos
  			if (isset($lista_exame)) {
  				# code...
  				return $lista_exame;
  			}
    }
    /*Busca um registro especifico no BD*/
    public function SelectById($exame){
      $sql = "SELECT * FROM tbl_exame WHERE id_exame =". $exame->id_exame;

      //Instancio o banco e crio uma variavel
      $conex = new Mysql_db();

      /*Chama o método para conectar no banco de dados e guarda o retorno da conexao
      na variavel que $PDO_conex*/
      $PDO_conex = $conex->Conectar();

      $select = $PDO_conex->query($sql);

      //Executa o script no banco de dados
      if($rs = $select->fetch(PDO::FETCH_ASSOC)){
        //Se der true redireciona a tela
        $exame = new Exame();

        $exame->id_exame = $rs['id_exame'];
        $exame->titulo = $rs['titulo'];
        $exame->texto = $rs['texto'];
        $exame->procedimento = $rs['procedimento'];
        $exame->status = $rs['status'];
        $exame->ativo = $rs['ativo'];

        return $exame;

      }else {
        //Mensagem de erro
        echo "Error ao selecionar no Banco de Dados";
      }

      //Fecha a conexão com o banco de dados
      $conex->Desconectar();
    }

    public function Update($exame){
      $sql = "UPDATE tbl_exame set titulo='".$exame->titulo."', texto='".$exame->texto_descricao. "', procedimento='".$exame->texto_procedimento."'
      WHERE id_exame =".$exame->id_exame;


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
        echo "asddas";
      }

      //Fecha a conexão com o banco de dados
      $conex->Desconectar();
    }

    public function AtivarPorId($exames){
      //  $sql1 = "UPDATE tbl_exame set status=0";
        $sql2 = "UPDATE tbl_exame set status=1 WHERE id_exame=".$exames->id_exame;

        //Instancio o banco e crio uma variavel
        $conex = new Mysql_db();

        /*Chama o método para conectar no banco de dados e guarda o retorno da conexao
        na variavel que $PDO_conex*/
        $PDO_conex = $conex->Conectar();

        //Executa o script no banco de dados
        if($PDO_conex->query($sql2)){
          //Se der true redireciona a tela
          echo "<script>location.reload();</script>";

        }else {
          //Mensagem de erro
          echo "Error atualizar no Banco de Dados";
        }

        //Fecha a conexão com o banco de dados
        $conex->Desconectar();

    }

    public function DesativarPorId($exames){
      //  $sql1 = "UPDATE tbl_exame set status=0";
        $sql2 = "UPDATE tbl_exame set status=0 WHERE id_exame=".$exames->id_exame;

        //Instancio o banco e crio uma variavel
        $conex = new Mysql_db();

        /*Chama o método para conectar no banco de dados e guarda o retorno da conexao
        na variavel que $PDO_conex*/
        $PDO_conex = $conex->Conectar();

        //Executa o script no banco de dados
        if($PDO_conex->query($sql2)){
          //Se der true redireciona a tela
          echo "<script>location.reload();</script>";

        }else {
          //Mensagem de erro
          echo "Error atualizar no Banco de Dados";
        }

        //Fecha a conexão com o banco de dados
        $conex->Desconectar();

    }

    public function Deletar($exames){
        $sql="UPDATE tbl_exame set ativo=0 WHERE id_exame=".$exames->id_exame;
        echo $sql;
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
