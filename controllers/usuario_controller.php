<?php


    class controllerUsuario{

        public function Login(){



            //Instancia a classe Usuario()
            $usuario = new Usuario();

            //Carrega os dados digitados pelo usuário nos atributos da class
            $usuario->cpf = $_POST['txt_login'];
            $usuario->senha = $_POST['txt_senha'];


            //chama o metodo Login da classe Usuario
            Usuario::Login_usuario($usuario);


        }



    }

?>
