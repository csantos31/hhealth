<?php

    session_start();

    if(isset($_GET['logout'])){
        session_destroy();
        header('location:../index.php');
    }else{
        
        if(isset($_SESSION['login'])){
            if($_SESSION['login']==1){
                header('location:../views/dashboard.php');
            }       
        }  
    }

?>

<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="css/style_login.css">
            <title>Login - Sistema Interno</title>
      </head>
      <body>
          <div class="content">
          </div>
          <form name="" method="post" action="router.php?controller=logar&modo=login">
            <div class="login">
                  <div class="txtlogin">
                        Login:
                  </div>
                  <div class="txt_login">
                        <input type="text" name="txt_login" value="">
                  </div>
                  <div class="txtsenha">
                        Senha:
                  </div>
                  <div class="txt_senha">
                        <input type="password" name="txt_senha" value="">
                  </div>
                  <div class="botao_entar">
                        <input type="submit" name="btn_entrar" value="Entrar">
                  </div>
            </div>
        </form>

      </body>
</html>
