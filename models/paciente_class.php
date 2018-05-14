<?php

session_start();
    class Paciente{

        //Atributos da Classe
        public $cpf;
        public $senha;


        public function __construct(){
            require_once('bd_class.php');/*solicita o arquivo bd_class.php
                                           é ela que faz a conexão com o banco
                                            */

        }

        //faz o login com o usuário
        public function Login_paciente($paciente){

            $_SESSION["login_paciente"]=0;
            $count=0;
            $sql = "SELECT * FROM tbl_usuario_paciente WHERE usuario = '" .$paciente->cpf . "' AND senha = '".$paciente->senha. "';";

            //Instancia da classe do BD
            $conn = new Mysql_db();
            
            //chama o metodo para conectar no BD e guarda o retorno da conexao na variavel $PDO_conn
            $PDO_conn = $conn->Conectar();

            $select = $PDO_conn->query($sql);
            if($PDO_conn -> query($sql)){
                $del=$PDO_conn -> query($sql);
                $count = $del->rowCount();
            }
            
            if($rs = $select->fetch(PDO::FETCH_ASSOC)){
                
                $id = $rs['id_paciente'];
                
                
                //cria variavel de sessão com o id do usuario
                $_SESSION['id_paciente'] = $id;
            }
            
            $_SESSION["login_paciente"]=$count;
            //Executa o Script no BD


            if($_SESSION["login_paciente"]==1){
                header('location:views/include_area_paciente/views/historico_paciente.php');
            }else if($_SESSION["login_paciente"]==0){
                header('location:index.php');
            }

            //Fecha a conexao com o Banco de Dados
            $conn -> Desconectar();

            //var_dump($sql);
        }

        public static function Insert($paciente){
    			$sql = "INSERT INTO tbl_paciente (id_endereco, id_convenio, nome, sobrenome, dt_nasc, rg, cpf, carterinha_convenio, foto, status) VALUES ('".$paciente->id_endereco."', '".$paciente->id_convenio."', '".$paciente->nome."', '".$paciente->sobrenome."', '".$paciente->dt_nasc."', '".$paciente->rg."', '".$paciente->cpf."', '".$paciente->carteirinha_convenio."', '".$paciente->foto."', '0');";

                //echo $sql;

    			//Instancio o banco e crio uma variavel
    			$conex = new Mysql_db();

    			/*Chama o método para conectar no banco de dados e guarda o retorno da conexao
    			na variavel que $PDO_conex*/
    			$PDO_conex = $conex->Conectar();

    			//Executa o script no banco de dados
    			if($PDO_conex->query($sql)){
    				//Se der true redireciona a tela
    				echo "<script>location.reload();</script>";
    			}else {
    				//Mensagem de erro
                    echo $sql;
    				echo "Error inserir no Banco de Dados";
    			}

    			//Fecha a conexão com o banco de dados
    			$conex->Desconectar();

    		}
        /*Busca um registro especifico no BD*/
		public function SelectById($paciente){
			$sql = "SELECT * FROM tbl_paciente WHERE id_paciente =". $paciente->id_paciente;

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
                $paciente->id_endereco = $rs['id_endereco'];
                $paciente->id_convenio = $rs['id_convenio'];
                $paciente->nome = $rs['nome'];
                $paciente->sobrenome = $rs['sobrenome'];
                $paciente->dt_nasc = $rs['dt_nasc'];
                $paciente->rg = $rs['rg'];
                $paciente->cpf = $rs['cpf'];
                $paciente->carterinha_convenio = $rs['carterinha_convenio'];
                $paciente->foto = $rs['foto'];
                
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
