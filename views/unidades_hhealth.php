<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
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
</html>
