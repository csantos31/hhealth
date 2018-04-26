<?php
    require('verifica_paciente.php');

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pré atendimento</title>
    <link rel="stylesheet" href="../css/style_nav.css">
    <link rel="stylesheet" href="../css/style_pre_atendimento.css">
    <link rel="stylesheet" href="../css/style_footer.css">
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
        <form id="" action="preatendim.html" method="post">
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
            <div class="titulo_item_form_maioria">
              Tempo de chegada
            </div>
            <div class="input_form">
              <input type="text" name="txt_nome" value="" placeholder="Nome Completo" class="input_text">
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
            <div id="suporte_data">
              <div id="titulo_data">
                Data
              </div>
              <div class="input_form">
                <input type="date" name="" value="" class="item_data_hora" placeholder="Data">
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
