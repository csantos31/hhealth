
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

                      <li class="item_submenu_nav_hhealth ">
                        <a href="<?= $hom ?>">home</a>
                      </li>

                      <li class="item_submenu_nav_hhealth">
                        <a href="<?= $path ?>especialidades.php">Especialidades
                        </a>
                      </li>

                      <li class="item_submenu_nav_hhealth">
                        <a  href="<?= $path ?>ambientes.php" >Ambientes</a>
                      </li>

                      <li class="item_submenu_nav_hhealth">
                        <a href="<?= $path ?>sobre_hhealth.php">Sobre</a>
                      </li>

                  </ul>
              </li>

              <li class="item_nav botao_snip">
                  <a href="<?= $path ?>dicas_saude.php">SAÚDE</a>
              </li>


              <li class="item_nav botao_snip">
                <a href="<?= $path ?>unidades_hhealth.php"> UNIDADES</a>
              </li>


              <li class="item_nav botao_snip">
                <a href="<?= $path ?>exames.php"> EXAMES </a>
              </li>


              <li class="item_nav botao_snip">
                  <a href="<?= $path ?>convenios.php">CONVÊNIOS</a>
              </li>

              <li class="item_nav botao_snip">
                  CONTATOS
                <ul class="submenu_nav_contatos">

                        <li class="item_submenu_nav_contatos">
                          <a href="<?= $path ?>fale_conosco.php">Fale Conosco</a>
                        </li>
                        <li class="item_submenu_nav_contatos">
                          <a href="<?= $path ?>trabalhe_conosco.php">
                            Trabalhe Conosco
                          </a>
                        </li>

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

                        <li class="item_submenu_nav_hhealth ">
                          <a href="<?= $hom ?>">home</a>
                        </li>


                        <li class="item_submenu_nav_hhealth">
                          <a href="<?= $path ?>especialidades.php">Especialidades</a>
                        </li>

                        <li class="item_submenu_nav_hhealth">
                          <a  href="<?= $path ?>ambientes.php" >Ambientes</a>
                        </li>


                        <li class="item_submenu_nav_hhealth">
                          <a href="<?= $path ?>sobre_hhealth.php">Sobre</a>
                        </li>

                  </ul>
              </li>

                <li class="item_nav botao_snip">
                    <a href="<?= $path ?>dicas_saude.php"> SAÚDE</a>
                </li>


                <li class="item_nav botao_snip">
                    <a href="<?= $path ?>unidades_hhealth.php">UNIDADES</a>
                </li>


                <li class="item_nav botao_snip">
                  <a href="<?= $path ?>exames.php">EXAMES</a>
                </li>


                <li class="item_nav botao_snip">
                    <a href="<?= $path ?>convenios.php">CONVÊNIOS</a>
                </li>

              <li class="item_nav botao_snip">
                  CONTATOS
                <ul class="submenu_nav_contatos">

                        <li class="item_submenu_nav_contatos">
                          <a href="<?= $path ?>fale_conosco.php">Fale Conosco</a>
                        </li>


                        <li class="item_submenu_nav_contatos">
                            <a href="<?= $path ?>trabalhe_conosco.php">Trabalhe Conosco</a>
                        </li>

                  </ul>
              </li>
          </ul>
    </nav>

</div>




<div class="menu_mobile">

<!--
    HOSPITAL -->
  <header>
        <a href="<?= $hom ?>">
             <div class="logo">

             </div>
        </a>
          <div class="logo_marca_responsivo">
           HHEALTH
        </div>
  	<!-- <span>Author : <a href="http://glennsmith.me" target="_blank">Glenn Smith</a></span> -->
    <button class="hamburger">&#9776;</button>
    <button class="cross">&#735;</button>
  </header>

  <div class="separador_responsivo">

  </div>
  <div class="menu">
    <ul>
      <a href="<?= $hom ?>"><li>Home</li></a>
      <a href="<?= $path ?>especialidades.php"><li>Especialidades</li></a>
      <a href="<?= $path ?>ambientes.php"><li>Ambientes</li></a>
      <a href="<?= $path ?>sobre_hhealth.php"><li>Sobre</li></a>
      <a href="<?= $path ?>dicas_saude.php"><li>SAÚDE</li></a>
      <a href="<?= $path ?>unidades_hhealth.php"><li>Unidades</li></a>
      <a href="<?= $path ?>exames.php"><li>Exames</li></a>
      <a href="<?= $path ?>convenios.php"><li>Convênios</li></a>
      <a href="<?= $path ?>fale_conosco.php"><li>Fale Conosco</li></a>
      <a href="<?= $path ?>trabalhe_conosco.php"><li>Trabalhe Conosco</li></a>
    </ul>
  </div>
</div>

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

<script>
  $( document ).ready(function() {

  $( ".cross" ).hide();
  $( ".menu" ).hide();
  $( ".hamburger" ).click(function() {
  $( ".menu" ).slideToggle( "slow", function() {
  $( ".hamburger" ).hide();
  $( ".cross" ).show();
  });
  });

  $( ".cross" ).click(function() {
  $( ".menu" ).slideToggle( "slow", function() {
  $( ".cross" ).hide();
  $( ".hamburger" ).show();
  });
  });

  });
</script>
