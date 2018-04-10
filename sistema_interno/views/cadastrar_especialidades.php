<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_home.css">
        <link rel="stylesheet" type="text/css" href="../css/style_cad_especialidades.css">
    </head>
    <body>
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="main">
                <div id="container_cad_especialidade">
                    <form name="frm_cad_especialidade" method="post" action="../router.php">
                        <p>Cadastro de paciente</p>
                        <div class="linha">
                            <div id="coluna_foto">
                            </div>
                            <div id="coluna_inputs">
                                <input required type="text" class="input_big" placeholder="ESPECIALIDADE" name="txt_especialidade" id="txt_especialidade">
                                <textarea required class="input_bigger" placeholder="DESCRIÇÃO DA ESPECIALIDADE" name="txt_texto" id="txt_texto" style="resize:none;"></textarea>
                                
                                <b>Selecione uma imagem para esta especialidade :</b>
                                
                                <input required type="file" name="file_especialidade" id="file_especialidade">
                                
                                <input required id="bt_salvar" type="submit" value="SALVAR" name="btn_salvar">
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