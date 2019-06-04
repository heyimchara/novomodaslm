<?php
   
function adicionarProduto($nome,$descricao,$quantidade,$preco){
    $comando = "INSERT INTO cadastro_produto (nome, descricao, quantidade,preco)"
            . "VALUES ('$nome', '$descricao', '$quantidade', '$preco')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro no cadastro!' . mysqli_error($conexao));}
    return 'Cadastrado com sucesso!';
}
function pegarTodosProdutos(){
    $sql = "SELECT * FROM cadastro_produto";
    $resultado = mysqli_query(conn(),$sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $produtos[] = $linha;
    }
   return $produtos; 
}

function pegarProdutoPorId($cod_cadastroproduto){
    $sql = "SELECT * FROM cadastro_produto WHERE cod_cadastroproduto = $cod_cadastroproduto";
    
    $resultado = mysqli_query(conn(), $sql);
    
    $cadastro_produto = mysqli_fetch_assoc($resultado);
    
    return $cadastro_produto;
}

?>
  
