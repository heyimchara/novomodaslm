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
        <h2>Listar Produtos</h2>
        
   <table class="table">
            <thead>
                <tr>
                    
                    <th>NOME</th>
                   
                    <th>Ver Detalhes</th>
                </tr>
            </thead>
        <?php foreach ($produtos as $produto): ?> 
            <tr>
               
                <td><?=$produto['nome']?></td>
                
                <td><a href="./produto/ver/<?=$produto['cod_produto']?>">Ver</a></td>
            </tr>
        <?php endforeach; ?>
   </table> 
        
        <a href="./produto/adicionar" class="btn btn-primary">Novo Produto</a>       
        
    </body>
</html>
