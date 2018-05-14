
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
      <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
            <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_ambientes.css">
            <script src="../js/jquery-3.2.1.min.js"></script>
            <script src="../js/arc4.js"></script>
          <script>

                function Mostrar(IdIten){
                    //anula a ação do submit tradicional "botao" ou F5
                    event.preventDefault();
                    $.ajax({
                        type:"GET",
                        data: {id:IdIten},
                        url: "ambientes.php?modo=mostrar&id="+IdIten,

                        success: function(dados){
                            $('.main').html(dados);
                            //alert(dados);
                            //Console.log(url);
                        }
                    });
                }




            </script>

            <title>Hospital HHealth</title>
      </head>
      <body>

            <div class="main"><!--Div Main que segura todas as divs-->
                  <!-- Esse require adiciona o menu na página -->
                 <?php require_once('nav.php'); ?>
                <div class="div_suporte_conteudo">

                </div>
                <div class="suporte_content">
                      <div class="content">

                        <div class="">
                          Ambiente
                        </div>



                            <div class="content_menu_lateral_ambientes">
                        <?php
                            include_once('../CMS/controller_cms/gerenciamento_ambiente_controller.php');
                            include_once('../CMS/model_cms/gerenciamento_ambiente_class.php');

                            $controller_ambiente = new controller_ambiente();
                            $list = $controller_ambiente::Listar();

                            //$selecionar_por_id=$controller_ambiente::Buscar();

                            $cont=0;
                            while($cont<count($list)){
                                if($list[$cont]->ativo==1){




                        ?>

                              <ul class="menu">
                                  <a href="#" onclick="Mostrar(<?php echo($list[$cont]->id_ambiente)?>)"><li class="item_menu"><?php echo($list[$cont]->titulo)?><?php echo($list[$cont]->id_ambiente)?></li></a>
                              </ul>
                        <?php
                                }
                            $cont++;

                            }
                        ?>
                            </div>


                        <?php
                            $titulo=null;
                            $texto=null;
                            $texto2=null;
                            $texto3=null;
                            $texto4=null;
                            $texto5=null;
                            $texto6=null;
                            $imagem=null;
                            $imagem2=null;
                            $imagem3=null;
                            $imagem4=null;
                            $imagem5=null;
                            $imagem6=null;
                            $ativo=null;

                            if(isset($_GET['modo'])){
                                $modo=$_GET['modo'];
                                if($modo=='mostrar'){
                                    $id=$_GET['id'];

                                    include_once('../CMS/controller_cms/gerenciamento_ambiente_controller.php');
                                    include_once('../CMS/model_cms/gerenciamento_ambiente_class.php');

                                    $controller_ambiente = new controller_ambiente();
                                    $list_id = $controller_ambiente::Buscar();

                                    $titulo=$list_id->titulo;
                                    $texto=$list_id->texto;
                                    $texto2=$list_id->texto2;
                                    $texto3=$list_id->texto3;
                                    $texto4=$list_id->texto4;
                                    $texto5=$list_id->texto5;
                                    $texto6=$list_id->texto6;
                                    $imagem=$list_id->imagem;
                                    $imagem2=$list_id->imagem2;
                                    $imagem3=$list_id->imagem3;
                                    $imagem4=$list_id->imagem4;
                                    $imagem5=$list_id->imagem5;
                                    $imagem6=$list_id->imagem6;
                                    $ativo=$list_id->ativo;
                                }
                            }else{
                                  include_once('../CMS/controller_cms/gerenciamento_ambiente_controller.php');
                                    include_once('../CMS/model_cms/gerenciamento_ambiente_class.php');

                                    $controller_ambiente = new controller_ambiente();
                                    $list_id = $controller_ambiente::Buscar();

                                    $titulo=$list_id->titulo;
                                    $texto0=$list_id->texto;
                                    $texto2=$list_id->texto2;
                                    $texto3=$list_id->texto3;
                                    $texto4=$list_id->texto4;
                                    $texto5=$list_id->texto5;
                                    $texto6=$list_id->texto6;
                                    $imagem=$list_id->imagem;
                                    $imagem2=$list_id->imagem2;
                                    $imagem3=$list_id->imagem3;
                                    $imagem4=$list_id->imagem4;
                                    $imagem5=$list_id->imagem5;
                                    $imagem6=$list_id->imagem6;
                                    $ativo=$list_id->ativo;

                            }
                            ?>

                          <form action="ambientes.php" method="post" id="form" data-id="<?php echo($id)?>" enctype="multipart/form-data">
                            <?php

                            //if($list_id->ativo==1){
                          ?>
                           <div class="suporte_ambiente">
                                 <div class="titulo_ambiente">
                                       <?php echo($list_id->titulo)?>
                                 </div>
                                 <div class="imagem_grande_ambiente">
                                        <div class="cover">

                                            <img src="../CMS/<?php echo($imagem)?>" alt="lalal">
                                            <div class="textoNomeAmbiente"><?php echo $texto0; ?></div>

                                        </div>
                                        <div class="thumbs">
                                           <div class="imagens_pequenas_ambiente">
                                             <div class="suporte_imagem_ambiente">
                                                <img src="../CMS/<?php echo($imagem)?>" alt="" class="active">
                                                <div class="textoNomeAmbiente"><?php echo $texto; ?></div>
                                             </div>
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                             <div class="suporte_imagem_ambiente">
                                                 <img src="../CMS/<?php echo($imagem2)?>" alt="" class="gallery">
                                                 <div class="textoNomeAmbiente"><?php echo texto2; ?></div>
                                            </div>
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                             <div class="suporte_imagem_ambiente">
                                                 <img src="../CMS/<?php echo($imagem3)?>" alt="" class="gallery">
                                                 <div class="textoNomeAmbiente"><?php echo $texto3; ?></div>
                                              </div>
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                             <div class="suporte_imagem_ambiente">
                                                 <img src="../CMS/<?php echo($imagem4)?>" alt="" class="gallery">
                                                 <div class="textoNomeAmbiente"><?php echo $texto4; ?></div>
                                            </div>
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                             <div class="suporte_imagem_ambiente">
                                                 <img src="../CMS/<?php echo($imagem5)?>" alt="" class="gallery">
                                                 <div class="textoNomeAmbiente"><?php echo $texto5; ?></div>
                                              </div>
                                           </div>
                                           <div class="imagens_pequenas_ambiente">
                                             <div class="suporte_imagem_ambiente">
                                                 <img src="../CMS/<?php echo($imagem6)?>" alt="" class="gallery">
                                                 <div class="textoNomeAmbiente"><?php echo $texto6; ?></div>
                                              </div>
                                           </div>
                                        </div>
                                 </div>
                                 <div class="segura-slide">

                                 </div>
                                 <div class="texto_ambiente">
                                   <div class="div_texto">
                                     <?php echo $texto2; ?>
                                   </div>
                                 </div>
                           </div>

                            <?php
                             // }
                              ?>

                        </form>
                      </div>
                </div>
                <!-- Esse require adiciona o rodapé na página -->
               <?php require_once('footer.php'); ?>
            </div>

      </body>
</html>
