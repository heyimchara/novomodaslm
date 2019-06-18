<html class="no-js" lang="en" dir="ltr">
    <head>
        <title>Modas LM</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
        
    <link rel="stylesheet" type="text/css" href="./publico/css/estilo.css">
    <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    
     <?php include('cabecalho.php');?>

    <body class="container">
        
        <div class="corpinho">
            <div class="caixinha">

        <a href="./categoria/listarCategorias">Categoria</a>
        <a href="./produto/listarProdutos">Produto</a>
        <a href="./cliente/listarClientes">Cliente</a>
        
        <main class="container">
         
            <?php require $viewFilePath; ?>
            
        </main>

        </div>
        </div>

         <?php include('rodape.php');?>

    </body>
</html>