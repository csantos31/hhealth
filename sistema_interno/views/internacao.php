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

            //Cadastrar
            function Cadastrar(IdIten){

                $.ajax({
                    type:"GET",
                    url:"../modals/modal_internacao.php",
                    data: {modo:'inserir',id_paciente:IdIten},
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
                    data: {modo:'buscarId',id:IdIten},
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
                                 <p>Internação </p>
                           </div>
                      </div>
                    <div class="col_2">
                        <div class="titulo_tabela">
                            <div class="lb_titulo">PACIENTE</div>
                            <div class="lb_titulo">RG</div>
                            <div class="lb_titulo">OPÇÕES</div>
                        </div>

                        <?php

                            include_once('../controllers/paciente_controller.php');
                            include_once('../models/paciente_class.php');

                                $controller_paciente  = new controllerPaciente();

                                //Chama o metodo para Listar todos os registros
                                $list = $controller_paciente::Listar();

                                if(!empty($list)){
                                $cont = 0;

                                while ($cont < count($list)) {
                        ?>
                                    <div class="linha_tabela">
                                        <div class="item_tabela"><?= $list[$cont]->nome ?></div>
                                        <div class="item_tabela"><?= $list[$cont]->rg ?></div>
                                        <div class="item_tabela icones_tabela">

                                            <a href="#" class="editar" onclick="Cadastrar(<?php echo($list[$cont]->id_paciente);?>)">
                                                <img src="../imagens/add.png" alt="cadastrar" title="Cadastrar">
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
                
                <div id="container_cad_paciente">
                      <div class="cabecalho">
                           <div class="txt_cabecalho">
                                 <p>Pacientes Internados </p>
                           </div>
                      </div>
                    <div class="col_2">
                        <div class="titulo_tabela">
                            <div class="lb_titulo2">PACIENTE</div>
                            <div class="lb_titulo2">QUARTO</div>
                            <div class="lb_titulo2">UNIDADE</div>
                            <div class="lb_titulo2">OPÇÕES</div>
                        </div>

                        <?php

                            include_once('../controllers/internacao_paciente_controller.php');
                            include_once('../models/internacao_paciente_class.php');

                                $controller_internacao  = new ViewInternacaoPacienteController();

                                //Chama o metodo para Listar todos os registros
                                $list = $controller_internacao::Listar();

                                if(!empty($list)){
                                $cont = 0;

                                while ($cont < count($list)) {
                        ?>
                                    <div class="linha_tabela">
                                        <div class="item_tabela2"><?= $list[$cont]->nome_paciente ?></div>
                                        <div class="item_tabela2"><?= $list[$cont]->numero ?></div>
                                        <div class="item_tabela2"><?= $list[$cont]->unidade ?></div>
                                        <div class="item_tabela2 icones_tabela">

                                            <a href="#" class="editar" onclick="Editar(<?php echo($list[$cont]->id_paciente);?>)">
                                                <img src="../imagens/edit.png" alt="editar" title="Editar">
                                            </a>
                                            
                                            <a href="#" class="editar" onclick="Excluir(<?php echo($list[$cont]->id_paciente);?>)">
                                                <img src="../imagens/shutdown.png" alt="excluir" title="Excluir">
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
