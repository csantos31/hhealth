<?php

 require_once('controllers/senha_controller.php');
                    require_once ('models/senha_class.php');


    if(isset($_GET['controller'])){
        $controller_senha = new controllerSenha();
         $pass = $controller_senha::chamarSenhaAtual();
        echo $pass->senha;
        exit();
    }
                    
?>
<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style_senha.css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script>
             $(document).ready(function(){
                setInterval(function(){ 
                    
                     $.ajax({
                        type:"GET",
                        url: "senha.php?controller=senha_get&modo=null",
                        success: function(dados){
                            console.log(dados);
                           if (dados != 'null') {
                              $('#vm_l').html("");
                              $('#vm_l').append(dados);
                            }else{
                              $('#vm_l').html("");
                              $('#vm_l').append("...");
                            }
                        }
                    });
                }, 3000);

             });
        </script>
    </head>
    <body>
        <div class="container_modal"><!--container da modal-->
            <div class="modal"><!--modal-->
            </div>
        </div>
        <div id="principal">
            <div class="alinha_conteudo">

            </div>
            <div class="main">
                <div id="container_cad_paciente">
                      <div class="cabecalho">
                           <div class="txt_cabecalho">
                                 <p>Senha</p>
                           </div>
                      </div>
                    <div class="col_2">
                        <div class="senha_atual" id="vm_l">
                          ...
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                
            </footer>
        </div>
    </body>
</html>
