<?php
//$action = "modo=inserir";

$id="0";
$nome_unidade=null;
$descricao=null;
$frase=null;
$logradouro =  null;
$cidade =  null;
$bairro = null;
$cep = null;
$rg = null;
$cpf = null;
$numero = null;

if (isset($_GET['controller']))
    $caminho ="views_cms/";
else
    $caminho = "";

include($caminho.'../../verifica.php');
if(isset($_GET['modo'])){
    $modo = $_GET['modo'];
    
    if($modo=='buscarId'){
        $id_uni=$_GET['id_uni'];
        $id_ende=$_GET['id_ende'];
        
        
        /*Declara unidade*/
        require_once("../../controller_cms/unidade_controller.php");/*da um require na nivel_controller*/
        require_once("../../model_cms/unidade_class.php");/*da um require na nivel_class*/
        
        $controller_unidade = new controller_unidade();
        $list = $controller_unidade::Buscar();
        
        $imagem=$list->imagem;
        $nome_unidade=$list->nome_unidade;
        
        
        
        /*Declara endereço*/
        
        require_once("../../controller_cms/endereco_controller.php");/*da um require na nivel_controller*/
        require_once("../../model_cms/endereco_class.php");/*da um require na nivel_class*/
        
        $controller_endereco = new controller_endereco();
        $list_endereco = $controller_endereco::Buscar();
        
        $cep=$list_endereco->cep;
        $logradouro=$list_endereco->logradouro;
        $numero=$list_endereco->numero;
        $id_estado=$list_endereco->id_estado;
        $cidade=$list_endereco->cidade;
        $bairro=$list_endereco->bairro;
    
       
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
                  var id_ende = $(this).data("id-ende");
                  var id_uni = $(this).data("id-uni");
                  var modo = "";
                  if(id_ende == '0')
                      modo='inserir';
                  else
                      modo='editar';

                //anula a ação do submit tradicional "botao" ou F5
                 event.preventDefault();

                 $.ajax({
                    type: "POST",
                    url: "../router.php?controller=unidade&modo="+modo+"&id_uni="+id_uni+"&id_ende="+id_ende,
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
                <form action="" method="post" id="form" data-id-ende="<?php echo($id_ende)?>" data-id-uni="<?php echo($id_uni)?>" enctype="multipart/form-data">
                    
                    <div class="content_logo"><!--content do logo e do titulo-->
                        <div class="logo">
                            <img src="../../imagens/logo_only_heart.png">
                        </div>
                        <div class="titulo">
                            <a>Cadastro Unidade</a>
                        </div>
                    </div>
                    
                    <div class="content_campos"><!--content dos campos de cadastro-->
                        <div class="campo"><!--campos--> <!--nome-->
                            <div class="string_campo">
                                <a>Unidade:</a>
                            </div>

                            <div class="input_campo">
                                <input type="text" value="<?php echo ($nome_unidade)?>" name="txt_unidade" placeholder="Unidade">
                            </div>
                        </div>
                        <div class="campo">
                            <div class="content_file">
                              <input type="file" name="fle_img_home1" >
                            </div>
                            
                            <div class="content_preview">
                              <div class="preview_img">
                                <img id="img" src="../<?php echo($imagem)?>" alt="">
                              </div>
                            </div>
                        </div>
                        
                        <div class="campo"><!--campos--> <!--nome-->
                            <div class="string_campo">
                                <a>Logradouro:</a>
                            </div>

                            <div class="input_campo">
                                <input type="text" value="<?php echo($logradouro)?>" name="txt_logradouro" placeholder="Logradouro">
                            </div>
                        </div>
                        
                        <div class="campo"><!--campos--> <!--nome-->
                            <div class="string_campo">
                                <a>Bairro:</a>
                            </div>

                            <div class="input_campo">
                                <input style="width:200px;"type="text" value="<?php echo($bairro)?>" name="txt_bairro" placeholder="Bairro">
                            </div>
                            <div class="string_campo">
                                <a>Número:</a>
                            </div>

                            <div class="input_campo">
                                <input style="width:200px;"type="text" value="<?php echo($numero)?>" name="txt_numero" placeholder="Número">
                            </div>
                        </div>
                        
                        <div class="campo"><!--campos--> <!--nome-->
                            <div class="string_campo">
                                <a>CEP:</a>
                            </div>

                            <div class="input_campo">
                                <input style="width:100px;"type="text" value="<?php echo($cep)?>" name="txt_cep" placeholder="CEP">
                            </div>
                            
                            <div class="string_campo">
                                <a>Cidade:</a>
                            </div>

                            <div class="input_campo">
                                <input style="width:200px;"type="text" value="<?php echo($cidade)?>" name="txt_cidade" placeholder="Cidade">
                            </div>
                        </div>
                        
                        <div class="campo" ><!--campos--> <!--Nível-->
                            <div class="string_campo">
                                <a>Estado:</a>
                            </div>


                            <select class="input_combo" name="slt_estado"><!--Combo box-->
                                <option value="null">
                                    Selecionar Nível
                                </option>

                                <?php
                                  include_once('../../controller_cms/endereco_controller.php');
                                  include_once('../../model_cms/endereco_class.php');
                                  $controller_endereco  = new controller_endereco();
                                  $list = $controller_endereco::ListarEstados();
                                  $cont = 0;
                                  while ($cont < count($list)) {
                                  ?>
                                      <option value="<?= $list[$cont]['id_estado'] ?>"><?= $list[$cont]['sigla'] ?></option>
                                  <?php
                                    $cont +=1;
                                  }
                                ?>
                            </select>

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