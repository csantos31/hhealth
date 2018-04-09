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
                    url:"modals/modal_home.php",
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
                            
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img>
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a>Desativar</a>
                                        </div>
                                        
                                            <div class="icon_opcoes">
                                                <img  src="<?=$caminho?>imagens/shutdown.png">
                                            </div>
                                        
                                    </div>
                                    
                                    <div class="opcoes"><!--Ativar-->
                                        <div class="string_opcoes">
                                            <a>Ativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img>
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a>Desativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Ativar-->
                                        <div class="string_opcoes">
                                            <a>Ativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img>
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a>Desativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Ativar-->
                                        <div class="string_opcoes">
                                            <a>Ativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content_conteudo_pagina_home">
                            <div class="titulo_conteudo"><!--titulo-->
                                <a>Slide</a>
                            </div>
                            
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img>
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a>Desativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Ativar-->
                                        <div class="string_opcoes">
                                            <a>Ativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img>
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a>Desativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Ativar-->
                                        <div class="string_opcoes">
                                            <a>Ativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img>
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a>Desativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Ativar-->
                                        <div class="string_opcoes">
                                            <a>Ativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content_conteudo_pagina_home">
                            <div class="titulo_conteudo"><!--titulo-->
                                <a>Slide</a>
                            </div>
                            
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img>
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a>Desativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Ativar-->
                                        <div class="string_opcoes">
                                            <a>Ativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img>
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a>Desativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Ativar-->
                                        <div class="string_opcoes">
                                            <a>Ativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="conteudo_pagina_home"><!--conteudos da pagina-->
                                <div class="imagem_conteudo"><!--imagem-->
                                    <img>
                                </div>
                                
                                <div class="content_opcoes"><!--content das opções-->
                                    <div class="opcoes"><!--Desativar-->
                                        <div class="string_opcoes">
                                            <a>Desativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Ativar-->
                                        <div class="string_opcoes">
                                            <a>Ativar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Editar-->
                                        <div class="string_opcoes">
                                            <a>Editar</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
                                        </div>
                                    </div>
                                    
                                    <div class="opcoes"><!--Excluir-->
                                        <div class="string_opcoes">
                                            <a>Excluir</a>
                                        </div>
                                        
                                        <div class="icon_opcoes">
                                            <img  src="<?=$caminho?>imagens/shutdown.png">
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
