<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Listar Clientes</h2>
        
   <table class="table">
            <thead>
                <tr>
                    <th>COD_CLIENTE</th>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>TEL</th>
                    <th>EMAIL</th>
                    <th>SENHA</th>
                </tr>
            </thead>
        <?php foreach ($clientes as $cliente): ?> 
            <tr>
                <td><?=$cliente['cod_cliente']?></td>
                <td><?=$cliente['nome']?></td>
                <td><?=$cliente['cpf']?></td>
                <td><?=$cliente['tel']?></td>
                <td><?=$cliente['email']?></td>
                <td><?=$cliente['senha']?></td>
                
            </tr>
        <?php endforeach; ?>
   </table> 
        
        <a href="./cliente/cadastro" class="btn btn-primary">Novo Cliente</a>       
        
    </body>
</html>
