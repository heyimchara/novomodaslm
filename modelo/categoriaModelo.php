<?php

function adicionarCategorias($nome){
    $comando = "INSERT INTO categoria (nome)"
            . "VALUES ('$nome')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro no cadastro!' . mysqli_error($conexao));}
    return 'Cadastrado com sucesso!';
}

function pegarTodasCategorias(){
    $sql = "SELECT * FROM categoria";
    $resultado = mysqli_query(conn(),$sql);
    $categorias = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $categorias[] = $linha;
    }
   return $categorias; 
}

function pegarCategoriaPorId($cod_categoria){
    $sql = "SELECT * FROM categoria WHERE cod_categoria = $cod_categoria";
    
    $resultado = mysqli_query(conn(), $sql);
    
    $categoria = mysqli_fetch_assoc($resultado);
    
    return $categoria;
}

