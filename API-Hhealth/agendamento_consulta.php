<?php
  // Importando classe de conexão com o Banco de dados
  require_once('conexao.php');

  // Faz um obejto do banco
  $conexao = new Mysql_db();

  // Chama metódo para conectar ao banco
  $stmt = $conexao->Conectar();

  // Resgatando as variaveis do aplicativo
  // Recendo variáveis do mobile
  $id_paciente = $_POST['id_paciente'];
  $unidade = $_POST['id_unidade'];
  $especialidade_medico = $_POST['id_especialidade'];
  $medico = $_POST['id_funcionario'];
  $data = $_POST['data'];
  $hora = $_POST['hora'];

  // Faço a query do banco
  $query = $stmt->prepare("INSERT INTO tbl_agendamento_consultas (id_paciente, id_especialidade, id_funcionario, id_unidade,
  data, hora) VALUES
  (:id_paciente, :especialidade_medico, :medico, :unidade, :data, :hora
  )");

  // insiro os parametros dentro da query
  $query->bindParam(':id_paciente', $id_paciente);
  $query->bindParam(':especialidade_medico', $especialidade_medico);
  $query->bindParam(':medico', $medico);
  $query->bindParam(':unidade', $unidade);
  $query->bindParam(':data', $data);
  $query->bindParam(':hora', $hora);

  //  Executo a query
  $query->execute();

  // Desconecto do banco de dados
  $conexao::Desconectar();
 ?>
