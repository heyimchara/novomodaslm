<?php
   
function adicionarCliente($nome,$email,$senha){
    $comando = "INSERT INTO cliente (nome, email, senha)"
            . "VALUES ('$nome', '$email', '$senha')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro ao cadastar!' . mysqli_error($conexao));}
    return 'Cadatrado com sucesso!';
}

?>
  
