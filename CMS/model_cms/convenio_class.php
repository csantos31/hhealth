<?php

      class Convenio
      {

            public $id_convenio;
            public $titulo;
            public $texto;
            public $imagem;
            public $status_imagem;

            // Cria um construtor
            function __construct()
            {
                  # code...
                  include_once('bd_class.php');
            }

            public static function Insert($convenio_dados){

                  //$sql1="UPDATE tbl_convenio SET status=0";

                  $sql2="INSERT tbl_convenio(titulo, texto, imagem, status_imagem)
                  VALUES('".$convenio_dados->titulo."', '".$convenio_dados->texto."', '".$convenio_dados->imagem."', 1);";
                  echo ($sql2);


                  //Instancia o banco e cria uma variavel
                  $conex = new Mysql_db();

                  /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
                  $PDO_conex = $conex->Conectar();

                  //Excutar o script no banco de dados
                  if($PDO_conex->query($sql2)){
                      //echo "<script>location.reload();</script>";

      			}else {
      				//Mensagem de erro
      				echo "Error inserir no Banco de Dados";
                      echo $sql2;
      			}
                  //Fechar a conexão com o banco de dados
                  $conex->Desconectar();
            }
      }

 ?>
