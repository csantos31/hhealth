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
  $query = "SELECT a.id_agendamento_consulta, p.nome AS paciente, e.especialidade, f.nome, u.nome_unidade, a.data, a.hora, a.ativo
            FROM tbl_agendamento_consultas a INNER JOIN tbl_paciente AS p ON a.id_paciente = p.id_paciente
            INNER JOIN tbl_especialidade AS e
            ON e.id_especialidade =a.id_especialidade INNER JOIN
            tbl_funcionario AS f ON a.id_funcionario = f.id_funcionario INNER JOIN
            tbl_unidade AS u ON a.id_unidade = u.id_unidade WHERE a.id_paciente = '$id_paciente';";

 //  $query = "select distinct a.id_agendamento_consulta, e.especialidade, a.data from tbl_agendamento_consultas as a inner join tbl_especialidade
 // as e ON a.id_especialidade = e.id_especialidade where a.id_paciente = '$id_paciente';";

    // $query = "SELECT * FROM tbl_agendamento_consultas WHERE id_paciente = '$id_paciente';";

  // Executa query no banco de dados
  $executa_query = $stmt->query($query);

  $quantidade =  $executa_query->rowCount();
  // echo $quantidade;

  $lstVisualizar_consulta = array();

  // Se retorna uma linha da query quer dizer que existe usuário
  while ($visualizar_consulta = $executa_query->fetch(PDO::FETCH_ASSOC)) {

    // Retorna Json que diz que pode efetuar o login
    $lstVisualizar_consulta[] = $visualizar_consulta;

  }

  // var_dump($lstVisualizar_consulta);

  // var_dump($lstVisualizar_consulta);
  echo json_encode($lstVisualizar_consulta);

  // Desconectando do banco
  $conexao::Desconectar();
 ?>
