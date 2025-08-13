<!DOCTYPE html> 
<html lang="pt-BR"> 

<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css"> 
</head>

<body> 

  <h1> ListaL2 - Exercício: Cálculo de média das notas com vetores </h1>

<?php
  //receber dados do form e guardamos em variaveis escalares
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  //criar o vetor
  $vetornotas = [$nota1, $nota2, $nota3];

  //fazer o php mostrar o vetor
  echo "<pre>";
  print_r($vetornotas);
  echo "</pre>";

  //calculo da média
  $soma = array_sum($vetornotas);

  $media = $soma/count($vetornotas);

  echo "<p> A média das notas dos três alunos é igual a: <span> $media </span> </p>";

?>

</body>
</html>