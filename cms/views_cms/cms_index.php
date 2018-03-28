<?php 

      require('../verifica.php');

?>

<html>
    <head>

        <link rel="stylesheet" type="text/css" href="../views_cms/css/style_cms_home.css">
        <link rel="stylesheet" type="text/css" href="../views_cms/css/style_cms_menu.css">
        <link rel="stylesheet" type="text/css" href="../views_cms/css/style_cms_footer.css">

    </head>

    <body>

        <div class="main">  <!--Div main que segura todas as div-->
            <?php //include_once('views_cms/menu_cms.php'); ?>

            <div class="content_cms">
                <div class="suporte_header">
                    <div class="header_home_cms"><!--conteudo da home do cms-->
                        <div class="content_logo_titulo_cms">
                            <div class="logo_cms">
                                <img src="../views_cms/imagens/logo.png">
                            </div>

                            <div class="titulo_cms"><!---->
                                <a>Sistema de Gerenciamento do Site</a>
                            </div>
                        </div>
                        <div class="content_user">
                            <div class="icon_user">
                                <img src="../views_cms/imagens/user.png">
                            </div>

                            <div class="name_user">
                                <a>User Administrator</a>
                            </div>

                            <div class="content_logout">
                                <a>Logout</a>
                                <img src="../views_cms/imagens/logout.png">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="content_home_cms"><!--conteudo da home do cms-->
                    <div class="menu_lateral_cms"><!--menu lateral-->

                        <div class="linha">
                            <div class="img_menu_lateral">
                                <img src="../views_cms/imagens/icon_home.png">
                            </div>

                            <div class="titulo_menu_lateral">
                                <a>Gerenciamento de usuários</a>
                            </div>
                        </div>

                        <a href="views_cms/nivel_usuario.php">
                            <div class="linha">
                                <div class="img_menu_lateral">
                                    <img src="../views_cms/imagens/icon_home.png">
                                </div>
                                <div class="titulo_menu_lateral">
                                    <a>Gerenciamento de nível de usuários</a>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="conteudo_home_cms"><!--conteudo menu-->
                    </div>
                </div>

                <?php include('../views_cms/footer_cms.php')?>
            </div>
        </div>

    </body>
</html>
