<?php
  include('sistema_interno/controllers/util.php');

    session_start();

    if(isset($_GET['destroi_sessao'])){
        session_destroy();
        header('location:../index.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Hospital HHealth</title>
        <link rel="stylesheet" type="text/css" href="css/style_padrao.css">
        <link rel="stylesheet" type="text/css" href="css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="css/style_footer.css">
        <link rel="stylesheet" href="css/w3c_css.css">
        <meta name="viewport" content="initial-scale=1, maximun-scale=1">
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script src="js/jcarousellite.js"></script>
        <script src="js/carrossel.js"></script>

        <script>
          function myMap() {
          var mapProp= {
              center:new google.maps.LatLng(51.508742,-0.120850),
              zoom:5,
          };
          // $('.myClass');
          var elementos = document.getElementsByClassName("googleMap");
          var i;
          for (i = 0; i < elementos.length; i++) {
            var map=new google.maps.Map(elementos[i],mapProp);
            // .style.backgroundColor = "red";
          }


          }
        </script>
        <script>

             $(document).ready(function(){
                 var myvar = $('h1').html().length
                 console.log(myvar);
                 if($('h1').html().length > 3 && $('h1').html().length < 100){

                     setTimeout(function(){
                        //Faz o submit no form sem a ação do botao
                        $("#div_type").append("<h1>HHealth <h1>");
                    },5000);
                     setTimeout(function(){
                        //Faz o submit no form sem a ação do botao
                         $("#div_type").append("<h3>Cuidará de você!</h3>")

                    },9000);


                 }else if($('h1').html().length == 19){
                     window.clearInterval();
                 }

             });

        </script>
    </head>
    <body>
      <div id="principal">
          <div class="main"><!--Div Main que segura todas as divs-->
               <div class="modal_login">
                    <label id="lbl_paciente">Área do paciente:</label>
                    <button id="btn_login" onclick="document.getElementById('caixa_login_home').style.display='block';">Login</button>
              </div>
              <div id="caixa_login_home" >
                  <div id="superior_vermelha">
                        <img id="icon_cad" src="imagens/padlock_icon.png" alt="pass" title="pass">
                        <div class="label_login">Login</div>
                          <a href="#" onclick="document.getElementById('caixa_login_home').style.display='none';">
                            <div id="borda_minimizar"></div>
                          </a>
                  </div>
                  <form name="frm_1" method="post" action="router.php?controller=paciente&modo=login">
                        <!--COnTEnT MODAL-->
                      <div class="label_email">Usuário:</div>
                      <input type="text" name="txt_usuario" id="txt_usuario">

                      <div class="label_senha">Senha:</div>
                      <input type="password" name="txt_senha" id="txt_senha">

                      <input type="submit" name="go_logar" id="btn_go_logar" value="Entrar">
                  </form>
                  <label> Ainda não tem perfil? </label> <a href="views/modal_cad_paciente.php">Cadastre-se</a>
              </div>
               <?php require_once('nav.php'); ?>

             <div class="div_suporte_conteudo">
             </div>
             <!--***********************SLIDE***********************-->
             <div class="w3-content w3-display-container" style="max-width:100%;">
                <?php

                    include_once('CMS/controller_cms/gerenciamento_home_controller.php');
                    include_once('CMS/model_cms/gerenciamento_home_class.php');

                    $controller_home = new controller_home();
                    $list = $controller_home::Listar();
                    $cont = 0;

                    while($cont<count($list)){

                ?>
               <img class="mySlides" src="CMS/<?php echo($list[$cont]->slide1)?>" alt="" style="width:100%;" >
               <img class="mySlides" src="CMS/<?php echo($list[$cont]->slide2)?>" alt="" style="width:100%;">
               <img class="mySlides" src="CMS/<?php echo($list[$cont]->slide3)?>" alt="" style="width:100%;">
                 <?php

                        $cont++;
                    }
                 ?>
               <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" >
                  <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                  <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                  <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
               </div>

             </div>

             <script src="js/slide_home.js"></script>
             <div class="suporte_content">
                    <div class="content"><!--**CONTENT**-->
                        <div class="faixa_1_content_home"><!--faixa1-->
                              <!--SLIDER FICA AKI-->
                            <div class="titulo_faixa_1_home">
                              Dicas de Saúde
                            </div>
                            <div class="content_carrossel">
                              <div class="passar_carrossel">
                                <a href="#" class="prev" title="Anterior"><img src="imagens/icons/seta-voltar.png" alt="Voltar"></a>
                              </div>
                              <div class="carrossel">
                                  <ul>
                                      <?php
                                        include_once('CMS/controller_cms/gerenciamento_dica_saude_controller.php');
                                        include_once('CMS/model_cms/gerenciamento_dica_saude_class.php');

                                        $controller_saude = new controller_dica_saude();
                                        $list_saude = $controller_saude::Listar();

                                        $cont_saude=0;
                                        while($cont_saude<count($list_saude)){


                                      ?>
                                      <li>
                                          <img src="CMS/<?php echo($list_saude[$cont_saude]->imagem)?>" alt="Nome da Imagem" title="Nome da Imagem"/>

                                          <?php echo($list_saude[$cont_saude]->imagem)?>
                                      </li>

                                      <?php
                                            $cont_saude++;
                                        }
                                      ?>
                                  </ul>

                              </div>

                              <div class="passar_carrossel">
                                <a href="#" class="next" title="Próximo"><img src="imagens/icons/seta-avancar.png" alt="Avançar"></a>
                              </div>
                            </div>
                        </div>

                        <div id="suporte_menu_de_acesso_rapido"><!--MENU ACESSO RÁPIDO-->
                            <div id="menu_de_acesso_rapido">
                              <div class="typewriter" id="div_type">
                                  <?php
                                    include_once('CMS/controller_cms/gerenciamento_home_controller.php');
                                    include_once('CMS/model_cms/gerenciamento_home_class.php');

                                    $controller_home = new controller_home();
                                    $list = $controller_home::Listar();
                                    $cont = 0;
                                    while($cont<count($list)){

                                ?>
                                  <h1><?php echo($list[$cont]->frase)?> </h1>
                                  <?php
                                        $cont++;
                                    }
                                  ?>
                              </div>
                          </div>
                        </div>
                        <div class="faixa_2_content_home"><!--faixa2-->
                            <div id="hg">
                                <div class="titulo_faixa_2_home" >
                                    <a style="font-size: 45px;font-weight: 400;"> Ambientes do Hospital</a>
                                </div>

                                <div class="content_img_faixa_2_home">
                                    <?php
                                        include_once('CMS/controller_cms/gerenciamento_ambiente_controller.php');
                                        include_once('CMS/model_cms/gerenciamento_ambiente_class.php');

                                        $controller_ambiente = new controller_ambiente();
                                        $list = $controller_ambiente::ListarPHome();

                                        $cont=0;
                                        while($cont<count($list)){
                                            if($list[$cont]->ativo==1){

                                      ?>
                                    <div class="img_faixa_2_home">
                                      <div class="suporte_imagem_ambiente">
                                        <img src="CMS/<?php echo($list[$cont]->imagem)?>" alt="quartos do hospital">
                                        <div class="textoNomeAmbiente"><?php echo $list[$cont]->texto; ?></div>
                                      </div>

                                    </div>

                                    <div class="img_faixa_2_home">
                                      <div class="suporte_imagem_ambiente">
                                        <img src="CMS/<?php echo($list[$cont]->imagem2)?>" alt="quartos do hospital">
                                        <div class="textoNomeAmbiente"><?php echo $list[$cont]->texto2; ?></div>
                                      </div>

                                    </div>

                                    <div class="img_faixa_2_home">
                                      <div class="suporte_imagem_ambiente">
                                        <img src="CMS/<?php echo($list[$cont]->imagem3)?>" alt="quartos do hospital">
                                        <div class="textoNomeAmbiente"><?php echo $list[$cont]->texto3; ?></div>
                                      </div>
                                    </div>

                                    <div class="img_faixa_2_home">
                                      <div class="suporte_imagem_ambiente">
                                        <img src="CMS/<?php echo($list[$cont]->imagem4)?>" alt="quartos do hospital">
                                        <div class="textoNomeAmbiente"><?php echo $list[$cont]->texto4; ?></div>
                                      </div>
                                    </div>

                                    <div class="img_faixa_2_home">
                                      <div class="suporte_imagem_ambiente">
                                        <img src="CMS/<?php echo($list[$cont]->imagem5)?>" alt="quartos do hospital">
                                        <div class="textoNomeAmbiente"><?php echo $list[$cont]->texto5; ?></div>
                                      </div>
                                    </div>

                                    <div class="img_faixa_2_home">
                                      <div class="suporte_imagem_ambiente">
                                        <img src="CMS/<?php echo($list[$cont]->imagem6)?>" alt="quartos do hospital">
                                        <div class="textoNomeAmbiente"><?php echo $list[$cont]->texto6; ?></div>
                                      </div>
                                    </div>

                                    <?php
                                            }
                                            $cont++;
                                        }
                                    ?>
                                    <div class="content_btn_faixa_2_home">
                                      <a href="views/ambientes.php">  <p>Ver todos os ambiente do hospital</p></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="faixa_3_content_home"><!--Slider-->
                            <div class="carrossel_local">
                                <div class="content_faixa_3_unidades_home">
                                    <?php
                                        include_once('CMS/controller_cms/unidade_controller.php');
                                        include_once('CMS/model_cms/unidade_class.php');

                                        $controller_unidade = new controller_unidade();
                                        $list = $controller_unidade::Listar();

                                        $cont=0;
                                        if($cont<count($list)){
                                            if($list[$cont]->ativo==1){

                                      ?>
                                    <div class="img_faixa_3_home">
                                      <img src="CMS/<?php echo($list[0]->imagem)?>" alt="unidades">
                                    </div>

                                    <div class="descricao_faixa_3_home">
                                      <div class="googleMap" style="width:200px;height:200px;"></div>
                                    </div>
                                    <div class="informa_unidade">
                                        <h1><?php echo($list[0]->nome_unidade)?></h1>
                                        <b>Telefone:</b><p><?php echo($list[0]->telefone)?><p>
                                        <b>Um pouco mais sobre a unidade: </b>
                                        <p><?php echo($list[0]->texto)?></p>
                                    </div>
                                    <?php
                                            }
                                            $cont++;
                                        }
                                    ?>
                                </div>

                                <div class="content_faixa_3_unidades_home">
                                    <?php
                                        include_once('CMS/controller_cms/unidade_controller.php');
                                        include_once('CMS/model_cms/unidade_class.php');

                                        $controller_unidade = new controller_unidade();
                                        $list = $controller_unidade::Listar();

                                        $cont=0;
                                        if($cont<count($list)){
                                            if($list[$cont]->ativo==1){

                                      ?>
                                    <div class="img_faixa_3_home">
                                        <img src="CMS/<?php echo($list[1]->imagem)?>" alt="unidades">
                                    </div>
                                    <div class="descricao_faixa_3_home">
                                      <div class="googleMap" style="width:200px;height:200px;"></div>
                                    </div>
                                    <div class="informa_unidade">
                                        <h1><?php echo($list[1]->nome_unidade)?></h1>
                                        <b>Telefone:</b><p><?php echo($list[1]->telefone)?><p>
                                        <b>Um pouco mais sobre a unidade: </b>
                                        <p><?php echo($list[1]->texto)?></p>
                                    </div>
                                    <?php
                                            }
                                            $cont++;
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
             <!-- Esse require adiciona o rodapé na página -->
             <?php require_once('footer.php'); ?>
          </div>
      </div>
      <script type="text/javascript" src="js/wz_tooltip.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXjkNBAGDja43o4-Wp0LFaRlVmb7oA7-8&callback=myMap"></script>
      <!-- <script src="js/googlemaps.js"></script> -->
    </body>
</html>
