<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
    <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
    <link rel="stylesheet" type="text/css" href="../css/style_unidade_hhealth.css">
    <meta charset="utf-8">
    <title>Hospital HHealth</title>
  </head>
  <body>
    <div id="main">
      <?php require_once('nav.php'); ?>
      <div id="content_main">
        <!-- titulo da página -->
        <div id="suporte_titulo">
          <div id="titulo_pagina">
            <strong>Unidade</strong>
          </div>
        </div>
        <!-- Faixa branca embaixo do menu -->
        <div class="faixa_branca">

        </div>
        <!-- Primeira section da div -->
        <div id="imagem_content">
          <div id="imagem_hospital">
            <img src="../imagens/imagem_hospital.jpg" alt="" id="imagem_hosp">
          </div>
          <div id="horario_atendimento">
            <div id="item_atendimento_titulo">
              <strong>Horário atendimento desta unidade</strong>
            </div>
            <div class="faixa_branca_maior">

            </div>
            <div class="item_atendimento">
              <div class="dia_atendimento">
                Segunda a Sexta-feira
              </div>
              <div class="hora_atendimento">
                00h00
              </div>
            </div>
            <div class="faixa_branca_menor">

            </div>
            <div class="item_atendimento">
              <div class="dia_atendimento">
                Sábado
              </div>
              <div class="hora_atendimento">
                00h00
              </div>
            </div>
            <div class="faixa_branca_menor">

            </div>
            <div class="item_atendimento">
              <div class="dia_atendimento">
                Domingo
              </div>
              <div class="hora_atendimento">
                00h00
              </div>
            </div>
            <div class="faixa_branca_menor">

            </div>
            <div id="item_atendimento_pronto_socorro">
              <div class="dia_atendimento">
                <strong>Pronto socorro</strong>
              </div>
              <div class="hora_atendimento">
                24h00
              </div>
            </div>
          </div>
        </div>

        <!-- Div que contém especialidades e o texto -->
        <div id="especialidades_texto">
          <div id="especialidades">
            <div id="titulo_especialidades">
              <strong>Especialidades</strong>
            </div>
            <div class="faixa_branca_maior">

            </div>
            <div class="especialidade">
              Especialidade 1
            </div>
            <div class="especialidade">
              Especialidade 2
            </div>
            <div class="especialidade">
              Especialidade 3
            </div>
            <div class="especialidade">
              Especialidade 4
            </div>
            <div class="especialidade">
              Especialidade 5
            </div>
            <div class="especialidade">
              Especialidade 6
            </div>
            <div class="especialidade">
              Especialidade 7
            </div>
            <div class="especialidade">
              Especialidade 8
            </div>
            <div class="especialidade">
              Especialidade 9
            </div>
          </div>
          <div id="texto_div">

          </div>
        </div>

        <!-- Mapa -->
        <div id="mapa_unidade">
          <img src="../imagens/google-maps.jpg" alt="" id="imagem_unidade">
        </div>

        <!-- Div localização -->
        <div id="localizao_div">
          <div id="suporte_localização">
            <div class="texto_localização">
              Rua dos cáracois , 9532 Itapevi, Saõ Paulo
            </div>
            <div class="texto_localização">
              Bairro: Jd. Briquet  Cep: 06958 - 986
            </div>
            <div id="suporte_telefone_email">
              <div class="icon_contato">

              </div>
              <div id="telefone">
                (11) 99999-4179
              </div>
              <div class="icon_contato">

              </div>
              <div id="email">
                hhealth@hospital.com
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once('footer.php'); ?>
    </div>
  </body>
</html>
