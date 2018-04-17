<?php
//$action = "modo=inserir";
$id="0";
$paciente=null;

$nome =  null;
$dt_nasc =  null;
$sobrenome =  null;
$foto1 =  null;
$foto2 =  null;
$logradouro =  null;
$cidade =  null;
$bairro = null;
$cep = null;
$rg = null;
$cpf = null;
$numero = null;

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

        $nome = $list['nome'];
        $dt_nasc = $list['dt_nasc'];
        $sobrenome = $list['sobrenome'];
        $rg = $list['rg'];
        $cpf = $list['cpf'];
        $foto1 = $list['foto'];
        $foto2 = $list['carterinha_convenio'];
        $logradouro = $list['logradouro'];
        $cidade = $list['cidade'];
        $bairro = $list['bairro'];
        $cep = $list['cep'];
        $numero = $list['numero'];
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
                    url: "../router.php?controller=paciente&modo="+modo+"&id="+id,
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
                <a href="#" class="fechar"><img src="../imagens/close.png"</a>
            </div>

            <div class="content_modal">
                <form action="" method="post" id="form" data-id="<?php echo($id)?>" enctype="multipart/form-data">
                    <div class="content_logo"><!--content do logo e do titulo-->
                        <div class="logo">
                            <img src="../../imagens/logo_only_heart.png">
                        </div>
                        <div class="titulo">
                            <a>Paciente</a>
                        </div>
                    </div>
                    <div class="content_campos"><!--content dos campos de cadastro-->
                        <div class="campo_p" style="width:200px;"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                                <input value="<?= $nome ?>" required type="text" class="input_med2" placeholder="NOME" name="txt_nome" id="txt_nome">
                            </div>
                        </div>
                        <div class="campo" style="width:200px;float:left;"><!--campos--> <!--nome-->
                            <div class="input_campo">
                                <input value="<?= $sobrenome ?>" required type="text" class="input_big" style="width:400px;" placeholder="SOBRENOME" name="txt_sobrenome" id="txt_sobrenome">
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <label>Data de nascimento</label>
                            <div class="input_campo_p">
                                <input value="<?= $dt_nasc ?>" required type="date" class="input_med2" placeholder="DATA DE NASCIMENTO" name="txt_dt_nasc" id="txt_dt_nasc">
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                                <input value="<?= $rg ?>" required type="text" class="input_med" placeholder="RG" name="txt_rg" id="txt_rg">
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                                <input value="<?= $cpf ?>" required type="text" class="input_med2" placeholder="CPF" name="txt_cpf" id="txt_cpf">
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                               <label>Convênio :</label>
                                <select id="slt_cargo" class="input_med2" name="slt_convenio">
                                    <option value="1">Convênio I</option>
                                    <option value="2">Convênio II</option>
                                    <option value="3">Convênio III</option>
                                    <option value="4">Convênio IV</option>
                                    <option value="5">Convênio V</option>
                                </select>
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                                <b>Selecione uma imagem para este paciente :</b>
                                <input type="file" name="fle_foto1" id="file_paciente">
                            </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                                <b>Insira a imagem comprovante do convênio:</b>
                                <input type="file" name="fle_foto2" id="file_convenio">
                            </div>
                        </div>
                        <div class="campo_p" style="width:200px;"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                                <input value="<?= $cep ?>" required type="text" class="input_med2" placeholder="CEP" name="txt_cep" id="txt_cep">
                            </div>
                        </div>
                        <div class="campo" style="width:200px;float:left;"><!--campos--> <!--nome-->
                            <div class="input_campo">
                                <input value="<?= $logradouro ?>" required type="text" class="input_big" style="width:400px;" placeholder="LOGRADOURO" name="txt_logradouro" id="txt_logradouro">
                            </div>
                        </div>
                        <div class="campo_p">
                          <div class="input_campo_p">
                              <input value="<?= $numero ?>" required type="text" class="input_med2" placeholder="NÚMERO" name="txt_numero" id="txt_numero">
                          </div>
                        </div>
                        <div class="campo_p"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                               <label>Estado :</label>
                                <select id="slt_cargo" class="input_med" name="slt_estado">
                                  <?php
                                  include_once('../controllers/endereco_controller.php');
                                  include_once('../models/endereco_class.php');
                                  $controller_endereco  = new controllerEndereco();
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
                        </div>
                        <div class="campo"><!--campos--> <!--nome-->
                            <div class="input_campo_p">
                                <input value="<?= $cidade ?>" required type="text" class="input_med2" placeholder="CIDADE" name="txt_cidade" id="txt_cidade">
                            </div>
                            <div class="input_campo_p">
                                <input value="<?= $bairro ?>" required type="text" class="input_med2" placeholder="BAIRRO" name="txt_bairro" id="txt_bairro">
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
