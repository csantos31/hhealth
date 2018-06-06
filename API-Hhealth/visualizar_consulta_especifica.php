<?php

  // Importando classe de conexão com o Banco de dados
  require_once('conexao.php');

  $id_paciente = null;

  // Faz um obejto do banco
  $conexao = new Mysql_db();

  // Chama metódo para conectar ao banco
  $stmt = $conexao->Conectar();

  // Recendo variáveis do mobile
  $id_agendamento_consulta = $_GET['id_agendamento_consulta'];

  // Query que traz os itens necessários para a visualização
  // $query = "SELECT a.id_paciente, e.titulo AS especialidade, f.nome AS medico, u.titulo AS unidade,  a.data, a.hora
  //           FROM hhealth.tbl_agendamento_consultas AS a
  //           INNER JOIN tbl_especialidade AS e ON a.id_especialidade = e.id_especialidade
  //           INNER JOIN tbl_funcionario AS f ON a.id_funcionario = f.id_funcionario
  //           INNER JOIN tbl_unidade AS u ON a.id_unidade = u.id_unidade WHERE a.id_paciente ='$id_paciente'";

  // $query = "SELECT a.id_agendamento_consulta, p.nome as paciente, e.especialidade, f.nome, u.nome_unidade, a.data, a.hora, a.ativo
  //           FROM tbl_agendamento_consultas a INNER JOIN tbl_paciente as p ON a.id_paciente = p.id_paciente
  //           INNER JOIN tbl_especialidade as e
  //           ON e.id_especialidade =a.id_especialidade INNER JOIN
  //           tbl_funcionario as f ON a.id_funcionario = f.id_funcionario INNER JOIN
  //           tbl_unidade as u ON a.id_unidade = u.id_unidade WHERE a.id_paciente = '$id_paciente';";

  $query = "SELECT * FROM tbl_agendamento_consultas WHERE id_agendamento_consulta = '$id_agendamento_consulta';";

  // Executa query no banco de dados
  $executa_query = $stmt->query($query);

  $quantidade =  $executa_query->rowCount();
  // echo $quantidade;

  $lstVisualizar_consulta = array();

  // Se retorna uma linha da query quer dizer que existe usuário
  if ($recebe_dados_agendamento = $executa_query->fetch(PDO::FETCH_ASSOC)) {

    // Retorna Json que diz que pode efetuar o login
    echo json_encode(

      $recebe_dados_agendamento


    );

  }


  // var_dump($lstVisualizar_consulta);




  // Desconectando do banco
  $conexao::Desconectar();
 ?>
