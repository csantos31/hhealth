<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_home.css">
        <link rel="stylesheet" type="text/css" href="../css/style_cad_paciente.css">
    </head>
    <body>
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="main">
                <div id="container_cad_paciente">
                    <form name="frm_cad_paciente" method="post" action="router.php">
                        <p>Cadastro de paciente</p>
                        <div class="linha">
                            <div id="coluna_foto">
                            </div>
                            <div id="coluna_inputs">
                                <input type="text" class="input_big" placeholder="NOME">

                                <label>Convênio :</label>
                                <select id="slt_cargo" class="input_med" name="slt_cargo">
                                    <option>Convênio I</option>
                                    <option>Convênio II</option>
                                    <option>Convênio III</option>
                                    <option>Convênio IV</option>
                                    <option>Convênio V</option>
                                </select>

                                <input type="text" class="input_big" placeholder="SOBRENOME" type="text" >
                                <input type="text" class="input_big" placeholder="RG" type="text" >
                                <input type="text" class="input_big" placeholder="CPF" type="text" >

                            </div>
                        </div>
                        <div class="linha espaco_maior">
                            <p>Endereço</p>
                            <input name="txt_cep" class="input_med" id="txt_cep" placeholder="CEP" type="number" >
                            <input class="input_big" name="txt_cidade" id="txt_cidade" placeholder="CIDADE" type="text" >
                            <label>Estado :</label>
                            <select id="slt_estado" class="input_med2" name="slt_estado">
                                <option>São Paulo</option>
                                <option>Minas Gerais</option>
                                <option>Rio Grande do Sul</option>
                                <option>Bahia</option>
                                <option>Pernambuco</option>
                            </select>
                            <input type="text"  class="input_big" name="txt_logradouro" id="txt_logradouro" placeholder="LOGRADOURO">
                            <input type="number"  class="input_med" name="txt_numero" id="txt_numero" placeholder="NÚMERO"><br>
                            <input type="text"  class="input_big2" name="txt_complemento" id="txt_complemento" placeholder="COMPLEMENTO">
                            <br>
                            <input id="bt_salvar" type="submit" value="SALVAR" name="btn_salvar">
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