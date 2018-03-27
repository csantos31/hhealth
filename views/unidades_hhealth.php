<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<<<<<<< HEAD
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!DOCTYPE html>
    <html lang="pt-br" dir="ltr">
      <head>
        <!-- Link para estilização da pagina -->
        <link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/style_unidades.css">

        <meta charset="utf-8">
        <title>Unidades</title>
      </head>
      <body>
        <!-- Div que segura todas o conteuddo da página -->
         <div id="main">
          <!-- incluindo página menu da página -->
          <?php //require_once('nav.php'); ?>

          <!-- Div que segura todo conteúdo da página -->
          <div id="content_sobre_hhealth">
            <!-- titulo da página -->
            <div id="suporte_titulo">
              <div id="titulo_pagina">
                <strong>Unidades</strong>
              </div>
            </div>
            <!-- Faixa branca embaixo do menu -->
            <div class="faixa_branca">

            </div>

            <!-- Segura a barra de pesquisa de unidade -->
            <div id="suporte_barra_pesquisa">

              <input type="text" name="txt_barra_pesquisa" value="" placeholder="Search" id="input_pesquisa"><!-- Barra de pesquisa da unidade-->
              <div id="lupa" onclick="alert('ok :)');"></div>
            </div>

            <!-- Div que segura as unidades -->
            <div class="suporte_unidade">
              <!-- Div que segura titulo -->
              <div class="suporte_titulo_item_unidade">
                <div class="titulo_item"> <!-- Titulo -->
                  Unidade 1
                </div>
              </div>

              <!-- div imagem -->
              <div class="imagem_unidade">

              </div>

              <!-- Mostra localização da unidade -->
              <div class="mapa_unidade">

              </div>
            </div>

            <!-- Div que segura as unidades -->
            <div class="suporte_unidade">
              <!-- Div que segura titulo -->
              <div class="suporte_titulo_item_unidade">
                <div class="titulo_item"> <!-- Titulo -->
                  Unidade 1
                </div>
              </div>

              <!-- div imagem -->
              <div class="imagem_unidade">

              </div>

              <!-- Mostra localização da unidade -->
              <div class="mapa_unidade">

              </div>
            </div>
            

          </div>

          <!-- incluindo rodapé da pagina -->
          <?php include_once('footer.php'); ?>
        </div>
      </body>
    </html>

  </body>
=======
      <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
            <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_unidade.css">
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
>>>>>>> 343a5d963bf1b3bf92594cbf66edbc2abe96f778
</html>
