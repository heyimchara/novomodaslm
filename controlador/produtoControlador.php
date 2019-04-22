<?php

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
       
       print_r($_POST);
   }else{
       exibir("produto/formulario");
   } 
}

?>

