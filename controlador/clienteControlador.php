<?php

require_once 'servico/validacaoServico.php';

function cadastro(){
    if (ehPost()){
       $nome = $_POST["nome"];
       $cpf = $_POST["cpf"];
       $tel = $_POST["telefone"];
       $sexo = $_POST["sexo"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];
       $senhaRep = $_POST["senhaRepetir"];
      
       echo valida_nao_vazio($nome);
       echo valida_nao_vazio_tipoEs($cpf);
       echo valida_nao_vazio($email);
       echo valida_nao_vazio_tipoEs($tel);
     
      
   }else{
       exibir("cliente/cadastro");
   } 
}

function contato(){
    if (ehPost()){
        $nome = $_POST["nome"];
        $telefone = $_POST["tel"];
        $email = $_POST["email"];
        $mensagem = $_POST["mens"];
        
        echo valida_nao_vazio($nome);
       echo valida_nao_vazio($email);
       echo valida_nao_vazio_tipoEs($telefone);
      
       
    }else{
        exibir("cliente/contato");
    }
}

