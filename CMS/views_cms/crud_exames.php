<?php


$action = "modo=inserir";
$nome = null;
$descricao = null;


if (isset($_GET['controller']))
    $caminho ="views_cms/";
else
    $caminho = "";


include($caminho.'../verifica.php');



?>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_cms_exames.css">
        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_cms_menu.css">
        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_cms_footer.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_menu_lateral.css">

        <link rel="stylesheet" type="text/css" href="css/style_modal.css">

        <script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>

        <script>

        $(document).ready(function(){

            $(".novo").click(function(){
                $(".container_modal").toggle(2000);
            });

            $(".editar").click(function(){
                $(".container_modal").fadeIn(2000);

            });


        });

        //Cadastrar
            function Cadastrar(){

                $.ajax({
                    type:"POST",
                    url:"modals/modal_exames.php",
                    success: function(dados){
                        $(".modal").html(dados);
                    }
                });
            }

        //Editar
            function Editar(IdIten){
                $.ajax({
                    type:"GET",
                    url:"modals/modal_exames.php",
                    data:{modo:'buscarId',id:IdIten},
                    success: function(dados){
                        $('.modal').html(dados);
                    }
                });
            }

        //Desativar
            function Desativar(IdIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();
                $.ajax({
                    type:"GET",
                    data: {id:IdIten},
                    url: "../router.php?controller=ambiente&modo=desativar&id="+IdIten,
                    success: function(dados){
                        $('.icon_opcoes').html(dados);
                    }
                });
            }

        //Desativar
            function Deletar(IdIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();
                $.ajax({
                    type:"GET",
                    data: {id:IdIten},
                    url: "../router.php?controller=ambiente&modo=deletar&id="+IdIten,
                    success: function(dados){
                        $('.icon_opcoes').html(dados);
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
        <div class="main">  <!--Div main que segura todas as div-->


            <div class="content_cms">
                <?php include('menu_cms.php')?>

                <div class="content_home_cms"><!--conteudo da home do cms-->
                  <!-- Include once do menu lateral -->
                  <?php include_once('menu_lateral_cms.php'); ?>

                    <div class="conteudo_home_cms"><!--conteudo menu-->
                        <div class="content_conteudo_pagina_home">
                            <div class="titulo_conteudo"><!--titulo-->
                                <div class="string_titulo">
                                    <a>Exames</a>
                                </div>

                                <div class="img_cadastrar">

                                    <a class="novo" href="#" onclick="Cadastrar()">
                                        <img src="<?=$caminho?>imagens/add.png">
                                    </a>

                                </div>

                            </div>



                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->

                                <div class="imagem_conteudo"><!--imagem-->
                                    <img src="../<?php echo($list[$cont]->imagem)?>">
                                </div>

                                <div class="content_opcoes"><!--content das opções-->

                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                          <a><?php //echo($ativar)?></a>
                                        </div>

                                            <div class="icon_opcoes">
                                                <a href="#" class="desativar" onclick="Desativar(<?php echo($list[$cont]->id_ambiente);?>)">
                                                    <img  src="<?=$caminho?>imagens/<?php echo($imagem)?>" alt="desativar_ativar">
                                                </a>
                                            </div>

                                    </div>

                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>

                                        <div class="icon_opcoes">
                                            <a href="#" class="editar" onclick="Editar(<?php echo($list[$cont]->id_ambiente);?>)">

                                                <img src="<?=$caminho?>imagens/edit.png" alt="editar">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>

                                        <div class="icon_opcoes">
                                            <a href="#" class="excluir" onclick="Deletar(<?php echo($list[$cont]->id_ambiente);?>)">
                                                <img  src="<?=$caminho?>imagens/shutdown.png" alt="excluir">
                                            </a>
                                        </div>
                                    </div>
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
