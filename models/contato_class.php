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
        public static function Insert($contato_dados){
            $sql = "INSERT INTO tbl_fale_conosco (nome, email, telefone, celular,
                                            assunto, mensagem)
                                            values('".$contato_dados->nome."',
                                            '".$contato_dados->email."',
                                            '".$contato_dados->telefone."',
                                            '".$contato_dados->celular."',
                                            '".$contato_dados->assunto."',
                                            '".$contato_dados->mensagem."','1');";

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