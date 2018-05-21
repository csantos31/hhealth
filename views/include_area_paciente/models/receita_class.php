<?php
class Receita
{

      public $id_receita_medica;
      public $id_funcionario;
      public $id_paciente;
      public $id_remedio;
      public $tipo;
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
            $sql1="SELECT * FROM tbl_receita_medica;";

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
                  $list_receitas[] = new Receita();

                  // Guarda os dados vindos do banco no indice de objetos criado
                  $list_receitas[$cont]->id_receita_medica = $rs['id_receita_medica'];
                  $list_receitas[$cont]->id_funcionario = $rs['id_funcionario'];
                  $list_receitas[$cont]->id_paciente = $rs['id_paciente'];
                  $list_receitas[$cont]->id_remedio = $rs['id_remedio'];
                  $list_receitas[$cont]->tipo = $rs['tipo'];

                  $dat = new DateTime($rs['data']);

                  $list_receitas[$cont]->data = $dat->format('d/m/Y');


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
    
    public function SelectById($paciente){
			$sql = "SELECT * FROM tbl_receita_medica as rm,tbl_paciente as p WHERE id_paciente = p.id_paciente AND rm.id_paciente =".$paciente->id_paciente;

			//Instancio o banco e crio uma variavel
			$conex = new Mysql_db_include_paciente();

			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
			na variavel que $PDO_conex*/
			$PDO_conex = $conex->Conectar();

			$select = $PDO_conex->query($sql);

			//Executa o script no banco de dados
			if($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$paciente = new Paciente();

				$paciente->id_paciente = $rs['id_paciente'];
                $paciente->id_receita = $rs['id_receita'];
                $paciente->tipo = $rs['tipo'];
                $paciente->data = $rs['data'];
                
                return $paciente;

			}else {
				//Mensagem de erro
				echo "Error ao selecionar no Banco de Dados";
			}

			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
		}

}
 ?>
