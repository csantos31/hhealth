<?php

      $url_link = basename($_SERVER['REQUEST_URI']);

      if ($url_link=='hhealth' || $url_link=='index.php') {
            # code...
            $url_link_padrao=null;
            $url_link_padrao2='views/';

      }else {
            # code...
            $url_link_padrao = '../';
            $url_link_padrao2=null;

      }
?>
<div class="suporte_menu">
      <div class="menu">
            <div class="header"><!--header-->
                  <a href="home.php">
                        <div class="logo">
                        </div>
                  </a>
                <nav class="nav_menu">
                      <div class="faixa_texte">

                      </div>
                      <ul class="menu_nav">
                          <li class="item_nav">
                              Hospital
                              <ul class="submenu_nav_hhealth">
                                    <a href="<?php echo $url_link_padrao ?>index.php">
                                          <li class="item_submenu_nav_hhealth">Home</li>
                                    </a>
                                    <a href="<?php echo $url_link_padrao2 ?>especialidades.php">
                                          <li class="item_submenu_nav_hhealth">Especialidades</li>
                                    </a>

                                    <a  href="<?php echo $url_link_padrao2 ?>ambientes.php" >
                                          <li class="item_submenu_nav_hhealth">Ambientes</li>
                                    </a>
                                    <a href="<?php echo $url_link_padrao2 ?>sobre_hhealth.php">
                                          <li class="item_submenu_nav_hhealth">Sobre</li>
                                    </a>
                              </ul>
                          </li>
                          <a href="<?php echo $url_link_padrao2 ?>dicas_saude.php">
                            <li class="item_nav">
                                Dicas de Saúde
                            </li>
                          </a>
                          <a href="<?php echo $url_link_padrao2 ?>unidades_hhealth.php">
                            <li class="item_nav">
                                Unidades
                            </li>
                          </a>
                          <a href="<?php echo $url_link_padrao2 ?>exames.php">
                              <li class="item_nav">
                                Exames
                              </li>
                          </a>
                          <a href="<?php echo $url_link_padrao2 ?>convenios.php">
                            <li class="item_nav">
                                Convênios
                            </li>
                          </a>
                          <li class="item_nav">
                              Contatos
                              <ul class="submenu_nav_contatos">
                                    <a href="<?php echo $url_link_padrao2 ?>fale_conosco.php">
                                          <li class="item_submenu_nav_contatos">Fale Conosco</li>
                                    </a>
                                    <a href="<?php echo $url_link_padrao2 ?>trabalhe_conosco.php">
                                      <li class="item_submenu_nav_contatos">Trabalhe Conosco</li>
                                    </a>
                              </ul>
                          </li>
                      </ul>
                </nav>
            </div>
      </div>

</div>
