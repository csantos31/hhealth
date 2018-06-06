<?php

  // Importando classe de conexão com o Banco de dados
  require_once('conexao.php');

  // Faz um obejto do banco
  $conexao = new Mysql_db();

  // Chama metódo para conectar ao banco
  $stmt = $conexao->Conectar();

  // Faço a query do banco
  $query = "SELECT especialidade FROM tbl_especialidade;";

  // insiro os parametros dentro da query
  // Executa query no banco de dados
  $executa_query = $stmt->query($query);

  $teste = $executa_query -> rowCount();

  // echo $teste;

  $lista = array();
  // Se retorna uma linha da query quer dizer que existe usuário
  while ($visualizar_especialidades= $executa_query->fetch(PDO::FETCH_ASSOC)) {

    // Retorna Json que diz que pode efetuar o login
    $lista[] = $visualizar_especialidades;
    //
  }

  echo json_encode(array("especialidades"=>$lista));



  //Desconecto do banco de dados
  $conexao::Desconectar();


 ?>
