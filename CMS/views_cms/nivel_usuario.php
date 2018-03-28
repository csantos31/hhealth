<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="css/style_cms_home.css">
        <link rel="stylesheet" type="text/css" href="css/style_cms_menu.css">
        <link rel="stylesheet" type="text/css" href="css/style_cms_footer.css">
        <link rel="stylesheet" type="text/css" href="css/style_cms_nivel_usuario.css">
    
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
                        
                        <a href="nivel_usuario.php">
                            <div class="linha">
                                <div class="img_menu_lateral">
                                    <img src="imagens/icon_home.png">
                                </div>
                                <div class="titulo_menu_lateral">
                                    <a>Gerenciamento de nível de usuários</a>
                                </div>
                            </div>    
                        </a>
                        
                    </div>
                    
                    <div class="conteudo_home_cms"><!--conteudo menu-->
                        <div class="content_titulo_nivel">
                            <div class="titulo_nivel">
                                <a>Níveis de Usuário</a>
                            </div>
                            
                            <div class="content_add_nivel">
                                <div class="img_nivel">
                                    <img src="imagens/add.png">
                                </div>
                                
                                <div class="string_add_nivel">
                                    <a> Adicionar Nível</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content_cadastro_nivel"><!--cadastro de niveis-->
                            
                            <div class="img_cadastro_nivel"><!--imagem-->
                                <img src="imagens/logo.png">
                            </div>
                            
                            <div class="titulo_cadastro_nivel"><!--titulo-->
                                <a>Cadastro Nível</a>
                            </div>
                            <form name="frm_nivel" method="post" action="../router.php?controller=nivel&modo=inserir">
                                <div class="faixa_nivel"><!--input faixa nivel-->
                                <div class="string_nivel">
                                    <a>Nome:</a>
                                </div>
                                
                                <div class="input_nivel">
                                    <input type="text" name="txt_nome" placeholder="Digite o nome do nível">
                                </div>
                                </div>

                                <div class="content_radio_nivel">
                                    <label>Descrição do nível:</label>
                                    <textarea name="txt_descricao" id="txt_desc"></textarea>
                                </div>

                                <div class="submit_cadastrar_nivel">
                                    <input type="submit" name="btn_cadastrar" value="cadastrar">
                                </div>
                            </form>
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
                                include_once('../controller_cms/nivel_controller.php');
                                include_once('../model_cms/nivel_class.php');

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
                                        <a href="../router.php?controller=nivel&modo=buscar_id&codigo=<?php echo($list[$cont]->id_nivel); ?>">
                                            <img src="imagens/edit.png">
                                        </a>
                                        <img src="imagens/shutdown.png">
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