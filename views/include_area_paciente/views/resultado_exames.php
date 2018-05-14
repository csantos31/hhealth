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

 //include('verifica_paciente.php');




?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pré atendimento</title>
    <link rel="stylesheet" type="text/css" href="../css/style_layout_idade.php" media="screen" />
    <link rel="stylesheet" href="../css/style_nav.css">
    <link rel="stylesheet" href="../css/style_resultado_exames.css">
    <link rel="stylesheet" href="../css/style_footer.css">

    <script src="../../sistema_interno/js/jquery-3.2.1.min.js"></script>
    <script>/*Modal*/
      $(document).ready(function(){

            $(".novo").click(function(){
                $(".container_modal").toggle(2000);
            });

            $(".editar").click(function(){
                $(".container_modal").fadeIn(2000);

            });


      });

      //Cadastrar
      function Cadastrar(){
             console.log('entrou_aqui');
            $.ajax({
                type:"POST",
                url:"modals/modal_cadastro_convenio.php",
                success: function(dados){
                    $(".modal").html(dados);
                }
            });
      }

      //Editar
      function Editar(IdIten){
            $.ajax({
                type:"GET",
                url:"modals/modal_cadastro_convenio.php",
                data: {modo:'buscarId',id:IdIten},
                success: function(dados){
                    $('.modal').html(dados);
                    //alert(IdIten);
                }

            });
      }

      //Desativar
          function Desativar(IdIten){
              //anula a ação do submit tradicional "botao" ou F5
              event.preventDefault();
              $.ajax({
                  type:"GET",
                  data: {id:IdIten},
                  url: "../router.php?controller=convenio&modo=desativar&id="+IdIten,
                  success: function(dados){
                      $('.alinha_meio').html(dados);
                  }
              });
          }
          //Ativar
             function Ativar(IdIten){
                 //anula a ação do submit tradicional "botao" ou F5
                 event.preventDefault();
                 $.ajax({
                     type:"GET",
                     data: {id:IdIten},
                     url: "../router.php?controller=convenio&modo=ativar&id="+IdIten,
                     success: function(dados){
                        $('.alinha_meio').html(dados);
                     }
                 });
             }

      //Desativar
          function Deletar(IdIten){
              //anula a ação do submit tradicional "botao" ou F5
              event.preventDefault();
              $.ajax({
                  type:"GET",
                  data: {id:IdIten},
                  url: "../router.php?controller=convenio&modo=deletar&id="+IdIten,
                  success: function(dados){
                      $('.alinha_esquerda').html(dados);
                  }
              });
          }






    </script>
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
            <?php

                  // Incluindo a controller e a model para serem utilizadas
                  include_once($caminho .'../controllers/resultados_exames_controller.php');
                  include_once($caminho .'../models/resultado_exame_class.php');

                  $receitas_controller = new controller_resultados_exames();

                  $list = $receitas_controller::Listar();

                  $cont = 0;

                  while ($cont < count($list)) {
                        # code...

                        //$codigo =$list[$cont]->status_imagem;
            ?>
            <div class="content_conteudo_receitas"><!--receitas-->
                <div class="content_nome"><!--nome-->
                      <?php echo($list[$cont]->nome); ?>
                </div>

                <div class="content_especialidade"><!--data-->
                      <?php echo($list[$cont]->especialidade); ?>
                </div>

                <div class="content_unidade"><!--data-->
                      <?php echo($list[$cont]->unidade); ?>
                </div>

                <div class="content_data"><!--data-->
                      <?php echo($list[$cont]->data); ?>
                </div>

                <div class="acao_resultado"><!--açção-->
                    <img src="../../../imagens/save.png" alt="">
                </div>
            </div>
            <?php

                  $cont +=1;
                  }
            ?>
        </div>
    </div>
    <?php
          include('footer_paciente.php');
    ?>
  </body>
</html>
