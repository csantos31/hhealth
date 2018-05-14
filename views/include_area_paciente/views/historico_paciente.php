<?php
    require('verifica_paciente.php');
    $status=null;
 $action = "modo=inserir";
 $nivel = null;
 $descricao = null;


 if (isset($_GET['controller']))
     $caminho ="views/";
 else
     $caminho = "";
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Histórico do paciente</title>
    <link rel="stylesheet" type="text/css" href="../css/style_layout_idade.php" media="screen" />
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
            include_once($caminho .'../controllers/historico_controller.php');
            include_once($caminho .'../models/historico_paciente_class.php');

            $receitas_controller = new controller_historico_paciente();

            $list = $receitas_controller::Listar();

            $cont = 0;

            while ($cont < count($list)) {
                  # code...

                  //$codigo =$list[$cont]->status_imagem;
      ?>
      <div id="content__pagina">
        <div class="linha_registro">
          <?php echo($list[$cont]->data); ?><?php echo(" - "); ?><?php echo($list[$cont]->descricao); ?>
        </div>
      </div>
      <?php

            $cont +=1;
            }
      ?>
      <div class="faixa_branca">
      </div>
    </div>
    <?php
          include('footer_paciente.php');
    ?>
  </body>
</html>
