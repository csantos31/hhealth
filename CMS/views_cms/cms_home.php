<?php

      require($caminho.'../verifica.php');

?>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="css_cms/style_cms_home.css">
        <link rel="stylesheet" type="text/css" href="css_cms/style_cms_menu.css">
        <link rel="stylesheet" type="text/css" href="css_cms/style_cms_footer.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_menu_lateral.css">
    </head>

    <body>

        <div class="main">  <!--Div main que segura todas as div-->


            <div class="content_cms">
                <?php include('menu_cms.php')?>

                <div class="content_home_cms"><!--conteudo da home do cms-->
                    <div class="menu_lateral_cms"><!--menu lateral-->

                        <div class="linha">
                            <div class="img_menu_lateral">
                                <img src="imagens/icon_home.png">
                            </div>

                            <div class="titulo_menu_lateral">
                                <a>Gerenciamento de Páginas</a>
                            </div>
                        </div>

                        <div class="linha">
                            <div class="img_menu_lateral">
                                <img src="imagens/icon_home.png">
                            </div>

                            <div class="titulo_menu_lateral">
                                <a>Gerenciamento de Páginas</a>
                            </div>
                        </div>

                    </div>

                    <div class="conteudo_home_cms"><!--conteudo menu-->
                    </div>
                </div>

                <?php include('footer_cms.php')?>
            </div>
        </div>

    </body>
</html>
