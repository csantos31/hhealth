<?php 
    require('verifica_paciente.php');

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hospital Hhealth</title>
    <link rel="stylesheet" type="text/css" href="../css/style_layout_idade.php" media="screen" />
    <link rel="stylesheet" href="../../css/area_paciente/style_nav.css">
    <link rel="stylesheet" href="../../css/area_paciente/style_cadastro_paciente.css">
    <link rel="stylesheet" href="../../css/area_paciente/style_footer.css">
  </head>
  <body>
    <div id="main">
      <?php include_once('../include_area_paciente/nav_paciente.php'); ?>
      <div id="content">
        <div id="suporte_titulo">
          <div id="titulo_pagina">
            <strong>Cadastro de Paciente</strong>
          </div>
        </div>
        <div class="faixa_branca">

        </div>
        <div id="formulario_meio">
          <form id="formulario_cadastro" action="index.html" method="post">
            <div id="suporte_imagem_arquivo">
              <figure id="img_figure">
                <img src="../../imagens/usuario-masculino.jpg" alt="" id="img_usuario">
              </figure>
              <div id="arquivo_foto">
                  <input type="file" name="foto_paciente" value="">
              </div>
            </div>
            <div class="desc_nome_email">
              Nome
            </div>
            <div class="div_padrao">
              <input type="text" name="txt_nome" value="" class="input_nome_email">
            </div>
            <div class="div_contato">
              <div class="contato_telefone">
                <div class="desc_telefone">
                  Telefone
                </div>
                <div class="">
                  <input type="text" name="txt_telefone" value="" class="input_contato_doc">
                </div>
              </div>
              <div class="contato_celular">
                <div class="">
                  Celular
                </div>
                <div class="">
                  <input type="text" name="txt_celular" value="" class="input_contato_doc">
                </div>
              </div>
            </div>

            <div class="suporte_email">
              <div class="desc_nome_email">
                email
              </div>
              <div class="div_padrao">
                <input type="text" name="txt_email" value="" class="input_nome_email">
              </div>
            </div>

            <div class="div_contato">
              <div class="contato_telefone">
                <div class="desc_telefone">
                  CPF
                </div>
                <div class="">
                  <input type="text" name="txt_cpf" value="" class="input_contato_doc">
                </div>
                <div class="">
                  <input type="file" name="file_cpf" value="" class="doc_pessoais">
                </div>
              </div>
              <div class="contato_celular">
                <div class="">
                  RG
                </div>
                <div class="">
                  <input type="text" name="txt_rg" value="" class="input_contato_doc">
                </div>
                <div class="">
                  <input type="file" name="file_rg" value="" class="doc_pessoais">
                </div>
              </div>
            </div>

            <div id="suporte_convenio">
              <div class="desc_nome_email">
                Convenio
              </div>
              <div id="suporte_combo">
                <select class="" name="" id="convenio">
                  <option value="[object Object]">Convenio...</option>
                </select>
              </div>
              <div id="arquivo_convenio">
                <input type="file" name="file_arquivo_convenio" value="">
              </div>
            </div>

             <div class="div_contato">
              <div class="contato_telefone">
                <div class="desc_telefone">
                  Cidade
                </div>
                <div class="">
                  <input type="text" name="txt_cidade" value="" class="input_cidade_end">
                </div>
              </div>
              <div class="contato_celular">
                <div class="">
                  UF
                </div>
                <div class="">
                  <select class="" name="" id="opn_estado">
                    <option value="[object Object]">Estado...</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="div_contato">
              <div class="contato_telefone">
                <div class="desc_telefone">
                  Logradouro
                </div>
                <div class="">
                  <input type="text" name="txt_logradouro" value="" class="input_cidade_end">
                </div>
              </div>
              <div class="contato_celular">
                <div class="">
                  N°
                </div>
                <div class="">
                  <input type="text" name="" value="" class="input_cidade_end">
                </div>
              </div>
            </div>
            <div id="suporte_btn">
              <input type="submit" name="btn_salvar" value="salvar" id="btn_salvar" onclick="return confirm('Deseja realmente enviar essas informações')">
            </div>

          </form>
        </div>
    </div>
    <?php include_once('footer_paciente.php'); ?>
    </div>
  </body>
</html>
