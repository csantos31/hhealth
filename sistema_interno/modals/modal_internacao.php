<?php
//$action = "modo=inserir";
$id="0";
$id_end;
$paciente=null;

$paciente =  null;
$funcionario =  null;
$quarto = null;
$hora = null;
$data =  null;
$unidade = null;

if(isset($_GET['modo'])){
    $modo = $_GET['modo'];
    if($modo=='buscarId'){
        $id=$_GET['codigo'];


        require_once("../controllers/paciente_controller.php");/*da um require na nivel_controller*/
        require_once("../models/paciente_class.php");/*da um require na nivel_class*/
        require_once("../controllers/endereco_controller.php");
        require_once("../models/paciente_class.php");
        // Instancio a controller
        $controller_paciente  = new controllerPaciente();
        //Chama o metodo para Listar todos os registros
        $list = $controller_paciente::Buscar($id);
        // $id_end=$list['id_endereco'];

        $paciente = $list['paciente_internacao'];
        $funcionario = $list['funcionario_internacao'];
        $quarto = $list['quarto_internacao'];
        $hora= $list['hora_internacao'];
        $data = $list['data_internacao'];
        $unidade = $list['unidade_internacao'];

    }
}
?>

<html>
    <head>
        <title>Modal</title>
        <link rel="stylesheet" type="text/css" href="../css/style_cad_paciente.css">
        <link rel="stylesheet" type="text/css" href="../css/style_modal_especialidade.css">
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

              var id = $("#form").data("id");
              var modo = "";
              if(id == '0'){
                  modo='inserir';
                document.getElementById('photo_profile').style.display = 'block';
                    document.getElementById('foto_convenio').style.display = 'block';
                    //document.getElementById('meu_num').style.marginLeft = '150px';
              } else{
                  modo='editar';
                    document.getElementById('photo_profile').style.display = 'none';
                    document.getElementById('foto_convenio').style.display = 'none';
                    document.getElementById('meu_num').style.marginLeft = '160px';
                  var idEnd = $('#form').data("id_end");
              }


             console.log(modo);

             $("#form").submit(function(event){
                  //Recupera o id gravado no Form pelo atribute-id


                //anula a ação do submit tradicional "botao" ou F5
                 event.preventDefault();

                 $.ajax({
                    type: "POST",
                    url: "../router.php?controller=internacao&modo="+modo+"&id="+id,
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
                <a href="#" class="fechar"><img src="../imagens/close.png"/></a>
            </div>

            <div class="content_modal">
                <form action="" method="post" id="form" data-id_end="<?= $id_end ?>" data-id="<?php echo($id)?>" enctype="multipart/form-data">
                    <div class="content_logo"><!--content do logo e do titulo-->
                        <div class="logo">
                            <img src="../../imagens/logo_only_heart.png">
                        </div>
                        <div class="titulo">
                            <a>Internação</a>
                        </div>
                    </div>

                    <div class="content_campos"><!--content dos campos de cadastro-->

                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                              <input type="text" name="txt_paciente" value="" placeholder="paciente">
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                              <input type="text" name="txt_funcionario" value="" placeholder="funcionario">
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                              <input type="text" name="txt_quarto" value="" placeholder="quarto">
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                              <input type="text" name="txt_unidade" value="" placeholder="unidade">
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                              <input type="text" name="txt_data" value="" placeholder="data">
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                              <input type="text" name="txt_hora" value="" placeholder="hora">
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
