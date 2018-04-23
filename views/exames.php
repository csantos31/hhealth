<?php
  if (isset()) {
    # code...
  }


 ?>

<!DOCTYPE html>

<html lang="pt-br" dir="ltr">
      <head>
            <meta charset="utf-8">
            <title></title>
            <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
            <link rel="stylesheet" type="text/css" href="../css/style_exames.css">


            <script type="text/javascript" src="../../sistema_interno/js/jquery-3.2.1.min.js"></script>


            <script>


                function Mostrar(IdItem){
                    $.ajax({
                       type:"GET",
                        url:"../router.php?modo=buscar&id="+IdItem,
                        success: function(dados){
                            $('.content_descricao_procedimento').html(dados);
                        }
                    });
                }



            </script>
      </head>
      <body>
            <div class="main">
                  <!-- Esse require adiciona o menu na página -->
                  <?php require_once('nav.php'); ?>
                 <div class="div_suporte_conteudo">
                 </div>

                <div id="content_main"><!--Content-->
                    <div class="faixa_titulo">
                          Agendamentos
                    </div>
                    <!-- Faixa branca embaixo do menu -->
                   <div class="faixa_branca">

                   </div>
                   <!-- Primeira section da div -->
                    <div class="titulo_busque_seu_exame">
                          <p>Busque seu exame:<p>
                    </div>
                    <div class="busca">
                          <div class="centraliza_input">
                                <input type="search" name="" value="" placeholder="Search...">

                          </div>
                          <div class="ajusta_lupa">
                                <img class="lupa" src="../imagens/magnifier.png" alt="">
                          </div>

                    </div>
                    <div class="conteudo_exames">
                        <div class="titulo_exame">
                            Exames Disponiveis
                        </div>
                        <?php
                        include_once('../CMS/controller_cms/gerenciamento_exame_controller.php');
                        include_once('../CMS/model_cms/gerenciamento_exames_class.php');


                        $controller_exame = new controller_exame();
                        $list = $controller_exame::Listar();

                        $cont=0;
                        while($cont<count($list)){
                        ?>
                        <div class="content_faixa_exames"><!--content dos exames-->
                            <div class="content_nome_exames"><!--nome exames-->
                                <a><?php echo($list[$cont]->titulo)?></a>
                            </div>

                            <div class="acoes_exames"><!--ação 1-->
                              <a href="#" onclick="Mostrar(<?php echo($list[$cont]->id_exame)?>);">
                                <img src="../imagens/info.png" onclick="">
                              </a>
                            </div>


                        </div>
                        <?php
                            $cont++;
                        }
                        ?>
                    </div>

                    <div class="content_descricao_procedimento">
                        <div class="content_descricao">
                            <div class="titulo_descricao">
                                <a>Descrição</a>
                            </div>

                            <div class="conteudo_descricao">
                                <?php echo($list[$cont]->titulo)?>

                            </div>
                        </div>

                        <div class="content_procedimento">
                            <div class="titulo_procedimento">
                                <a>Procedimento</a>
                            </div>

                            <div class="conteudo_procedimento">
                                <a><?php echo($list[$cont]->titulo)?> </a>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Esse require adiciona o rodapé na página -->
                <?php require_once('footer.php'); ?>
            </div>
      </body>
</html>
