<html>
    <head>
        <title>Modas LM</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

       
        
        <link rel="stylesheet" href="./publico/css/app2.css">
    </head>
    <body class="container">

        <a href="./categoria/listarCategorias">Categoria</a>
        <a href="./produto/listarProdutos">Produto</a>
        <a href="./cliente/listarClientes">Cliente</a>
        
        <main class="container">
          
            <?php require $viewFilePath; ?>
        </main>

    </body>
</html>
