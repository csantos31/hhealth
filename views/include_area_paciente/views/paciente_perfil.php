<?php
    require('verifica_paciente.php');

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Meu perfil</title>
    <link rel="stylesheet" href="../css/style_nav.css">
    <link rel="stylesheet" href="../css/style_paciente_perfil.css">

    <link rel="stylesheet" href="../css/style_footer.css">
      
  </head>
  <body>
    <?php include_once('nav_paciente.php'); ?>
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
                <div id="faixa_descricao_usuario">
                    <div class="subtitulos">
                        <b>Dados Pessoais</b><br>
                    </div>
                    <div class="segurainfo">
                        <div class="campos" >Nome:</div> 
                        <div class="dados" >João Dos Santos</div>
                    </div>
                    <div class="segurainfo">
                        <div class="campos" >Idade:</div> 
                        <div class="dados" >18 anos</div>
                    </div>
                    <div class="segurainfo">
                        <div class="campos" >Celular:</div> 
                        <div class="dados" >(11) 95060 - 4833</div>
                    </div>
                    <div class="segurainfo">
                        <div class="campos" >E-mail:</div> 
                        <div class="dados" > joao.s@gmail.com </div>
                    </div>
                </div>
            </div>
            <div id="informacoes_usuario">
                
                <div class="subtitulos">
                        <b>Documentos</b><br><br>
                    </div>
                <div class="segurainfo">
                    <div class="campos1" >Convênio:</div> 
                    <div class="dados" > Amil </div>
                </div>
                <div class="segurainfo">
                    <div class="campos" >Cpf:</div>  
                    <div class="dados" >000.000.000 - 00</div>
                </div>
                <div class="segurainfo">
                    <div class="campos" >Rg:</div>  
                    <div class="dados" >00.000.000 - 0</div>
                </div>

                <div class="subtitulos">
                    <b>Endereço</b><br><br>
                </div>
                <div class="segurainfo">
                    <div class="campos2" >Logradouro:</div>
                    <div class="dados" >
                        R. Engenheiro Renê Benedito da Silva , 101
                    </div>
                </div>
                <div class="segurainfo">
                    <div class="campos" >Bairro:</div>
                    <div class="dados" >
                        Parque Boa Esperança
                    </div>
                </div>
                <div class="segurainfo">
                    <div class="campos" >Cidade:</div>
                    <div class="dados" >
                        Itapevi
                    </div>
                </div>
                <div class="segurainfo">
                    <div class="campos" >Bairro:</div>
                    <div class="dados" >
                        São Paulo
                    </div>
                </div>
                <a href="cadastro_paciente.php">
                    <div class="edit">
                        Editar Perfil
                    </div>
                </a>
            </div>
        </div>

      <div class="faixa_branca">

      </div>
    </div>
    <div class="">
      <?php include_once('footer_paciente.php'); ?>
    </div>
  </body>
</html>
