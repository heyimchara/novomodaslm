<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            <h2>Cadastrar Categoria</h2>
        
        Categoria: <input type="text" name="nome"><br><br>
        
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
