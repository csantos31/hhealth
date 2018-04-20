<?php

class TrabalheConosco{
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

        $sql =  "INSERT INTO tbl_estado (cep, logradouro, numero, id_estado,
                                        cidade, bairo)
                                        VALUES ('".$trabalhe_conosco->nome."',
                                        '".$trabalhe_conosco->email."',
                                        '".$trabalhe_conosco->telefone."',
                                        '".$trabalhe_conosco->celular."',
                                        );"


        $sql = "INSERT INTO tbl_endereco (cep, logradouro, numero, id_estado,
                                        cidade, bairo)
                                        VALUES ('".$trabalhe_conosco->nome."',
                                        '".$trabalhe_conosco->email."',
                                        '".$trabalhe_conosco->telefone."',
                                        '".$trabalhe_conosco->celular."',
                                        );";

        $sql = "INSERT INTO tbl_trabalhe_conosco (nome, email, telefone, celular,
                                        dt_nasc, sexo, id_pais, estado_civil, trabalha_atualmente,id_deficiencia, resumo_qualificacoes,
                                        ativo)
                                        VALUES ('".$trabalhe_conosco->nome."',
                                        '".$trabalhe_conosco->email."',
                                        '".$trabalhe_conosco->telefone."',
                                        '".$trabalhe_conosco->celular."',
                                        '".$trabalhe_conosco->dt_nasc."',
                                        '".$trabalhe_conosco->rdosexo."',
                                        '".$trabalhe_conosco->pais."',
                                        '".$trabalhe_conosco->estado_civil."',
                                        '".$trabalhe_conosco->registro_profissional."',
                                        '".$trabalhe_conosco->resumo_qualificacoes."',
                                        '".$trabalhe_conosco->status_trabalho."',
                                        '".$trabalhe_conosco->status_deficiencia."',
                                        '1');";



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
