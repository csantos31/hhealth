<?php

// Importando classe de conexão com o Banco de dados
require_once('conexao.php');

// Faz um obejto do banco
$conexao = new Mysql_db();

// Chama metódo para conectar ao banco
$stmt = $conexao->Conectar();



//Desconecto do banco de dados
$conexao::Desconectar();

 ?>
