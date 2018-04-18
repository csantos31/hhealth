<?php
//$action = "modo=inserir";

$id="0";
$nome=null;
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
        $id=$_GET['id'];
        
        require_once("../../controller_cms/gerenciamento_home_controller.php");/*da um require na nivel_controller*/
        require_once("../../model_cms/gerenciamento_home_class.php");/*da um require na nivel_class*/
        
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
        
        $controller_home = new controller_home();
        $list = $controller_home::Buscar();
        
        $slide1=$list->slide1;
        $slide2=$list->slide2;
        $slide3=$list->slide3;
        $frase=$list->frase;
       
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
                    url: "../router.php?controller=unidade&modo="+modo+"&id="+id,
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
                            <a>Cadastro Unidade</a>
                        </div>
                    </div>
                    
                    <div class="content_campos"><!--content dos campos de cadastro-->
                        <div class="campo"><!--campos--> <!--nome-->
                            <div class="string_campo">
                                <a>Unidade:</a>
                            </div>

                            <div class="input_campo">
                                <input type="text" value="" name="txt_unidade" placeholder="Unidade">
                            </div>
                        </div>
                        <div class="campo">
                            <div class="content_file">
                              <input type="file" name="fle_img_home1" >
                            </div>
                            
                            <div class="content_preview">
                              <div class="preview_img">
                                <img id="img" src="../<?php echo($slide1)?>" alt="">
                              </div>
                            </div>
                        </div>
                        
                        <div class="campo"><!--campos--> <!--nome-->
                            <div class="string_campo">
                                <a>Logradouro:</a>
                            </div>

                            <div class="input_campo">
                                <input type="text" value="" name="txt_logradouro" placeholder="Logradouro">
                            </div>
                        </div>
                        
                        <div class="campo"><!--campos--> <!--nome-->
                            <div class="string_campo">
                                <a>Bairro:</a>
                            </div>

                            <div class="input_campo">
                                <input style="width:200px;"type="text" value="" name="txt_bairro" placeholder="Bairro">
                            </div>
                            <div class="string_campo">
                                <a>Número:</a>
                            </div>

                            <div class="input_campo">
                                <input style="width:200px;"type="text" value="" name="txt_numero" placeholder="Número">
                            </div>
                        </div>
                        
                        <div class="campo"><!--campos--> <!--nome-->
                            <div class="string_campo">
                                <a>CEP:</a>
                            </div>

                            <div class="input_campo">
                                <input style="width:100px;"type="text" value="" name="txt_cep" placeholder="CEP">
                            </div>
                            
                            <div class="string_campo">
                                <a>Cidade:</a>
                            </div>

                            <div class="input_campo">
                                <input style="width:200px;"type="text" value="" name="txt_cidade" placeholder="Cidade">
                            </div>
                        </div>
                        
                        <div class="campo" ><!--campos--> <!--Nível-->
                            <div class="string_campo">
                                <a>Estado:</a>
                            </div>


                            <select class="input_combo" name="slt_estado"><!--Combo box-->
                                <option value="">
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