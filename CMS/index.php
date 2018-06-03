<?php

     session_start();

    if(!isset($_SESSION['login'])){
        header('location:login.php');
    }

    if($_SESSION['id_funcionario']>0){
<<<<<<< HEAD
         header('location:views_cms/crud_home.php');
=======
         header('location:views_cms/convenios_cms.php');
>>>>>>> 8c083b6d0f9e61a60310ced492981705624c3b8d
   }else {
         // code...
         header('location:login.php');
   }

?>
