<?php
    session_start();

    if(!isset($_SESSION['login'])){
        header('location:../index.php');
    }else{
      if($_SESSION['login']!='0'){
        header('dashboard.php');

    }
  }

?>
