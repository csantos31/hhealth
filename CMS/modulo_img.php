<?php
function salvar_imagem ($file,$caminho){
    $erro="Erro";
    $diretorio_imagem = $caminho."/";
    $arquivo = basename($file['name']);
    
    //checa extensão
    if(strstr($aquivo,'.jpg') || strstr($aquivo,'.png') || strstr($aquivo,'.jpeg') ){
        $diretorio_completo = $diretorio_imagem.$arquivo;//guarda caminho na pasta
        
        if(move_uploaded_file($file['tmp_name'],$diretorio_completo)){
            return $diretorio_completo;
        }else{
            return $erro;
        }
    }else{
        return $erro;
    }
    
    
}


?>