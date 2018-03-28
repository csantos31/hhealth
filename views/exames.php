<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
      <head>
            <meta charset="utf-8">
            <title></title>
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_exames.css">
      </head>
      <body>
            <div class="main">
                <div class="suporte_menu">
                    <div class="menu"><!--**MENU**-->
                      <?php require_once('nav.php'); ?>
                    </div>
                </div>

                <div class="div_suporte_conteudo"><!--div de suporte para o menu-->

                </div>

                <div class="content"><!--Content-->
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
                    <div class="conteudo_exames">
                        <div class="titulo_exame">
                            Exames Disponiveis
                        </div>

                        <div class="content_faixa_exames"><!--content dos exames-->
                            <div class="content_nome_exames"><!--nome exames-->
                                <a>Cardiologia</a>
                            </div>

                            <div class="acoes_exames"><!--ação 1-->
                                <img src="">
                            </div>

                            <div class="acoes_exames"><!--ação 2-->
                                <img src="">
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
