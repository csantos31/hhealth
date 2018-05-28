<?php 
    require('verifica_paciente.php');

    @session_start();


    require_once('../controllers/paciente_controller.php');
    require_once('../models/paciente_class.php');

    $controller_paciente = new controllerPaciente();
    $listar = $controller_paciente::Buscar($_SESSION['id_paciente']);

    $id_endereco=$listar->id_endereco;
    $nome = $listar->nome;
    $sobrenome = $listar->sobrenome;
    $dt_nasc = $listar->dt_nasc;
    $rg = $listar->rg;
    $cpf = $listar->cpf;
    $carterinha_convenio = $listar-> carterinha_convenio;

    require_once('../../../models/endereco_class.php');
    require_once('../../../controllers/endereco_controller.php');
    $controller_endereco = new controller_endereco();
    $listar2 = $controller_endereco::Buscar2($id_endereco);

    $cidade = $listar2->cidade;
    $logradouro = $listar2->logradouro;
    $numero = $listar2->numero;
    $bairro = $listar2 ->bairro;
    $cep = $listar2 ->cep;

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hospital Hhealth</title>
    <link rel="stylesheet" type="text/css" href="../css/style_layout_idade.php" media="screen" />
    <link rel="stylesheet" href="../css/style_nav.css">
    <link rel="stylesheet" href="../css/style_cadastro_paciente.css">
    <link rel="stylesheet" href="../css/style_footer.css">
    <script src="../../../js/jquery-3.2.1.min.js"></script>
  </head>
    <script>

                $(document).ready(function() {
                   $('#form').submit(function(event){
                        event.preventDefault();
                        $.ajax({
                        type: "POST",
                        url: "../router.php?controller=paciente&modo=editar",
                        //alert (url);
                        data: new FormData($("#form")[0]),
                        cache:false,
                        contentType:false,
                        processData:false,
                        async:true,
                        success: function(dados){
                             $('#formulario_meio').html(dados);
                             //alert(dados);
                            //console.log(dados);
                        }
                      });
                  });
              });

           </script>
  <body>
    <div id="main">
      <?php include_once('nav_paciente.php'); ?>
      <div id="content">
        <div id="suporte_titulo">
          <div id="titulo_pagina">
            <strong>Cadastro de Paciente</strong>
          </div>
        </div>
        <div class="faixa_branca">

        </div>
        <div id="formulario_meio">
          <form id="form" action="" method="post">
            
            <div class="desc_nome_email">
                Nome
            </div>
            <div class="div_padrao">
              <input type="text" name="txt_nome" value="<?php echo($nome)?>" class="input_nome_email">
            </div>
            
            <div class="desc_nome_email">
                Sobrenome
            </div>
            <div class="div_padrao">
              <input type="text" name="txt_sobrenome" value="<?php echo($sobrenome)?>" class="input_nome_email">
            </div>

            <div class="suporte_email">
              <div class="desc_nome_email">
                data nascimento
              </div>
              <div class="div_padrao">
                <input type="date" name="txt_dt_nasc" value="<?php echo($dt_nasc)?>" class="input_nome_email">
              </div>
            </div>

            <div class="div_contato">
              <div class="contato_telefone">
                <div class="desc_telefone">
                  CPF
                </div>
                <div class="">
                  <input type="text" name="txt_cpf" value="<?php echo($cpf)?>" class="input_contato_doc">
                </div>
                
              </div>
              <div class="contato_celular">
                <div class="">
                  RG
                </div>
                <div class="">
                  <input type="text" name="txt_rg" value="<?php echo($rg)?>" class="input_contato_doc">
                </div>
                
              </div>
            </div>

             <div class="div_contato">
              <div class="contato_telefone">
                <div class="desc_telefone">
                  Cidade
                </div>
                <div class="">
                  <input type="text" name="txt_cidade" value="<?php echo($cidade)?>" class="input_cidade_end">
                </div>
              </div>
              <div class="contato_celular">
                <div class="">
                  UF
                </div>
                <div class="">
                
                  <select class="" name="slt_estado" id="opn_estado">
                      <option value="[object Object]">Estado...</option>
                <?php
                    require_once('../../../models/endereco_class.php');
                    require_once('../../../controllers/endereco_controller.php');
                     
                    $controller_endereco = new controller_endereco();
                    $list = controller_endereco::ListarEstados();
                     
                    $cont = 0;
                    
                    while($cont<count($list)){
                    ?>
                    <option value="<?php echo($list[$cont]['id_estado'])?>"><?php echo($list[$cont]['sigla'])?></option>
                      <?php
                        $cont++;
                    }
                    ?>
                  </select>
                
                </div>
              </div>
            </div>

            <div class="div_contato">
                <div class="contato_telefone">
                    <div class="desc_telefone">
                        CEP
                    </div>
                    <div class="">
                        <input type="text" name="txt_cep" value="<?php echo($cep)?>" class="input_cidade_end">
                    </div>
                </div>
                <div class="contato_celular">
                    <div class="desc_telefone">
                        Bairro
                    </div>
                    <div class="">
                        <input type="text" name="txt_bairro" value="<?php echo($bairro)?>" class="input_cidade_end">
                    </div>
                </div>
                <div class="contato_telefone">
                    <div class="desc_telefone">
                      Logradouro
                    </div>
                    <div class="">
                      <input type="text" name="txt_logradouro" value="<?php echo($logradouro)?>" class="input_cidade_end">
                    </div>
                </div>
                <div class="contato_celular">
                    <div class="">
                      N°
                    </div>
                    <div class="">
                      <input type="text" name="txt_numero" value="<?php echo($numero)?>" class="input_cidade_end">
                    </div>
                </div>
            </div>
            <div id="suporte_btn">
              <input type="submit" name="btn_salvar" value="salvar" id="btn_salvar" >
            </div>

          </form>
        </div>
    </div>
    <?php include_once('footer_paciente.php'); ?>
    </div>
  </body>
</html>
