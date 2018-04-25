<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
      <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
            <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_sobre_hhealth.css">
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
                                 Sobre o HHealth
                           </div>
                          <?php
                          include_once("../CMS/model_cms/gerenciamento_sobre_class.php");
                          include_once("../CMS/controller_cms/gerenciamento_sobre_controller.php");


                          $controller_sobre = new controllerSobre();
                          $list = $controller_sobre::Listar();
                          $cont=0;
                          if($cont<count($list)){

                          ?>
                           <div class="faixa1">
                                 <?php echo($list[$cont]->sobre);?>
                           </div>
                          <div class="div_suporte_conteudo">

                          </div>
                           <div class="faixa2">
                                 <div class="suporte_img_faixa2">
                                       <div class="circulo_img_faixa2">
                                             <img src="../CMS/<?php echo($list[$cont]->imagem1);?>" alt="">
                                             Missão
                                       </div>
                                 </div>
                                 <div class="suporte_txt_faixa2">
                                       <div class="txt_faixa2">
                                             <?php echo($list[$cont]->missao);?>
                                       </div>
                                 </div>
                           </div>
                           <div class="div_suporte_conteudo">

                           </div>
                           <div class="faixa3">
                                 <div class="suporte_txt_faixa3">
                                       <div class="txt_faixa3">
                                             <?php echo($list[$cont]->visao);?>
                                       </div>
                                 </div>
                                 <div class="suporte_img_faixa3">
                                       <div class="circulo_img_faixa3">
                                             <img src="../CMS/<?php echo($list[$cont]->imagem2);?>" alt="">
                                             Missão
                                       </div>
                                 </div>
                           </div>
                           <div class="div_suporte_conteudo">

                           </div>
                           <div class="faixa4">
                                 <div class="suporte_img_faixa4">
                                       <div class="circulo_img_faixa4">
                                             <img src="../CMS/<?php echo($list[$cont]->imagem3);?>" alt="">
                                             Missão
                                       </div>
                                 </div>
                                 <div class="suporte_txt_faixa4">
                                       <div class="txt_faixa4">
                                             <?php echo($list[$cont]->valores);?>
                                       </div>
                                 </div>
                           </div>
                           <?php
                             $cont++;
                         }
                         ?>

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
