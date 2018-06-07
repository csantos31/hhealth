<?php
class Agendamento
{

        public $id_agendamento;
        public $id_paciente;
        public $id_especialidade;
        public $id_funcionario;
        public $id_unidade;
        public $data;
        public $hora;

      // Cria um construtor
      function __construct()
      {
            # code...
            include_once('bd_class.php');

      }

      // Lista toos os registros do banco de dados
      public function Select(){

            //Query para selecionar a tabela contatos

            $sql1="SELECT DISTINCT a.id_agendamento_consulta,p.nome AS nome_paciente,e.especialidade,f.nome AS nome_funcionario,u.nome_unidade,a.data,
                  a.hora FROM tbl_agendamento_consultas AS a
                  INNER JOIN tbl_paciente AS p  ON a.id_paciente = p.id_paciente
                  INNER JOIN tbl_especialidade AS e ON a.id_especialidade = e.id_especialidade
                  INNER JOIN tbl_funcionario AS f ON a.id_funcionario = f.id_funcionario
                  INNER JOIN tbl_unidade AS u ON a.id_unidade = u.id_unidade WHERE p.id_paciente = '12'
                  ORDER BY id_agendamento_consulta DESC;";

             // echo $sql1;
            //Instancio o banco e cria uma variavel
            $conex = new Mysql_db_include_paciente();

            /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
            $PDO_conex = $conex->Conectar();

            //Executa o select no banco de dados e guarda o retorno na variavel select
            $select = $PDO_conex->query($sql1);

            // contador
            $cont = 0;

            //Estrutura de repetição para pegar dados
            while ($rs = $select->fetch(PDO::FETCH_ASSOC)){

                // Cria um array de dados na classe $list_contatos
                $list[] = new Agendamento();

                // Guarda os dados vindos do banco no indice de objetos criado
                $list[$cont]->id_agendamento_consulta = $rs['id_agendamento_consulta'];
                $list[$cont]->paciente = $rs['nome_paciente'];
                $list[$cont]->especialidade = $rs['especialidade'];
                $list[$cont]->funcionario = $rs['nome_funcionario'];
                $list[$cont]->unidade = $rs['nome_unidade'];
                $list[$cont]->hora = $rs['hora'];

                $dat = new DateTime($rs['data']);

                $list[$cont]->data = $dat->format('d/m/Y');


                // Soma mais um no contador
                $cont++;
                //Apenas retorna o $list_contatos se existir dados no banco de daos

            }
            if (isset($list)) {
                  # code...
                  return $list;
            }
            //Fechar a conexão com o banco de dados
            $conex->Desconectar();
      }

    public function Insert($dados_agendamento){
        //variavel sql
        $sql = "INSERT INTO tbl_agendamento_consultas(id_paciente,id_especialidade,id_funcionario,id_unidade,data,hora) VALUES ('".$dados_agendamento->id_paciente."','".$dados_agendamento->id_especialidade."','".$dados_agendamento->id_funcionario."','".$dados_agendamento->id_unidade."','".$dados_agendamento->data."','".$dados_agendamento->hora."');";

        $dados_agendamento->acao = "Inseriu";
        //Instancio o banco e cria uma variavel
        $conex = new Mysql_db_include_paciente();

        /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
        $PDO_conex = $conex->Conectar();

        //Executa o select no banco de dados e guarda o retorno na variavel select
        //$select = $PDO_conex->query($sql);

        if($PDO_conex->query($sql)){

            //echo $sql;
            echo ("<script>location.reload();</script>");

        }else {
            //Mensagem de erro
            echo "Error inserir no Banco de Dados";
            echo $sql;
        }
          //Fechar a conexão com o banco de dados
          $conex->Desconectar();

    }

    /*Desativar o registro no BD*/
        public function DesativarPorId($dados_agendamento){
            //$sql1 = "UPDATE tbl_home set status=0";
            $sql = "UPDATE tbl_agendamento_consultas set ativo=0 WHERE id_agendamento_consulta=".$dados_saude->id_dica_saude;

            //Instancio o banco e crio uma variavel
			$conex = new Mysql_db_include_paciente();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				echo "<script>location.reload();</script>";

			}else {
				//Mensagem de erro
				//echo "Error atualizar no Banco de Dados";
                echo $sql;
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();

        }

        /*Desativar o registro no BD*/
        public function AtivarPorId($dados_agendamento){
            //$sql1 = "UPDATE tbl_home set status=0";
            $sql = "UPDATE tbl_agendamento_consultas set ativo=1 WHERE id_agendamento_consulta=".$dados_agendamento->id_agendamento_consulta;

            //Instancio o banco e crio uma variavel
			$conex = new Mysql_db_include_paciente();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			//Executa o script no banco de dados
			if($PDO_conex->query($sql)){
				//Se der true redireciona a tela
				echo "<script>location.reload();</script>";

			}else {
				//Mensagem de erro
//				/echo "Error atualizar no Banco de Dados";
                echo $sql;
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();

        }

}
 ?>
