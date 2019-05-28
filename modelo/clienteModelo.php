<?php
   
function adicionarCliente($nome,$email,$senha){
    $comando = "INSERT INTO cliente (nome, email, senha)"
            . "VALUES ('$nome', '$email', '$senha')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro ao cadastar!' . mysqli_error($conexao));}
    return 'Cadastrado com sucesso!';
}

function pegarTodosClientes(){
    $sql = "SELECT * FROM cliente";
    $resultado = mysqli_query(conn(),$sql);
    $clientes = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $clientes[] = $linha;
    }
   return $clientes; 
}


?>
  
