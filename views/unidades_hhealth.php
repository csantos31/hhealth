<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
      <head>

        <!-- Link para estilização da pagina -->
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/style_unidades_hhealth.css">
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
                <div class="suporte_content">
                      <div class="content">
                           <div class="faixa_titulo_da_pagina">
                                 Unidades
                           </div>
                           <div class="faixa_busca">
                                 <div class="centraliza_input">
                                       <input type="search" name="" value="" placeholder="Search...">

                                 </div>
                                 <div class="ajusta_lupa">
                                       <img class="lupa" src="../imagens/magnifier.png" alt="">
                                 </div>
                           </div>
                           <div class="suporte_unidade">

                                 <div class="faixa_nome_da_unidade">
                                       Jandira
                                 </div>
                                 <div class="faixa_imagem_e_mapa">
                                       <div class="imagem">
                                             <img src="../imagens/hospital-jandira.jpg" alt="">
                                       </div>
                                       <div class="mapa_da_unidade">
                                             <img src="../imagens/mapa.png" alt="">
                                       </div>
                                 </div>

                           </div>
                           <div class="suporte_unidade">
                                 <div class="faixa_nome_da_unidade">
                                       Barueri
                                 </div>
                                 <div class="faixa_imagem_e_mapa">
                                       <div class="imagem">
                                             <img src="../imagens/hospital_barueri.jpg" alt="">
                                       </div>
                                       <div class="mapa_da_unidade">
                                             <img src="../imagens/mapa.png" alt="">
                                       </div>
                                 </div>

                           </div>
                           <div class="suporte_unidade">
                                 <div class="faixa_nome_da_unidade">
                                       Itapevi
                                 </div>
                                 <div class="faixa_imagem_e_mapa">
                                       <div class="imagem">
                                             <img src="../imagens/hospital_itapevi.jpg" alt="">
                                       </div>
                                       <div class="mapa_da_unidade">
                                             <img src="../imagens/mapa.png" alt="">
                                       </div>
                                 </div>

                           </div>
                           <div class="suporte_unidade">
                                 <div class="faixa_nome_da_unidade">
                                       São Paulo
                                 </div>
                                 <div class="faixa_imagem_e_mapa">
                                       <div class="imagem">
                                             <img src="../imagens/hospital_sp.jpg" alt="">
                                       </div>
                                       <div class="mapa_da_unidade">
                                             <img src="../imagens/mapa.png" alt="">
                                       </div>
                                 </div>

                           </div>
                      </div>

                      <footer><!--**FOOTER**-->
                            <div class="footer">
                                  <?php require_once('footer.php'); ?>
                            </div>
                      </footer>
                </div>
            </div>
      </body>
</html>
