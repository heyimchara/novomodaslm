<?php

require_once 'servico/validacaoServico.php';
require_once 'modelo/cadastroprodutoModelo.php';

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
       $preco = $_POST["preco"];
       $descricao = $_POST["descricao"];
       
       $mensagem = adicionarProduto($nome, $descricao, $preco);
        echo $mensagem; 
       
       if (valida_nao_vazio($nome) != NULL){
          $erros[]= "Você deve inserir um valor.";    
      }
       if (valida_nao_vazio($descricao) != NULL){
          $erros[]= "Você deve inserir um valor.";    
      }
      if (valida_nao_vazio_tipoEs($preco) != NULL){
          $erros[]= "Informe um valor valido.";    
      }
    
   }else{
       
   } 
  exibir("produto/formulario");
}

function listarProdutos(){
    $dados = array();
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

function deletar($cod){
    $msg = deletarProduto($cod);
    redirecionar("produto/listarProdutos");
}


?>

