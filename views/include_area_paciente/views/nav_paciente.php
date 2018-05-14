<!--

  Data: 24/03/2018
  Desenvolvedor: Gleyver Coutinho Castro
  Obs: Página HTML do menu e cabeçalho da area do paciente

 -->

    <!-- Cabeçalho da página -->
    <div class="opcaity_header">
    </div>
    <header id="header_area_paciente">
      <!-- Suporte com limite de tamanho do menu -->
      <div id="suporte_header">
        <!-- Faixa invisivel para segura uma parte -->
        <div id="faixa">
        </div>

        <!-- Imagem e coisas do paciente -->
        <div id="suporte_parte_paciente">
          <div id="suporte_texto_bem_vindo">
            <!-- Bem vindo -->
            <strong>Bem Vindo, João </strong><?php echo ""; ?>

            <!-- logout ,da pagina -->
            <div id="suporte_logout">
              <a href="../../home.php?destroi_sessao=1">
                <div id="logout_area_usuario">
                  Logout
                </div>
              </a>
            </div>

          </div>

          <!-- Imagem do paciente -->
            <a href="paciente_perfil.php">
                <figure id="figure_paciente">
                    <img src="../../../imagens/icon_user.png" alt="Foto do usuário" title="foto do usuário">
                </figure>
            </a>
        </div>

        <!-- Imagem do logo -->
        <div id="suporte_imagem">
          <figure id="suporte_figure_logo">
            <img src="../../../imagens/logo_hhealth_sem_fundo.png" alt="logo hhealth" title="logo hhealth">
          </figure>
        </div>

      </div>
    </header>
    <!-- Menu da página -->
    <nav id="nav_area_paciente">
      <!-- Limitando area do menu -->
      <div id="content_nav">

        <div id="faixa_invisivel">

        </div>
          <div class="menu">
        <ul id="suporte_menu">
          <a href="area_paciente_agendamento.php" class="area">
            <li class="item_menu">
              Agendamento
            </li>
          </a>
          <a href="resultado_exames.php">
            <li class="item_menu">
              Resultados Exames
            </li>
          </a>
          <a href="historico_paciente.php">
            <li class="item_menu">
              Histórico
            </li>
          </a>
          <a href="receitas.php">
            <li class="item_menu">
              Receitas
            </li>
          </a>
          <a href="pre_atendimento.php">
            <li class="item_menu">
              Pré - Atendimento
            </li>
          </a>
        </ul>
          </div>
      </div>
    </nav>
