<?php
      $status=null;
    $action = "modo=inserir";
    $nivel = null;
    $descricao = null;


    if (isset($_GET['controller']))
        $caminho ="views_cms/";
    else
        $caminho = "";

    include($caminho.'../verifica.php');


    /*NIVEL EDIT*/
    if(isset($tipo_quarto)){
        $action = "modo=editar&id=". $tipo_quarto->id_tipo_quarto;
        $nivel = $tipo_quarto->nivel;
        $descricao = $tipo_quarto->descricao;

    }

?>


<html>
    <head>

        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_convenios.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_menu.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_footer.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_menu_lateral.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_modal_cadastro_convenios.css">
        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_modal.css">


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
          <div class="container_modal"><!--container da modal-->
             <div class="modal"><!--modal-->
             </div>
          </div>
        <div class="main">  <!--Div main que segura todas as div-->


            <div class="content_cms">
                <?php include('menu_cms.php')?>

                <div class="content_home_cms"><!--conteudo da home do cms-->

                    <!-- Include once menu lateral -->
                    <?php include_once('menu_lateral_cms.php'); ?>

                    <div class="conteudo_home_cms"><!--conteudo menu-->
                          <div class="content_titulo_usuario">
                             <div class="titulo_cadastro1_usuario">
                                 <a> Convênios</a>
                             </div>

                             <div class="content_add_usuario">
                                 <div class="img_usuario">
                                     <a class="novo" href="#" onclick="Cadastrar()">
                                           <img src="<?=$caminho?>imagens/add.png">
                                     </a>
                                 </div>

                             </div>
                         </div>
                         <div class="tabela_convenios">
                               <div class="titulo_da_tabela">
                                    <div class="nome-titulo">
                                          Nome do Convênio
                                    </div>
                                    <div class="img-titulo">
                                          Imagem
                                    </div>
                                    <div class="opcoes-titulo">
                                          Opções
                                    </div>
                               </div>
                               <?php

                                     // Incluindo a controller e a model para serem utilizadas
                                     include_once($caminho .'../controller_cms/convenios_controller.php');
                                     include_once($caminho .'../model_cms/convenio_class.php');

                                     $convenios_controller = new controller_convenios();

                                     $list = $convenios_controller::Listar();

                                     $cont = 0;

                                     while ($cont < count($list)) {
                                           # code...
                                           $ativo=$list[$cont]->status_imagem;
                                           if($status==1 ){
                                           }
                                ?>
                               <div class="conteudo_tabela">
                                     <div class="nome_convenio">
                                           <?php echo($list[$cont]->titulo); ?>
                                     </div>
                                     <div class="img_convenio">
                                           <img src="../<?php echo($list[$cont]->imagem); ?>" alt="">
                                     </div>
                                     <div class="opcoes_convenio">
                                           <div class="alinha_direita">
                                                 <a class="editar" href="#" onclick="Editar(<?php echo($list[$cont]->id_convenio); ?>)">
                                                       <img src="../../sistema_interno/imagens/edit.png" alt="">
                                                 </a>
                                           </div>
                                           <div class="alinha_meio">
                                                 <a class="#" href="#" onclick="Desativar(<?php echo($list[$cont]->id_convenio); ?>)">
                                                       <img src="../../sistema_interno/imagens/shutdown.png" alt="">
                                                 </a>
                                           </div>
                                           <div class="alinha_esquerda">
                                                 <a class="#" href="#" onclick="Deletar(<?php echo($list[$cont]->id_convenio); ?>)">
                                                       <img src="../../sistema_interno/imagens/icons8-lixo-52.png" alt="">
                                                 </a>
                                           </div>
                                     </div>
                               </div>
                               <?php

                                     $cont +=1;
                                     }
                                ?>

                         </div>
                    </div>


                </div>

                <?php include('footer_cms.php')?>
            </div>
        </div>

    </body>
</html>
