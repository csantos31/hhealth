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
                  <!-- Esse require adiciona o menu na página -->
                 <?php require_once('nav.php'); ?>
                <div class="div_suporte_conteudo">

                </div>
                <div class="suporte_content">
                      <div class="content">
                           <div class="faixa_busca">
                                 <div class="centraliza_input">
                                       <input type="search" name="" value="" placeholder="Search...">

                                 </div>
                                 <div class="ajusta_lupa">
                                       <img class="lupa" src="../imagens/magnifier.png" alt="">
                                 </div>
                           </div>
                           <div class="suporte_unidade">
                                 <a href="unidade_hhealth.php">
                                   <div class="faixa_nome_da_unidade">
                                         Jandira
                                   </div>
                                 </a>
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
                                 <a href="unidade_hhealth.php">
                                   <div class="faixa_nome_da_unidade">
                                         Barueri
                                   </div>
                                 </a>

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
                                 <a href="unidade_hhealth.php">
                                   <div class="faixa_nome_da_unidade">
                                         Itapevi
                                   </div>
                                 </a>

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
                                 <a href="unidade_hhealth.php">
                                   <div class="faixa_nome_da_unidade">
                                         Sao Paulo
                                   </div>
                                 </a>

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

                </div>
                <!-- Esse require adiciona o rodapé na página -->
                <?php require_once('footer.php'); ?>
            </div>
      </body>
</html>
