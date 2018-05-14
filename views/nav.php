
<?php

 if($_SERVER['PHP_SELF'] == '/hhealth/index.php')
  {
      $path = 'views/' ;
      $hom = 'index.php';
  }else{
      $path = '../views/';
      $hom = '../index.php';
  }


?>

<div class="header"><!--header-->
      <div class="separador_responsivo">
            <a href="<?= $hom ?>">
                  <div class="logo">

                  </div>
            </a>
        <div class="logo_marca_responsivo">
          HHEALTH
      </div>
      <input type="checkbox" id="btn_menu">
      <label for="btn_menu" >&#9776;</label>
      </div>



    <nav class="nav_menu">
          <div class="faixa_texte">
                <a href="<?= $hom ?>">
                      <div class="logo_marca">
                           HHEALTH
                     </div>
               </a>
          </div>
          <ul class="menu_nav">
              <li class="item_nav botao_snip">
                  HOSPITAL
                  <ul class="submenu_nav_hhealth">
                        <a href="<?= $hom ?>">
                              <li class="item_submenu_nav_hhealth ">home</li>
                        </a>
                        <a href="<?= $path ?>especialidades.php">
                              <li class="item_submenu_nav_hhealth">Especialidades</li>
                        </a>

                        <a  href="<?= $path ?>ambientes.php" >
                              <li class="item_submenu_nav_hhealth">Ambientes</li>
                        </a>
                        <a href="<?= $path ?>sobre_hhealth.php">
                              <li class="item_submenu_nav_hhealth">Sobre</li>
                        </a>
                  </ul>
              </li>
              <a href="<?= $path ?>dicas_saude.php">
                <li class="item_nav botao_snip">
                     SAÚDE
                </li>
              </a>
              <a href="<?= $path ?>unidades_hhealth.php">
                <li class="item_nav botao_snip">
                    UNIDADES
                </li>
              </a>
              <a href="<?= $path ?>exames.php">
                  <li class="item_nav botao_snip">
                    EXAMES
                  </li>
              </a>
              <a href="<?= $path ?>convenios.php">
                <li class="item_nav botao_snip">
                    CONVÊNIOS
                </li>
              </a>
              <li class="item_nav botao_snip">
                  CONTATOS
                <ul class="submenu_nav_contatos">
                        <a href="<?= $path ?>fale_conosco.php">
                              <li class="item_submenu_nav_contatos">Fale Conosco</li>
                        </a>
                        <a href="<?= $path ?>trabalhe_conosco.php">
                          <li class="item_submenu_nav_contatos">Trabalhe Conosco</li>
                        </a>
                  </ul>
              </li>
          </ul>
    </nav>

    <!--este menu aparece quando o usuário desce a página-->
    <nav id="menu_secundario"><!--menu secundário-->
        <ul class="menu_nav">
              <li class="item_nav botao_snip">
                  HOSPITAL
                  <ul class="submenu_nav_hhealth">
                        <a href="<?= $hom ?>">
                              <li class="item_submenu_nav_hhealth ">home</li>
                        </a>
                        <a href="<?= $path ?>especialidades.php">
                              <li class="item_submenu_nav_hhealth">Especialidades</li>
                        </a>

                        <a  href="<?= $path ?>ambientes.php" >
                              <li class="item_submenu_nav_hhealth">Ambientes</li>
                        </a>
                        <a href="<?= $path ?>sobre_hhealth.php">
                              <li class="item_submenu_nav_hhealth">Sobre</li>
                        </a>
                  </ul>
              </li>
              <a href="<?= $path ?>dicas_saude.php">
                <li class="item_nav botao_snip">
                     SAÚDE
                </li>
              </a>
              <a href="<?= $path ?>unidades_hhealth.php">
                <li class="item_nav botao_snip">
                    UNIDADES
                </li>
              </a>
              <a href="<?= $path ?>exames.php">
                  <li class="item_nav botao_snip">
                    EXAMES
                  </li>
              </a>
              <a href="<?= $path ?>convenios.php">
                <li class="item_nav botao_snip">
                    CONVÊNIOS
                </li>
              </a>
              <li class="item_nav botao_snip">
                  CONTATOS
                <ul class="submenu_nav_contatos">
                        <a href="<?= $path ?>fale_conosco.php">
                              <li class="item_submenu_nav_contatos">Fale Conosco</li>
                        </a>
                        <a href="<?= $path ?>trabalhe_conosco.php">
                          <li class="item_submenu_nav_contatos">Trabalhe Conosco</li>
                        </a>
                  </ul>
              </li>
          </ul>
    </nav>

</div>
<nav class="nav_mobile">
      <ul class="menu_mobile">
            <li class="item_mobile">
                HOSPITAL
                <ul class="submenu_mobile_hhealth">
                      <a href="<?= $hom ?>">
                           <li class="item_mobile_two ">home</li>
                      </a>
                      <a href="<?= $path ?>especialidades.php">
                           <li class="item_mobile_two">Especialidades</li>
                      </a>

                      <a  href="<?= $path ?>ambientes.php" >
                           <li class="item_mobile_two">Ambientes</li>
                      </a>
                      <a href="<?= $path ?>sobre_hhealth.php">
                           <li class="item_mobile_two">Sobre</li>
                      </a>
                </ul>
            </li>
            <a href="<?= $path ?>dicas_saude.php">
             <li class="item_mobile">
                   SAÚDE
             </li>
            </a>
            <a href="<?= $path ?>unidades_hhealth.php">
             <li class="item_mobile">
                  UNIDADES
             </li>
            </a>
            <a href="<?= $path ?>exames.php">
                <li class="item_mobile">
                  EXAMES
                </li>
            </a>
            <a href="<?= $path ?>convenios.php">
             <li class="item_mobile">
                  CONVÊNIOS
             </li>
            </a>
            <li class="item_mobile">
                CONTATOS
             <ul class="submenu_mobile_contatos">
                      <a href="<?= $path ?>fale_conosco.php">
                           <li class="item_mobile_two">Fale Conosco</li>
                      </a>
                      <a href="<?= $path ?>trabalhe_conosco.php">
                       <li class="item_mobile_two">Trabalhe Conosco</li>
                      </a>
                </ul>
            </li>
      </ul>
</nav>

<script>
    window.onscroll = function(){
        var menu_secundario = document.getElementById("menu_secundario");
        var top = window.pageYOffset || document.documentElement.scrollTop;
        if( top > 150 ) {
            menu_secundario.style.display = "block";

            //console.log('Maior que 300');
        }else if(top < 300){
            menu_secundario.style.display = "none";

            //console.log('Menor que 300');
        }
    }

</script>
