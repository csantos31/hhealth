<?php
  $list=null;
  $texto_descricao = null;
  $texto_procedimento = null;
  $tituloDescricao = null;
  $tituloProcedimento = null;
  $busc = null;

  if (isset($_GET['modo'])) {

    $modo = $_GET['modo'];
    if ($modo=='buscar') {
      # code...

      $id = $_GET['id'];
      $tituloDescricao = "Descrição";
      $tituloProcedimento = "Procedimento";
      # code...
      require_once('../CMS/controller_cms/gerenciamento_exame_controller.php');
      require_once('../CMS/model_cms/gerenciamento_exames_class.php');/*da um require na nivel_class*/

       $controller_exame = new controller_exame();
       $busc = $controller_exame::Buscar();

       $texto_descricao = $busc->texto;
       $texto_procedimento = $busc->procedimento;

  }
}

 ?>

<!DOCTYPE html>

<html lang="pt-br" dir="ltr">
      <head>
            <meta charset="utf-8">
            <title>Hospital Hhealth</title>
            <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
            <link rel="stylesheet" type="text/css" href="../css/style_exames.css">


            <script src="../sistema_interno/js/jquery-3.2.1.min.js"></script>


            <script>


                function Mostrar(IdItem){
                  //alert(IdItem);
                  event.preventDefault();
                  $.ajax({

                      type:"GET",
                      url: "exames.php?modo=buscar&id="+IdItem,
                       // console.log(url),
                       success: function(dados){
                            //console.log(dados);
                            $('.main').html(dados);

                        },
                        error: function(error, errorThrown){
                          alert(error+"  "+ errorThrown);
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
                          Exames
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
                                <input type="search" name="pesquisaExames" value="" placeholder="Search...">

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
                              <a href="#" onclick="">
                                <img src="../imagens/info.png" onclick="Mostrar(<?php echo($list[$cont]->id_exame)?>);">
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
                                <a><?php echo $tituloDescricao; ?></a>
                            </div>

                            <div class="conteudo_descricao">
                                <?php echo $texto_descricao;?>

                            </div>
                        </div>

                        <div class="content_procedimento">
                            <div class="titulo_procedimento">
                                <a><?php echo $tituloProcedimento; ?></a>
                            </div>

                            <div class="conteudo_procedimento">
                                <a><?php echo $texto_procedimento;?> </a>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Esse require adiciona o rodapé na página -->
                <?php require_once('footer.php'); ?>
            </div>
      </body>
</html>
