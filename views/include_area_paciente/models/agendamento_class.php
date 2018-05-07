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
            
            $sql1="SELECT a.id_agendamento_consulta,p.nome,e.especialidade,f.nome,u.nome_unidade,a.data,a.hora FROM tbl_agendamento_consultas as a,tbl_paciente as p,tbl_especialidade as e,tbl_funcionario as f,tbl_unidade as u WHERE p.id_paciente = a.id_paciente AND e.id_especialidade=a.id_especialidade AND f.id_funcionario=a.id_funcionario AND u.id_unidade=a.id_unidade";

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
                $list[] = new Agendamento();

                // Guarda os dados vindos do banco no indice de objetos criado
                $list[$cont]->id_agendamento_consulta = $rs['id_agendamento_consulta'];
                $list[$cont]->paciente = $rs['nome'];
                $list[$cont]->especialidade = $rs['especialidade'];
                $list[$cont]->funcionario = $rs['nome'];
                $list[$cont]->unidade = $rs['nome_unidade'];
                

                $dat = new DateTime($rs['data']);

                $list_receitas[$cont]->data = $dat->format('d/m/Y');


                // Soma mais um no contador
                              $cont+=1;



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
        $conex = new Mysql_db();

        /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
        $PDO_conex = $conex->Conectar();

        //Executa o select no banco de dados e guarda o retorno na variavel select
        $select = $PDO_conex->query($sql);
        
        if($PDO_conex->query($sql)){
            $auditoria = new Auditoria_paciente();
            
            $auditoria::Insert($dados_agendamento);
            
            echo "<script>location.reload();</script>";

        }else {
            //Mensagem de erro
            echo "Error inserir no Banco de Dados";
              echo $sql2;
        }
          //Fechar a conexão com o banco de dados
          $conex->Desconectar();
        
    }

}
 ?>
