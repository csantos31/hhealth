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
  // $query = "SELECT a.id_paciente, e.titulo AS especialidade, f.nome AS medico, u.titulo AS unidade,  a.data, a.hora
  //           FROM hhealth.tbl_agendamento_consultas AS a
  //           INNER JOIN tbl_especialidade AS e ON a.id_especialidade = e.id_especialidade
  //           INNER JOIN tbl_funcionario AS f ON a.id_funcionario = f.id_funcionario
  //           INNER JOIN tbl_unidade AS u ON a.id_unidade = u.id_unidade WHERE a.id_paciente ='$id_paciente'";

  $query = "SELECT * FROM tbl_agendamento_consultas WHERE id_paciente = '$id_paciente'";

  // Executa query no banco de dados
  $executa_query = $stmt->query($query);

  $lstVisualizar_consulta = array();

  // Se retorna uma linha da query quer dizer que existe usuário
  while ($visualizar_consulta = $executa_query->fetch(PDO::FETCH_ASSOC)) {

    // Retorna Json que diz que pode efetuar o login
    $lstVisualizar_consulta[] = $visualizar_consulta;

  }

  echo json_encode($lstVisualizar_consulta);

  // Desconectando do banco
  $conexao::Desconectar();
 ?>
