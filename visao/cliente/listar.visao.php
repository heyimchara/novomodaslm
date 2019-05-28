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
                    <th>EMAIL</th>
                </tr>
            </thead>
        <?php foreach ($clientes as $cliente): ?> 
            <tr>
                <td><?=$cliente['cod_cliente']?></td>
                <td><?=$cliente['nome']?></td>
                <td><?=$cliente['email']?></td>
            </tr>
        <?php endforeach; ?>
   </table> 
        
        <a href="./cliente/adicionar" class="btn btn-primary">Novo Cliente</a>       
        
    </body>
</html>
