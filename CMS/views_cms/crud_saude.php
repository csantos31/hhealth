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

        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_crud_home.css">
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
            /*--------------SLIDE SAUDE------------------*/
        //Cadastrar
            function Cadastrar(){
                
                $.ajax({
                    type:"POST",
                    url:"modals/modal_slide_saude.php",
                    success: function(dados){
                        $(".modal").html(dados);
                    }
                });
            }
            
        //Editar
            function Editar(IdIten){
                $.ajax({
                    type:"GET",
                    url:"modals/modal_slide_saude.php",
                    data:{modo:'buscarId',id:IdIten},
                    success: function(dados){
                        $('.modal').html(dados);
                    }
                });
            }
        //Ativar
        function Ativar(IdIten){
                //anula a ação do submit tradicional "botao" ou F5
                //event.preventDefault();
                $.ajax({
                    type:"GET",
                    data: {id:IdIten},
                    url: "../router.php?controller=slide_saude&modo=ativar&id="+IdIten,
                    success: function(dados){
                        $('.icon_opcoes').html(dados);
                    }
                });
            }
        
        //Desativar
            function Desativar(IdIten){
                //anula a ação do submit tradicional "botao" ou F5
                //event.preventDefault();
                $.ajax({
                    type:"GET",
                    data: {id:IdIten},
                    url: "../router.php?controller=slide_saude&modo=desativar&id="+IdIten,
                    success: function(dados){
                        $('.icon_opcoes').html(dados);
                    }
                });
            }
        
        //Desativar
            function Deletar(IdIten){
                //anula a ação do submit tradicional "botao" ou F5
                //event.preventDefault();
                $.ajax({
                    type:"GET",
                    data: {id:IdIten},
                    url: "../router.php?controller=slide_saude&modo=deletar&id="+IdIten,
                    success: function(dados){
                        $('.icon_opcoes').html(dados);
                    }
                });
            }

            
            /*--------------DICAS SAUDE------------------*/
             //Cadastrar
            function Cadastrar2(){
                
                $.ajax({
                    type:"POST",
                    url:"modals/modal_dica_saude.php",
                    success: function(dados){
                        $(".modal").html(dados);
                    }
                });
            }
            
        //Editar
            function Editar2(IdIten){
                $.ajax({
                    type:"GET",
                    url:"modals/modal_dica_saude.php",
                    data:{modo:'buscarId',id:IdIten},
                    success: function(dados){
                        $('.modal').html(dados);
                    }
                });
            }
        
        //Ativar
        function Ativar2(IdIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();
                $.ajax({
                    type:"GET",
                    data: {id:IdIten},
                    url: "../router.php?controller=saude_n&modo=ativar&id="+IdIten,
                    success: function(dados){
                        $('.icon_opcoes').html(dados);
                    }
                });
            }
            
        //Desativar
            function Desativar2(IdIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();
                $.ajax({
                    type:"GET",
                    data: {id:IdIten},
                    url: "../router.php?controller=saude_n&modo=desativar&id="+IdIten,
                    success: function(dados){
                        $('.icon_opcoes').html(dados);
                    }
                });
            }
        
        //Desativar
            function Deletar2(IdIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();
                $.ajax({
                    type:"GET",
                    data: {id:IdIten},
                    url: "../router.php?controller=saude_n&modo=deletar&id="+IdIten,
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
                                    <a>Slide</a>
                                </div>
                                
                                <div class="img_cadastrar">
                                    
                                    <a class="novo" href="#" onclick="Cadastrar()">
                                        <img src="<?=$caminho?>imagens/add.png">
                                    </a>
                                
                                </div>
                                
                            </div>
                            <?php
                                
                                // Incluindo a controller e a model para serem utilizadas
                                include_once($caminho . '../controller_cms/gerenciamento_slide_saude_controller.php');
                                include_once($caminho .'../model_cms/gerenciamento_slide_saude_class.php');

                                // Instancio a controller
                                $controller_gerenciamento_slide_saude =  new controller_slide_saude();

                                //Chama o metodo para Listar todos os registros
                                $list_slide_saude = $controller_gerenciamento_slide_saude::Listar();

                                $cont1 = 0;
                                while ($cont1 < count($list_slide_saude)) {
                                    $ativo=$list_slide_saude[$cont1]->ativo;
                                    $status=$list_slide_saude[$cont1]->status;
                                    if($ativo==1){
                                        //$list[$cont]->slide1=null;
                                        if($status==1){
                                            $Desativar="Desativar";
                                        }else{
                                            $Desativar="Ativar";
                                        }
                                    
                                
                                
                                ?>
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img src="../<?php echo($list_slide_saude[$cont1]->slide)?>">
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    
                                    
                                    <?php
                                        $ativar=null;
                                        $imagem=null;
                                        if($list_slide_saude[$cont1]->status==1){
                                            $ativar="Desativar";
                                            $imagem='turn_on.png';
                                        }else if($list_slide_saude[$cont1]->status==0){
                                            $ativar="Ativar";
                                            $imagem='shutdown.png';
                                        }
                                    
                                    ?>
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a><?php echo($ativar)?></a>
                                        </div>
                                        
                                            <div class="icon_opcoes">
                                                <a href="#" class="desativar" onclick="<?php echo($Desativar)?>(<?php echo($list_slide_saude[$cont1]->id_slide_saude);?>)">
                                                    <img  src="<?=$caminho?>imagens/<?php echo($imagem)?>">
                                                </a>
                                            </div>
                                        
                                    </div>
                                    
                                    <?php
                                    
                                    ?>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <a href="#" class="editar" onclick="Editar(<?php echo($list_slide_saude[$cont1]->id_slide_saude);?>)">
                                                
                                                <img src="<?=$caminho?>imagens/edit.png">
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <a href="#" class="excluir" onclick="Deletar(<?php echo($list_slide_saude[$cont1]->id_slide_saude);?>)">
                                                <img  src="<?=$caminho?>imagens/shutdown.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <?php
                                        //return null;
                                       }
                               $cont1 +=1;
                                }
                            ?>
                            
                        </div>
                        
                        <div class="content_conteudo_pagina_home">
                            <div class="titulo_conteudo"><!--titulo-->
                                <div class="string_titulo">
                                    <a>Dicas de Saúde</a>
                                </div>
                                
                                <div class="img_cadastrar">
                                    
                                    <a class="novo" href="#" onclick="Cadastrar2()">
                                        <img src="<?=$caminho?>imagens/add.png">
                                    </a>
                                
                                </div>
                                
                            </div>
                            <?php
                                
                                // Incluindo a controller e a model para serem utilizadas
                                include_once($caminho . '../controller_cms/gerenciamento_dica_saude_controller.php');
                                include_once($caminho .'../model_cms/gerenciamento_dica_saude_class.php');

                                // Instancio a controller
                                $controller_gerenciamento_dica_saude =  new controller_dica_saude();

                                //Chama o metodo para Listar todos os registros
                                $list = $controller_gerenciamento_dica_saude::Listar();

                                $cont = 0;
                                while ($cont < count($list)) {
                                    $ativo=$list[$cont]->ativo;
                                    $status=$list[$cont]->status;
                                    $Desativar=null;
                                    
                                    if($ativo==1){
                                        //$list[$cont]->slide1=null;
                                        if($status==1){
                                            $Desativar="Desativar2";
                                        }else{
                                            $Desativar="Ativar2";
                                        }
                                    
                                
                                
                                ?>
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img src="../<?php echo($list[$cont]->imagem)?>">
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    
                                    
                                    <?php
                                        $ativar=null;
                                        $imagem=null;
                                        if($list[$cont]->status==1){
                                            $ativar="Desativar";
                                            $imagem='turn_on.png';
                                        }else if($list[$cont]->status==0){
                                            $ativar="Ativar";
                                            $imagem='shutdown.png';
                                        }
                                    
                                    ?>
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a><?php echo($ativar)?></a>
                                        </div>
                                        
                                            <div class="icon_opcoes">
                                                <a href="#" class="desativar" onclick="<?php echo($Desativar)?>(<?php echo($list[$cont]->id_dica_saude);?>)">
                                                    <img  src="<?=$caminho?>imagens/<?php echo($imagem)?>">
                                                </a>
                                            </div>
                                        
                                    </div>
                                    
                                    <?php
                                    
                                    ?>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <a href="#" class="editar" onclick="Editar2(<?php echo($list[$cont]->id_dica_saude);?>)">
                                                <img src="<?=$caminho?>imagens/edit.png">
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <a href="#" class="excluir" onclick="Deletar2(<?php echo($list[$cont]->id_dica_saude);?>)">
                                                <img  src="<?=$caminho?>imagens/shutdown.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <?php
                                        //return null;
                                       }
                               $cont +=1;
                                }
                            ?>
                            
                        </div>
                        
                        
                        

                    </div>
                </div>

                <?php include('footer_cms.php')?>
            </div>
        </div>

    </body>
</html>
