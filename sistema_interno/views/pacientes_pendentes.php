<?php
    require('../verifica.php');
?>
<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
        <link rel="stylesheet" type="text/css" href="../css/style_pacientes_pendentes.css">
        <link rel="stylesheet" type="text/css" href="../css/style_menu_lateral.css">
        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
        
        <script>
            function ativar(idPaciente){
                console.log(idPaciente);
                if(confirm('Tem certeza que deseja ativar este paciente?')){

                    $.ajax({
                        type:"GET",
                        data: {id:idPaciente},
                        url: "../router.php?controller=paciente&modo=ativar_paciente&id="+idPaciente,
                        success: function(dados){
                            //alert(dados);
                            $('.main').html(dados);
                        }
                    });

                }
            }
                
            
        </script>
        
    </head>
    <body>
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="alinha_conteudo">

            </div>
            <!DOCTYPE html>
            <?php include_once('menu_lateral.php');  ?>
            <div class="main">
                <div id="container_cad_paciente">

                    <p>Pacientes pendentes</p>
                    <div class="col_1">
                        <img src="../imagens/doc_icon2.jpg" alt="pacientes pendentes" title="pacientes pendentes">
                    </div>
                    <div class="col_2">
                        <div class="titulo_tabela">
                            <div class="lb_titulo">NOME</div>
                            <div class="lb_titulo">RG</div>
                            <div class="lb_titulo">OPÇÕES</div>
                        </div>
                        
                        <?php 
                            
                            include_once('../controllers/paciente_controller.php');
                            include_once('../models/paciente_class.php');

                            $controller_paciente  = new controllerPaciente();

                            //Chama o metodo para Listar todos os registros
                            $list = $controller_paciente::Listar_pendentes();

                            $cont = 0;
                            while ($cont < count($list)) {

                        ?>
                        
                        <div class="linha_tabela">
                            <div class="item_tabela"><?= $list[$cont]['nome'] ?> <?= $list[$cont]['sobrenome'] ?></div>
                            <div class="item_tabela"><?= $list[$cont]['rg'] ?></div>
                            <div class="item_tabela">
                                <a href="#">
                                    <img src="../imagens/shutdown.png" alt="ativar" title="ativar" class="ativar_user" href="#" onclick="ativar(<?= $list[$cont]['id_paciente'] ?>)">
                                </a>
                            </div>
                        </div>
                        
                        <?php
                                $cont +=1;
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
