<?php

require('../verifica.php');

?>
<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_home.css">
        <link rel="stylesheet" type="text/css" href="../css/style_funcionarios.css">
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
                    url:"../modals/modal_cad_funcionario.php",
                    success: function(dados){
                        $(".modal").html(dados);
                    }
                });
            }

            //Editar
            function Editar(IdIten){
                $.ajax({
                    type:"GET",
                    url:"../modals/modal_cad_funcionario.php",
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

                if(confirm('Tem certeza que deseja excluir este funcionário?')){

                    $.ajax({
                        type:"GET",
                        data: {id:idIten},
                        url: "../router.php?controller=funcionario&modo=excluir&id="+idIten,
                        success: function(dados){
                            //alert(dados);
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
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="main">
                <div id="container_cad_paciente">
                   <div class="img_nivel">
                        <a class="novo" onclick="Cadastrar()" style="cursor:pointer;">
                            <img src="../imagens/add.png">
                        </a>
                    </div>
                    <p>Funcionários</p>
                    <div class="col_2">
                        <div class="titulo_tabela">
                            <div class="lb_titulo">NOME</div>
                            <div class="lb_titulo">FOTO</div>
                            <div class="lb_titulo">OPÇÕES</div>
                        </div>

                        <?php

                            include_once('../controllers/funcionario_controller.php');
                            include_once('../models/funcionario_class.php');

                                $controller_funcionario  = new controllerFuncionario();

                                //Chama o metodo para Listar todos os registros
                                $list = $controller_funcionario::Listar();

                                $cont = 0;

                                if(!empty($list)){
                                  while ($cont < count($list)) {

                          ?>
                                      <div class="linha_tabela">
                                          <div class="item_tabela"><?= $list[$cont]['nome'] ?> <?= $list[$cont]['sobrenome'] ?></div>
                                          <div class="item_tabela"><?= $list[$cont]['cpf'] ?> </div>
                                          <div class="item_tabela icones_tabela">
                                              <a href="#" class="editar" onclick="Editar(<?php echo($list[$cont]['id_funcionario']);?>)">
                                                  <img src="../imagens/edit.png" alt="editar" title="editar">
                                              </a>
                                              <a href="#" class="excluir" onclick="Excluir(<?php echo($list[$cont]['id_funcionario']);?>)">
                                                  <img src="../imagens/shutdown.png" alt="excluir" title="excluir">
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
