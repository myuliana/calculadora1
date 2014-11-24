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
        <h1>Calculadora</h1>
     <form action="resultado.php" method="post">
     <select name="operador">
     <option value="suma">Suma</option>
     <option value="resta">Resta</option>
     <option value="multiplicacion">Multiplicaci&oacute;n</option>
     <option value="division">Divisi&oacute;n</option>
     </select><br />
     Ingresa tu primer n&uacute;mero:<br />
     <input type="text" name="valor1"><br />
     Ingresa tu segundo valor:<br />
     <input type="text" name="valor2"><br>
     <input type="reset" value="Borrar">
     <input type="submit" value="Enviar">
     </form>
   
    </body>
</html>
