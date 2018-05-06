<?php


    class controllerPaciente{

        public function Login(){

            //Instancia a classe Usuario()
            $paciente = new Paciente();

            //Carrega os dados digitados pelo usuário nos atributos da class
            $paciente->cpf = $_POST['txt_usuario'];
            $paciente->senha = $_POST['txt_senha'];

            //chama o metodo Login da classe Usuario
            Paciente::Login_paciente($paciente);


        }

        public function Novo($id_endereco){
     			     require_once('modulo_img.php');

                 //Instancia da classe Contato
     			     $paciente = new Paciente();

                 /*
             public id_convenio
             public id_endereco;
             public nome;
             public sobrenome;
             public dt_nasc;
             public rg;
             public cpf;
            **** public carteirinha_convenio;
            **** public foto;
             public status;

                 */

                $fle_foto1 = salvar_imagem($_FILES['fle_foto1'],'arquivos');
                $fle_foto2 = salvar_imagem($_FILES['fle_foto2'],'arquivos');


     			        //Carregando os dados digitados pelo usuário nos atributos da classe
     			      $paciente->id_convenio = $_POST['slt_convenio'];
                 $paciente->id_endereco = $id_endereco;
                 $paciente->nome = $_POST['txt_nome'];
                 $paciente->sobrenome = $_POST['txt_sobrenome'];
                 $paciente->dt_nasc = $_POST['txt_dt_nasc'];
                 $paciente->rg = $_POST['txt_rg'];
                 $paciente->cpf = $_POST['txt_cpf'];
                 $paciente->foto = $fle_foto1;
                 $paciente->carteirinha_convenio = $fle_foto2;


     			//Chama o metodo Insert da classe Contato
     			//Existe também a posibilidade de chamar o metodo da seguinte forma:
     			//$contato::Insert($contato);
     			$paciente::Insert($paciente);

 		}



    }

?>
