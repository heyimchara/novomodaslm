<html class="no-js" lang="en" dir="ltr">
    <head>
        <title>Modas LM</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./publico/css/foundation.css">
    <link rel="stylesheet" href="./publico/foundation-icons/foundation-icons.css" />
    <link rel="stylesheet" href="./publico/css/app.css">
    <link rel="stylesheet" type="text/css" href="./publico/css/estilo.css">
        
        
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
