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
        
        <h2>Cadastro</h2>
        
        <form action="" method="POST">
            
            Nome: <input type="text" name="nome"><br><br>
            Email: <input type="text" name="email"><br><br>
            CPF: <input type="text" name="cpf"><br><br>
            Data de Nascimento: <input type="date" name="dataNasc"><br><br>
            
  Sexo:   <select name="sexo">
  <option value=""></option>
  <option value="F">Feminino</option>
  <option value="M">Masculino</option>
  <option value="Outros">Outros</option>
</select>
<br><br>


            Senha: <input type="password" name="senha"><br><br>
            Tipo de usuario: <input type ="text" name="tipousuario"><br><br>
           
            
            <button>Enviar</button>
            <br><br>            
            <?php
            if(ehPost()){
                foreach($erros as $erro){
                    echo "$erro<br>";
                }
            }
        ?>
            
        </form>
    </body>
</html>
