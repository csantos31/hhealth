<?php 
    require('verifica_paciente.php');

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Meu perfil</title>
    <link rel="stylesheet" href="../../css/area_paciente/style_nav.css">
    <link rel="stylesheet" href="../../css/area_paciente/style_paciente_perfil.css">

    <link rel="stylesheet" href="../../css/area_paciente/style_footer.css">

  </head>
  <body>
    <?php include_once('../include_area_paciente/nav_paciente.php'); ?>
    <div id="content">
      <div id="suporte_titulo">
        <div id="titulo_pagina">
          <strong>Meu perfil</strong>
        </div>
      </div>
      <div class="faixa_branca">
      </div>
        <div id="conteudo_meu_perfi">
            <div id="faixa_conteudO_perfil">
                <div id="foto_perfil_usuario">
                    <img src="../../imagens/icon_user.png" title="Foto de perfil" alt="Foto de perfil">
                </div>
                <div id="faixa_descricao_usuario">
                    <b>Nome:</b> <label>João Dos Santos</label><br>
                    <b>idade:</b> <label>18 anos</label><br>
                    <b>Celular:</b> <label>(11) 95060 - 4833</label><br>
                    <b>E-mail:</b> <label> joao.s@gmail.com </label><br>
                </div>
            </div>
            <div id="informacoes_usuario">
                
                <img id="img_edit" src="../../imagens/edit_icon.png" alt="editar" title="editar"><label>Editar Perfil</label><br>
                
                <strong>Documentos</strong><br><br>
                
                <b>CPF:</b> <label>000.000.000.00</label><br>
                <b>RG:</b> <label>00.000.000.X</label><br><br>
                
                <strong>Convênio(s)</strong><br><br>
                AMIL
                
                <img src="../../imagens/convenio_amil.jpg"><br><br>
                
                <strong>Endereço</strong><br><br>
                Rodovia Engenheiro Renê Benedito da Silva - Parque Boa Esperança <br>
                Itapevi - SP
            </div>
        </div>
        
      <div class="faixa_branca">

      </div>
    </div>
    <div class="">
      <?php include_once('../include_area_paciente/footer_paciente.php'); ?>
    </div>
  </body>
</html>
