<?php
    require('verifica_paciente.php');
    @session_start();
    $status=null;
    $action = "modo=inserir";
    $nivel = null;
    $descricao = null;


    if (isset($_GET['controller']))
     $caminho ="views/";
    else
     $caminho = "";

    //include('verifica_paciente.php');


?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agendamento</title>
    <link rel="stylesheet" href="../css/style_nav.css">
    <!--mudar css de agendamento-->
    <link rel="stylesheet" href="../css/style_agendamento_crianca.css">
    <link rel="stylesheet" href="../css/style_footer.css">
    <script src="../../../sistema_interno/js/jquery-3.2.1.min.js"></script>

    <script>
        $(document).ready(function() {
           $('#form').submit(function(event){
                event.preventDefault();
                $.ajax({
                type: "POST",
                url: "../router.php?controller=agendamento&modo=inserir",
                //alert (url);
                data: new FormData($("#form")[0]),
                cache:false,
                contentType:false,
                processData:false,
                async:true,
                success: function(dados){
                     //$('#content_formulario').html(dados);
                     //alert(dados);
                     console.log(dados);
                }
              });
          });
        });
    </script>

  </head>
  <body>
    <?php include_once('nav_paciente.php'); ?>
    <div id="content">
      <div id="suporte_titulo">
        <div id="titulo_pagina">
          <strong>Agendamento</strong>
        </div>
      </div>
      <div class="faixa_branca">

      </div>
      <div id="content_formulario">
        <form id="form" action="area_paciente_agendamento" method="post">
          <div class="item_form">
            <div class="titulo_item_form_maioria">
              Unidade
            </div>
            <div class="input_form">
              <select class="slct_form" name="slt_unidade">
                <option value="">unidade</option>
                <?php
                    require_once("../../../sistema_interno/controllers/unidade_controller.php");
                    require_once("../../../sistema_interno/models/unidade_class.php");

                    $controller_unidade = new controller_unidade();
                    $list = $controller_unidade::Listar();

                    $cont=0;
                    while($cont<count($list)){
                ?>
                <option value="<?php echo($list[$cont]->id_unidade)?>"><?php echo($list[$cont]->nome_unidade)?></option>
                <?php
                        $cont++;
                    }
                  ?>
              </select>
            </div>
          </div>
          <div class="item_form">
            <div id="titulo_item_form_especialidade">
              Especialidade
            </div>
            <div class="input_form">
              <select class="slct_form" name="slt_especialidade">
                <option value="">especialidade</option>
                <?php
                    require_once("../../../sistema_interno/controllers/especialidade_controller.php");
                    require_once("../../../sistema_interno/models/especialidade_class.php");

                    $controller_especialidede = new controllerEspecialidade();
                    $list = $controller_especialidede::Listar();

                    $cont = 0;
                    while($cont<count($list)){


                ?>
                <option value="<?php echo($list[$cont]->id_especialidade)?>"><?php echo($list[$cont]->especialidade)?></option>
                  <?php
                        $cont++;
                    }
                  ?>
              </select>
            </div>
          </div>
          <div class="item_form">
            <div class="titulo_item_form_maioria">
              Medico
            </div>
            <div class="input_form">
              <select class="slct_form" name="slt_medico">

                <option value="">medico</option>
                  <?php

                  require_once("../../../sistema_interno/controllers/funcionario_controller.php");
                  require_once("../../../sistema_interno/models/funcionario_class.php");

                  $controller_funcionario = new controllerFuncionario();
                  $list = $controller_funcionario::Listar();

                  $cont=0;
                  while($cont<count($list)){
                  ?>
                <option value="<?php echo($list[$cont]->id_cargo)?>"><?php echo($list[$cont]->nome)?></option>
                  <?php
                  $cont++;
                  }
                  ?>
              </select>
            </div>
          </div>

          <div class="item_form">
            <div id="suporte_data">
              <div id="titulo_data">
                Data
              </div>
              <div class="input_form">
                <input type="date" name="txt_data" value="" class="item_data_hora">
              </div>
            </div>
            <div id="suporte_hora">
              <div id="titulo_hora">
                Hora
              </div>
              <div class="input_form">
                <input type="time" name="txt_hora" value="" class="item_data_hora">
              </div>
            </div>
          </div>
          <div id="suporte_btn_agendar">
              <input type="submit" name="bnt_submit_agenda" value="Agendar" id="bnt_submit_agenda">
          </div>
        </form>
      </div>
      <div class="faixa_branca">

      </div>

        <div class="titulo_agendamento">
            <strong>Agendamentos marcados</strong>
        </div>


        <div class="content_titulo_receita">
            <div class="titulo_nome">
                <a>Médico</a>
            </div>

            <div class="titulo_especialidade">
                <a>Especialidade</a>
            </div>

            <div class="titulo_unidade">
                <a>Unidade</a>
            </div>

            <div class="titulo_data_exame">
                <a>Data Exame</a>
            </div>
            <div class="titulo_hora_exame">
                <a>hora Exame</a>
            </div>
        </div>
        <?php
            // Incluindo a controller e a model para serem utilizadas
            include_once($caminho .'../controllers/agendamento_controller.php');
            include_once($caminho .'../models/agendamento_class.php');

            $controller_agendamento = new controller_agendamento();
            $list = $controller_agendamento::Listar();

            $cont=0;
            while($cont<count($list)){
        ?>
        <div class="content_conteudo_receitas"><!--receitas-->
            <div class="content_nome"><!--nome-->
                <?php echo($list[$cont]->funcionario)?>
            </div>

            <div class="content_especialidade"><!--especialidade-->
                <?php echo($list[$cont]->especialidade)?>
            </div>

            <div class="content_unidade"><!--unidade-->
                <?php echo($list[$cont]->unidade)?>
            </div>

            <div class="content_data"><!--data-->
                <?php echo($list[$cont]->data)?>
            </div>

            <div class="content_hora"><!--hora-->
                <?php echo($list[$cont]->hora)?>
            </div>
        </div>
        <?php
            $cont++;
            }


        ?>
    </div>
    <div class="">
      <?php include_once('footer_paciente.php'); ?>
    </div>
  </body>
</html>
