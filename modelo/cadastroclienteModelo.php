<?php
function adicionarCadastro($nome,$cpf,$senha,$email,$tel){
    $comando = "INSERT INTO cadastro_cliente (nome, cpf, senha,email,tel)"
            . "VALUES ('$nome','$cpf','$senha','$email','$tel')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro no cadastro!' . mysqli_error($conexao));}
    return 'Cadastrado com sucesso!';
}


