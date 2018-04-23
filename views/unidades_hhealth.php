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
                          
                          <?php
                            include_once("../CMS/model_cms/unidade_class.php");
                            include_once("../CMS/controller_cms/unidade_controller.php");
                          
                            $controller_unidade=new controller_unidade();
                            $list=$controller_unidade::Listar();
                          
                            $cont=0;
                            while($cont<count($list)){
                          
                          ?>
                          
                           <div class="suporte_unidade">
                                 <a href="unidade_hhealth.php">
                                   <div class="faixa_nome_da_unidade">
                                         <?php echo($list[$cont]->nome_unidade)?>
                                   </div>
                                 </a>
                                 <div class="faixa_imagem_e_mapa">
                                       <div class="imagem">
                                             <img src="../CMS/<?php echo($list[$cont]->imagem)?>" alt="">
                                       </div>
                                       <div class="mapa_da_unidade">
                                             <img src="../imagens/mapa.png" alt="">
                                       </div>
                                 </div>

                           </div>
                           <?php
                                $cont++;
                            }
                          ?>
                      </div>

                </div>
                <!-- Esse require adiciona o rodapé na página -->
                <?php require_once('footer.php'); ?>
            </div>
      </body>
</html>
