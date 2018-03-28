<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
      <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
            <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_ambiente_hhealth.css">
            <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="../js/arc4.js"></script>
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
                                	Ambiente
                           </div>
                           <div class="suporte_ambiente">
                                 <div class="titulo_ambiente">
                                       Quarto 1
                                 </div>
                                 <div class="imagem_grande_ambiente">
                                        <div class="cover">
                                            <img src="../imagens/maternidade.jpg" alt="lalal">
                                        </div>
                                        <div class="thumbs">
                                           <div class="imagens_pequenas_ambiente">
                                                <img src="../imagens/maternidade1.jpg" alt="" class="active">
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                                 <img src="../imagens/maternidade2.jpg" alt="" class="gallery">
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                                 <img src="../imagens/maternidade3.jpg" alt="" class="gallery">
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                                 <img src="../imagens/maternidade4.jpg" alt="" class="gallery">
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                                 <img src="../imagens/maternidade5.jpg" alt="" class="gallery">
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                                 <img src="../imagens/maternidade6.jpg" alt="" class="gallery">
                                           </div>
                                        </div>
                                 </div>
                           </div>
						  <div class="caixa_centro">
							<div class="faixa_titulo" >
								Tipo
							</div>
							<div class="linha">

      						</div>
							<div class="tipo">
								Luxo
      						</div>
							<div class="faixa_titulo" >
								Especificações do quarto
							</div>
							<div class="linha">

      						</div>
							<div class="lista_especificacoes">
								<ul>
									<li>2 cadeiras</li>
									<li>1 cama paciente</li>
									<li>1 banheiro</li>
									<li>1 cama acompanhante</li>
									<li>1 quadro</li>
									<li>1 sofá</li>
									<li>1 mesa de centro</li>
									<li>1 comôda de roupa</li>
									<li>1 mesa de refeição</li>
									<li>4 cadeiras</li>
								</ul>
      						</div>
						  </div>
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
