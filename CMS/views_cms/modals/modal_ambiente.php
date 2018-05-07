<?php

//$action = "modo=inserir";

$id="0";
$titulo=null;
$texto=null;
$texto2=null;
$texto3=null;
$texto4=null;
$texto5=null;
$texto6=null;
$imagem=null;
$imagem2=null;
$imagem3=null;
$imagem4=null;
$imagem5=null;
$imagem6=null;


if (isset($_GET['controller']))
    $caminho ="views_cms/";
else
    $caminho = "";

include($caminho.'../../verifica.php');
if(isset($_GET['modo'])){
    $modo = $_GET['modo'];

    if($modo=='buscarId'){
        $id=$_GET['id'];

        require_once("../../controller_cms/gerenciamento_ambiente_controller.php");/*da um require na nivel_controller*/
        require_once("../../model_cms/gerenciamento_ambiente_class.php");/*da um require na nivel_class*/

        // Instancio a controller
        //$controller_nivel  = new controllerNivel();

        //Chama o metodo para Listar todos os registros
        //$list = $controller_nivel::Listar();
        /*
        if(isset($niv)){
            //$action = "modo=editar&id=". $niv->id_nivel;
            $nome = $niv->nome;
            $descricao = $niv->descricao;


        }else{
            echo($nome);
        }
        */

        $controller_ambiente = new controller_ambiente();
        $list = $controller_ambiente::Buscar();

        $titulo=$list->titulo;
        $texto=$list->texto;
        $texto2=$list->texto2;
        $texto3=$list->texto3;
        $texto4=$list->texto4;
        $texto5=$list->texto5;
        $texto6=$list->texto6;
        $imagem=$list->imagem;
        $imagem2=$list->imagem2;
        $imagem3=$list->imagem3;
        $imagem4=$list->imagem4;
        $imagem5=$list->imagem5;
        $imagem6=$list->imagem6;
        //$frase=$list->frase;

    }
}

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
                    url: "../router.php?controller=ambiente&modo="+modo+"&id="+id,
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
                <form action="" method="post" id="form" data-id="<?php echo($id)?>" enctype="multipart/form-data">

                    <div class="content_logo"><!--content do logo e do titulo-->
                        <div class="logo">
                            <img src="../../imagens/logo_only_heart.png">
                        </div>
                        <div class="titulo">
                            <a>Cadastro Nível</a>
                        </div>
                    </div>

                    <div class="content_campos"><!--content dos campos de cadastro-->
                        <div class="campo"><!--campos-->
                            <div class="string_campo">
                                <a>Titulo:</a>
                            </div>

                            <div class="input_campo">
                                <input type="text" value="<?php echo($titulo)?>" name="txt_titulo" >
                            </div>
                        </div>



                        <div class="campo">
                            <div class="content_file">
                              <input  type="file" name="fle_img_home1" >">
                            </div>

                            <div class="content_preview">
                              <div class="preview_img">
                                <img id="img" src="../<?php echo($imagem)?>" alt="">
                              </div>
                            </div>
                        </div>
                        <div class="campo"><!--campos-->
                            <div class="string_campo">
                                <a>Texto:</a>
                            </div>

                            <textarea name="txt_texto" id="txt_desc">
                                <?php echo($texto)?>
                            </textarea>
                        </div>

                        <div class="campo">
                            <div class="content_file">
                              <input  type="file" name="fle_img_home2" >
                            </div>

                            <div class="content_preview">
                              <div class="preview_img">
                                <img id="img" src="../<?php echo($imagem2)?>" alt="">
                              </div>
                            </div>
                        </div>
                        <div class="campo"><!--campos-->
                            <div class="string_campo">
                                <a>Texto:</a>
                            </div>

                            <textarea name="txt_texto2" id="txt_desc">
                                <?php echo($texto)?>
                            </textarea>
                        </div>

                        <div class="campo">
                            <div class="content_file">
                              <input   type="file" name="fle_img_home3" >
                            </div>

                            <div class="content_preview">
                              <div class="preview_img">
                                <img id="img" src="../<?php echo($imagem3)?>" alt="">
                              </div>
                            </div>
                        </div>
                        <div class="campo"><!--campos-->
                            <div class="string_campo">
                                <a>Texto:</a>
                            </div>

                            <textarea name="txt_texto3" id="txt_desc">
                                <?php echo($texto)?>
                            </textarea>
                        </div>

                        <div class="campo">
                            <div class="content_file">
                              <input   type="file" name="fle_img_home4" >
                            </div>

                            <div class="content_preview">
                              <div class="preview_img">
                                <img id="img" src="../<?php echo($imagem4)?>" alt="">
                              </div>
                            </div>
                        </div>
                        <div class="campo"><!--campos-->
                            <div class="string_campo">
                                <a>Texto:</a>
                            </div>

                            <textarea name="txt_texto4" id="txt_desc">
                                <?php echo($texto)?>
                            </textarea>
                        </div>

                        <div class="campo">
                            <div class="content_file">
                              <input   type="file" name="fle_img_home5" >
                            </div>

                            <div class="content_preview">
                              <div class="preview_img">
                                <img id="img" src="../<?php echo($imagem5)?>" alt="">
                              </div>
                            </div>
                        </div>
                        <div class="campo"><!--campos-->
                            <div class="string_campo">
                                <a>Texto:</a>
                            </div>

                            <textarea name="txt_texto5" id="txt_desc">
                                <?php echo($texto)?>
                            </textarea>
                        </div>

                        <div class="campo">
                            <div class="content_file">
                              <input   type="file" name="fle_img_home6" >
                            </div>

                            <div class="content_preview">
                              <div class="preview_img">
                                <img id="img" src="../<?php echo($imagem6)?>" alt="">
                              </div>
                            </div>
                        </div>
                        <div class="campo"><!--campos-->
                            <div class="string_campo">
                                <a>Texto:</a>
                            </div>

                            <textarea name="txt_texto6" id="txt_desc">
                                <?php echo($texto)?>
                            </textarea>
                        </div>

                        <div class="campo_botao">
                            <div class="botao">
                                <input id="bnt_cadastrar" type="submit" name="btn_cadastrar" value="Cadastrar">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
