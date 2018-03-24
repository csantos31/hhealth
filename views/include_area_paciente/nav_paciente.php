<!--

  Data: 24/03/2018
  Desenvolvedor: Gleyver Coutinho Castro
  Obs: Página HTML do menu e cabeçalho da area do paciente

 -->
 
    <!-- Cabeçalho da página -->
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
            <strong>Bem Vindo, </strong><?php echo ""; ?>

            <!-- logout ,da pagina -->
            <div id="suporte_logout">
              <a href="#">
                <div id="logout_area_usuario">
                  Logout
                </div>
              </a>
            </div>

          </div>

          <!-- Imagem do paciente -->
          <figure id="figure_paciente">
            <!-- <img src="" alt=""> -->
          </figure>

        </div>

        <!-- Imagem do logo -->
        <div id="suporte_imagem">
          <figure id="suporte_figure_logo">
            <!-- <img src="" alt=""> -->
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
        <ul id="suporte_menu">
          <a href="#">
            <li id="item_menu_agendamento">
              Agendamento
            </li>
          </a>
          <a href="#">
            <li class="item_menu">
              Resultados Exames
            </li>
          </a>
          <a href="#">
            <li id="item_menu_historico">
              Histórico de Atendimento
            </li>
          </a>
          <a href="#">
            <li id="item_menu_receita">
              Receitas
            </li>
          </a>
          <a href="#">
            <li class="item_menu">
              Pré-Atendimento
            </li>
          </a>
        </ul>
      </div>
    </nav>
