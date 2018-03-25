<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title></title>
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
            <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_exames.css">
      </head>
      <body>
            <div class="main">
                  <div class="menu"><!--**MENU**-->
                      <?php require_once('nav.php'); ?>
                  </div>
                  <div class="div_suporte_conteudo">

                  </div>
                  <div class="content">
                        <div class="faixa_titulo">
                              Agendamentos
                        </div>
                        <div class="titulo_busque_seu_exame">
                              <p>Busque seu exame:<p>
                        </div>
                        <div class="busca">
                              <div class="centraliza_input">
                                    <input type="search" name="" value="" placeholder="Search...">

                              </div>
                              <div class="ajusta_lupa">
                                    <img class="lupa" src="../imagens/magnifier.png" alt="">
                              </div>

                        </div>
                        <div class="faixa_exames">
                              <div class="titulo_exame">
                                    Nome do exame
                              </div>
                              <div class="exame">
                                    <div class="nome_exame">

                                    </div>
                                    <div class="icone1">

                                    </div>
                                    <div class="icone2">

                                    </div>
                              </div>
                        </div>
                  </div>
                  <footer><!--**FOOTER**-->
                      <?php require_once('footer.php'); ?>
                  </footer>
            </div>
      </body>
</html>
