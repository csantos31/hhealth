<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="css/style_cms_home.css">
        <link rel="stylesheet" type="text/css" href="css/style_cms_menu.css">
        <link rel="stylesheet" type="text/css" href="css/style_cms_footer.css">
        <link rel="stylesheet" type="text/css" href="css/style_cms_usuario.css">
    
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
                        <div class="content_titulo_usuario">
                            <div class="titulo_cadastro1_usuario">
                                <a> Usuário</a>
                            </div>
                            
                            <div class="content_add_usuario">
                                <div class="img_usuario">
                                    <img src="imagens/add.png">
                                </div>
                                
                                <div class="string_add_usuario">
                                    <a> Adcionar Nível</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content_cadastro_usuario"><!--cadastro de niveis-->
                            
                            <div class="img_cadastro_usuario"><!--imagem-->
                                <img src="imagens/logo.png">
                            </div>
                            
                            <div class="titulo_cadastro_usuario"><!--titulo-->
                                <a>Cadastro Nível</a>
                            </div>
                            <div class="content_faixa_usuario">
                                <div class="faixa_usuario"><!--input faixa nivel-->
                                    <div class="string_usuario">
                                        <a>Nome:</a>
                                    </div>

                                    <div class="input_usuario">
                                        <input type="text" name="txt_nome_usuario" placeholder="Digite o nome">
                                    </div>
                                </div>

                                <div class="faixa_usuario"><!--input faixa nivel-->
                                    <div class="string_usuario">
                                        <a>Login:</a>
                                    </div>

                                    <div class="input_usuario">
                                        <input type="text" name="txt_login_usuario" placeholder="Digite o Login">
                                    </div>
                                </div>

                                <div class="faixa_usuario"><!--input faixa nivel-->
                                    <div class="string_usuario">
                                        <a>Senha:</a>
                                    </div>

                                    <div class="input_usuario">
                                        <input type="text" name="txt_senha_usuario" placeholder="Digite a Senha">
                                    </div>
                                </div>

                                <div class="faixa_usuario"><!--input faixa nivel-->
                                    <div class="string_usuario">
                                        <a>Nível:</a>
                                    </div>

                                    <div class="input_usuario">
                                        <select>
                                          <option value="adm">Administrador</option>
                                          <option value="pub">Publicador</option>
                                          <option value="outro">Outro</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="submit_cadastrar_usuario">
                                <input type="submit" name="btn_cadastrar" value="cadastrar">
                            </div>
                            
                        </div>
                        
                        <div class="tabela_usuario"><!--tabela nivel-->
                            <div class="content_titulo_tabela_usuario">
                                <div class="titulo_tabela_usuario">
                                    <a>Nome</a>
                                </div>
                                
                                <div class="titulo_tabela_usuario">
                                    <a>Login</a>
                                    
                                </div>
                                
                                <div class="titulo_tabela_usuario">
                                    <a>Senha</a>
                                    
                                </div>
                                
                                <div class="titulo_tabela_usuario">
                                    <a>Nível</a>
                                    
                                </div>
                                
                                <div class="titulo_acoes">
                                    <a>Ações</a>
                                </div>
                            </div>
                            
                            <div class="content_campo_usuario">
                                <div class="campo_usuario">
                                    <a>Wesley</a>
                                </div>
                                
                                <div class="campo_usuario">
                                    <a>wesley</a>
                                </div>
                                
                                <div class="campo_usuario">
                                    <a>123</a>
                                </div>
                                
                                <div class="campo_usuario">
                                    <a>Administrador</a>
                                </div>
                                
                                <div class="campo_acoes">
                                    <img src="imagens/edit.png">
                                    <img src="imagens/shutdown.png">
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