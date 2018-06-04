<?php
    class controllerSenha{
        public function chamarSenha(){
            require_once('models/senha_class.php');

            $senha = new Senha();

            $pass = $senha::SelectEmergency();

            require_once('controllers/util.php');

            if(empty($pass)){
                $pass = $senha::SelectSenha();
                if(!empty($pass)){
                    echo $pass->senha;
                    //echo "ahs";
                }else{
                  $pass = "null";
                  //echo "null";
                }
            }else{
                echo $pass->senha;
                //echo "ha2";
            }
            return $pass;
        }
        
        public function chamarSenhaAtual(){
            require_once('models/senha_class.php');

            $senha = new Senha();

            $pass = $senha::SelectSenhaAtual();
           
            
            return $pass;
        }
    }



?>
