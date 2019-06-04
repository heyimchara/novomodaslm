<?php
   
function adicionarCadastro($nome,$cpf,$senha,$email,$tel){
    $comando = "INSERT INTO cliente (nome, cpf, senha,email,tel)"
            . "VALUES ('$nome','$cpf','$senha','$email','$tel')";
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro no cadastro!' . mysqli_error($conexao));}
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

function pegarUsuarioPorId($cod_cliente){
    $sql = "SELECT * FROM cliente WHERE cod_cliente = $cod_cliente";
    
    $resultado = mysqli_query(conn(), $sql);
    
    $cliente = mysqli_fetch_assoc($resultado);
    
    return $cliente;
}


?>
  
