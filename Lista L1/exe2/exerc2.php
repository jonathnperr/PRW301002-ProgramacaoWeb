<!DOCTYPE html> 
<html lang="pt-BR"> 

<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css"> 
</head>

<body> 

  <h1> ListaL1 - Exercício 2: Cálculo do consumo de combustível </h1>

<?php

    $dist = $_POST["dist"];
    $consumo = $_POST["consumo"];
    $preco = $_POST["preco"];

    $litrosap = $dist/$consumo;
    $pagar = $litrosap*$preco;

    $pagar = number_format($pagar, 2, ",", ".");
    $litrosap = number_format($litrosap, 1, ",", ".");
    $preco = number_format($preco, 2, ",", ".");

    echo "<p> Total gasto com a viagem: <span> R$ $pagar </span>; <br> Litros consumidos: <span> $litrosap litros </span>; <br> Preço pago por litro: <span> R$ $preco </span> ;</p>";

?>

</body>
</html>
