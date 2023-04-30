<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01 -Operaciones con PHP</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   
        <form method= "post" action = "">
            ingresar valor 1 : <br>  <input type="text" name= "valor1"><br>
            ingresar valor 2 : <br> <input type="text" name = "valor2 "><br>
            resultado : <br>
            <input type="submit" name = "Suma " value = "Suma">
           
        </form>
 
   <?php
   //Declaracionde variables 
   $numero1= $_POST['valor1'];
   $numero2= $_POST['valor2'];
   $suma = $numero1+ $numero2;
   echo "es el resutado de la suma es ".$suma;
   ?>
</body>
</html>