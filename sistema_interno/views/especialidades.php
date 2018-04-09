<html>
    <head>
        <title>Sistema Interno HHealth</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style_home.css">
        <link rel="stylesheet" type="text/css" href="../css/style_especialidades.css">
        <link rel="stylesheet" type="text/css" href="../css/style_modal.css">
        
        <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
        
        
        <script>/*Modal*/
            $(document).ready(function(){
                
                $(".novo").click(function(){    
                    $(".container_modal").toggle(2000); 
                });
                
                $(".editar").click(function(){
                    $(".container_modal").fadeIn(2000);

                });
                
                
            });
            
            //Cadastrar
            function Cadastrar(){
                
                $.ajax({
                    type:"POST",
                    url:"../modals/modal_cad_especialidade.php",
                    success: function(dados){
                        $(".modal").html(dados);
                    }
                });
            }
            
            //Editar
            function Editar(IdIten){
                $.ajax({
                    type:"GET", 
                    url:"modals/modal_nivel.php",
                    data: {modo:'buscarId',id:IdIten},
                    success: function(dados){
                        $('.modal').html(dados);
                    }
                    
                });
            }
            
            //Excluir
            function Excluir(idIten){
                //anula a ação do submit tradicional "botao" ou F5
                event.preventDefault();
                $.ajax({
                    type:"GET",
                    data: {id:idIten},
                    url: "../router.php?controller=nivel&modo=excluir&id="+idIten,
                    success: function(dados){
                        $('.tabela_nivel_usuario').html(dados);
                    }
                });
            }
            
            
            
            
            
            
        </script>
        
    </head>
    <body>
        <div class="container_modal"><!--container da modal-->
            <div class="modal"><!--modal-->
            </div>
        </div>
        <div id="principal">
            <header>
                SISTEMA INTERNO HHEALTH
            </header>
            <div class="main">
                <div id="container_cad_paciente">
                   <div class="img_nivel">
                        <a class="novo" href="#" onclick="Cadastrar()">

                            <img src="../imagens/add.png">
                        </a>
                    </div>
                    <p>Especialidades</p>
                    <div class="col_1">
                        <img src="../imagens/doc_icon2.jpg" alt="pacientes pendentes" title="pacientes pendentes">
                    </div>
                    <div class="col_2">
                        <div class="titulo_tabela">
                            <div class="lb_titulo">NOME</div>
                            <div class="lb_titulo">DESCRIÇÃO</div>
                            <div class="lb_titulo">OPÇÕES</div>
                        </div>
                        <div class="linha_tabela">
                            <div class="item_tabela">XXXXXXXXXXXXXXXXXXXXX</div>
                            <div class="item_tabela">dfjhsdfhsdjkhfsdhfhfds shbfhsbdhgfjhsdgf jhsdfbsdhfhsgfs hjsfdshgfjsf vsjhfgjhfgsg sfsdfhsgfs hsdgjhfsdfsjhgf fhsgfsgyfs sjfgsjhgfuysfys shfsgfsfvhff hsfvsfsgfajhdg</div>
                            <div class="item_tabela"><a href="#">Ativar</a>/<a href="#">Desativar</a></div>
                        </div>
                        <div class="linha_tabela">
                            <div class="item_tabela">XXXXXXXXXXXXXXXXXXXXX</div>
                            <div class="item_tabela">dfjhsdfhsdjkhfsdhfhfds shbfhsbdhgfjhsdgf jhsdfbsdhfhsgfs hjsfdshgfjsf vsjhfgjhfgsg sfsdfhsgfs hsdgjhfsdfsjhgf fhsgfsgyfs sjfgsjhgfuysfys shfsgfsfvhff hsfvsfsgfajhdg</div>
                            <div class="item_tabela"><a href="#">Ativar</a>/<a href="#">Desativar</a></div>
                        </div>
                        <div class="linha_tabela">
                            <div class="item_tabela">XXXXXXXXXXXXXXXXXXXXX</div>
                            <div class="item_tabela">dfjhsdfhsdjkhfsdhfhfds shbfhsbdhgfjhsdgf jhsdfbsdhfhsgfs hjsfdshgfjsf vsjhfgjhfgsg sfsdfhsgfs hsdgjhfsdfsjhgf fhsgfsgyfs sjfgsjhgfuysfys shfsgfsfvhff hsfvsfsgfajhdg</div>
                            <div class="item_tabela"><a href="#">Ativar</a>/<a href="#">Desativar</a></div>
                        </div>
                        <div class="linha_tabela">
                            <div class="item_tabela">XXXXXXXXXXXXXXXXXXXXX</div>
                            <div class="item_tabela">dfjhsdfhsdjkhfsdhfhfds shbfhsbdhgfjhsdgf jhsdfbsdhfhsgfs hjsfdshgfjsf vsjhfgjhfgsg sfsdfhsgfs hsdgjhfsdfsjhgf fhsgfsgyfs sjfgsjhgfuysfys shfsgfsfvhff hsfvsfsgfajhdg</div>
                            <div class="item_tabela"><a href="#">Ativar</a>/<a href="#">Desativar</a></div>
                        </div>
                        <div class="linha_tabela">
                            <div class="item_tabela">XXXXXXXXXXXXXXXXXXXXX</div>
                            <div class="item_tabela">dfjhsdfhsdjkhfsdhfhfds shbfhsbdhgfjhsdgf jhsdfbsdhfhsgfs hjsfdshgfjsf vsjhfgjhfgsg sfsdfhsgfs hsdgjhfsdfsjhgf fhsgfsgyfs sjfgsjhgfuysfys shfsgfsfvhff hsfvsfsgfajhdg</div>
                            <div class="item_tabela"><a href="#">Ativar</a>/<a href="#">Desativar</a></div>
                        </div>
                        <div class="linha_tabela">
                            <div class="item_tabela">XXXXXXXXXXXXXXXXXXXXX</div>
                            <div class="item_tabela">dfjhsdfhsdjkhfsdhfhfds shbfhsbdhgfjhsdgf jhsdfbsdhfhsgfs hjsfdshgfjsf vsjhfgjhfgsg sfsdfhsgfs hsdgjhfsdfsjhgf fhsgfsgyfs sjfgsjhgfuysfys shfsgfsfvhff hsfvsfsgfajhdg</div>
                            <div class="item_tabela"><a href="#">Ativar</a>/<a href="#">Desativar</a></div>
                        </div>
                        <div class="linha_tabela">
                            <div class="item_tabela">XXXXXXXXXXXXXXXXXXXXX</div>
                            <div class="item_tabela">dfjhsdfhsdjkhfsdhfhfds shbfhsbdhgfjhsdgf jhsdfbsdhfhsgfs hjsfdshgfjsf vsjhfgjhfgsg sfsdfhsgfs hsdgjhfsdfsjhgf fhsgfsgyfs sjfgsjhgfuysfys shfsgfsfvhff hsfvsfsgfajhdg</div>
                            <div class="item_tabela"><a href="#">Ativar</a>/<a href="#">Desativar</a></div>
                        </div>
                        <div class="linha_tabela">
                            <div class="item_tabela">XXXXXXXXXXXXXXXXXXXXX</div>
                            <div class="item_tabela">dfjhsdfhsdjkhfsdhfhfds shbfhsbdhgfjhsdgf jhsdfbsdhfhsgfs hjsfdshgfjsf vsjhfgjhfgsg sfsdfhsgfs hsdgjhfsdfsjhgf fhsgfsgyfs sjfgsjhgfuysfys shfsgfsfvhff hsfvsfsgfajhdg</div>
                            <div class="item_tabela"><a href="#">Ativar</a>/<a href="#">Desativar</a></div>
                        </div>
                        <div class="linha_tabela">
                            <div class="item_tabela">XXXXXXXXXXXXXXXXXXXXX</div>
                            <div class="item_tabela">dfjhsdfhsdjkhfsdhfhfds shbfhsbdhgfjhsdgf jhsdfbsdhfhsgfs hjsfdshgfjsf vsjhfgjhfgsg sfsdfhsgfs hsdgjhfsdfsjhgf fhsgfsgyfs sjfgsjhgfuysfys shfsgfsfvhff hsfvsfsgfajhdg</div>
                            <div class="item_tabela"><a href="#">Ativar</a>/<a href="#">Desativar</a></div>
                        </div>
                        <div class="linha_tabela">
                            <div class="item_tabela">XXXXXXXXXXXXXXXXXXXXX</div>
                            <div class="item_tabela">dfjhsdfhsdjkhfsdhfhfds shbfhsbdhgfjhsdgf jhsdfbsdhfhsgfs hjsfdshgfjsf vsjhfgjhfgsg sfsdfhsgfs hsdgjhfsdfsjhgf fhsgfsgyfs sjfgsjhgfuysfys shfsgfsfvhff hsfvsfsgfajhdg</div>
                            <div class="item_tabela"><a href="#">Ativar</a>/<a href="#">Desativar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                Desenvolvido por CPI - 2018
            </footer>
        </div>
    </body>
</html>