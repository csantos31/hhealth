<?php 

require('../verifica.php');

?>
<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_home.css">
        <link rel="stylesheet" type="text/css" href="../css/style_cad_usuario_permissao.css">
    </head>
    <body>
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="main">
                <div id="container_cad_paciente">
                    <form name="frm_cad_paciente" method="post" action="router.php">
                        <p>Cadastro de nível</p>
                        <div class="linha">
                            <div id="coluna_foto">
                            </div>
                            <div id="coluna_inputs">
                                <input type="text" class="input_big" placeholder="ESPECIALIDADE">
                                <textarea class="input_bigger" placeholder="DESCRIÇÃO DA ESPECIALIDADE"></textarea>

                                <p>Permissão:</p><br>

                                <label class="lb_opcao">Gerenciar conteúdo do site</label>
                                <input id="test_check" name="test_check" type="checkbox"><label for="test_check"></label>
                                <br>

                                <label class="lb_opcao">Adicionar pacientes</label>
                                <input id="test_check3" name="test_check3" type="checkbox"><label for="test_check3"></label>
                                <br>


                                <label class="lb_opcao">Adicionar funcionários</label>
                                <input id="test_check2" name="test_check2" type="checkbox"><label for="test_check2"></label>
                                <br>

                                <label class="lb_opcao">Usuário root</label>
                                <input id="test_check4" name="test_check4" type="checkbox"><label for="test_check4"></label>
                                <br>

                                <br><br>
                                <input id="bt_salvar" type="submit" value="SALVAR" name="btn_salvar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <footer>
                Desenvolvido por CPI - 2018
            </footer>
        </div>
    </body>
</html>
