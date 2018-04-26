<?php
    //require('verifica_paciente.php');

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pré atendimento</title>
    <link rel="stylesheet" href="../css/style_nav.css">
    <link rel="stylesheet" href="../css/style_resultado_exames.css">
    <link rel="stylesheet" href="../css/style_footer.css">
  </head>
  <body>
    <?php include_once('nav_paciente.php'); ?>
    <div id="content_receitas">
        <div class="titulo_receitas">
            <a>Resultado de Exames</a>
        </div>

        <div class="conteudo_receitas"><!--conteudo receitas-->
            <div class="content_titulo_receita">
                <div class="titulo_nome">
                    <a>Nome</a>
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
            </div>

            <div class="content_conteudo_receitas"><!--receitas-->
                <div class="content_nome"><!--nome-->

                </div>

                <div class="content_especialidade"><!--data-->

                </div>

                <div class="content_unidade"><!--data-->

                </div>

                <div class="content_data"><!--data-->

                </div>

                <div class="acao_resultado"><!--açção-->
                    <img src="../../../imagens/save.png">
                </div>
            </div>

            <div class="content_conteudo_receitas"><!--receitas-->
                <div class="content_nome"><!--nome-->

                </div>

                <div class="content_especialidade"><!--data-->

                </div>

                <div class="content_unidade"><!--data-->

                </div>

                <div class="content_data"><!--data-->

                </div>

                <div class="acao_resultado"><!--açção-->
                    <img src="../../../imagens/save.png">
                </div>
            </div>

            <div class="content_conteudo_receitas"><!--receitas-->
                <div class="content_nome"><!--nome-->

                </div>

                <div class="content_especialidade"><!--data-->

                </div>

                <div class="content_unidade"><!--data-->

                </div>

                <div class="content_data"><!--data-->

                </div>

                <div class="acao_resultado"><!--açção-->
                    <img src="../../../imagens/save.png">
                </div>
            </div>
        </div>
    </div>
    <?php
          include('footer_paciente.php');
    ?>
  </body>
</html>
