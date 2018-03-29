<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
      <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" type="text/css" href="../css/style_nav.css">
            <link rel="stylesheet" type="text/css" href="../css/style_footer.css">
            <link rel="stylesheet" type="text/css" href="../css/style_trabalhe_conosco.css">
            <title>Hospital HHealth</title>
      </head>
      <body>
            <div class="main"><!--Div Main que segura todas as divs-->
                 <div class="suporte_menu">
                       <div class="menu"><!--**MENU**-->
                          <?php require_once('nav.php'); ?>
                      </div>
                 </div>
                <div class="div_suporte_conteudo">

                </div>
                <div class="suporte_content">
                      <div class="content">
                           <div class="faixa_titulo_da_pagina">
                                 trabalhe Conosco
                           </div>
                           <div class="faixa1">
                                 <div class="formtrabalheconosco">
                                       <form class="form_trabalheconosco" action="index.html" method="post">
                                             <div class="linha1">
                                                   <div class="txt_nome">
                                                         Nome Completo:
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
                                             <div class="linha_data">
                                                   <div class="txtdtNasc">
                                                         Data de Nascimento:
                                                   </div>
                                                   <input name="txtdatanasc" type="date" min="1990-01-01" max="2100-12-31" value="">
                                             </div>
                                             <div class="linha_sexo">
                                                   <div class="txtsexo">
                                                         Data de Nascimento:
                                                   </div>
                                                   <input type="radio" name="rdosexo" value="F" >Feminino
					                     <input type="radio" name="rdosexo" value="M" >Masculino
                                             </div>
                                             <div class="linhapais">
                                                   <div class="txt_pais">
                                                        País de Origem:
                                                   </div>
                                                   <select class="sltpais" name="sltpais">
                                                         <option value="">Selecione um país</option>
                                                         <option value="1">Teste 1</option>
                                                         <option value="2">Teste 2</option>
                                                         <option value="3">Teste 3</option>
                                                   </select>
                                             </div>
                                             <div class="linhaestadoCivil">
                                                   <div class="txt_estadoCivil">
                                                        País de Origem:
                                                   </div>
                                                   <select class="sltestadoCivil" name="sltestadoCivil">
                                                         <option value="">Selecione um país</option>
                                                         <option value="1">Teste 1</option>
                                                         <option value="2">Teste 2</option>
                                                         <option value="3">Teste 3</option>
                                                   </select>
                                             </div>
                                             <div class="linhacep">
                                                   <div class="txt_cep">
                                                         CEP:
                                                   </div>
                                                   <input type="text" name="txtCep" value="">
                                             </div>
                                             <div class="linhaendereco">
                                                   <div class="txt_endereco">
                                                         Endereço:
                                                   </div>
                                                   <input type="text" name="txtEndereco" value="">
                                             </div>
                                             <div class="linhabairro">
                                                   <div class="txt_bairro">
                                                         Bairro:
                                                   </div>
                                                   <input type="text" name="txtBairro" value="">
                                             </div>
                                             <div class="linhacidade">
                                                   <div class="txt_cidade">
                                                        Cidade:
                                                   </div>
                                                   <select class="sltcidade" name="">
                                                         <option value="">Selecione uma cidade</option>
                                                         <option value="1">Teste 1</option>
                                                         <option value="2">Teste 2</option>
                                                         <option value="3">Teste 3</option>
                                                   </select>

                                             </div>
                                             <div class="linhaestado">
                                                   <div class="txt_estado">
                                                        Estado:
                                                   </div>
                                                   <select class="sltestado" name="">
                                                         <option value="">Selecione um Estado</option>
                                                         <option value="1">Teste 1</option>
                                                         <option value="2">Teste 2</option>
                                                         <option value="3">Teste 3</option>
                                                   </select>

                                             </div>
                                             <div class="linhastatusTrabalho">
                                                   <div class="txt_statusTrabalho">
                                                        Está trabalhando atualmente?
                                                   </div>
                                                   <select class="sltstatusTrabalho" name="">
                                                         <option value="">Selecione</option>
                                                         <option value="1">Sim</option>
                                                         <option value="2">Não</option>
                                                   </select>

                                             </div>
                                             <div class="linhastatusDeficiencia">
                                                   <div class="txt_statusDeficiencia">
                                                        Possui alguma deficiência?
                                                   </div>
                                                   <select class="sltstatusDeficiencia" name="">
                                                         <option value="">Selecione</option>
                                                         <option value="1">Sim</option>
                                                         <option value="2">Não</option>
                                                   </select>

                                             </div>
                                             <div class="linhastatusRegistroProfissional">
                                                   <div class="txt_statusRegistroProfissional">
                                                        Possui Registro Profissional?
                                                   </div>
                                                   <select class="sltstatusRegistroProfissional" name="">
                                                         <option value="">Selecione</option>
                                                         <option value="1">Teste 1</option>
                                                         <option value="1">Sim</option>
                                                         <option value="2">Não</option>
                                                   </select>

                                             </div>
                                             <div class="linharesumoQualificacoes">
                                                   <div class="txt_resumoQualificacoes">
                                                         Resumo dasQualificacoes:
                                                   </div>
                                                   <textarea  style="resize: none" name="textarearesumoQualificacoes" rows="15" cols="75"></textarea>
                                             </div>
                                             <div class="linha7">
                                                   <input type="submit" name="Enviar" value="Enviar">
                                             </div>
                                       </form>
                                 </div>
                           </div>
                      </div>
                      </div>
                      <footer><!--**FOOTER**-->
                            <div class="footer">
                                  <?php require_once('footer.php'); ?>
                            </div>
                      </footer>
                </div>
            </div>

      </body>
</html>
