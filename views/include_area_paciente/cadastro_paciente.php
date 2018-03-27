<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hospital Hhealth</title>
    <link rel="stylesheet" href="../../css/area_paciente/style_nav.css">
    <link rel="stylesheet" href="../../css/area_paciente/style_cadastro_paciente.css">
    <link rel="stylesheet" href="../../css/area_paciente/style_footer.css">
  </head>
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
          <form id="formulario_cadastro" action="index.html" method="post">
            <div id="suporte_imagem">
              <figure id="img_figure">
                <img src="../../imagens/imagem_usuario.png" alt="" id="img_usuario">
              </figure>
              <div id="arquivo_foto">
                  <input type="file" name="foto_paciente" value="">
              </div>
            </div>
            <div id="desc_nome">
              Nome
            </div>
            <div id="div_nome">
              <input type="text" name="txt_nome" value="">
            </div>
            <div class="">
              <div class="">
                Telefone
              </div>
              <div class="">
                <input type="text" name="txt_telefone" value="">
              </div>
              <div class="">
                Celular
              </div>
              <div class="">
                <input type="text" name="txt_celular" value="">
              </div>
            </div>
            <div class="">
              Email
            </div>
            <div class="">
              <input type="text" name="txt_email" value="">
            </div>
            <div class="">
              <div class="">
                CPF
              </div>
              <div class="">
                <input type="text" name="txt-cpf" value="">
              </div>
              <div class="">
                RG
              </div>
              <div class="">
                <input type="text" name="txt_rg" value="">
              </div>
            </div>
            <div class="">
              <div class="">
                <input type="file" name="" value="RG">
              </div>
              <div class="">
                <input type="file" name="" value="CPF">
              </div>
            </div>
            <div class="">
              <select class="" name="">
                <option value="[object Object]">Escolha o convenio</option>
              </select>
            </div>
            <div class="">
              <input type="file" name="" value="file_convenio">
            </div>
            <div class="">
              <div class="">
                Cidade
              </div>
              <div class="">
                <input type="text" name="txt_cidade" value="">
              </div>
              <div class="">
                UF
              </div>
              <div class="">
                <select class="" name="">
                  <option value="[object Object]">estado</option>
                </select>
              </div>
            </div>
            <div class="">
              <div class="">
                Logradouro
              </div>
              <div class="">
                <input type="text" name="txt_logradouro" value="">
              </div>
              <div class="">
                N°
              </div>
              <div class="">
                <input type="text" name="txt_numero_casa" value="">
              </div>
            </div>
            <div class="">
              <input type="submit" name="" value="btn_salvar">
            </div>
          </form>
        </div>
    </div>
    <?php include_once('footer_paciente.php'); ?>
  </body>
</html>
