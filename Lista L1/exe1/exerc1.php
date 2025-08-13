<!DOCTYPE html> 
<html lang="pt-BR"> 

<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css"> 
</head>

<body> 

  <h1> ListaL1 - Exercício: envio de dados ao servidor com PHP </h1>

<?php

    $nomeDoAluno = &_POST["nome-aluno"];
    $nota1 = &_POST["nota1"];
    $peso1 = &_POST["peso1"];
    $nota2 = &_POST["nota2"];
    $peso2 = &_POST["peso2"];

    $media = ($nota1*$peso1 + $nota2*$peso2) / ($peso1 + $peso2);

    echo "<p> Nota final do aluno $nomeDoAluno: <span> $media </span> </p>"


?>

</body>
</html>