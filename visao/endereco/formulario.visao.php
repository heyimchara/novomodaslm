<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Cadastrar Endereço</h2>
        
        Logradouro: <input type="text" name="logradouro"><br><br>
        Número: <input type="text" name="numero"><br><br>
        Complemento: <input type="text" name="complemento"><br><br>
        Bairro: <input type="text" name="bairro"><br><br>
        Cidade: <input type="text" name="cidade"><br><br>
        Cep: <input type="text" name="cep"><br><br>
        
        <?php
            if(ehPost()){
                foreach($erros as $erro){
                    echo "$erro<br>";
                }
            }
        ?>
        
        <br>
        
        <button>Cadastrar</button>
        
        </form>
        
        
        
    </body>
</html>
