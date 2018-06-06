<?php

// Importando classe de conexão com o Banco de dados
require_once('conexao.php');

// Faz um obejto do banco
$conexao = new Mysql_db();

// Chama metódo para conectar ao banco
$stmt = $conexao->Conectar();

$id_paciente = $_GET['id_paciente'];

// Faço a query do banco
$query = "SELECT * FROM tbl_resultado_exame WHERE id_paciente ='$id_paciente';";

// insiro os parametros dentro da query
// Executa query no banco de dados
$executa_query = $stmt->query($query);

$teste = $executa_query -> rowCount();

// echo $teste;

$lista = array();
// Se retorna uma linha da query quer dizer que existe usuário
while ($visualizar_unidade= $executa_query->fetch(PDO::FETCH_ASSOC)) {

  // Retorna Json que diz que pode efetuar o login
  $lista[] = $visualizar_unidade;
  //
}
  echo json_encode($lista);

//Desconecto do banco de dados
$conexao::Desconectar();

 ?>
