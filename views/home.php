<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style_padrao.css">
        <link rel="stylesheet" type="text/css" href="css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="css/style_footer.css">

        <link rel="stylesheet" href="css/w3c_css.css">

        <title>Hospital HHealth</title>
    </head>

    <body>
          <div class="main"><!--Div Main que segura todas as divs-->
               <div class="modal_login">
                    <label id="lbl_paciente">Área do paciente:</label>
                    <button id="btn_login" onclick="document.getElementById('caixa_login_home').style.display='block';">Login</button>
              </div>
              <div id="caixa_login_home" >
                  <a href="#" onclick="document.getElementById('caixa_login_home').style.display='none';"> 
                    <div id="borda_minimizar"></div>  
                  </a>
                
                  
                  <!--COnTEnT MODAL-->
                  <div class="label_login">Login</div>
                  <div class="label_email">Endereço de e-mail:</div>
                  <input type="text" name="txt_usuario" id="txt_usuario">
                
                  <div class="label_senha">Senha:</div>
                  <input type="password" name="txt_senha" id="txt_senha">
                  
                  <input type="submit" name="go_logar" id="btn_go_logar" value="Entrar">    
              </div>
               <?php require_once('nav.php'); ?>
              
             <div class="div_suporte_conteudo">
             </div>

             <!--***********************SLIDE***********************-->
             <div class="w3-content w3-display-container" style="max-width:100%;heigh:600px;">
               <img class="mySlides" src="imagens/portada_doctuo.jpg" alt="" style="width:100%;height:600px;" >
               <img class="mySlides" src="imagens/slide_2.jpg" alt="" style="width:100%;height:600px;">
               <img class="mySlides" src="imagens/img_login.jpg" alt="" style="width:100%;height:600px;">
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
                                  </ul>

                              </div>

                              <div class="passar_carrossel">
                                <a href="#" class="next" title="Próximo"><img src="imagens/icons/seta-avancar.png" alt="Avançar"></a>

                              </div>



                            </div>
                              <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                              <script type="text/javascript" src="js/jcarousellite.js"></script>
                              <script type="text/javascript" src="js/carrossel.js"></script>

                        </div>
                        
                        <div id="suporte_menu_de_acesso_rapido"><!--MENU ACESSO RÁPIDO-->
                            <div id="menu_de_acesso_rapido">
                              <div class="typewriter">
                                  <h1>Onde você estiver, HHEalth cuidará de você!.</h1>
                              </div>
                          </div>
                        </div>

                        <div class="faixa_2_content_home"><!--faixa2-->
                            <div class="titulo_faixa_2_home">
                                <a> Ambientes do Hospital</a>
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
                            </div>

                            <div class="content_btn_faixa_2_home">
                                <p>Ver todos os ambiente do hospital</p>
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
                                </div>

                                <div class="content_faixa_3_unidades_home">
                                    <div class="img_faixa_3_home">
                                        <img src="imagens/imagem_hospital.jpg" alt="unidades">
                                    </div>

                                    <div class="descricao_faixa_3_home">
                                    </div>
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
