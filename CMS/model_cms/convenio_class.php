<?php

      class Convenio
      {

            public $id_convenio;
            public $titulo;
            public $texto;
            public $imagem;
            public $status_imagem;
            public $ativo;

            // Cria um construtor
            function __construct()
            {
                  # code...
                  include_once('bd_class.php');
            }

            public static function Insert($convenio_dados){

                  //$sql1="UPDATE tbl_convenio SET status=0";

                  $sql2="INSERT tbl_convenio(titulo, texto, imagem, status_imagem, ativo)
                  VALUES('".$convenio_dados->titulo."', '".$convenio_dados->texto."', '".$convenio_dados->imagem."', 1, 1);";
                  // echo ($sql2);


                  //Instancia o banco e cria uma variavel
                  $conex = new Mysql_db();

                  /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
                  $PDO_conex = $conex->Conectar();

                  //Excutar o script no banco de dados
                  if($PDO_conex->query($sql2)){
                      echo "<script>location.reload();</script>";

      			}else {
      				//Mensagem de erro
      				echo "Error inserir no Banco de Dados";
                      echo $sql2;
      			}
                  //Fechar a conexão com o banco de dados
                  $conex->Desconectar();
            }

            // Lista toos os registros do banco de dados
            public function Select(){

                  //Query para selecionar a tabela contatos
                  $sql1="SELECT * FROM tbl_convenio WHERE ativo=1 ORDER BY titulo;";

                  //Instancio o banco e cria uma variavel
                  $conex = new Mysql_db();

                  /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
                  $PDO_conex = $conex->Conectar();

                  //Executa o select no banco de dados e guarda o retorno na variavel select
                  $select = $PDO_conex->query($sql1);

                  // contador
                  $cont = 0;

                  //Estrutura de repetição para pegar dados
                  while ($rs = $select->fetch(PDO::FETCH_ASSOC)){

                        // Cria um array de dados na classe $list_contatos
                        $list_convenios[] = new Convenio();

                        // Guarda os dados vindos do banco no indice de objetos criado
                        $list_convenios[$cont]->id_convenio = $rs['id_convenio'];
                        $list_convenios[$cont]->titulo = $rs['titulo'];
                        $list_convenios[$cont]->texto = $rs['texto'];
                        $list_convenios[$cont]->imagem = $rs['imagem'];
                        $list_convenios[$cont]->status_imagem = $rs['status_imagem'];
                        $list_convenios[$cont]->status_imagem = $rs['ativo'];


                        // Soma mais um no contador
				                $cont+=1;

                        //Fechar a conexão com o banco de dados
                        $conex->Desconectar();

                        //Apenas retorna o $list_contatos se existir dados no banco de daos

                  }
                  if (isset($list_convenios)) {
                        # code...
                        return $list_convenios;
                  }
            }

            public function SelectById($convenio){

                  $sql1="SELECT tbl_convenio WHERE id_convenio=".$convenio->id_convenio;

                  //Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
                  $PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql1);

                  //Executa o script no banco de dados
                  if ($rs = $select->fetch(PDO::FETCH_ASSOC)) {
                        //Se der true redireciona a tela
                        # code...

                        //Instancia a classe convenio
                        $convenio = new Convenio();

                        // Pega os dados do selectbyid e coloca na classe
                        $convenio->id_convenio = $rs['id_convenio'];
                        $convenio->titulo = $rs['titulo'];
                        $convenio->texto = $rs['texto'];
                        $convenio->imagem = $rs['imagem'];
                        $convenio->status_imagem = $rs['status_imagem'];
                        $convenio->ativo = $rs['ativo'];

                        return $convenio;
                  }else{
                        //Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
                  }

                  //Fecha a conexão com o banco de dados
			$conex->Desconectar();
            }


            public function Update($convenio){

                  $sql1 = "UPDATE tbl_convenio SET titulo='".$convenio->titulo."', texto='".$convenio->texto."', imagem='".$convenio->imagem."', status_imagem='".$convenio->status_imagem."', ativo='".$convenio->ativo."'";

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

            public function Deletar($convenio){

                  $sql="UPDATE tbl_convenio set ativo=0 WHERE id_convenio=".$convenio->id_convenio;

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

            public function DesativarPorId($convenio){

                  $select_status_imagem="SELECT status_imagem FROM tbl_convenio;";


                  //Instancio o banco e crio uma variavel
			$conex = new Mysql_db();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

                  $resultadoSQL2 = $PDO_conex->query($select_status_imagem);

                  while($resultado2 = mysql_fetch_array($resultadoSQL2)){
                                echo($resultado['status_imagem']);
                  }

                  echo($status);

                  //include_once("../sistema_interno/controllers/util.php");

                  $verifica_status_imagem =

                  //$sql1 = "UPDATE tbl_convenio set status_imagem=0";
                  $sql = "UPDATE tbl_convenio set status_imagem=0 WHERE id_convenio=".$convenio->id_convenio;

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
      }

 ?>
