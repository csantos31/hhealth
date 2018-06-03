<?php
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


<div class="menu_lateral_cms"><!--menu lateral-->
      <div class="segura_menu">
            <a href="<?php echo($cargo)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/collaboration.png">
                     </div>

                     <div class="titulo_menu_lateral">
                         <a>Cargos</a>
                     </div>
                 </div>
            </a>
            <a href="<?php echo($funcionario)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/network.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Funcionários</a>
                     </div>
                 </div>
            </a>
            <a href="<?php echo($especialidade)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/doctor.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Especialidades</a>
                     </div>
                 </div>
            </a>

          <a href="<?php echo($agendamento)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/sistema_interno_icon.png" class="sistema_interno">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Ativar Agendamentos</a>
                     </div>
                 </div>
            </a>

            <a href="<?php echo($paciente_pendente)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/patient.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Ver Pendentes</a>
                     </div>
                 </div>
            </a>
            <a href="<?php echo($paciente)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/on.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Ver Pacientes Ativos</a>
                     </div>
                 </div>
            </a>
            <a href="<?php echo($remedio)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/levels.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Remédios</a>
                     </div>
                 </div>
            </a>
            <a href="<?php echo($receita)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/levels.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Receitas</a>
                     </div>
                 </div>
            </a>
            <a href="<?php echo($internacao)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/sistema_interno_icon.png" class="sistema_interno">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Internação</a>
                     </div>
                 </div>
            </a>
          <a href="<?php echo($quarto)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/levels.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Quarto</a>
                     </div>
                 </div>
            </a>
          <a href="<?php echo($tipo_quarto)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/levels.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Tipo de quarto</a>
                     </div>
                 </div>
            </a>
            <a href="<?php echo($nivel_funcionario)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/levels.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Níveis de Usuário</a>
                     </div>
                 </div>
            </a>
            <a href="<?php echo($pagamento)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/levels.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Pagamento</a>
                     </div>
                 </div>
            </a>
            <a href="<?php echo($senha)?>">
                 <div class="linha">
                     <div class="img_menu_lateral">
                         <img src="../imagens/levels.png">
                     </div>
                     <div class="titulo_menu_lateral">
                         <a>Senha</a>
                     </div>
                 </div>
            </a>


          <a href="login.php?logout=true" style="font-weight:bold;">
                 <div class="linha">
                     <div class="img_menu_lateral">
                        LOGOUT
                     </div>
                 </div>
            </a>

      </div>

</div>
