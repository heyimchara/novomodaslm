<?php

require_once 'servico/validacaoServico.php';

function visualizar (){
    $visualizar = array();
    $visualizar["nomeProd"] = "Moletom";
    $visualizar["descricao"] = "O material tem uma modelagem reta e apenas na cor preta";
    $visualizar["preco"] = " 109,99";
    
    exibir("produto/visualizar", $visualizar);
}

function adicionar(){
   if (ehPost()){
       $nome = $_POST["nome"];
       $descricao = $_POST["descricao"];
       $quantidade = $_POST["quantidade"];
       $preco = $_POST["preco"];
       
       echo valida_nao_vazio($nome);
       echo valida_nao_vazio($descricao);
       echo valida_nao_vazio_tipoEs($quantidade);
       echo valida_nao_vazio_tipoEs($preco);
       
    
   }else{
       exibir("produto/formulario");
   } 
}

?>

