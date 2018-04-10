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
/*
if(isset($niv)){
    $action = "modo=editar&id=". $niv->id_nivel;
    $nome = $niv->nome;
    $descricao = $niv->descricao;

}*/

?>
<html>
    <head>

        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_cms_home.css">
        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_cms_menu.css">
        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_cms_footer.css">
        <link rel="stylesheet" type="text/css" href="<?=$caminho?>css/style_cms_nivel_usuario.css">
        <link rel="stylesheet" type="text/css" href="css/style_modal.css">
        
        <script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
        
        
        <script>/*Modal*/
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
                    url:"modals/modal_nivel.php",
                    success: function(dados){
                        $(".modal").html(dados);
                    }
                });
            }
            
            //Editar
            function Editar(IdIten){
                $.ajax({
                    type:"GET", 
                    url:"modals/modal_nivel.php",
                    data: {modo:'buscarId',id:IdIten},
                    success: function(dados){
                        $('.modal').html(dados);
                    }
                     
                });
            }
            
            //Excluir
            function Excluir(idIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();
                $.ajax({
                    type:"GET",
                    data: {id:idIten},
                    url: "../router.php?controller=nivel&modo=excluir&id="+idIten,
                    success: function(dados){
                        $('.tabela_nivel_usuario').html(dados);
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
                        <div class="content_titulo_nivel">
                            <div class="titulo_nivel">
                                <a>Níveis de Usuário</a>
                            </div>

                            <div class="content_add_nivel">
                                
                                <div class="img_nivel">
                                    <a class="novo" href="<?php echo($niv->id_nivel)?>" onclick="Cadastrar()">
                                        
                                        <img src="<?=$caminho?>imagens/add.png">
                                    </a>
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

                             <?php
                                // Incluindo a controller e a model para serem utilizadas
                                include_once($caminho . '../controller_cms/nivel_controller.php');
                                include_once($caminho .'../model_cms/nivel_class.php');

                                // Instancio a controller
                                $controller_nivel  = new controllerNivel();

                                //Chama o metodo para Listar todos os registros
                                $list = $controller_nivel::Listar();

                                $cont = 0;
                                while ($cont < count($list)) {
                               ?>

                                <div class="content_campo_niveis">
                                    <div class="campo_niveis">
                                        <a><?= ($list[$cont]->nome);  ?></a>
                                    </div>
                                    <div class="campo_acoes">
                                        <a href="#" class="editar" onclick="Editar(<?php echo($list[$cont]->id_nivel);?>)">
                                        
                                            <img src="<?=$caminho?>imagens/edit.png">
                                        </a>
                                        <a href="#" class="excluir" onclick="Excluir(<?php echo($list[$cont]->id_nivel);?>)">
                                            <img src="<?=$caminho?>imagens/shutdown.png">
                                            <?php echo($list[$cont]->id_nivel);?>
                                        </a>
                                    </div>
                                </div>
                                <?php
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
