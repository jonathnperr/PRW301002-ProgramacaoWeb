<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - Exercício 4: Conversor de temperatura </h1>

  <?php

  $fgrau = $_POST["fgrau"];
  $celcius = ($fgrau-32) * (5/9);

   echo "<p> Temperatura em graus Celcius: $celcius </p>";
   ?>
</body>
</html>