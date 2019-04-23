<?php

function cadastro(){
    if (ehPost()){
       $nome = $_POST["nome"];
       $cpf = $_POST["cpf"];
       $tel = $_POST["telefone"];
       $sexo = $_POST["sexo"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];
       $senhaRep = $_POST["senhaRepetir"];
       
       print_r($_POST);
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
        
        print_r($_POST);
    }else{
        exibir("cliente/contato");
    }
}

