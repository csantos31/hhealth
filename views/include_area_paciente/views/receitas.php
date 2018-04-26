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

 include($caminho.'../verifica.php');




?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pré atendimento</title>
    <link rel="stylesheet" href="../css/style_nav.css">
    <link rel="stylesheet" href="../css/style_receitas.css">
    <link rel="stylesheet" href="../css/style_footer.css">

    <script type="text/javascript" src="../../sistema_interno/js/jquery-3.2.1.min.js"></script>
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
            <a>Receitas</a>
        </div>

        <div class="conteudo_receitas"><!--conteudo receitas-->
            <div class="content_titulo_receita">
                <div class="titulo_nome"><!--titulo nome-->
                    <a>Tipo</a>
                </div>

                <div class="titulo_data"><!--titulo data-->
                    <a>Data</a>
                </div>
            </div>
            <?php

                  // Incluindo a controller e a model para serem utilizadas
                  include_once($caminho .'../controllers/receitas_controller.php');
                  include_once($caminho .'../model_cms/receita_class.php');

                  $convenios_controller = new controller_convenios();

                  $list = $convenios_controller::Listar();

                  $cont = 0;

                  while ($cont < count($list)) {
                        # code...

                        $codigo =$list[$cont]->status_imagem;

                        if ($codigo==0) {
                             $modo_link="Ativar";
                             $icone_status="../../sistema_interno/imagens/icons8-desligar-50.png";
                             // echo($list[$cont]->status_imagem);
                        }elseif ($codigo==1) {
                             // code...
                             $modo_link="Desativar";
                             $icone_status="../../sistema_interno/imagens/icons8-desligar-50(1).png";
                        }else {
                             echo "Não foi possivel concluir está ação";


                        }
            ?>
            <div class="content_conteudo_receitas"><!--receitas-->
                <div class="content_nome"><!--nome-->

                </div>

                <div class="content_data"><!--data-->

                </div>

                <div class="acao_receita"><!--açção-->
                    <img src="../../../imagens/info.png">
                </div>
            </div>


        </div>
    </div>
    <?php
          include('footer_paciente.php');
    ?>
  </body>
</html>
