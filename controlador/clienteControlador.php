<?php

require_once 'servico/validacaoServico.php';
require_once 'modelo/clienteModelo.php';
require_once 'modelo/cadastroclienteModelo.php';

function cadastro(){
    if (ehPost()){
       $nome = $_POST["nome"];
       $cpf = $_POST["cpf"];
       $tel = $_POST["tel"];
       $sexo = $_POST["sexo"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];
       
      
       echo valida_nao_vazio($nome);
       echo valida_nao_vazio_tipoEs($cpf);
       
       echo valida_nao_vazio_tipoEs($tel);
        echo vali_email($email);
       
       $mensagem = adicionarCadastro($nome,$cpf,$senha,$email,$tel);
        echo $mensagem;
        
        
     
      
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
      
       echo valida_nao_vazio_tipoEs($telefone);
        echo vali_email($email);
      
       
    }else{
        exibir("cliente/contato");
    }
}

function adicionar(){
    if (ehPost()){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
     
        $mensagem = adicionarCliente($nome,$email,$senha);
        echo $mensagem;
        
        echo valida_nao_vazio($nome);
       
        echo vali_email($email);
        
    }else{
       
    }
    exibir("cliente/formulario");
}

function listarClientes(){
    $dados = array();
    $dados["clientes"] = pegarTodosClientes();
    exibir("cliente/listar", $dados);
}

