<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agendamento</title>
    <link rel="stylesheet" href="../../css/area_paciente/style_nav.css">
    <link rel="stylesheet" href="../../css/area_paciente/style_agendamento.css">

    <link rel="stylesheet" href="../../css/area_paciente/style_footer.css">

  </head>
  <body>
    <?php include_once('../include_area_paciente/nav_paciente.php'); ?>
    <div id="content">
      <div id="suporte_titulo">
        <div id="titulo_pagina">
          <strong>Agendamento</strong>
        </div>
      </div>
      <div class="faixa_branca">

      </div>
      <div id="content_formulario">
        <form id="" action="area_paciente_agendamento.html" method="post">
          <div class="item_form">
            <div class="titulo_item_form_maioria">
              Nome
            </div>
            <div class="input_form">
              <input type="text" name="txt_nome" value="" placeholder="Nome Completo" class="input_text">
            </div>
          </div>
          <div class="item_form">
            <div class="titulo_item_form_maioria">
              Unidade
            </div>
            <div class="input_form">
              <select class="slct_form" name="">
                <option value="">unidade</option>
              </select>
            </div>
          </div>
          <div class="item_form">
            <div id="titulo_item_form_especialidade">
              Especialidade
            </div>
            <div class="input_form">
              <select class="slct_form" name="">
                <option value="">especialidade</option>
              </select>
            </div>
          </div>
          <div class="item_form">
            <div class="titulo_item_form_maioria">
              Medico
            </div>
            <div class="input_form">
              <select class="slct_form" name="">
                <option value="">medico</option>
              </select>
            </div>
          </div>
          <div class="item_form">
            <div id="titulo_item_form_exame">
              Exames e Consulta
            </div>
            <div class="input_form">
              <select class="slct_form" name="">
                <option value="">exames e consulta</option>
              </select>
            </div>
          </div>
          <div class="item_form">
            <div id="suporte_data">
              <div id="titulo_data">
                Data
              </div>
              <div class="input_form">
                <input type="date" name="" value="" class="item_data_hora" placeholder="Data">
              </div>
            </div>
            <div id="suporte_hora">
              <div id="titulo_hora">
                Hora
              </div>
              <div class="input_form">
                <input type="time" name="" value="" class="item_data_hora" placeholder="hora">
              </div>
            </div>
          </div>
          <div id="suporte_btn_agendar">
              <input type="submit" name="bnt_submit_agenda" value="Agendar" onclick="return confirm('Deseja realmente agendar uma consulta?')" id="bnt_submit_agenda">
          </div>
        </form>
      </div>
      <div class="faixa_branca">

      </div>
    </div>
    <div class="">
      <?php include_once('../include_area_paciente/footer_paciente.php'); ?>
    </div>
  </body>
</html>
