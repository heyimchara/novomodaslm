<?php

require_once 'modelo/categoriaModelo.php';
require_once 'servico/validacaoServico.php';

function adicionarCategoria(){
    if (ehPost()){
        $nome = $_POST["nome"];
        

        $mensagem = adicionarCategorias($nome);
        echo $mensagem;
        
        echo valida_nao_vazio($nome);
     
    }else{
       
    }
    exibir("categoria/formulario");
}

function listarCategorias(){
    $dados = array();
    $dados["categorias"] = pegarTodasCategorias();
    exibir("categoria/listar", $dados);
}

