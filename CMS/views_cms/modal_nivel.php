<?php

$action = "modo=inserir";

if (isset($_GET['controller']))
    $caminho ="views_cms/";
else
    $caminho = "";


include($caminho.'../verifica.php');

?>

<html>
    <head>
        <title>Modal</title>
        <link rel="stylesheet" type="text/css" href="css/style_modal_nivel.css">

        <script>
            $(document).ready(function(){/*fechar a modal*/
               $(".fechar").click(function(){
                  $(".container_modal").fadeOut(); 
               }); 
            });
        </script>
    </head>
    
    <body>
        
         <script>
             $("#form").submit(function(event){
                  //Recupera o id gravado no Form pelo atribute-id
                  var id = $(this).data("id");
                  var modo = "";
                  if(id == '0')
                      modo='inserir';
                  else
                      modo='editar';

                //anula a ação do submit tradicional "botao" ou F5
                 event.preventDefault();

                 $.ajax({
                    type: "POST",
                    url: "router.php?controller=nivel&modo="+modo+"&id="+id,
                    //alert (url);
                    data: new FormData($("#form")[0]),
                    cache:false,
                    contentType:false,
                    processData:false,
                    async:true,
                    success: function(dados){
                         $('.modal').html(dados);
                         //alert(dados);

                    }
                });

             });
         </script>
        <div class="main_modal"><!--main que segura tudo-->
            <div class="close_modal">
                <a href="#" class="fechar"><img src="imagens/close.png"></a>
            </div>
            
            <div class="content_modal">
                <form action="nivel_usuario.php" method="post" id="form" enctype="multipart/form-data">
                    
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
                        
                        <div class="content_radio_nivel">
                                    <label>Descrição do nível:</label>
                                    <textarea name="txt_descricao" id="txt_desc"></textarea>
                                </div>

                        <div class="campo_botao">
                            <div class="botao">
                                <input type="submit" name="btn_cadastrar" value="Cadastrar">
                            </div>    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>