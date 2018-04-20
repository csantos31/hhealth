<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Hospital Hhealth</title>
        <link rel="stylesheet" type="text/css" href="../css/style_dicas_saude.css">
        <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="../js/arc4.js"></script>
        <script type="text/javascript" src="../js/arc1.js"></script>
        <script type="text/javascript" src="../js/jquery.cycle.all.js.js"></script>
    </head>
    <body>
      <div class="main"><!--Div Main que segura todas as divs-->
            <!-- Esse require adiciona o menu na página -->
            <?php require_once('nav.php'); ?>
         <div class="div_suporte_conteudo">

         </div>
         <div id="content_main">
           <!-- titulo da página -->
           <div id="suporte_titulo">
           </div>

           <div id="segura_slider">
             <div id="superior">
                 <div id="transicao">
                     <p id="previous"><img src="../imagens/icons/seta-voltar.png"></p>
                     <div id="galeria">
                         <ul id="list">
                             <?php
                             include_once("../CMS/controller_cms/gerenciamento_slide_saude_controller.php");
                             include_once("../CMS/model_cms/gerenciamento_slide_saude_class.php");
                             
                             $controller_slide_saude = new controller_slide_saude();
                             $list = $controller_slide_saude::Listar();
                             
                             
                             $cont=0;
                             while($cont<count($list)){
                                 
                                if($list[$cont]->status==1){
                             ?>
                             <li><img alt="celular" title="celular" class="image" src="../CMS/<?php echo($list[$cont]->slide)?>"></li>
                             
                             <?php
                                }
                                $cont++;
                             }
                             ?>
                             
                         </ul>
                     </div>
                     <p id="next"><img src="../imagens/icons/seta-avancar.png"></p>
                 </div>
             </div>
           </div>

           <div class="suporte_imagens_dicas">
            <?php
               include_once("../CMS/controller_cms/gerenciamento_dica_saude_controller.php");
               include_once("../CMS/model_cms/gerenciamento_dica_saude_class.php");
               
               $controller_dica_saude = new controller_dica_saude();
               $list = $controller_dica_saude::Listar();
               $cont=0;
               while($cont < count($list)){
                   
                   
                   if($list[$cont]->status==1){
                       
                   
               
                ?>
             <div class="suporte_itens">
               <div class="imagens">
                 <img src="../CMS/<?php echo($list[$cont]->imagem)?>" alt="" class="item_imagem">
               </div>
               <a href="dica_saude.php">
                 <div class="titulo_dicas">
                   <div class="suporte_titulo_dicas">
                      <?php echo($list[$cont]->titulo)?>
                   </div>
                 </div>
               </a>
             </div>
            <?php
               }
               $cont=$cont+1;
               
               }
               
               ?>
            </div>
          </div>
          <!-- Esse require adiciona o menu na página -->
          <?php require_once('footer.php'); ?>
        </div>
    </body>
</html>
