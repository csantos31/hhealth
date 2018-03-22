<?php
session_start();


if($_SESSION["login"]==0){
    header('location:../index.php');
}

if(isset($_POST['btn_logout'])){
    session_destroy();
    $_SESSION['login'] = 0;
    header('location:../index.php');
}

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style_padrao.css">
    </head>
    
    <body>
      <form action="texte.php" method="post">  
        <div class="vai">
            fsdf <?php echo($_SESSION["login"])?>
            
            <input type="submit" name="btn_logout" value="logout">
        </div>
    </form>
    </body>
    
</html>