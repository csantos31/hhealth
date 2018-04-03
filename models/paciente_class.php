<?php

session_start();
    class Paciente{
        
        //Atributos da Classe
        public $cpf;
        public $senha;
        
        
        public function __construct(){
            require_once('bd_class.php');/*solicita o arquivo bd_class.php
                                           é ela que faz a conexão com o banco
                                            */
                                        
        }
        
        /*
        
        if(!isset(SESSION) &)
        
        
        */
        
        //faz o login com o usuário
        public function Login_paciente($paciente){
            $_SESSION["login"]=0;
            $count=0;
            $sql = "SELECT * FROM tbl_paciente WHERE cpf = '" .$paciente->cpf . "' AND senha = '".$paciente->senha. "';";
            
            echo $sql;
            
            
            //Instancia da classe do BD
            $conn = new Mysql_db();
            
            
           
            //chama o metodo para conectar no BD e guarda o retorno da conexao na variavel $PDO_conn
            $PDO_conn = $conn->Conectar();
            
            if($PDO_conn -> query($sql)){
                $del=$PDO_conn -> query($sql);
                $count = $del->rowCount();
            }
                
             
            
            $_SESSION["login"]=$count;                
            // echo($count."To Aki");   
            //Executa o Script no BD
           
            if($_SESSION["login"]==1){
                header('location:views/include_area_paciente/historico_paciente');
            }else if($_SESSION["login"]==0){
                header('location:index.php');
            }
            
            //Fecha a conexao com o Banco de Dados
            $conn -> Desconectar();
            
            //var_dump($sql);
        }
        
    }


?>