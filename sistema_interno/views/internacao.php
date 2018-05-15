<?php  ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Internação</title>
    <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
    <link rel="stylesheet" type="text/css" href="../css/style_menu_lateral.css">
    <link rel="stylesheet" href="../css/style_internacao.css">
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
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

            $.ajax({
                type:"POST",
                url:"../modals/modal_internacao.php",
                success: function(dados){
                    $(".modal").html(dados);
                }
            });
        }

        //Editar
        function Editar(IdIten){
            $.ajax({
                type:"GET",
                url:"../modals/modal_internacao.php",
                data: {modo:'buscarId',codigo:IdIten},
                success: function(dados){
                    $('.modal').html(dados);
                }

            });
        }

        //Excluir
        function Excluir(idIten){
            //anula a ação do submit tradicional "botao" ou F5
            event.preventDefault();

            if(confirm('Tem certeza?')){

            $.ajax({
                type:"GET",
                data: {id:idIten},
                url: "../router.php?controller=internacao&modo=excluir&id="+idIten,
                success: function(dados){
                    console.log(dados);
                    $('.modal').html(dados);
                }
            });

            }
        }

    </script>
  </head>
  <body>
    <div id="principal">
      <div class="container_modal"><!--container da modal-->
          <div class="modal"><!--modal-->
          </div>
      </div>
        <header>
            SISTEMA INTERNO HHEALTH
        </header>
        <div class="alinha_conteudo">

        </div>
        <?php include_once('menu_lateral.php');  ?>
        <div class="main">
            <div id="container_cad_paciente">
                  <div class="cabecalho">
                       <div class="txt_cabecalho">
                             <p>Internação</p>
                       </div>
                       <div class="img_nivel">
                            <a class="novo" onclick="Cadastrar()" style="cursor:pointer;">
                                <img src="../imagens/add.png">
                            </a>
                       </div>
                  </div>
              </div>
          </div>
    </div>
  </body>
</html>
