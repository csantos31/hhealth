<?php

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
                    url:"/modals/modal_cad_especialidade.php",
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
                    url: "../router.php?controller=especialidade&modo=excluir&id="+idIten,
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
                                    <div class="titulo">
                                          Nome do Convênio
                                    </div>
                                    <div class="titulo">
                                          Imagem
                                    </div>
                                    <div class="titulo">
                                          Opções
                                    </div>
                               </div>
                               <div class="conteudo_tabela">
                                     <div class="nome_convenio">
                                           Nome do Convênio
                                     </div>
                                     <div class="img_convenio">
                                           <img src="../imagens/img login.jpg" alt="">
                                     </div>
                                     <div class="opcoes_convenio">
                                           <div class="alinha_direita">
                                                 <img src="../../sistema_interno/imagens/edit.png" alt="">
                                           </div>
                                           <div class="alinha_esquerda">
                                                 <img src="../../sistema_interno/imagens/shutdown.png" alt="">
                                           </div>
                                     </div>
                               </div>

                         </div>
                    </div>


                </div>

                <?php include('footer_cms.php')?>
            </div>
        </div>

    </body>
</html>
