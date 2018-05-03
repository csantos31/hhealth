<?php

     session_start();

    if(!isset($_SESSION['login'])){
        header('location:login.php');
    }

    header('location:views_cms/tipo_quarto.php');
?>
