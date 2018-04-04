<html>
    <head>
        <title>Modal</title>
        <link rel="stylesheet" type="text/css" href="css/style_modal_nivel.css">
    </head>
    
    <body>
        <div class="main_modal"><!--main que segura tudo-->
            <div class="close_modal">
                <img src="imagens/close.png">
            </div>
            
            <div class="content_modal">
                <div class="content_logo"><!--content do logo e do titulo-->
                    <div class="logo">
                        <img src="../../imagens/logo_only_heart.png">
                    </div>
                    <div class="titulo">
                        <a>Cadastro Nível</a>
                    </div>
                </div>

                <div class="content_campos"><!--content dos campos de cadastro-->
                    <div class="campo"><!--campos--> <!--nome-->
                        <div class="string_campo">
                            <a>Nome:</a>
                        </div>

                        <div class="input_campo">
                            <input type="text" value="" name="txt_nome" >
                        </div>
                    </div>
                    
                    <div class="campo"><!--campos--> <!--Usuário-->
                        <div class="string_campo">
                            <a>Usuário:</a>
                        </div>

                        <div class="input_campo">
                            <input type="text" value="" name="txt_nome" >
                        </div>
                    </div>
                    
                    <div class="campo"><!--campos--> <!--Senha-->
                        <div class="string_campo">
                            <a>Senha:</a>
                        </div>

                        <div class="input_campo">
                            <input type="text" value="" name="txt_nome" >
                        </div>
                    </div>
                    
                    <div class="campo"><!--campos--> <!--Nível-->
                        <div class="string_campo">
                            <a>Nível:</a>
                        </div>

                        
                        <select class="input_combo" name="combo"><!--Combo box-->
                            <option value="">
                                Selecionar Nível
                            </option>

                            <option value=""> 
                                Nível
                            </option>
                        </select>
                       
                    </div>
                    
                    <div class="campo_botao">
                        <div class="botao">
                            <input type="submit" name="btn_cadastrar" value="Cadastrar">
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>