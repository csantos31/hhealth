<?php

//$action = "modo=inserir";

$id="0";
$sobre=null;
$missao=null;
$visao=null;
$valores=null;
$imagem1=null;
$imagem2=null;
$imagem3=null;


if (isset($_GET['controller']))
    $caminho ="views_cms/";
else
    $caminho = "";

include($caminho.'../../verifica.php');
if(isset($_GET['modo'])){
    $modo = $_GET['modo'];
    
    if($modo=='buscarId'){
        $id=$_GET['id'];
        
        require_once("../../controller_cms/gerenciamento_sobre_controller.php");/*da um require na sobre_controller*/
        require_once("../../model_cms/gerenciamento_sobre_class.php");/*da um require na sobre_class*/
        
        // Instancio a controller
        $controller_sobre = new controllerSobre();

        //Chama o metodo para Listar todos os registros
        $buscar = $controller_sobre::Buscar();
        
        $sobre=$buscar->sobre;
        $missao=$buscar->missao;
        $visao=$buscar->visao;
        $valores=$buscar->valores;
        $imagem1=$buscar->imagem1;
        $imagem2=$buscar->imagem2;
        $imagem3=$buscar->imagem3;
        
       
    }
}

?>

<html>
    <head>
        <title>Modal</title>
        <link rel="stylesheet" type="text/css" href="css/style_modal_sobre.css">

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
                    url: "../router.php?controller=sobre&modo="+modo+"&id="+id,
                    //alert (url);
                    data: new FormData($("#form")[0]),
                    cache:false,
                    contentType:false,
                    processData:false,
                    async:true,
                    success: function(dados){
                         $('.modal').html(dados);

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
                            <a>Gerenciamento - Sobre</a>
                        </div>
                    </div>
                    
                    <div class="part"> 
                    
                        <div class="content_campos"><!--content dos campos de cadastro-->
                            <div class="campo"><!--campos-->
                                <div class="string_campo">
                                    <a>Sobre:</a>
                                </div>

                                <div class="input_campo">
                                    <input type="text" value="<?php echo($sobre)?>" name="txt_sobre" >
                                </div>
                            </div> 

                           <div class="campo"><!--campos-->
                                <div class="string_campo">
                                    <a>Missão:</a>
                                </div>

                                <div class="input_campo">
                                    <input type="text" value="<?php echo($missao)?>" name="txt_missao" >
                                </div>
                            </div> 

                            <div class="campo"><!--campos-->
                                <div class="string_campo">
                                    <a>Visão:</a>
                                </div>

                                <div class="input_campo">
                                    <input type="text" value="<?php echo($visao)?>" name="txt_visao" >
                                </div>
                            </div> 

                            <div class="campo"><!--campos-->
                                <div class="string_campo">
                                    <a>Valores:</a>
                                </div>

                                <div class="input_campo">
                                    <input type="text" value="<?php echo($valores)?>" name="txt_valores" >
                                </div>
                            </div> 
                        </div>
                    
                    </div>
                    <div class="part2">
                    
                        <div class="content_campos"><!--content dos campos de cadastro-->

                            <div class="campo">
                                <div class="content_file">
                                  <input  type="file" name="fle_img_sobre1">
                                </div>

                                <div class="content_preview">
                                  <div class="preview_img">
                                    <img id="img" src="../<?php echo($imagem1)?>" alt="">
                                  </div>
                                </div>
                            </div>

                            <div class="campo">
                                <div class="content_file">
                                  <input  type="file" name="fle_img_sobre2" >
                                </div>

                                <div class="content_preview">
                                  <div class="preview_img">
                                    <img id="img" src="../<?php echo($imagem2)?>" alt="">
                                  </div>
                                </div>
                            </div>

                            <div class="campo">
                                <div class="content_file">
                                  <input   type="file" name="fle_img_sobre3" >
                                </div>

                                <div class="content_preview">
                                  <div class="preview_img">
                                    <img id="img" src="../<?php echo($imagem3)?>" alt="">
                                  </div>
                                </div>
                            </div>

                            <div class="campo_botao">
                                <div class="botao">
                                    <input id="bnt_cadastrar" type="submit" name="btn_cadastrar" value="Cadastrar">
                                </div>    
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>