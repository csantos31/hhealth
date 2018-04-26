<?php

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
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jcarousellite.js"></script>
        <script type="text/javascript" src="js/carrossel.js"></script>
        <script>
            /*
             window.setInterval(function() {
                $("h1").append("<br>HHealth cuidará de <br> você");
            }, 5000);
        */
             $(document).ready(function(){

                 /*
                     if($('#my_text').html().length < 500)
                    {
                        $('#read_more').hide();
                    }
                 */
                 var myvar = $('h1').html().length
                 console.log(myvar);
                 if($('h1').html().length > 3 && $('h1').html().length < 22){



                     /*window.setInterval(function() {
                        $("h1").append("<br>HHealth <br>cuidará de você");
                    }, 5000);*/

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
        <script>
            /*FUNCTIONS*/
            function Cadastrar(){
                  $.ajax({
                      type:"POST",
                      url:"views/modal_cad_paciente.php",
                      success: function(dados){
                          $(".modal").html(dados);
                      }
                  });
              }
        </script>
    </head>
    <body>
      <div class="container_modal"><!--container da modal-->
          <div class="modal"><!--modal-->
          </div>
      </div>
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
                  <form name="" method="post" action="router.php?controller=paciente&modo=login">
                        <!--COnTEnT MODAL-->

                      <div class="label_email">Endereço de e-mail:</div>
                      <input type="text" name="txt_usuario" id="txt_usuario">

                      <div class="label_senha">Senha:</div>
                      <input type="password" name="txt_senha" id="txt_senha">

                      <input type="submit" name="go_logar" id="btn_go_logar" value="Entrar">
                  </form>
                  <label> Ainda não tem perfil? </label> <a onclick="Cadastrar()" style="cursor:pointer;">Cadastre-se</a>
              </div>
               <?php require_once('nav.php'); ?>

             <div class="div_suporte_conteudo">
             </div>

              
             
             <!--***********************SLIDE***********************-->
             <div class="w3-content w3-display-container" style="max-width:100%;heigh:700px;">
                <?php
                 
                    include_once('/CMS/controller_cms/gerenciamento_home_controller.php');
                    include_once('/CMS/model_cms/gerenciamento_home_class.php');
                 
                    $controller_home = new controller_home();
                    $list = $controller_home::Listar();
                    $cont = 0;
                    while($cont<count($list)){
                        
                ?>
               <img class="mySlides" src="CMS/<?php echo($list[$cont]->slide1)?>" alt="" style="width:100%;height:700px;" >
               <img class="mySlides" src="CMS/<?php echo($list[$cont]->slide2)?>" alt="" style="width:100%;height:700px;">
               <img class="mySlides" src="CMS/<?php echo($list[$cont]->slide3)?>" alt="" style="width:100%;height:700px;">
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

             <script type="text/javascript" src="js/slide_home.js"></script>
             <div class="suporte_content" style="postion:relative;" >
                    <div class="content" position:relative;><!--**CONTENT**-->
                        <div class="faixa_1_content_home"><!--faixa1-->
                              <!--SLIDER FICA AKI-->
                            <div class="content_carrossel">
                              <div class="passar_carrossel">
                                <a href="#" class="prev" title="Anterior"><img src="imagens/icons/seta-voltar.png" alt="Voltar"></a>
                              </div>
                              <div class="carrossel">
                                  <ul>
                                      <li>
                                          <img src="imagens/saude-bucal.png" alt="Nome da Imagem" title="Nome da Imagem"/>
                                      </li>
                                      <li>
                                          <img src="imagens/cardiologia.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
                                      </li>
                                      <li>
                                          <img src="imagens/saude-bucal.png" alt="Nome da Imagem" title="Nome da Imagem"/>
                                      </li>
                                      <li>
                                          <img src="imagens/cardiologia.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
                                      </li>
                                      <li>
                                          <img src="imagens/cardiologia.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
                                      </li>
                                      <li>
                                          <img src="imagens/cardiologia.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
                                      </li>
                                      <li>
                                          <img src="imagens/cardiologia.jpg" alt="Nome da Imagem" title="Nome da Imagem"/>
                                      </li>
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
                                  <h1>Onde você estiver, </h1>
                              </div>
                          </div>
                        </div>
                        <div class="faixa_2_content_home"><!--faixa2-->
                            <div id="hg">
                                <div class="titulo_faixa_2_home" >
                                    <a style="font-size: 45px;font-weight: 400;"> Ambientes do Hospital</a>
                                </div>

                                <div class="content_img_faixa_2_home">
                                    <div class="img_faixa_2_home">
                                        <img src="imagens/maternidade.jpg" alt="quartos do hospital" title="quartos do hospital">
                                    </div>

                                    <div class="img_faixa_2_home">
                                        <img src="imagens/maternidade1.jpg" alt="quartos do hospital" title="quartos do hospital">
                                    </div>

                                    <div class="img_faixa_2_home">
                                        <img src="imagens/maternidade2.jpg" alt="quartos do hospital" title="quartos do hospital">
                                    </div>

                                    <div class="img_faixa_2_home">
                                        <img src="imagens/maternidade3.jpg" alt="quartos do hospital" title="quartos do hospital">
                                    </div>

                                    <div class="img_faixa_2_home">
                                        <img src="imagens/maternidade4.jpg" alt="quartos do hospital" title="quartos do hospital">
                                    </div>

                                    <div class="img_faixa_2_home">
                                        <img src="imagens/maternidade5.jpg" alt="quartos do hospital" title="quartos do hospital">
                                    </div>
                                    <div class="content_btn_faixa_2_home">
                                        <p>Ver todos os ambiente do hospital</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="faixa_3_content_home"><!--Slider-->
                            <div class="carrossel_local">
                                <div class="content_faixa_3_unidades_home">
                                    <div class="img_faixa_3_home">
                                        <img src="imagens/4992868.jpg" alt="unidades">
                                    </div>

                                    <div class="descricao_faixa_3_home">
                                    </div>
                                    <div class="informa_unidade">
                                        <h1>Unidade de jandira</h1>
                                        <b>Telefone:</b><p>(11)4545-5445<p>
                                        <b>Um pouco mais sobre a unidade: </b>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt moll
                                          it anim id est laborum.</p>
                                    </div>
                                </div>

                                <div class="content_faixa_3_unidades_home">
                                    <div class="img_faixa_3_home">
                                        <img src="imagens/imagem_hospital.jpg" alt="unidades">
                                    </div>
                                    <div class="descricao_faixa_3_home">
                                    </div>
                                    <div class="informa_unidade">
                                        <h1>Unidade de Osasco</h1>
                                        <b>Telefone:</b><p>(11)4545-5445<p>
                                        <b>Um pouco mais sobre a unidade: </b>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt moll
                                          it anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>
             <!-- Esse require adiciona o rodapé na página -->
             <?php require_once('footer.php'); ?>
          </div>
      </div>
    </body>
</html>
