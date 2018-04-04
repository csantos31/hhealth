<?php


$action = "modo=inserir";
$nome = null;
$descricao = null;



if (isset($_GET['controller']))
    $caminho ="views_cms/";
else
    $caminho = "";


include($caminho.'../verifica.php');



/*NIVEL EDIT*/
if(isset($niv)){
    $action = "modo=editar&id=". $niv->id_nivel;
    $nome = $niv->nome;
    $descricao = $niv->descricao;

}

?>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_crud_home.css">
        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_cms_menu.css">
        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_cms_footer.css">


    </head>

    <body>

        <div class="main">  <!--Div main que segura todas as div-->


            <div class="content_cms">
                <?php include('menu_cms.php')?>

                <div class="content_home_cms"><!--conteudo da home do cms-->
                  <!-- Include once do menu lateral -->
                  <?php include_once('menu_lateral_cms.php'); ?>

                    <div class="conteudo_home_cms"><!--conteudo menu-->
                        <div class="content_titulo_nivel">
                            <div class="titulo_nivel">
                                <a>Gerenciamento da home</a>
                            </div>
                        </div>

                        <div class="content_cadastro_nivel"><!--cadastro de niveis-->
                          <div class="menu_gerenciamento_home">
                            <div class="item_menu_gerenciamento_home">
                              Slider Principal
                            </div>
                            <div class="item_menu_gerenciamento_home">
                              Slider Secundario
                            </div>
                            <div class="item_menu_gerenciamento_home">
                              Frase do Hospital
                            </div>
                          </div>
                        </div>

                        <div class="tabela_nivel_usuario"><!--tabela nivel-->
                            <div class="content_titulo_tabela_niveis">
                                <div class="titulo_niveis">
                                    <a>Níveis</a>

                                </div>

                                <div class="titulo_acoes">
                                    <a>Ações</a>
                                </div>
                            </div>


                                <div class="content_campo_niveis">
                                    <div class="campo_niveis">
                                        <a> </a>
                                    </div>
                                    <div class="campo_acoes">
                                        <a href="<?= $caminho ?>../router.php?controller=nivel&modo=buscar_id&codigo=<?php echo($list[$cont]->id_nivel); ?>">
                                            <img src="<?=$caminho?>imagens/edit.png">
                                        </a>
                                        <a href="<?= $caminho ?>../router.php?controller=nivel&modo=excluir&codigo=<?php echo($list[$cont]->id_nivel); ?>" onclick="return confirm('Tem certeza Marcel?? OLHA A CAAAABRA');">
                                            <img src="<?=$caminho?>imagens/shutdown.png">
                                        </a>
                                    </div>
                                </div>


                        </div>

                    </div>
                </div>

                <?php include('footer_cms.php')?>
            </div>
        </div>

    </body>
</html>
