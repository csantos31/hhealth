<?php

  session_start();


    if(!isset($_SESSION['login_paciente'])){
      header('location:../../../index.php');
    }else{
      if($_SESSION['login_paciente']==0){
        header('location:../../../index.php');
      }
    }

?>
