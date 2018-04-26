<?php
class Resultado_exame
{

      public $id_resultado_exame;
      public $id_exame;
      public $id_funcionario;
      public $id_paciente;
      public $nome;
      public $id_especialidade;
      public $id_unidade;
      public $data;

      // Cria um construtor
      function __construct()
      {
            # code...
            include_once('bd_class.php');
      }

      // Lista toos os registros do banco de dados
      public function Select(){

            //Query para selecionar a tabela contatos
            $sql1="SELECT * FROM tbl_resultado_exame as r,tbl_unidade as u,tbl_especialidade as e where e.id_especialidade=r.id_especialidade and u.id_unidade=r.id_unidade;";

            //Instancio o banco e cria uma variavel
            $conex = new Mysql_db();

            /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
            $PDO_conex = $conex->Conectar();

            //Executa o select no banco de dados e guarda o retorno na variavel select
            $select = $PDO_conex->query($sql1);

            // contador
            $cont = 0;

            //Estrutura de repetição para pegar dados
            while ($rs = $select->fetch(PDO::FETCH_ASSOC)){

                  // Cria um array de dados na classe $list_contatos
                  $list_resultados_exames[] = new Resultado_exame();

                  // Guarda os dados vindos do banco no indice de objetos criado
                  $list_resultados_exames[$cont]->id_resultado_exame = $rs['id_resultado_exame'];
                  //$list_resultados_exames[$cont]->id_exame = $rs['id_exam'];
                  $list_resultados_exames[$cont]->especialidade = $rs['especialidade'];
                  $list_resultados_exames[$cont]->unidade = $rs['nome_unidade'];
                  $list_resultados_exames[$cont]->id_funcionario = $rs['id_funcionario'];
                  $list_resultados_exames[$cont]->id_paciente = $rs['id_paciente'];
                  $list_resultados_exames[$cont]->nome = $rs['nome'];
                  $list_resultados_exames[$cont]->id_especialidade = $rs['id_especialidade'];
                  $list_resultados_exames[$cont]->id_unidade = $rs['id_unidade'];

                  $dat = new DateTime($rs['data']);

                  $list_resultados_exames[$cont]->data = $dat->format('d/m/Y');


                  // Soma mais um no contador
                                  $cont+=1;



                  //Apenas retorna o $list_contatos se existir dados no banco de daos

            }
            if (isset($list_resultados_exames)) {
                  # code...
                  return $list_resultados_exames;
            }
            //Fechar a conexão com o banco de dados
            $conex->Desconectar();
      }



}
 ?>
