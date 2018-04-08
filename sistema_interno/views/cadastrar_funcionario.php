<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_home.css">
        <link rel="stylesheet" type="text/css" href="../css/style_cad_funcionario.css">
    </head>
    <body>
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="main">
                <div id="container_cad_funcionario">
                    <p>Cadastro de funcionário</p>
                    <div class="linha">
                        <div id="coluna_foto">
                        </div>
                        <div id="coluna_inputs">
                            <form name="frm_cad_funcionario" method="post" action="router.php">
                                <input type="text" class="input_big" placeholder="NOME">
                                
                                <label>Cargo :</label>
                                <select id="slt_cargo" class="input_med" name="slt_cargo">
                                    <option>Cardiologista</option>
                                    <option>Pneumologista</option>
                                    <option>Uncologista</option>
                                    <option>Pediatra</option>
                                    <option>Medico geral</option>
                                </select>
                                
                                <input type="text" class="input_big" placeholder="SOBRENOME">
                                <input type="text" class="input_big" placeholder="RG">
                                <input type="text" class="input_big" placeholder="CPF">
                            </form>
                        </div>
                    </div>
                    <div class="linha">
                    
                    </div>
                </div>
            </div>
            <footer>
                Desenvolvido por CPI - 2018
            </footer>
        </div>
    </body>
</html>