<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
      <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="../css/style_nav.css">
            <link rel="stylesheet" href="../css/style_footer.css">
            <link rel="stylesheet" href="../css/style_fale_conosco.css">
            <script src="../js/jquery-3.2.1.min.js"></script>

            <title>Hospital HHealth</title>
            <meta name="viewport" content="initial-scale=1, maximun-scale=1">
      </head>
      <body>
          <script>

              $(document).ready(function() {

                 $('#form').submit(function(event){


                      event.preventDefault();
                      //Recupera o id gravado no Form pelo atribute-id
                      /*var id = $(this).data("id");
                      var modo = "";
                      if(id == '0')
                          modo='inserir';
                      else
                          modo='editar';*/

                      $.ajax({
                      type: "POST",
                      url: "../router.php?controller=fale_conosco&modo=inserir",
                      //alert (url);
                      data: new FormData($("#form")[0]),
                      cache:false,
                      contentType:false,
                      processData:false,
                      async:true,
                      success: function(dados){
                           $('.suporte_content').html(dados);
                           //alert(dados);

                    }
                });


                });

            });

         </script>
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
                                       <form class="form_faleconosco" action="fale_conosco.php" id="form" method="post">
                                             <div class="linha1">
                                                   <div class="txt_nome">
                                                         Nome:
                                                   </div>
                                                   <input type="text" name="txt_nome" value="" required>
                                             </div>
                                             <div class="linha2">
                                                   <div class="txt_email">
                                                         Email:
                                                   </div>
                                                   <input type="email" name="txt_email" value="" required>
                                             </div>
                                             <div class="linha3">
                                                   <div class="txt_telefone">
                                                         Telefone:
                                                   </div>
                                                   <input type="tel" name="txt_telefone" value="" required>
                                             </div>
                                             <div class="linha4">
                                                   <div class="txt_celular">
                                                         Celular:
                                                   </div>
                                                   <input type="tel" name="txt_celular" value="" required>
                                             </div>
                                             <div class="linha4">
                                                   <div class="txt_celular">
                                                         Assunto:
                                                   </div>
                                                   <input type="tel" name="txt_assunto" value="" required>
                                             </div>
                                             <div class="linha6">
                                                   <div class="txt_mensagem">
                                                         Mensagem:
                                                   </div>
                                                   <textarea required class="textarea"  style="resize: none;" name="txt_mensagem" ></textarea>
                                             </div>
                                             <div class="linha7">
                                                   <input type="submit" id="bnt_enviar" name="Enviar" value="Enviar">
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
