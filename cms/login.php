<?php

    session_start();

    if(isset($_GET['destroi_sessao'])){
        session_destroy();
        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="views_cms/css/style_login_cms.css">
            <title>Login - CMS</title>
            <script type="text/javascript" src="../js/jquery-1.2.6.pack.js"></script>
            <script type="text/javascript" src="../js/jquery.maskedinput-1.1.4.pack.js"/></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#cpf").mask("999.999.999-99");
                });
            </script>

      </head>
      <body>

          <div class="content">

          </div>
          <form name="" method="post" action="../router.php?controller=usuario&modo=login">
            <div class="login">
                  <div class="txtlogin">
                        Login
                  </div>
                  <img src="imagens/man-user.png">
                  <div class="txt_login">
                      <input type="text" name="txt_login" id="cpf" value=""  >
                  </div>
                  <img src="imagens/lock.png">
                  <div class="txt_senha">
                      <input type="password" name="txt_senha" value="" >
                  </div>
                  <div class="botao_entar">
                        <input type="submit" name="btn_entrar" value="ENTRAR">
                  </div>
            </div>
        </form>

      </body>
</html>
