<?php

  // Importando classe de conexão com o Banco de dados
  require_once('conexao.php');

  $id_paciente = null;

  // Faz um obejto do banco
  $conexao = new Mysql_db();

  // Chama metódo para conectar ao banco
  $stmt = $conexao->Conectar();

  // Recendo variáveis do mobile
  $id_paciente = $_GET['id_paciente'];

  // Query que traz os itens necessários para a visualização
  $query = "SELECT * FROM tbl_paciente WHERE id_paciente ='$id_paciente'";

  // Executa query no banco de dados
  $executa_query = $stmt->query($query);

  // Se retorna uma linha da query quer dizer que existe usuário
  if ($recebe_dados_paciente = $executa_query->fetch(PDO::FETCH_ASSOC)) {

    // Retorna Json que diz que pode efetuar o login
    echo json_encode(

      $recebe_dados_paciente


    );

  }

  // Desconectando do banco
  $conexao::Desconectar();

 ?>
