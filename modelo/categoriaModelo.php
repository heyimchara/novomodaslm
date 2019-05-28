<?php

function pegarTodasCategorias(){
    $sql = "SELECT * FROM categoria";
    $resultado = mysqli_query(conn(),$sql);
    $categorias = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $categorias[] = $linha;
    }
   return $categorias; 
}

