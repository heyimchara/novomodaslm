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
              <h3>Data de Nascimento</h3>
     
     <select>
         <option>Dia</option>
         <?php for($i=1;$i<=31;$i++){?>
         <option><?php echo $i; ?></option>
           <?php } ?>
     </select>
     
     <?php
     
      $mes = array ();
      $mes [0] = 'jan';
      $mes [1] = 'fev';
      $mes [2] = 'mar';
      $mes [3] = 'abr';
      $mes [4] = 'mai';
      $mes [5] = 'jun';
      $mes [6] = 'jul';
      $mes [7] = 'ago';
      $mes [8] = 'set';
      $mes [9] = 'out';                       
      $mes [10] = 'nov';
      $mes [11] = 'dez';
       
     ?>
     
     <select>
         <option>Mês</option>
         <?php for($i=1;$i<count($mes);$i++){?>
         <option><?php echo $mes[$i]; ?></option>
           <?php } ?>
     </select>
     
     <select>
         <option>Ano</option>
         <?php for($i=1905;$i<=2019;$i++){?>
         <option><?php echo $i; ?></option>
           <?php } ?>
     </select>
     
     <br><br>
     
  Sexo:   <label>Feminino</label>
<input type="radio" name="sexo" value="F">

<label>Masculino</label>
<input type="radio" name="sexo" value="M">
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
