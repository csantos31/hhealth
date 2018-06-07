<?php

require('../verifica.php');
@session_start();
?>
<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/style_nivel_funcionario.css">
        <link rel="stylesheet" type="text/css" href="../css/style_menu_lateral.css">

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

            
            //Ativar
            function Ativar(idIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();

                if(confirm('Tem certeza?')){

                $.ajax({
                    type:"GET",
                    data: {id:idIten},
                    url: "../router.php?controller=agendamento&modo=ativar&id="+idIten,
                    success: function(dados){
                        //console.log(dados);
                        $('.col_2').html(dados);
                        //alert(dados);
                    }
                });

                }
            }

            //Desativar
            function Desativar(idIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();

                if(confirm('Tem certeza?')){

                $.ajax({
                    type:"GET",
                    data: {id:idIten},
                    url: "../router.php?controller=agendamento&modo=desativar&id="+idIten,
                    success: function(dados){
                        //console.log(dados);
                        $('.col_2').html(dados);
                        //alert(dados);
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
        <div id="principal">
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
                                 <p>Ativar Agendamentos</p>
                           </div>
                      </div>
                    <div class="col_2">
                        <div class="titulo_tabela">
                            <div class="lb_titulo">PACIENTE</div>
                            <div class="lb_titulo">DATA</div>
                            <div class="lb_titulo">OPÇÕES</div>
                        </div>

                        <?php

                            include_once('../controllers/agendamento_paciente_funcionario_controller.php');
                            include_once('../models/agendamento_paciente_funcionario_class.php');

                                $controller_view  = new ViewAgendamentoPacienteFuncionarioController();

                                //Chama o metodo para Listar todos os registros
                                $list = $controller_view::Buscar($_SESSION['id_funcionario']);

                                if(!empty($list)){
                                $cont = 0;

                                while ($cont < count($list)) {
                        ?>
                                    <div class="linha_tabela">
                                        <div class="item_tabela"><?= $list[$cont]->nome_paciente ?></div>
                                        <div class="item_tabela"><?= $list[$cont]->data ?></div>
                                        <div class="item_tabela icones_tabela">

                                            <?php
                                            $ativar=null;
                                            $imagem=null;
                                            if($list[$cont]->ativo==1){
                                                $ativar="Desativar";
                                                $imagem='../imagens/ligar.png';
                                            }else if($list[$cont]->ativo==0){
                                                $ativar="Ativar";
                                                $imagem='../imagens/desligar.png';
                                            }
                                    
                                            ?>
                                            <a href="#" class="excluir" onclick="<?php echo($ativar)?>(<?php echo($list[$cont]->id_agendamento_consulta);?>)">
                                                <img src="../imagens/<?php echo($imagem)?>" alt="ativar" title="<?php echo($ativar)?>">
                                            </a>
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
            <footer>
                Desenvolvido por CPI - 2018
            </footer>
        </div>
    </body>
</html>
