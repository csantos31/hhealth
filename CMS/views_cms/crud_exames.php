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

        <link rel="stylesheet" type="text/css" href="<?= $caminho ?>css/style_cms_exames.css">
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
                    url:"modals/modal_exames.php",
                    success: function(dados){
                        $(".modal").html(dados);
                    }
                });
           }

           //Editar
           function Editar(IdIten){
                $.ajax({
                    type:"GET",
                    url:"modals/modal_exames.php",
                    data: {modo:'buscarId',id:IdIten},
                    success: function(dados){
                        $('.modal').html(dados);
                    }

                });
           }
           function Ativar(IdIten){
               //anula a ação do submit tradicional "botao" ou F5
               //event.preventDefault();
               $.ajax({
                   type:"GET",
                   data: {id:IdIten},
                   url: "../router.php?controller=exame&modo=ativar&id="+IdIten,
                   success: function(dados){
                       $('.conteudo_tabela').html(dados);
                   }
               });
           }

           //Desativar
           function Desativar(IdIten){
               //anula a ação do submit tradicional "botao" ou F5
               //event.preventDefault();
               $.ajax({
                   type:"GET",
                   data: {id:IdIten},
                   url: "../router.php?controller=exame&modo=desativar&id="+IdIten,
                   success: function(dados){
                       $('.conteudo_tabela').html(dados);
                   }
               });
           }

           //Excluir
           function Excluir(idIten){
                //anula a ação do submit tradicional "botao" ou F5
                //event.preventDefault();

                if(confirm('Tem certeza?')){

                $.ajax({
                    type:"GET",
                    data: {id:idIten},
                    url: "../router.php?controller=exame&&modo=deletar&id="+idIten,
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
                <?php include_once('menu_cms.php');?>

                <div class="content_home_cms"><!--conteudo da home do cms-->

                    <!-- Include once menu lateral -->
                    <?php include_once('menu_lateral_cms.php'); ?>

                    <div class="conteudo_home_cms"><!--conteudo menu-->
                          <div class="content_titulo_usuario">
                             <div class="titulo_cadastro1_usuario">
                                 <a> Exames</a>
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
                                    <div class="titulo-nome">
                                          Nome do Exame
                                    </div>
                                    <div class="titulo-descricao">
                                          Descrição
                                    </div>

                                    <div class="titulo-procedimento">
                                          Procedimento
                                    </div>
                                    <div class="titulo-opcao">
                                          Opções
                                    </div>
                               </div>
                               <?php

                                      // Incluindo a controller e a model para serem utilizadas
                                      require_once($caminho . '../controller_cms/gerenciamento_exame_controller.php');
                                      require_once($caminho . '../model_cms/gerenciamento_exames_class.php');

                                      $exames_controller = new controller_exame();

                                      $list = $exames_controller::Select();

                                      $cont = 0;

                                      while ($cont < count($list)) {
                                            # code...

                                            $ativo=$list[$cont]->ativo;
                                            $status=$list[$cont]->status;
                                            if($ativo==1){
                                                //$list[$cont]->slide1=null;
                                                if($status==1){
                                                    $Desativar="Desativar";
                                                }else{
                                                    $Desativar="Ativar";
                                                }


                                ?>
                               <div class="conteudo_tabela">
                                     <div class="nome_convenio">
                                       <?= ($list[$cont]->titulo) ?>
                                     </div>
                                     <div class="descricao_inf">
                                       <?= ($list[$cont]->texto_descricao) ?>
                                     </div>
                                     <div class="procedimento_inf">
                                       <?= ($list[$cont]->texto_procedimento)?>
                                     </div>
                                     <div class="opcoes_convenio">
                                          <div class="alinha_direita">
                                            <a href="#" class="editar" onclick="Editar(<?php echo($list[$cont]->id_exame);?>)">
                                              <?php //echo($list[$cont]->id_exame);?>
                                             <img src="../../sistema_interno/imagens/edit.png" alt="">
                                            </a>
                                           </div>
                                           <div class="alinha_esquerda">
                                               <a href="#" class="desativar" onclick="<?= $Desativar ?>(<?php echo($list[$cont]->id_exame);?>)">
                                                 <img src="../../sistema_interno/imagens/shutdown.png" alt="">
                                               </a>
                                           </div>
                                           <div class="alinha_esquerda">
                                               <a href="#" class="desativar" onclick="Excluir(<?php echo($list[$cont]->id_exame);?>)">
                                                 <img src="../../sistema_interno/imagens/icons8-lixo-52.png" alt="">
                                               </a>
                                           </div>
                                     </div>
                               </div>
                               <?php

                                   $cont +=1;
                                 }
                                 }
                                ?>

                         </div>
                    </div>


                </div>

                <?php include_once('footer_cms.php');?>
            </div>
        </div>

    </body>
</html>
