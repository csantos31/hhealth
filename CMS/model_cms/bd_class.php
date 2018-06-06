<?php


class Mysql_db{
    private $server;
    private $user;
    private $password;
    private $dataBaseName;

    //metodo mágico
    public function __construct(){

        $this ->server = "localhost";
        $this ->user = "root";
        $this ->password = "bcd127";
        $this ->dataBaseName = "hhealth";
    }

    //Conectar com o BD
    public function Conectar(){


        try{

            //Abre a conexao com o BD utilizando a biblioteca PDO
            $conexao = new PDO('mysql:host='.$this -> server.';dbname='.$this -> dataBaseName, $this -> user, $this -> password);

            return $conexao;

        }catch(PDOExcreption $Error){
            echo("Error ao conectar no banco de dados. <br>
                    Linha do erro".$Error->getLine()."<br>
                    Mensagem do erro: ".$Error -> getMessage());
        }



    }

    //Desconectar o BD
    public function Desconectar(){
        //Elimina a conexão com o banco de dados
        $conexao = null;
    }

}





?>
