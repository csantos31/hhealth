<?php
    require('../verifica.php');
?>
<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/style_pagamentos.css">
        <link rel="stylesheet" type="text/css" href="../css/style_menu_lateral.css">
        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>

        <script>
            function ativar(idPaciente){
                console.log(idPaciente);
                if(confirm('Tem certeza que deseja ativar este paciente?')){

                    $.ajax({
                        type:"GET",
                        data: {id:idPaciente},
                        url: "../router.php?controller=paciente&modo=ativar_paciente&id="+idPaciente,
                        success: function(dados){
                            //alert(dados);
                            $('.main').html(dados);
                        }
                    });

                }
            }


        </script>

    </head>
    <body>
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="alinha_conteudo">

            </div>
            <!DOCTYPE html>
            <?php include_once('menu_lateral.php');  ?>
            <div class="main">
                <div id="container_cad_paciente">

                  <form class="" action="../router.php?" method="post">

                    <p>Pagamentos</p>
                    Paciente: <select class="" name="">
                                <option value="">Select</option>
                              </select>
                    <br>
                    Exames: <select class="" name="">
                              <option value="">Exames</option>
                            </select>
                    <br>
                    cartão: <input type="text" name="" value="">
                    <br>
                    senha cartão : <input type="text" name="" value="">
                    <br>
                    cpf: <input type="text" name="" value="">
                    <br>
                    email: <input type="email" name="" value="">
                    <br>
                    telefone: <input type="text" name="" value="">



                    <input type="submit" name="" value="pagar">
                  </form>
                </div>
            </div>
            <footer>
                Desenvolvido por CPI - 2018
            </footer>
        </div>
    </body>
</html>
