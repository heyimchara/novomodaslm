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
        <h2>Cadastrar Produto</h2>
        <form action="" method="POST">
            Nome: <input type="text" name="nome"><br><br>
            Descricao: <input type="text" name="descricao"><br><br>
            Preço: <input type="text" name="preco"><br><br>
            
            <?php
            if(ehPost()){
                foreach($erros as $erro){
                    echo "$erro<br>";
                }
            }
        ?>
            
            <br>
            
            <button>Enviar</button>
            
        </form>
    </body>
</html>