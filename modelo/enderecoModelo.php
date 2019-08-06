<?php


function adicionarEndereco($nome){
    $comando = "INSERT INTO categoria (logradouro )"
            . "VALUES ('$nome')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro no cadastro!' . mysqli_error($conexao));}
    return 'Cadastrado com sucesso!';
}

function pegarTodasEnderecos(){
    $sql = "SELECT * FROM endereco";
    $resultado = mysqli_query(conn(),$sql);
    $enderecos[] = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $enderecos[] = $linha;
    }
   return $enderecos; 
}



