<?php
    require('verifica_paciente.php');
    require_once('../controllers/paciente_controller.php');
    require_once('../models/paciente_class.php');


    @session_start();
    date_default_timezone_set('America/Sao_Paulo');
    $dt_atual = date ("Y-m-d");
    $ano_atual=null;
    $mes_atual=null;
    $dia_atual=null;
    $dt_paciente=null;
    $ano_paciente=null;
    $mes_paciente=null;
    $dia_paciente=null;


    
    $controller_paciente = new controllerPaciente();
    $listar = $controller_paciente::Buscar($_SESSION['id_paciente']);

    $id_endereco=$listar->id_endereco;
    $nome = $listar->nome;
    $sobrenome = $listar->sobrenome;
    $dt_paciente=$listar->dt_nasc;  
    $rg = $listar->rg;
    $cpf = $listar->cpf;
    $carterinha_convenio = $listar-> carterinha_convenio;

    

    //pega o dia, o mes e o ano da dt_nasc do paciente
    list($ano_paciente,$mes_paciente,$dia_paciente)=explode("-", $dt_paciente);
    //pega o dia, o mes e o ano da data atual
    list($ano_atual,$mes_atual,$dia_atual)=explode("-", $dt_atual);

    //converte string para int
    //var_dump( $ano_paciente );
    //var_dump( $ano_atual );


    if($ano_paciente<$ano_atual){
        $idade = $ano_atual - $ano_paciente;
    }else{
        $idade= "idade invalida";
    }

    require_once('../../../models/endereco_class.php');
    require_once('../../../controllers/endereco_controller.php');
    $controller_endereco = new controller_endereco();
    $listar2 = $controller_endereco::Buscar2($id_endereco);

    $cidade = $listar2->cidade;
    $logradouro = $listar2->logradouro;
    $numero = $listar2->numero;
    $bairro = $listar2 ->bairro;
    $cep = $listar2 ->cep;

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Meu perfil</title>
    <link rel="stylesheet" type="text/css" href="../css/style_layout_idade.php" media="screen" />
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
                        <div class="dados" ><?php echo $nome;?> <?php echo $sobrenome ?></div>
                    </div>
                    <div class="segurainfo">
                        <div class="campos" >Idade:</div> 
                        <div class="dados" ><?php echo $idade?></div>
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
                    <div class="dados" ><?php echo $cpf ?></div>
                </div>
                <div class="segurainfo">
                    <div class="campos" >Rg:</div>  
                    <div class="dados" ><?php echo $rg ?></div>
                </div>

                <div class="subtitulos">
                    <b>Endereço</b><br><br>
                </div>
                <div class="segurainfo">
                    <div class="campos2" >Logradouro:</div>
                    <div class="dados" >
                        <?php echo $logradouro;?>
                    </div>
                </div>
                <div class="segurainfo">
                    <div class="campos" >Bairro:</div>
                    <div class="dados" >
                        <?php echo $bairro;?>
                    </div>
                </div>
                <div class="segurainfo">
                    <div class="campos" >Cidade:</div>
                    <div class="dados" >
                        <?php echo $cidade;?>
                    </div>
                </div>
                <div class="segurainfo">
                    <div class="campos" >CEP:</div>
                    <div class="dados" >
                        <?php echo $cep;?>
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
