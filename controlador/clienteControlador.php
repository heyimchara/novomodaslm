<?php

require_once 'servico/validacaoServico.php';
require_once 'modelo/clienteModelo.php';


function cadastro(){
    if (ehPost()){
       $nome = $_POST["nome"];
        
       $cpf = $_POST["cpf"];
       $tel = $_POST["tel"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];
       
       $erros = array();
       
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
}



function listarClientes(){
    $dados = array();
    $dados["clientes"] = pegarTodosClientes();
    exibir("cliente/listar", $dados);
}

function ver($cod_cliente){
    $dados["cliente"] = pegarUsuarioPorId($cod_cliente);
    exibir("cliente/visualizar", $dados);
}

