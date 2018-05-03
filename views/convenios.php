<?php
  $list=null;
  $titulo = null;
  $texto = null;
  $imagem = null;
  $busc = null;

  if (isset($_GET['modo'])) {

    $modo = $_GET['modo'];
    if ($modo=='buscar') {


      $id = $_GET['id'];


      require_once('../CMS/controller_cms/convenios_controller.php');
      require_once('../CMS/model_cms/convenio_class.php');/*da um require na nivel_class*/

       $controller_convenios = new controller_convenios();
       $busc = $controller_convenios::Buscar();

          $titulo = $busc->titulo;
          $texto = $busc->texto;
          $imagem = $busc->imagem;


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
            <link rel="stylesheet" type="text/css" href="../css/style_convenios.css">
            <script type="text/javascript" src="../sistema_interno/js/jquery-3.2.1.min.js"></script>


            <script>


                function Mostrar(IdItem){
                  //alert(IdItem);
                  event.preventDefault();
                  $.ajax({

                      type:"GET",
                      url: "convenios.php?modo=buscar&id="+IdItem,
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
                          Convênios
                    </div>
                    <!-- Faixa branca embaixo do menu -->
                   <div class="faixa_branca">

                   </div>
                   <!-- Primeira section da div -->
                    <div class="titulo_busque_seu_exame">
                          <p>Busque seu convênio:<p>
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
                            Convênios Disponiveis
                        </div>
                        <?php
                          require_once('../CMS/controller_cms/convenios_controller.php');
                          require_once('../CMS/model_cms/convenio_class.php');

                          $controller_convenios = new controller_convenios();
                          $list = $controller_convenios::Listar();

                          $cont=0;
                          while($cont<count($list)){
                        ?>
                        <div class="content_faixa_exames"><!--content dos exames-->
                            <div class="content_nome_exames"><!--nome exames-->
                                <a><?php echo($list[$cont]->titulo)?></a>
                            </div>

                            <div class="acoes_exames"><!--ação 1-->
                                <img src="../imagens/info.png" onclick="Mostrar(<?php echo($list[$cont]->id_convenio)?>);">
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
                                <a><?php echo $titulo; ?></a>
                            </div>
                            <div class="suporte_conteudo_descricao">
                                  <div class="suporte_img_descricao">
                                        <img src="../CMS/<?php echo $imagem ?>" alt="" class="imagem_convenio_especifico">
                                  </div>
                                  <div class="conteudo_descricao">
                                      <?php echo $texto ?>

                                  </div>
                            </div>

                        </div>



                    </div>
                </div>
                <!-- Esse require adiciona o rodapé na página -->
              <?php require_once('footer.php'); ?>
            </div>
      </body>
</html>
