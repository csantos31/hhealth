<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
      <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
            <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_fale_conosco.css">
            <title>Hospital HHealth</title>
      </head>
      <body>
            <div class="main"><!--Div Main que segura todas as divs-->
                  <!-- Esse require adiciona o menu na página -->
                 <?php require_once('nav.php'); ?>
                <div class="div_suporte_conteudo">

                </div>
                <div class="suporte_content">
                      <div class="content">
                           <div class="faixa_titulo_da_pagina">
                                 Fale Conosco
                           </div>
                           <div class="faixa1">
                                 <div class="imagem_faleconosco">
                                       <img src="../imagens/faleconosco.png" alt="">
                                 </div>
                                 <div class="formFaleconosco">
                                       <form class="form_faleconosco" action="index.html" method="post">
                                             <div class="linha1">
                                                   <div class="txt_nome">
                                                         Nome:
                                                   </div>
                                                   <input type="text" name="txtNome" value="">
                                             </div>
                                             <div class="linha2">
                                                   <div class="txt_email">
                                                         Email:
                                                   </div>
                                                   <input type="email" name="txtEmail" value="">
                                             </div>
                                             <div class="linha3">
                                                   <div class="txt_telefone">
                                                         Telefone:
                                                   </div>
                                                   <input type="tel" name="txtTelefone" value="">
                                             </div>
                                             <div class="linha4">
                                                   <div class="txt_celular">
                                                         Celular:
                                                   </div>
                                                   <input type="tel" name="txtCelular" value="">
                                             </div>
                                             <div class="linha5">
                                                   <div class="txt_assunto">
                                                        Assunto:
                                                   </div>
                                                   <select class="sltassunto" name="">
                                                         <option value="">Selecione um assuonto</option>
                                                         <option value="1">Teste 1</option>
                                                         <option value="2">Teste 2</option>
                                                         <option value="3">Teste 3</option>
                                                   </select>

                                             </div>
                                             <div class="linha6">
                                                   <div class="txt_mensagem">
                                                         Mensagem:
                                                   </div>
                                                   <textarea class="textarea"  style="resize: none;" name="textareaMensagem" ></textarea>
                                             </div>
                                             <div class="linha7">
                                                   <input type="submit" name="Enviar" value="Enviar">
                                             </div>
                                       </form>
                                 </div>
                           </div>
                      </div>
                      <div class="ajusta-chat_para_rodape">
                           <div class="content_chat">
                                <div class="faixa_titulo_chat">
                                      HHealth
                                </div>
                                <div class="content_txt_chat">
                                      <div class="texto1">
                                            Oi
                                      </div>
                                      <div class="texto2">
                                            Olá. Em que posso ajudar?
                                      </div>
                                      <div class="texto1">
                                            Eu gostaria de tirar uma dúvida
                                      </div>
                                      <div class="texto2">
                                            Sim, pode falar
                                      </div>
                                      <div class="texto1">
                                            Qual o horário de atendimento do pronto socorro?
                                      </div>
                                      <div class="texto2">
                                            O proto socorro do HHealth funciona 24H por dia
                                      </div>
                                      <div class="texto1">
                                            Muito brigado pela informação!
                                      </div>
                                </div>
                                <div class="faixa_enviar_chat">
                                      <input type="text" name="txt_digitado_pelo_paciente" value="">
                                      <div class="botao_enviar_chat">
                                            Enviar
                                      </div>
                                </div>
                           </div>
                      </div>
                </div>
                <!-- Esse require adiciona o rodapé na página -->
                <?php require_once('footer.php'); ?>
            </div>
      </body>
</html>
