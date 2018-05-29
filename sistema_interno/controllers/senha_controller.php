<?php
    class controllerSenha{
        public function chamarSenha(){
            require_once('models/senha_class.php');

            $senha = new Senha();

            $senha::ResetaAtual();

            $pass = $senha::SelectEmergency();

            require_once('controllers/util.php');

            //parr($pass);

            if(empty($pass)){
                $pass = $senha::SelectSenha();
                if(!empty($pass)){
                    $senha::DefineAtual($pass);
                    echo $pass->senha;
                }else{
                  $pass = null;
                  echo "null";
                }
            }else{
                $senha::DefineAtual($pass);
                echo $pass->senha;
            }
            return $pass;
        }
    }

?>
