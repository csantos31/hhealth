<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/style_especialidades.css">
        <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <meta name="viewport" content="initial-scale=1, maximun-scale=1">
        <title>Hospital HHealth</title>
    </head>
    <body>
        <div class="main"><!--Div Main que segura todas as divs-->
             <!-- Esse require adiciona o menu na página -->
             <?php require_once('nav.php'); ?>
            <div class="div_suporte_conteudo">

            </div>
            <div class="content">
                <?php
                include_once("../sistema_interno/models/especialidade_class.php");
                include_once("../sistema_interno/controllers/especialidade_controller.php");

                $controller_especialidade = new controllerEspecialidade();
                $list = $controller_especialidade::Listar();

                $cont=0;
                while($cont < count($list)){


                ?>
                  <div class="suporte_especialidades">
                       <div class="nome_especialidade">
                              <?php echo($list[$cont]->especialidade);?>
                       </div>
                       <div class="suporte_imagem_especialidades">
                              <img src="../sistema_interno/<?php echo($list[$cont]->imagem)?>" alt="www.nursing.com.br/cardiologia/">

                       </div>

                  </div>
                <?php
                    $cont++;
                }
                ?>
            </div>
            <!-- Esse require adiciona o rodapé na página -->
            <?php require_once('footer.php'); ?>
        </div>

    </body>
</html>
