<?php
   
function adicionarProduto($nome,$descricao,$quantidade,$preco){
    $comando = "INSERT INTO cadastroproduto (nome, descricao, quantidade,preco)"
            . "VALUES ('$nome', '$descricao', '$quantidade', '$preco')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro no cadastro!' . mysqli_error($conexao));}
    return 'Cadastrado com sucesso!';
}

?>
  
