<?php

require_once 'servico/validacaoServico.php';
require_once 'modelo/clienteModelo.php';
require_once 'modelo/cadastroclienteModelo.php';

function cadastro(){
    if (ehPost()){
       $nome = $_POST["nome"];
        
       $cpf = $_POST["cpf"];
       $tel = $_POST["tel"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];
       
       if (valida_nao_vazio($nome) != NULL){
          $erros[]= "Você deve inserir um valor no campo Nome";  
      }
      if (valida_nao_vazio_tipoEs($tel) != NULL){
          $erros[]= "Informe um valor numérico valido no campo Telefone.";    
      }
       
     if (vali_email($email) != NULL){
         $erros[]= "Informe um email válido."; 
     }
     
     if(count($erros) > 0){
         $dados = array();
         $dados["erros"] = $erros;
         exibir("cliente/cadastro", $dados);
     }else{
         $mensagem = adicionarCadastro($nome,$cpf,$senha,$email,$tel);
        redirecionar("cliente/cadastro");
     }
      
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
        
         if (valida_nao_vazio($nome) != NULL){
          $erros[]= "Você deve inserir um valor no campo Nome";  
      }
      
      if (valida_nao_vazio_tipoEs($tel) != NULL){
          $erros[]= "Informe um valor numérico valido no campo Telefone.";    
      }
        if (vali_email($email) != NULL){
         $erros[]= "Informe um email válido."; 
     }
      
       
   
}

function adicionar(){
    if (ehPost()){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        
        
         if (valida_nao_vazio($nome) != NULL){
          $erros[]= "Você deve inserir um valor no campo Nome";  
      }
     
     if (vali_email($email) != NULL){
         $erros[]= "Informe um email válido."; 
     }
     
     if (valida_nao_vazio($senha) != NULL){
          $erros[]= "Você deve inserir um valor.";    
      }
     
        $mensagem = adicionarCliente($nome,$email,$senha);
        echo $mensagem;
        
        
    }else{
       
    }
    exibir("cliente/formulario");
}

function listarClientes(){
    $dados = array();
    $dados["clientes"] = pegarTodosClientes();
    exibir("cliente/listar", $dados);
}

