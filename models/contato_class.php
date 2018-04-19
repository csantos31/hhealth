<?php

    class Contato{
        //Atributos da classe
        public $id_fale_conosco;
        public $nome;
        public $email;
        public $telefone;
        public $celular;
        public $assunto;
        public $mensagem;

        public function __construct(){
          require_once('bd_class.php');
        }

        //Insere o registro no BD
        public static function Insert($trabalhe_conosco){
            $sql = "INSERT INTO tbl_fale_conosco (nome, email, telefone, celular,
                                            assunto, mensagem, ativo)
                                            VALUES ('".$trabalhe_conosco->nome."',
                                            '".$trabalhe_conosco->email."',
                                            '".$trabalhe_conosco->telefone."',
                                            '".$trabalhe_conosco->celular."',
                                            '".$trabalhe_conosco->assunto."',
                                            '".$trabalhe_conosco->mensagem."','1');";

            //Instancia a classe do BD
            $conex = new Mysql_db();

            //Chama o método para conectar no BD, e guarda o retorno da conexão na variavel $PDO_conex
            $PDO_conex = $conex->Conectar();

            //Executa o script no BD
            if($PDO_conex->query($sql)){
                echo "<script>location.reload();</script>";
            }else{
                echo("Erro ao Inserir no BD");
            }


            //Fecha a conexão com o BD
            $conex->Desconectar();
        }


    }

?>
