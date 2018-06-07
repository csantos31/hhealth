<?php

    class Auditoria_paciente{

        public $id_auditoria;
        public $data;
        public $hora;
        public $usuario;
        public $acao;
        
        // Cria um construtor
        function __construct()
        {
            # code...
            include_once('bd_class.php');
        }


        public function Insert($dados_paciente){

            date_default_timezone_set('America/Sao_Paulo');
            $data = date('Y-m-d');
            $hora = date('H:i');
            $usuario=$dados_paciente->id_paciente;
            $acao="O paciente id:".$usuario.", ".$dados_paciente->acao." uma consulta no banco ";

            $sql="INSERT INTO tbl_auditoria_paciente(data,hora,usuario,acao)
            VALUES('".$data."', '".$hora."', '".$dados_paciente->id_paciente."','".$acao."' )";

            $conex = new Mysql_db_include_paciente();

            /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
            $PDO_conex = $conex->Conectar();

            //Excutar o script no banco de dados
            if($PDO_conex->query($sql)){
                echo "<script>location.reload();</script>";

			}else {
				//Mensagem de erro
				echo "Error inserir no Banco de Dados";
                echo $sql;
			}
            //Fechar a conexão com o banco de dados

            $conex->Desconectar();


        }
        
        public function SelectById($dados_paciente){
            $sql = "SELECT * FROM tbl_auditoria_paciente WHERE usuario = ".$dados_paciente->id_paciente;
            
            
            $conex = new Mysql_db_include_paciente();

            /*Chama o método para conectar no banco de dados e guarda o retorno da conexao na variavel*/
            $PDO_conex = $conex->Conectar();
            
            $select = $PDO_conex->query($sql);
            
            $cont=0;
			//Executa o script no banco de dados
			while($rs = $select->fetch(PDO::FETCH_ASSOC)){
				//Se der true redireciona a tela


				$auditoria[] = new Auditoria_paciente();

				$auditoria[$cont]->id_auditoria_paciente = $rs['id_auditoria_paciente'];
                $auditoria[$cont]->data = $rs['data'];
                $auditoria[$cont]->hora = $rs['hora'];
                $auditoria[$cont]->acao = $rs['acao'];
                
                $cont++;

			}
            
            if(isset($auditoria)){
                return $auditoria;
            }else{
                echo "Erro ao inserir no banco de dados";
            }
			//Fecha a conexão com o banco de dados
			$conex->Desconectar();
        }



    }

?>
