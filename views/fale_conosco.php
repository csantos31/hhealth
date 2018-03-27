<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fale Conosco</title>
    <link rel="stylesheet"  type="text/css" href="../css/style_fale_conosco.css">
  </head>
  <body>
    <div id="content">
      <!-- Titulo da página -->
      <div id="content_titulo">
        <div id="titulo">
          <div id="alinha_titulo">
            <strong>Fale Conosco</strong>
          </div>
        </div>
      </div>

      <!-- Figura do cabecalho -->
      <figure id="cabecalho_fale_conosco">
        <img src="imagens/imgFaleConosco.png" alt="Imagem fale conosco" id="img_fale_conosco" title="Fale conosco">
      </figure>

      <!-- Div para formulário -->
      <div id="suporte_form">
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Nome
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <input type="text" name="txt_nome" value="" class="caixa_texto">
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Email
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <input type="text" name="txt_email" value="" class="caixa_texto">
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Telefone
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <input type="text" name="txt_dd_telefone" value="" class="caixa_texto_numero_dd" maxlength="2">
            <input type="text" name="txt_telefone" value="" class="caixa_texto_numero_telefone" maxlength="8">
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Celular
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <input type="text" name="txt_dd_celular" value="" class="caixa_texto_numero_dd" maxlength="2">
            <input type="text" name="txt_celular" value="" class="caixa_texto_numero_telefone" maxlength="8">
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Assunto
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <select id="slct_assunto" name="slct_assunto">
              <option value="">Selecione um assunto</option>
            </select>
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Mensagem
            </div>
          </div>
          <div class="suporte_caixa_texto_mensagem">
            <textarea name="text_area" rows="19" cols="114" id="text_area"></textarea>
          </div>
        </div>
        <div class="suporte_linhas_botao">
          <div id="suporte_submit">
            <input type="submit" name="btn_enviar" value="enviar" id="btn_enviar">
          </div>
        </div>
      </div>
      <!-- Chat bot -->
      <div id="suporte_chat_bot">
        <div id="titulo_chat_bot">
          <div class="alinhamento_nome_form">
            Hhealth
          </div>
        </div>
        <div id="conteudo_chat">
          <div id="chat">

          </div>
          <div id="escreve_mensagem">
            <input type="text" name="txt_escreve_mensagem" value="" id="txt_escreve_mensagem">
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
