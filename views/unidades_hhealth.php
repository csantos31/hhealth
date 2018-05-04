<?php

  $latitude = [51.508742,21.508742,0.508742];
  $longitude = [-0.120850, -20.120850, -10.120850];


?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
      <head>

        <!-- Link para estilização da pagina -->
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/style_unidades_hhealth.css">
        <title>Hospital HHealth</title>
        <script>

          // Guardo valores de um array do php em variaveis do JavaScript
          var latitude = <?php echo json_encode($latitude);?>; // obs o JavaScript so recebe array em Json
          var longitude = <?php echo json_encode($longitude);?>;

          // Crio uma função
          function myMap() {
          <?php

            $resultado = count($latitude);//Conto a quantidade que tem no array latitude
            $cont = 0 ;//Crio uma variavel cont para contar no while

            // Faço o while em php para repetir passando todos os mapPropCriados e se precisar criando um novo
            while ($cont < $resultado) {
          ?>
            var mapProp<?php echo $cont; ?> = {//Crio uma variavel em JS mapProp que recebe parametros do google map
                center:new google.maps.LatLng(latitude[<?php echo $cont; ?>],longitude[<?php echo $cont; ?>]),
                zoom:7,
            };

          <?php
              // Faço a iteração do while
              $cont+=1;
            }
           ?>
            // Pego as classes que tem no html e salvo em uma variavel do JS
            var elementos = document.getElementsByClassName("googleMap");
            var contaElementos = elementos.length;// conto a quantidade existentes que existe no html
            var cont = 0; // Crio uma variavel de iteração em JS
            while (cont < contaElementos) {// Faço um while para mostrar todos os elementos

              <?php
                $resultado = count($latitude);// conto quantas latitudes existem
                $cont = 0; //Crio uma variavel de iteração
                while ($cont < $resultado){ // while para repetir os valores mudando algumas coisas
              ?>
              // Mostro o mapa na div certa e com as caracteristicas certas
              var map=new google.maps.Map(elementos[<?= $cont ?>],mapProp<?= $cont ?>);
              <?php
                $cont+=1;
                }
              ?>
              cont++;
            }
          }
        </script>


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
                                             <div class="googleMap"></div>
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
          <script src="../js/googlemaps.js"></script>
      </body>
</html>
