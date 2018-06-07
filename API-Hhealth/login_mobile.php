<?php
  // Importando classe de conexão com o Banco de dados
  require_once('conexao.php');

  // Faz um obejto do banco
  $conexao = new Mysql_db();

  // Chama metódo para conectar ao banco
  $stmt = $conexao->Conectar();

  // Pego as variaveis mandadas pelo android
   $cpf = $_POST['usuario'];
   $senha = $_POST['senha'];

  //$cpf = $_GET['usuario'];
//  $senha = $_GET['senha'];

  // Faço query de preparação para depois executa-lá no banco
  $query = "SELECT * FROM tbl_usuario_paciente WHERE usuario='$cpf' AND
  senha='$senha';";

  // echo $query;

  // Executa query no banco de dados
  $executa_query = $stmt->query($query);
  // Se retorna uma linha da query quer dizer que existe usuário
  if ($usuario = $executa_query->fetch(PDO::FETCH_ASSOC)) {
    $id_paciente = $usuario['id_paciente'];
    // Retorna Json que diz que pode efetuar o login
    echo json_encode(
			array(

				"login_state" => true,
				"usuario" => $usuario,
        "id_paciente" => $id_paciente
			)
		);

  }else{

    // Retorna Json dizendo que não existe usuário
    echo json_encode(
			array(

				"login_state" => false,
				"usuario" => ""

			)
		);
  }

  // Desconecto do banco de dados
  $conexao::Desconectar();
 ?>
