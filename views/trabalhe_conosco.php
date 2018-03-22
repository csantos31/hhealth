<!--
  Autor: Gleyver Coutinho Castro
  Data de atualição: 18/03/2018
  Descrição: Página HTML trabalhe conosco
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Trabalhe Conosco</title>
    <link rel="stylesheet"  type="text/css" href="../css/style_trabalhe_conosco.css">
  </head>
  <body>
    <div id="content">
      <!-- Titulo da página -->
      <div id="content_titulo">
        <div id="titulo">
          <div id="alinha_titulo">
            <strong>Trabalhe Conosco</strong>
          </div>
        </div>
      </div>

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
            <div class="alinhamento_data_nascimento_form">
              Data Nascimento
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <input type="text" name="txt_data_nascimento" value="" class="caixa_texto_numero_telefone" maxlength="10">
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Sexo
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <select id="slct_assunto" name="slct_assunto">
              <option value="">Selecione seu sexo</option>
            </select>
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_data_nascimento_form">
              Pais de origem
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <select id="slct_assunto" name="slct_assunto">
              <option value="">Selecione seu Pais de origem</option>
            </select>
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_data_nascimento_form">
              Estado civil
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <select id="slct_assunto" name="slct_assunto">
              <option value="">Selecione o estado civil</option>
            </select>
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Cep
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <input type="text" name="txt_email" value="" class="caixa_texto">
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Endereço
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <input type="text" name="txt_email" value="" class="caixa_texto">
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Bairro
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <input type="text" name="txt_email" value="" class="caixa_texto">
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Cidade
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <input type="text" name="txt_email" value="" class="caixa_texto">
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_nome_form">
              Estado
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <select id="slct_assunto" name="slct_assunto">
              <option value="">Selecione um estado</option>
            </select>
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_data_form">
              Estado trabalhando atualmente?
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <select id="slct_assunto" name="slct_assunto">
              <option value="">Sim</option>
            </select>
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_data_form">
              Possui alguma deficiência?
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <select id="slct_assunto" name="slct_assunto">
              <option value="">Sim</option>
            </select>
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_data_form">
              Possui registro profissinal?
            </div>
          </div>
          <div class="suporte_caixa_texto">
            <select id="slct_assunto" name="slct_assunto">
              <option value="">Sim</option>
            </select>
          </div>
        </div>
        <div class="suporte_linhas">
          <div class="titulos_formulario">
            <div class="alinhamento_data_form">
              Resumo das qualificações
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
    </div>
  </body>
</html>
