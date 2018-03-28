<?php 
if (isset($_GET['controller']))
    $caminho ="views_cms/";
else
    $caminho = "";
?>
<div class="suporte_header">
    <div class="header_home_cms"><!--conteudo da home do cms-->
        <div class="content_logo_titulo_cms">
            <div class="logo_cms">
                <img src="<?= $caminho ?>imagens/logo.png">
            </div>

            <div class="titulo_cms"><!---->
                <a>Sistema de Gerenciamento do Site</a>
            </div>
        </div>
        <div class="content_user">
            <div class="icon_user">
                <img src="<?= $caminho ?>imagens/user.png">
            </div>

            <div class="name_user">
                <a>User Administrator</a>
            </div>

            <div class="content_logout">
                <a>Logout</a>
                <img src="<?= $caminho ?>imagens/logout.png">
            </div>
        </div>

    </div>
</div>