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
    <meta name="viewport" content="initial-scale=1, maximun-scale=1">
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
            include_once($caminho .'../controllers/auditoria_paciente_controller.php');
            include_once($caminho .'../models/auditoria_paciente_class.php');

            $auditoria_controller = new controller_auditoria_paciente();

            $list = $auditoria_controller::Buscar($_SESSION['id_paciente']);

            $cont = 0;
        if($list){
            
            while ($cont < count($list)) {
                  # code...

                  //$codigo =$list[$cont]->status_imagem;
      ?>
      <div id="content__pagina">
        <div class="linha_registro">
          <?php echo($list[$cont]->data); ?><?php echo(" - "); ?><?php echo($list[$cont]->acao); ?>
        </div>
      </div>
      <?php

            $cont +=1;
            }
        }else{
            echo "Você ainda não tem nenhum histórico";
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
