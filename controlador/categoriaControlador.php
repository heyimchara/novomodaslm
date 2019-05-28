<?php

require_once 'modelo/categoriaModelo.php';

function adicionarCategoria(){
    if (ehPost()){
        $nome = $_POST["nome"];
     
    }else{
       
    }
    exibir("categoria/formulario");
}

function listarCategorias(){
    $dados = array();
    $dados["categorias"] = pegarTodasCategorias();
    exibir("categoria/listar", $dados);
}

