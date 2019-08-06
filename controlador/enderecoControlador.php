<?php

function adicionarEndereco(){
    if (ehPost()){
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $cep = $_POST["cep"];
        
        $erros = array();
        
if (valida_nao_vazio($logradouro) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     if (valida_nao_vazio($numero) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     if (valida_nao_vazio($complemento) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     if (valida_nao_vazio($bairro) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     
     if (valida_nao_vazio($cidade) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     if (valida_nao_vazio($cep) != NULL){
         $erros[]= "Voce deve inserir um valor!."; 
     }
     
if(count($erros) > 0){
         $dados = array();
         $dados["erros"] = $erros;
         exibir("endereco/formulario", $dados);
     }else{
         $mensagem = adicionarEndereco($nome);
        redirecionar("endereco/listarEnderecos");
     }
    }else{
   exibir("endereco/formulario");  
     }    
}

function listarEndereco(){
    $dados = array();
    $dados["enderecos"] = pegarTodasEnderecos();
    exibir("enderecos/listar", $dados);
}

