<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style_padrao.css">
        <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <title>Hospital HHealth</title>
    </head>

    <body>

        <div class="main"><!--Div Main que segura todas as divs-->
             <div class="suporte_menu">
                   <div class="menu"><!--**MENU**-->
                      <?php require_once('nav.php'); ?>
                  </div>
             </div>
            <div class="div_suporte_conteudo">

            </div>
            <div class="content"><!--**CONTENT**-->
                  <div class="faixa_titulo_da_pagina">
                        Dicas de Saúde
                  </div>
            </div>
            <footer><!--**FOOTER**-->
                  <div class="footer">
                        <?php require_once('footer.php'); ?>
                  </div>
            </footer>
        </div>

    </body>
</html>
