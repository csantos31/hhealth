<?php

//$action = "modo=inserir";

$id="0";
$numero=null;
$descricao=null;


if(isset($_GET['modo'])){
    
    $modo = $_GET['modo'];
    
    if($modo=='buscarId'){
        $id=$_GET['id'];
        
        require_once("../controllers/quarto_controller.php");/*da um require na nivel_controller*/
        require_once("../models/quarto_class.php");/*da um require na nivel_class*/
        
        // Instancio a controller
        $controller_quarto  = new controllerQuarto();

        //Chama o metodo para Listar todos os registros
        $list = $controller_quarto::Buscar($id);
        
        $numero = $list->numero;
        //$descricao = $list->descricao;
    
    }
    if($modo=='inserir'){
        $id=0;
        $id_paciente = $_GET['id_paciente'];
    }
}
?>

<html>
    <head>
        <title>Modal</title>
        <link rel="stylesheet" type="text/css" href="../css/style_modal_especialidade.css">
        <link rel="stylesheet" type="text/css" href="../css/style_cad_especialidades.css">
        <style>
            #imagem_atual{
                width: 150px;
                height: 150px;
                margin-left: auto;
                margin-right: auto;
            }
            #imagem_atual img{
                width: 150px;
                height: 150px;
            }
            
        </style>
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
                  var id_paciente = $(this).data("id_paciente");
                  var modo = "";
                  if(id == '0')
                      modo='inserir';
                  else
                      modo='editar';

                //anula a ação do submit tradicional "botao" ou F5
                 event.preventDefault();

                 $.ajax({
                    type: "POST",
                    url: "../router.php?controller=internacao&modo="+modo+"&id="+id+"&id_paciente="+id_paciente,
                    //alert (url);
                    data: new FormData($("#form")[0]),
                    cache:false,
                    contentType:false,
                    processData:false,
                    async:true,
                    success: function(dados){
                         $('.modal').html(dados);
                        //console.log(dados);
                    }
                });

             });
         </script>
        <div class="main_modal"><!--main que segura tudo-->
            <div class="close_modal">
                <a href="#" class="fechar"><img src="../imagens/close.png"/></a>
            </div>
            
            <div class="content_modal">
                <form action="" method="post" id="form" data-id="<?php echo($id)?>" data-id_paciente="<?php echo($id_paciente)?>" enctype="multipart/form-data">
                    <div class="content_logo"><!--content do logo e do titulo-->
                        <div class="logo">
                            <img src="../../imagens/logo_only_heart.png">
                        </div>
                        <div class="titulo">
                            <a>Internacao</a>
                        </div>
                    </div>
                    
                    <div class="content_campos"><!--content dos campos de cadastro-->
                        
                        <div class="campo">
                            <div class="input_campo_p">
                               <label>Quarto :</label>
                                <select id="slt_quarto" class="input_med" name="slt_quarto">
                                  <?php
                                  include_once('../controllers/quarto_controller.php');
                                  include_once('../models/quarto_class.php');
                                  $controller_quarto  = new controllerQuarto();
                                  $list = $controller_quarto::Listar();
                                            
                                  $cont = 0;
                      
                                  while ($cont < count($list)) {
                                      
                                      
                                  ?>
                                      <option value="<?= $list[$cont]->id_quarto ?>"><?= $list[$cont]->numero ?></option>
                                  <?php
                                  
                                    $cont = $cont + 1;
                                    
                                  }
                                  
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="campo">
                            <div class="input_campo_p">
                               <label>Unidade :</label>
                                <select id="slt_unidade" class="input_med" name="slt_unidade">
                                  <?php
                                  include_once('../controllers/unidade_controller.php');
                                  include_once('../models/unidade_class.php');
                                  $controller_unidade  = new controller_unidade();
                                  $list = $controller_unidade::Listar();
                                            
                                  $cont = 0;
                      
                                  while ($cont < count($list)) {
                                      
                                      
                                  ?>
                                      <option value="<?= $list[$cont]->id_unidade ?>"><?= $list[$cont]->nome_unidade ?></option>
                                  <?php
                                  
                                    $cont = $cont + 1;
                                    
                                  }
                                  
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="campo" style="margin-top:10px;width:50px;"><!--campos--> <!--nome-->
                            <a>DATA:</a>
                            <div class="input_campo">
                                <input value="<?= $data ?>" required type="date" class="input_big" name="data" id="txt_numero">
                            </div>
                        </div>
                        
                        <div class="campo" style="margin-top:10px;width:50px;"><!--campos--> <!--nome-->
                            <a>HORÁRIO:</a>
                            <div class="input_campo">
                                <input value="<?= $hora ?>" required type="time" class="input_big" name="hora" id="txt_numero">
                            </div>
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