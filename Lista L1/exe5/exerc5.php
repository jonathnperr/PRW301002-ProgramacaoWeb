<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL1 - Exercício 5: Calculadora de câmbio </h1>

  <?php

  define("taxacambio", 5.23);

  $dolar = $_POST["dolar"];
  $reais = $dolar * taxacambio;

  $dolarformat = number_format($dolar, 2, ",", ".");
  $reaisformat = number_format($reais, 2, ",", ".");

   echo "<p> Valor em dolar: <span> US$ $dolarformat </span> <br> 
            Valor em reais: <span> R$ $reaisformat </span> <br>
            Valor da taxa de câmbio <span> US$ ", taxacambio, " </span> </p>";
   ?>

</body>
</html>
