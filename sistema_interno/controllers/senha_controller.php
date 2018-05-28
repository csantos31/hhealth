<?php 
    class controllerSenha{
        public function chamarSenha(){
            require_once('models/senha_class.php');
                         
            $senha = new Senha();
                         
            $senha::ResetaAtual();
            $pass = $senha::SelectEmergency();
            if(empty($pass)){
                $pass = $senha::SelectSenha;
            }
            $senha::DefineAtual($pass);
        
            var_dump($pass);
            
            return $pass;
        }
    }

?>