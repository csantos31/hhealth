<?php

//$action = "modo=inserir";
// cargos
    //            especialidade
    //            funcionario
    //            agendamento
    //            paciente_pendente
    //            paciente_ativo
    //            remedio
    //            receita
    //            internacao
    //            quarto
    //            tipo_quarto
    //            nivel_usuario
    //            pagamento

$id="0";
$nivel=null;
$descricao=null;
$cargo=" ";
$especialidade=" ";
$funcionario=" ";
$agendamento=" ";
$paciente_pendente=" ";
$paciente=" ";
$remedio=" ";
$receita=" ";
$internacao=" ";
$quarto=" ";
$tipo_quarto=" ";
$nivel_funcionario=" ";
$pagamento=" ";
$senha= " ";

@session_start();

if(isset($_GET['modo'])){
    
    $modo = $_GET['modo'];
    
    if($modo=='buscarId'){
        $id=$_GET['codigo'];
        
        require_once("../controllers/nivel_funcionario_controller.php");/*da um require na nivel_controller*/
        require_once("../models/nivel_funcionario_class.php");/*da um require na nivel_class*/
        
        // Instancio a controller
        $controller_nivel_funcionario  = new controllerNivelFuncionario();

        //Chama o metodo para Listar todos os registros
        $list = $controller_nivel_funcionario::Buscar($id);
        
        $nivel = $list->nivel;
        $descricao = $list->descricao;
        
        

        if($list->cargo==1){
            $cargo = "checked";
        }
        if($list->funcionario==1){
            $funcionario = "checked";
        }
        if($list->especialidade==1){
            $especialidade = "checked";
        }
        if($list->agendamento==1){
            $agendamento = "checked";
        }
        if($list->paciente_pendente==1){
            $paciente_pendente = "checked";
        }
        if($list->paciente_ativo==1){
            $paciente = "checked";
        }
        if($list->remedio==1){
            $remedio = "checked";
        }
        if($list->receita==1){
            $receita = "checked";
        }
        if($list->internacao==1){
            $internacao = "checked";
        }
        if($list->quarto==1){
            $quarto = "checked";
        }
        if($list->tipo_quarto==1){
            $tipo_quarto = "checked";
        }
        if($list->nivel_usuario==1){
            $nivel_funcionario = "checked";
        }
        if($list->pagamento==1){
            $pagamento = "checked";
        }
        if($list->senha==1){
            $senha = "checked";
        }
    
    }
}
?>

<html>
    <head>
        <title>Modal</title>
        <link rel="stylesheet" type="text/css" href="../css/style_modal_especialidade.css">
        <link rel="stylesheet" type="text/css" href="../css/style_cad_especialidades.css">
        <style>
            #imagem_atual{
                width: 150px;
                height: 150px;
                margin-left: auto;
                margin-right: auto;
            }
            #imagem_atual img{
                width: 150px;
                height: 150px;
            }
            
        </style>
        <script>
            $(document).ready(function(){/*fechar a modal*/
               $(".fechar").click(function(){
                  $(".container_modal").fadeOut(); 
               }); 
            });
        </script>
    </head>
    
    <body>
        
         <script>
             $("#form").submit(function(event){
                  //Recupera o id gravado no Form pelo atribute-id
                  var id = $(this).data("id");
                  var modo = "";
                  if(id == '0')
                      modo='inserir';
                  else
                      modo='editar';

                //anula a ação do submit tradicional "botao" ou F5
                 event.preventDefault();

                 $.ajax({
                    type: "POST",
                    url: "../router.php?controller=nivel_funcionario&modo="+modo+"&id="+id,
                    //alert (url);
                    data: new FormData($("#form")[0]),
                    cache:false,
                    contentType:false,
                    processData:false,
                    async:true,
                    success: function(dados){
                         $('.modal').html(dados);
                    }
                });

             });
         </script>
        <div class="main_modal"><!--main que segura tudo-->
            <div class="close_modal">
                <a href="#" class="fechar"><img src="../imagens/close.png"/></a>
            </div>
            
            <div class="content_modal">
                <form action="" method="post" id="form" data-id="<?php echo($id)?>" enctype="multipart/form-data">
                    <div class="content_logo"><!--content do logo e do titulo-->
                        <div class="logo">
                            <img src="../../imagens/logo_only_heart.png">
                        </div>
                        <div class="titulo">
                            <a>Nível de funcionário</a>
                        </div>
                    </div>
                    
                    <div class="content_campos"><!--content dos campos de cadastro-->
                        <div class="campo" style="margin-top:50px;"><!--campos--> <!--nome-->
                            <div class="input_campo">
                                <input value="<?= $nivel ?>" required type="text" class="input_big" placeholder="NÍVEL DE FUNCIONÁRIO" name="txt_nivel" id="txt_nivel">
                            </div>
                        </div>
                        <div class="campo"><!--campos--> <!--nome-->
                            
                            <div class="input_campo">
                               <textarea required class="input_bigger" placeholder="DESCRIÇÃO DO NÍVEL" name="txt_descricao" id="txt_descricao" style="resize:none;"><?= $descricao ?></textarea>
                            </div>
                        </div>
                        <table>
                            <tr>
                                <td><input type="checkbox" name="ckCargo" value="1" <?php echo($cargo)?>> Cargo</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckEspecialidade" value="1" <?php echo($especialidade)?>> Especialidade</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckFuncionario" value="1" <?php echo($funcionario)?>> Funcionario</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckAgendamento" value="1" <?php echo($agendamento)?>> Agendamento</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckPacientePendente" value="1" <?php echo($paciente_pendente)?>> Pacientes Pendentes</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckPacienteAtivo" value="1" <?php echo($paciente)?>> Pacientes Ativos</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckRemedio" value="1" <?php echo($remedio)?>> Remédio</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckReceita" value="1" <?php echo($receita)?>> Receita</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckInternacao" value="1" <?php echo($internacao)?>> Internacao</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckQuarto" value="1" <?php echo($quarto)?>> Quarto</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckTipoQuarto" value="1" <?php echo($tipo_quarto)?>> Tipo Quarto</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckNivelUsuario" value="1" <?php echo($nivel_funcionario)?>> Nível Usuário</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckPagamento" value="1" <?php echo($pagamento)?>> Pagamento</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="ckSenha" value="1" <?php echo($senha)?>> Senha</td>
                            </tr>
                        </table>
                        
                       
                        <div class="campo_botao">
                            <div class="botao">
                                <input id="bnt_cadastrar" type="submit" name="btn_cadastrar" value="Cadastrar">
                            </div>    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>