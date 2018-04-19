<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_home.css">
        <link rel="stylesheet" type="text/css" href="../css/style_paciente.css">

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
                    url:"../modals/modal_cad_paciente.php",
                    success: function(dados){
                        $(".modal").html(dados);
                    }
                });
            }

            //Editar
            function Editar(IdIten){
                $.ajax({
                    type:"GET",
                    url:"../modals/modal_cad_paciente.php",
                    data: {modo:'buscarId',codigo:IdIten},
                    success: function(dados){
                        $('.modal').html(dados);
                    }

                });
            }

            var cont = 0;
            var cont2 = 0;
            var mod = '';
            
            function EditarPerfil(linha,IdItem){
                cont = cont + 1;
                
                mod = cont % 2;
                
                console.log(mod);
                
                if(mod == 1){
                    $('#EditarPerfil'+IdItem).find('.div_change_profille').css('display','block');    
                }else{
                    //$('#EditarPerfil'+IdItem).find('.div_change_profille').css('display','none');    
                }
                
                $("#frm_foto"+IdItem).submit(function(event){
                    event.preventDefault();
                    //console.log("submit");
                    
                    $.ajax({
                        type: "POST",
                        url: "../router.php?controller=paciente&modo=alterar_foto&id="+IdItem,
                        //alert (url);
                        data: new FormData($("#frm_foto"+IdItem)[0]),
                        cache:false,
                        contentType:false,
                        processData:false,
                        async:true,
                        success: function(dados){
                             $('.modal').html(dados);
                            //alert(dados);
                        }
                    });
                    
                });
            }
            
            function EditarCarteirinha(linha,IdItem){
                cont2 = cont2 + 1;
                
                mod = cont2 % 2;
                
                if(mod == 1){
                    $('#EditarCarteirinha'+IdItem).find('.div_change_carteirinha').css('display','block');    
                }else{
                    //$('#EditarCarteirinha'+IdItem).find('.div_change_carteirinha').css('display','none');    
                }
                
                $("#frm_card"+IdItem).submit(function(event){
                    event.preventDefault();
                    //console.log("submit");
                    
                    $.ajax({
                        type: "POST",
                        url: "../router.php?controller=paciente&modo=alterar_carteirinha&id="+IdItem,
                        //alert (url);
                        data: new FormData($("#frm_card"+IdItem)[0]),
                        cache:false,
                        contentType:false,
                        processData:false,
                        async:true,
                        success: function(dados){
                             $('.modal').html(dados);
                            //alert(dados);
                        }
                    });
                    
                });
                
                
            }

            //Excluir
            function Excluir(idIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();

                if(confirm('Tem certeza que deseja excluir este usuário?')){

                    $.ajax({
                        type:"GET",
                        data: {id:idIten},
                        url: "../router.php?controller=paciente&modo=excluir&id="+idIten,
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
                    <p>Pacientes</p>
                    <div class="col_2">
                        <div class="titulo_tabela">
                            <div class="lb_titulo">NOME</div>
                            <div class="lb_titulo">FOTO</div>
                            <div class="lb_titulo">OPÇÕES</div>
                        </div>

                        <?php

                            include_once('../controllers/paciente_controller.php');
                            include_once('../models/paciente_class.php');

                                $controller_paciente  = new controllerPaciente();

                                //Chama o metodo para Listar todos os registros
                                $list = $controller_paciente::Listar();

                                $cont = 0;
                                while ($cont < count($list)) {

                        ?>
                                    <div class="linha_tabela">
                                        <div class="item_tabela"><?= $list[$cont]['nome'] ?> <?= $list[$cont]['sobrenome'] ?></div>
                                        <div class="item_tabela"><img src="../<?= $list[$cont]['foto']?>" alt="imaagem do paciente" title="imagem do paciente"></div>
                                        <div class="item_tabela icones_tabela">
                                            <a href="#" class="editar" onclick="Editar(<?php echo($list[$cont]['id_paciente']);?>)">
                                                <img src="../imagens/edit.png" alt="editar" title="editar">
                                            </a>
                                            <a href="#" class="alterar_perfil" id="EditarPerfil<?php echo($list[$cont]['id_paciente']);?>" onclick="EditarPerfil(this,<?php echo($list[$cont]['id_paciente']);?>)">
                                                <img src="../imagens/alter_prof.png" alt="alterar perfil" title="alterar perfil">
                                                <div class="div_change_profille">
                                                    <div class="modal_superior">
                                                        <labe>Alterar Imagem do perfil</labe>
                                                    </div>
                                                    <form enctype="multipart/form-data" action="" method="post" id="frm_foto<?= $list[$cont]['id_paciente'] ?>">
                                                        <input type="file" name="foto" id="foto">
                                                        <input class="btn" type="submit" value="Enviar" name="btn_salva">
                                                    </form>
                                                </div>
                                            </a>
                                            <a href="#" class="alterar_carteirinha" id="EditarCarteirinha<?php echo($list[$cont]['id_paciente']);?>" onclick="EditarCarteirinha(this,<?php echo($list[$cont]['id_paciente']);?>)">
                                                <img src="../imagens/alter_card.png" alt="alterar carteirinha" title="alterar carteirinha">
                                                <div class="div_change_carteirinha">
                                                    <div class="modal_superior">
                                                        <labe>Alterar Carteirinha</labe>
                                                    </div>
                                                    <form enctype="multipart/form-data" action="" method="post" id="frm_card<?= $list[$cont]['id_paciente'] ?>">
                                                        <input type="file" name="carteirinha_convenio" id="carteirinha_convenio">
                                                        <input class="btn" type="submit" value="Enviar" name="btn_salva">
                                                    </form>
                                                </div>
                                            </a>
                                            <a href="#" class="excluir" onclick="Excluir(<?php echo($list[$cont]['id_paciente']);?>)">
                                                <img src="../imagens/shutdown.png" alt="excluir" title="excluir">
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
