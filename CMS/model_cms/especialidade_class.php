<?php

      /**
       *
       */
      class Especialidade
      {

            public $id_especialidade;
            public $titulo;
            public $texto;
            public $imagem;
            public $status_imagem;

            // Cria um construtor
            function __construct(argument)
            {
                  # code...
                  include_once('bd_class.php');
            }

            public static function Insert($especialidade_dados){

                  $sql1="UPDATE tbl_especialidade SET status=0";

                  $sql2="INSERT tbl_especialidade(id_especialidade, titulo, texto, imagem, status_imagem)
                  VALUES('".especialidade_dados->titulo."', '".especialidade_dados->texto."', '".especialidade_dados->imagem."', '".especialidade_dados->status_imagem."');";

                  //Instancia o banco e cria uma variavel
                  $conex = new Mysql_db();

                  /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
                  $PDO_conex = $conex->Conectar();

                  //Excutar o script no banco de dados
                  if ($PDO_conex->query($sql1) &&$PDO_conex->query($sql2)) {
                        # code...
                        echo "<script>location.reload();</script>";

        			}else {
        				//Mensagem de erro
        				echo "Error inserir no Banco de Dados";
                        echo $sql;
        			}
                  }

                  // Fechar a conexão com o banco de dados
                  $conex -> Desconectar();
            }
      }

 ?>
