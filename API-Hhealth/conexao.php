<?php
/*
* Método de conexão sem padrões
*/
  class Mysql_db{

    public function Conectar(){
      $host = "localhost";
      $dbname = "hhealth";
      $username = "root";
      $password = "";

      try {

        $conn = new PDO("mysql:host=localhost;dbname=".$dbname, $username, $password);
        $conn->query("SET NAMES utf8;");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;

      } catch(PDOException $e) {

        echo 'ERROR: ' . $e->getMessage();
        // echo "LINHA:". $e->getRow();

      }
    }

    public function Desconectar(){
      $conn = null;
    }
  }
 ?>
