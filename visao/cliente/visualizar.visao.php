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
        <h2>Ver detalhes do cliente</h2>
        <p> Id: <?=$cliente['cod_cliente']?></p>
        <p> Nome: <?=$cliente['nome']?></p>   
        <p> E-mail: <?=$cliente['email']?></p> 
        <p> CPF: <?=$cliente['cpf']?></p> 
        <p> Sexo: <?=$cliente['sexo']?></p>
        <p> Data de Nascimento: <?=$cliente['dataNasc']?></p>
        <p> Tipo de usuario: <?=$cliente['tipousuario']?></p>
        <p> Senha: <?=$cliente['senha']?></p>        
    </body>
</html>
