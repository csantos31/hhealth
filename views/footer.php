
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

<div class="footer"><!--footer faixa1-->
      <div class="menu_footer"><!--div menu footer-->
            <ul class="menu_mapa">
                <!-- <a class="esconde_item" href="<?php  //echo $path ?>dicas_saude.php"> -->
                      <li class="item_mapa">
                          <a href="<?= $hom ?>">
                            Home
                          </a>
                          <br>
                          <a href="<?= $path ?>especialidades.php">
                            Especialidades
                          </a><br>
                          <a href="<?= $path ?>ambientes.php">
                            Endereço
                          </a><br>
                          <a href="<?= $path ?>sobre_hhealth.php">
                            Sobre
                          </a>
                      </li>
                <!-- </a> -->

                <li class="item_mapa">
                  <a href="<?php echo $path ?>dicas_saude.php">  Dicas de Saúde</a>
                </li>


                <li class="item_mapa">
                    <a href="<?php echo $path ?>unidades_hhealth.php">Unidades</a>
                </li>


                <li class="item_mapa">
                    <a href="<?php echo $path ?>exames.php">Exames</a>
                </li>


                <li class="item_mapa">
                    <a href="<?php echo $path ?>convenios.php">Convênios</a>
                </li>

                <li class="item_mapa">
                    <a href="#">
                        Contatos
                      </a><br>
                    <a href="<?= $path ?>fale_conosco.php">
                        Fale Conosco
                      </a><br>
                      <a href="<?= $path ?>trabalhe_conosco.php">
                        Trabalhe Conosco
                      </a><br>
                </li>


                     <li class="item_menu_mobile"><a href="<?= $hom ?>">home</a></li>


                     <li class="item_menu_mobile"> <a href="<?= $path ?>especialidades.php">Especialidades</a></li>



                     <li class="item_menu_mobile"><a  href="<?= $path ?>ambientes.php" >Ambientes</a></li>


                     <li class="item_menu_mobile"><a href="<?= $path ?>sobre_hhealth.php">Sobre</a></li>




                 <li class="item_menu_mobile">
                      <a href="<?= $path ?>dicas_saude.php">SAÚDE</a>
                 </li>


                 <li class="item_menu_mobile">
                     <a href="<?= $path ?>unidades_hhealth.php"> UNIDADES</a>
                 </li>


                   <li class="item_menu_mobile">
                     <a href="<?= $path ?>exames.php"> EXAMES</a>
                   </li>


                 <li class="item_menu_mobile">
                     <a href="<?= $path ?>convenios.php">CONVÊNIOS</a>
                 </li>


                 <li class="item_menu_mobile"><a href="<?= $path ?>fale_conosco.php">Fale Conosco</a></li>


                 <li class="item_menu_mobile"><a href="<?= $path ?>trabalhe_conosco.php">Trabalhe Conosco</a></li>


            </ul>
            <div class="linha_branca">

            </div>
          <div class="faixa4_footer"><!--footer faixa4-->
            <div class="limitador_faixa4_footer">
                  © COPYRIGHT 2018
            </div>
          </div>
      </div>

</div>
