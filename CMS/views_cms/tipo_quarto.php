<?php

    $action = "modo=inserir";
    $nivel = null;
    $descricao = null;



    if (isset($_GET['controller']))
        $caminho ="views_cms/";
    else
        $caminho = "";


    /*NIVEL EDIT*/
    if(isset($tipo_quarto)){
        $action = "modo=editar&id=". $tipo_quarto->id_tipo_quarto; 
        $nivel = $tipo_quarto->nivel;
        $descricao = $tipo_quarto->descricao;

    }

?>


<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_home.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_menu.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_footer.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_usuario.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_nivel_usuario.css">
    </head>
    
    <body>

        <div class="main">  <!--Div main que segura todas as div-->
            
            
            <div class="content_cms">
                <?php include('menu_cms.php')?>
                
                <div class="content_home_cms"><!--conteudo da home do cms-->
                    <div class="menu_lateral_cms"><!--menu lateral-->
                        
                        <a href="<?= $caminho ?>tipo_quarto.php">
                            <div class="linha">
                                <div class="img_menu_lateral">
                                    <img src="<?=$caminho?>imagens/icon_home.png">
                                </div>

                                <div class="titulo_menu_lateral">
                                    <a>Gerenciamento de tipos de quartos</a>
                                </div>
                            </div>
                        </a>
                        <a href="<?= $caminho ?>nivel_usuario.php">
                            <div class="linha">
                                <div class="img_menu_lateral">
                                    <img src="<?=$caminho?>imagens/icon_home.png">
                                </div>
                                <div class="titulo_menu_lateral">
                                    <a>Gerenciamento de nível de usuários</a>
                                </div>
                            </div>    
                        </a>
                        
                    </div>
                    
                    <div class="conteudo_home_cms"><!--conteudo menu-->
                        <div class="content_titulo_usuario">
                            <div class="titulo_cadastro1_usuario">
                                <a> Tipos de quartos</a>
                            </div>
                            
                            <div class="content_add_usuario">
                                <div class="img_usuario">
                                    <img src="<?=$caminho?>imagens/add.png">
                                </div>
                                
                                <div class="string_add_usuario">
                                    <a> Adcionar tipo quarto</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content_cadastro_usuario"><!--cadastro de niveis-->
                            <form name="frm_quarto" method="post" action="<?= $caminho ?>../router.php?controller=tipo_quarto&<?= $action ?>">
                            
                                <div class="img_cadastro_usuario"><!--imagem-->
                                    <img src="<?=$caminho?>imagens/logo.png">
                                </div>

                                <div class="titulo_cadastro_usuario"><!--titulo-->
                                    <a>Cadastro Nível</a>
                                </div>
                                <div class="content_faixa_usuario">

                                    <div class="faixa_usuario"><!--input faixa nivel-->
                                        <div class="string_usuario">
                                            <a>Nivel:</a>
                                        </div>

                                        <div class="input_usuario">
                                            <input type="text" name="txt_nivel_quarto" placeholder="Digite o nivel" value="<?= $nivel ?>">
                                        </div>
                                    </div>

                                    <div class="faixa_usuario"><!--input faixa nivel-->
                                        <div class="string_usuario">
                                            <a>Descricão:</a>
                                        </div>

                                        <div class="input_usuario">
                                            <input type="text" name="txt_descricao" placeholder="Digite descrição" value="<?= $descricao ?>">
                                        </div>
                                    </div>



                                </div>

                                <div class="submit_cadastrar_usuario">
                                    <input type="submit" name="btn_cadastrar" value="cadastrar">
                                </div>
                            </form>
                        </div>
                        
                        <div class="tabela_usuario"><!--tabela nivel-->
                            <div class="content_titulo_tabela_usuario">
                                <div class="content_titulo_tabela_niveis">
                                <div class="titulo_niveis">
                                    <a>Tipos de quarto</a>
                                    
                                </div>
                                
                                <div class="titulo_acoes">
                                    <a>Ações</a>
                                </div>
                            </div>
                            
                             <?php
                                // Incluindo a controller e a model para serem utilizadas
                                include_once($caminho . '../controller_cms/tipo_quarto_controller.php');
                                include_once($caminho .'../model_cms/tipo_quarto_class.php');

                                // Instancio a controller
                                $controller_nivel  = new controllerTipoQuarto();

                                //Chama o metodo para Listar todos os registros
                                $list = $controller_nivel::Listar();

                                $cont = 0;
                                while ($cont < count($list)) {
                               ?>
                            
                                <div class="content_campo_niveis">
                                    <div class="campo_niveis">
                                        <a><?= ($list[$cont]->nivel);  ?></a>
                                    </div>
                                    <div class="campo_acoes">
                                        <a href="<?= $caminho ?>../router.php?controller=tipo_quarto&modo=buscar_id&codigo=<?php echo($list[$cont]->id_tipo_quarto); ?>">
                                            <img src="<?=$caminho?>imagens/edit.png">
                                        </a>
                                        <a href="<?= $caminho ?>../router.php?controller=tipo_quarto&modo=excluir&codigo=<?php echo($list[$cont]->id_tipo_quarto); ?>" onclick="return confirm('Tem certeza Marcel?? OLHA A CAAAABRA');">
                                            <img src="<?=$caminho?>imagens/shutdown.png">
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
                    
                    
                </div>

                <?php include('footer_cms.php')?>
            </div>
        </div>
    
    </body>
</html>