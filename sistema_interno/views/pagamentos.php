<?php
    // $API_KEY = 'ak_test_Ip7vCnLev9yayFv0V9bZfBUNlKEW63';
    // require('../verifica.php');
    // require __DIR__.'../pagarme-php/Pagarme.php';
    // PagarMe::setApiKey($API_KEY);
?>
<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/style_pagamentos.css">
        <link rel="stylesheet" type="text/css" href="../css/style_menu_lateral.css">
        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery-1.2.6.pack.js"></script>
        <script type="text/javascript" src="../js/jquery.maskedinput-1.1.4.pack.js"></script>
        <script type="text/javascript">
            function boleto() {
              var URL = "../boletophp-master/boleto_itau.php";
              var W = window.open(URL);    /**Note1**/
              W.window.print();
            }

            function Mudarestado(el) {
              var display = document.getElementById(el).style.display;
              if(display == "none")
                  document.getElementById(el).style.display = 'block';

              else
                document.getElementById(el).style.display = 'none';
                document.getElementById('suporte_dados_cartao').style.display = 'block';
              }

              function Mudarestadoboleto(el) {
                var display = document.getElementById(el).style.display;
                if(display == "none")
                    document.getElementById(el).style.display = 'block';

                else
                  document.getElementById(el).style.display = 'none';
                  document.getElementById('suporte_dados_cartao').style.display = 'none';
                  document.getElementById('suporte_dados_boleto').style.display = 'block';
                }

        </script>
        <!-- <script type="text/javascript">
            $(document).ready(function(){
                $("#numero_celular").mask("+999.999.999-99");
            }); -->
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

                  <form class="" action="../router.php?controller=pagamento&modo=cartao" method="post">
                     <p>Pagamentos</p>
                     <div id="alinha_conteudo_opcao">
                       <a href="#" class="escolha_opcao" onclick="Mudarestadoboleto('alinha_conteudo_opcao')">
                         <div class="alinha_letra">
                           BOLETO
                         </div>
                       </a>

                       <a href="#" class="escolha_opcao" onclick="Mudarestado('alinha_conteudo_opcao')">
                         <div class="alinha_letra">
                           CARTÃO
                         </div>
                       </a>
                     </div>

                     <div id="suporte_dados_boleto">
                       assa
                     </div>


                     <div id="suporte_dados_cartao">
                       <div class="campos_pagamento_cartao">
                         <div class="">
                           Nome: <input type="text" name="txt_nome" value="" >
                           <br>
                           CPF: <input type="number" name="txt_cpf" value="">
                           <br>
                           Email: <input type="email" name="txt_email" value="">
                           <br>
                           Número do celular: <input type="text" name="txt_celular" value="" maxlength="22" id="numero_celular">
                           <br>
                           Cartao: <input type="number" name="txt_cartao" value="" maxlength="16">
                           <br>
                           Senha do Cartao: <input type="number" name="txt_senha_cartao" value="" maxlength="6">
                           <br>
                           Valor: <input type="number" name="txt_valor" value="">
                           <br>
                         </div>
                         <input type="submit" name="txt_submit_cartao" value="Pagar">
                       </div>
                       <a href="pagamentos.php">
                         <div class="voltar_menu_pagamentos">
                           Voltar
                         </div>
                       </a>
                    </div>
                  </form>
                </div>
            </div>
            <footer>
                Desenvolvido por CPI - 2018
            </footer>
        </div>
    </body>
</html>
