<?php

     session_start();

    if(!isset($_SESSION['login'])){
        header('location:login.php');
    }

    if($_SESSION['id_funcionario']>0){
         header('location:views_cms/crud_home.php');
   }else {
         // code...
         header('location:login.php'); 
   }

?>
