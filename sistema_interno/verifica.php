<?php
    session_start();
    if($_SESSION["login"]==1){
    }else if($_SESSION["login"]==0){
        header('location:../index.php');
    }

?>
