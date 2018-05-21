<?php

//$action = "modo=inserir";

$id="0";
$numero=null;
$descricao=null;


if(isset($_GET['modo'])){

    $modo = $_GET['modo'];

    if($modo=='buscarId'){
        $id=$_GET['id'];

        require_once("../controllers/receitas_controller.php");/*da um require na nivel_controller*/
        require_once("../models/receitas_class.php");/*da um require na nivel_class*/

        // Instancio a controller
        $controller_receita  = new controllerReceita();

        //Chama o metodo para Listar todos os registros
        $list = $controller_receita::Buscar($id);

        $numero = $list->numero;
        //$descricao = $list->descricao;

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
                  var modo = "";
                  if(id == '0')
                      modo='inserir';
                  else
                      modo='editar';

                //anula a ação do submit tradicional "botao" ou F5
                 event.preventDefault();

                 $.ajax({
                    type: "POST",
                    url: "../router.php?controller=receita&modo="+modo+"&id="+id,
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
                <form action="" method="post" id="form" data-id="<?php echo($id)?>" enctype="multipart/form-data">
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
                               <label>Paciente :</label>
                                <select id="slt_paciente" class="input_med" name="slt_paciente">
                                  <?php
                                  include_once('../controllers/paciente_controller.php');
                                  include_once('../models/paciente_class.php');
                                  $controller_paciente  = new controllerPaciente();
                                  $list = $controller_paciente::Listar();

                                  $cont = 0;

                                  while ($cont < count($list)) {
                                  ?>
                                      <option value="<?= $list[$cont]->id_paciente ?>"><?= $list[$cont]->nome ?></option>
                                  <?php

                                    $cont = $cont + 1;

                                  }

                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="campo">
                            <div class="input_campo_p">
                               <label>REMÉDIO :</label>
                                <select id="slt_unidade" class="input_med" name="slt_remedio">
                                  <?php
                                  require_once('../controllers/remedio_controller.php');
                                  require_once('../models/remedio_class.php');
                                  $controller_unidade  = new controllerRemedio();
                                  $list = $controller_unidade::Listar();

                                  $cont = 0;

                                  while ($cont < count($list)) {


                                  ?>
                                      <option value="<?= $list[$cont]->id_remedio ?>"><?= $list[$cont]->remedio ?></option>
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
                            <a>TIPO:</a>
                            <div class="input_campo">
                                <input value="text" required type="text" class="input_big" name="tipo" id="txt_numero">
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
