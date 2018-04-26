<?php
    require('verifica_paciente.php');

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Histórico do paciente</title>
    <link rel="stylesheet" href="../css/style_nav.css">
    <link rel="stylesheet" href="../css/style_historico.css">
    <link rel="stylesheet" href="../css/style_footer.css">
  </head>
  <body>
    <?php include_once('nav_paciente.php'); ?>
    <div id="content">
      <div id="suporte_titulo">
        <div id="titulo_pagina">
          <strong>Histórico do paciente</strong>
        </div>
      </div>
      <div class="faixa_branca">

      </div>
      <?php

            // Incluindo a controller e a model para serem utilizadas
            include_once($caminho .'../controllers/hist.php');
            include_once($caminho .'../models/receita_class.php');

            $receitas_controller = new controller_receitas();

            $list = $receitas_controller::Listar();

            $cont = 0;

            while ($cont < count($list)) {
                  # code...

                  //$codigo =$list[$cont]->status_imagem;
      ?>
      <div id="content__pagina">
        <div class="linha_registro">
          28/03/2017 - exame realizado na unidade Jandira
        </div>
      </div>
      <div class="faixa_branca">
      </div>
    </div>
    <?php
          include('footer_paciente.php');
    ?>
  </body>
</html>
