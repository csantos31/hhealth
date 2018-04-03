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
        
        
        
    }

?>