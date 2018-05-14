
<?php
   
    header("Content-type: text/css; charset: UTF-8");
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    $dt_atual = date ("Y-m-d");
    $ano_atual=null;
    $mes_atual=null;
    $dia_atual=null;
    $dt_paciente=null;
    $ano_paciente=null;
    $mes_paciente=null;
    $dia_paciente=null;

    include_once("../controllers/paciente_controller.php");
    include_once("../models/paciente_class.php");
    
    $controller_paciente = new controllerPaciente();
    $list = $controller_paciente::Buscar($_SESSION['id_paciente']); 



    
    $dt_paciente=$list->dt_nasc;

    //pega o dia, o mes e o ano da dt_nasc do paciente
    list($ano_paciente,$mes_paciente,$dia_paciente)=explode("-", $dt_paciente);
    //pega o dia, o mes e o ano da data atual
    list($ano_atual,$mes_atual,$dia_atual)=explode("-", $dt_atual);

    //converte string para int
    //var_dump( $ano_paciente );
    //var_dump( $ano_atual );


    if($ano_paciente<$ano_atual){
        $idade = $ano_atual - $ano_paciente;
        //echo($idade);
        if($idade>11){
            $cor ="blue";
        }else{
            $cor="red";
        }
    }
        
    

?>

body{
    width:100%;
    height:100%;
    //-webkit-filter: grayscale(100%);
    background-color:<?php echo($cor)?>;
    //background-image:url("../imagens/background_bolinhas.jpg");
    background-size:100% 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

#content{
    background-color:blue;
}