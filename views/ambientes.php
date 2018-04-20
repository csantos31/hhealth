<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
      <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
            <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_ambientes.css">
            <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="../js/arc4.js"></script>
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
                          
                          
                          
                          
                          <?php
                          include_once('../CMS/controller_cms/gerenciamento_ambiente_controller.php');
                          include_once('../CMS/model_cms/gerenciamento_ambiente_class.php');
                          
                          $controller_ambiente = new controller_ambiente();
                          $list = $controller_ambiente::Listar();
                          
                          $selecionar_por_id=$controller_ambiente::Buscar();
                          
                          $cont=0;
                          while($cont<count($list)){
                              
                          
                          ?>
                            <div class="content_menu_lateral_ambientes">

                              <div class="menu">
                                  <a><?php echo($list[$cont]->titulo)?></a>
                              </div>

                            </div>
                          <?php 
                          
                          if(){
                          ?>
                           <div class="suporte_ambiente">
                                 <div class="titulo_ambiente">
                                       Maternidade
                                 </div>
                                 <div class="imagem_grande_ambiente">
                                        <div class="cover">
                                            <img src="../CMS/<?php echo($list[$cont]->imagem)?>" alt="lalal">
                                        </div>
                                        <div class="thumbs">
                                           <div class="imagens_pequenas_ambiente">
                                                <img src="../CMS/<?php echo($list[$cont]->imagem)?>" alt="" class="active">
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                                 <img src="../CMS/<?php echo($list[$cont]->imagem2)?>" alt="" class="gallery">
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                                 <img src="../CMS/<?php echo($list[$cont]->imagem3)?>" alt="" class="gallery">
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                                 <img src="../CMS/<?php echo($list[$cont]->imagem4)?>" alt="" class="gallery">
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                                 <img src="../CMS/<?php echo($list[$cont]->imagem5)?>" alt="" class="gallery">
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                                 <img src="../CMS/<?php echo($list[$cont]->imagem6)?>" alt="" class="gallery">
                                           </div>
                                        </div>
                                 </div>
                           </div>
                          <?php
                          }
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
