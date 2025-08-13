<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">

</head> 

<body> 
 <h1> ListaL1 - Exercício 6: Loja de informática </h1>

 <?php
  $valorCompra = $_POST["valor-compra"];
  $percentComissao = $_POST["percent-comissao"];

  $comissao = $valorCompra * $percentComissao/100;

  echo "<p> Valor da comissão do vendedor é de <span> R$ $comissao </span> </p>";
 ?>
</body> 
</html> 