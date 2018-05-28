<?php

require('../verifica.php');
@session_start();


?>
<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/style_senha.css">
        <link rel="stylesheet" type="text/css" href="../css/style_menu_lateral.css">
        
        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>


        <script>
            
            //Excluir
            function Excluir(idIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();

                if(confirm('Deseja realmente chamar uma senha?')){

                    $.ajax({
                        type:"GET",
                        data: {id:idIten},
                        url: "../router.php?controller=internacao&modo=excluir&id="+idIten,
                        success: function(dados){
                            //console.log(dados);
                            $('.col_2').html(dados);
                            //alert(dados);
                        }
                    });

                }
            }






        </script>
    </head>
    <body>
        <div class="container_modal"><!--container da modal-->
            <div class="modal"><!--modal-->
            </div>
        </div>
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="alinha_conteudo">

            </div>
            <?php include_once('menu_lateral.php');  ?>
            <div class="main">
                <div id="container_cad_paciente">
                      <div class="cabecalho">
                           <div class="txt_cabecalho">
                                 <p>Senha</p>
                           </div>
                      </div>
                    <div class="col_2">
                        <a class="novo" href="#">
                            <img src="../imagens/add.png" alt="Chamar senha" title="Chamar senha">
                            
                            <p>Chamar nova senha</p>
                        </a>
                        
                        <div class="senha_atual">
                            ______
                            5454
                            ______
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                Desenvolvido por CPI - 2018
            </footer>
        </div>
    </body>
</html>
