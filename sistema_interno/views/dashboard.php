<?php

require('../verifica.php');

 @session_start();
    require_once("../controllers/nivel_funcionario_controller.php");
    require_once("../models/nivel_funcionario_class.php");
    $cargo="#";    
    $especialidade="#";
    $funcionario="#";
    $agendamento="#";
    $paciente_pendente="#";
    $paciente_ativo="#";
    $remedio="#";
    $receita="#";
    $internacao="#";
    $quarto="#";
    $tipo_quarto="#";
    $nivel_usuario="#";                                                                       
    $pagamento="#";
    $senha = "#";


    $controller_nivel = new controllerNivelFuncionario();
    $buscar = $controller_nivel::listarNivelId($_SESSION['id_funcionario']);
    // cargos
//            especialidade
//            funcionario
//            agendamento
//            paciente_pendente
//            paciente_ativo
//            remedio
//            receita
//            internacao
//            quarto
//            tipo_quarto
//            nivel_usuario
//            pagamento

    if($buscar->cargo==1){
        $cargo = "cargos.php";
    }
    if($buscar->funcionario==1){
        $funcionario = "funcionarios.php";
    }
    if($buscar->especialidade==1){
        $especialidade = "especialidades.php";
    }
    if($buscar->agendamento==1){
        $agendamento = "agendamento.php";
    }
    if($buscar->paciente_pendente==1){
        $paciente_pendente = "pacientes_pendentes.php";
    }
    if($buscar->paciente_ativo==1){
        $paciente = "pacientes.php";
    }
    if($buscar->remedio==1){
        $remedio = "remedio.php";
    }
    if($buscar->receita==1){
        $receita = "receitas.php";
    }
    if($buscar->internacao==1){
        $internacao = "internacao.php";
    }
    if($buscar->quarto==1){
        $quarto = "quarto.php";
    }
    if($buscar->tipo_quarto==1){
        $tipo_quarto = "tipo_quarto.php";
    }
    if($buscar->nivel_usuario==1){
        $nivel_funcionario = "niveis_de_funcionario.php";
    }
    if($buscar->pagamento==1){
        $pagamento = "pagamentos.php";
    }
    if($buscar->senha==1){
        $senha = "senha.php";
    }

?>
<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_home.css">
        <link rel="stylesheet" type="text/css" href="../css/style_dashboard.css">
    </head>
    <body>
          <div class="transparente">

          </div>
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="alinha_conteudo">

            </div>
            <div class="main">
                <div id="container_home">
                    <div class="coluna">
                        <img src="../imagens/doc_icon1.jpg" alt="medicos" title="medicos">
                        <a href="<?php echo($cargo)?>">
                            <p>Cargos</p>
                        </a>
                        <a href="<?php echo($funcionario)?>">
                            <p>Funcionários</p>
                        </a>
                        <a href="<?php echo($especialidade)?>">
                            <p>Especialidades</p>
                        </a>
                    </div>
                    <div class="coluna">
                        <img src="../imagens/doc_icon2.jpg" alt="medicos" title="medicos">
                        <a href="<?php echo($paciente_pendente)?>">
                            <p>Ver pendentes</p>
                        </a>
                        <a href="<?php echo($paciente_ativo)?>">
                            <p>Ver pacientes ativos</p>
                        </a>
                        <a href="<?php echo($internacao)?>">
                            <p>Internacao</p>
                        </a>
                        <a href="<?php echo($senha)?>">
                            <p> Atendimento / SENHA </p>
                        </a>
                    </div>
                    <div class="coluna">
                        <img src="../imagens/doc_icon3.jpg" alt="medicos" title="medicos">
                        <a href="<?php echo($nivel_funcionario)?>">
                           <p>Níveis de usuário</p>
                        </a>
                        <a href="<?php echo($receita)?>">
                           <p>Receitas</p>
                        </a>
                        <a href="<?php echo($pagamento)?>">
                           <p>Pagamentos</p>
                        </a>
                    </div>
                </div>
            </div>
            <footer>
                Desenvolvido por CPI - 2018
            </footer>
        </div>
    </body>
</html>
