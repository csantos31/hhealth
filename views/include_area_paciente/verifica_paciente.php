<?php 
    session_start();

    if(!isset($_SESSION['login_paciente'])){
        header('location:../../index.php');
    }

?>