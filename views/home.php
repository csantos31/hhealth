<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style_padrao.css">
        <link rel="stylesheet" type="text/css" href="css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="css/style_footer.css">
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
            <div class="slider"><!--**SLIDER**-->
                  <img src="imagens/portada_doctuo.jpg" alt="">
            </div>
            <div id="suporte_menu_de_acesso_rapido"><!--MENU ACESSO RÁPIDO-->
              <div id="menu_de_acesso_rapido">
                  <div class="item_menu_de_acesso_rapido">
                  </div>

                  <div class="item_menu_de_acesso_rapido">
                  </div>

                  <div class="item_menu_de_acesso_rapido">
                  </div>

                  <div class="item_menu_de_acesso_rapido">
                  </div>

                  <div class="item_menu_de_acesso_rapido">
                  </div>
              </div>
            </div>
            <div class="suporte_content">
                  <div class="content"><!--**CONTENT**-->
                      <div class="faixa_1_content_home"><!--faixa1-->
                          <div class="content_login_usuario_home"><!--login-->
                              <div class="faixa_login_home">
                                  <a>Login</a><br>
                                  <input name="txt_login" type="text" value="" placeholder="Email Adress">
                              </div>

                              <div class="faixa_login_home">
                                  <a>Senha</a><br>
                                  <input name="txt_senha" type="password" value="" placeholder="********">
                              </div>

                              <div class="faixa_login_home">
                                  <p>Esqueci minha senha?</p>
                              </div>

                              <div class="faixa_login_home">
                                  <input type="submit" name="btn_entrar" value="Entrar">
                              </div>

                              <div class="faixa_login_home">
                                  <span>Ou</span>
                              </div>
                              <div class="faixa_login_home">
                                  <span>Cadastre-se</span>
                              </div>

                          </div>

                          <div class="slider_faixa1"><!--slider-->
                              <div class="faixa1_img_slide_home">
                              </div>

                              <div class="faixa1_img_slide_home">
                              </div>
                          </div>
                      </div>

                      <div class="faixa_2_content_home"><!--faixa2-->
                          <div class="titulo_faixa_2_home">
                              <a> Ambientes do Hospital</a>
                          </div>

                          <div class="content_img_faixa_2_home">
                              <div class="img_faixa_2_home">
                              </div>

                              <div class="img_faixa_2_home">
                              </div>

                              <div class="img_faixa_2_home">
                              </div>

                              <div class="img_faixa_2_home">
                              </div>

                              <div class="img_faixa_2_home">
                              </div>

                              <div class="img_faixa_2_home">
                              </div>
                          </div>

                          <div class="content_btn_faixa_2_home">
                              <p>Ver todos os ambiente do hospital</p>
                          </div>
                      </div>

                      <div class="faixa_3_content_home">
                          <div class="content_faixa_3_unidades_home">
                              <div class="img_faixa_3_home">
                              </div>

                              <div class="descricao_faixa_3_home">
                              </div>
                          </div>

                          <div class="content_faixa_3_unidades_home">
                              <div class="img_faixa_3_home">
                              </div>

                              <div class="descricao_faixa_3_home">
                              </div>
                          </div>
                      </div>
                  </div>
            </div>


            <footer><!--**FOOTER**-->
                  <div class="footer">
                        <?php require_once('footer.php'); ?>
                  </div>
            </footer>
        </div>

    </body>
</html>
