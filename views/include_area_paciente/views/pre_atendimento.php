<?php
    require('verifica_paciente.php');

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pré atendimento</title>
    <link rel="stylesheet" type="text/css" href="../css/style_layout_idade.php" media="screen" />
    <link rel="stylesheet" href="../css/style_nav.css">
    <link rel="stylesheet" href="../css/style_pre_atendimento.css">
    <link rel="stylesheet" href="../css/style_footer.css">
    <script src="../../../sistema_interno/js/jquery-3.2.1.min.js"></script>

      
      
      <script>
        $(document).ready(function() {
           $('#form').submit(function(event){
                event.preventDefault();
                $.ajax({
                type: "POST",
                url: "../router.php?controller=pre_atendimento&modo=inserir",
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
          <strong>Pré atendimento</strong>
        </div>
      </div>
      <div class="faixa_branca">

      </div>
      <div id="content_formulario">
        <form action="pre_atendimento.php" id="form" method="post">
          <div class="item_form">
            <div class="titulo_item_form_maioria">
              Unidade
            </div>
            <div class="input_form">
              <select class="slct_form" name="slc_unid">
                <option value="0">unidade</option>
                <?php
                    require_once('../../../sistema_interno/controllers/unidade_controller.php');
                    require_once('../../../sistema_interno/models/unidade_class.php');

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
            <div class="titulo_item_form_maioria">
              Tempo de chegada
            </div>
            <div class="input_form">
              <input type="time" name="txt_tempo" value="" placeholder="Nome Completo" class="input_text">
            </div>
          </div>
          <div class="item_form">
            <div class="titulo_item_form_maioria">
              Medico
            </div>
            <div class="input_form">
              <select class="slct_form" name="slc_medico">
                <option value="0">medico</option>
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
                <input type="date" name="date_pre_atendimento" value="" class="item_data_hora">
              </div>
            </div>
          </div>
          <div id="suporte_btn_agendar">
              <input type="submit" name="bnt_submit_agenda" value="Agendar" onclick="return confirm('Deseja realmente agendar um atendimento?')" id="bnt_submit_agenda">
          </div>
        </form>
      </div>
      <div class="faixa_branca">

      </div>
    </div>
    <?php
          include('footer_paciente.php');
    ?>
  </body>
</html>
