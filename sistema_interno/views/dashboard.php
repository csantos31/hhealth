<?php

require('../verifica.php');

?>
<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_home.css">
    </head>
    <body>
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="main">
                <div id="container_home">
                    <div class="coluna">
                        <img src="../imagens/doc_icon1.jpg" alt="medicos" title="medicos">
                        <a href="cargos.php">
                            <p>Cargos</p>
                        </a>
                        <a href="funcionarios.php">
                            <p>Funcionários</p>
                        </a>
                        <a href="especialidades.php">
                            <p>Especialidades</p>
                        </a>
                    </div>
                    <div class="coluna">
                        <img src="../imagens/doc_icon2.jpg" alt="medicos" title="medicos">
                        <a href="pacientes_pendentes.php">
                            <p>Ver pendentes</p>
                        </a>
                        <a href="pacientes.php">
                            <p>Ver pacientes ativos</p>
                        </a>
                    </div>
                    <div class="coluna">
                        <img src="../imagens/doc_icon3.jpg" alt="medicos" title="medicos">
                        <a href="niveis_de_funcionario.php">
                           <p>Níveis de usuário</p>
                        </a>
                    </div>
                </div>
            </div>
            <footer>
                Desenvolvido por CPI - 2018
            </footer>
        </div>
    </body>
</html>
