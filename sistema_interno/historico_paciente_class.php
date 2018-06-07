<?php
class Historico
{

      public $id_historico_paciente;
      public $data;
      public $descricao;

      // Cria um construtor
      function __construct()
      {
            # code...
            include_once('bd_class.php');
      }

      // Lista toos os registros do banco de dados
      public function Select(){

            //Query para selecionar a tabela contatos
            $sql1="SELECT * FROM tbl_historico_paciente;";

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
                  $list_receitas[] = new Historico();

                  // Guarda os dados vindos do banco no indice de objetos criado
                  $list_receitas[$cont]->id_historico_paciente = $rs['id_historico_paciente'];

                  $dat = new DateTime($rs['data']);

                  $list_receitas[$cont]->data = $dat->format('d/m/Y');
                  $list_receitas[$cont]->descricao = $rs['descricao'];


                  // Soma mais um no contador
                                  $cont+=1;



                  //Apenas retorna o $list_contatos se existir dados no banco de daos

            }
            if (isset($list_receitas)) {
                  # code...
                  return $list_receitas;
            }
            //Fechar a conexão com o banco de dados
            $conex->Desconectar();
      }

}
 ?>
