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

        <script type="text/javascript">
            function boleto() {
              var URL = "../boletophp-master/boleto_itau.php";
              var W = window.open(URL);    /**Note1**/
              W.window.print();
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

                     <div class="suporte_pagamento">
                        Paciente: <input type="text" name="txt_paciente" value="">

                        <!-- cartão: <input type="text" name="" value="">
                        <br>
                        senha cartão : <input type="text" name="" value="">
                        <br> -->
                        Cpf: <input type="text" name="txt_cpf" value="">

                        Email: <input type="email" name="txt_email" value="">
                        <br>
                        Telefone: <input type="text" name="txt_telefone" value="">
                        <br>
                        Valor: <input type="text" name="txt_valor" value="">

                        <a href="#">Pagar via cartão</a>
                        <!-- <input type="button" value="inprimir" onclick=""/> -->
                        <a href="#" onclick="boleto()">Boleto_itau</a>
                    </div>
<!--
                    <input type="button" value="inprimir" onclick="window.print()"/>

                    <input type="image" name="" value="pagar"> -->
                  </form>
                </div>
            </div>
            <footer>
                Desenvolvido por CPI - 2018
            </footer>
        </div>
    </body>
</html>
