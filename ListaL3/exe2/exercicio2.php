<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> ListaL3 - Matrizes em PHP: exercício 2 </h1>

 <?php
  $nota1       = $_POST['nota1'];
  $nota2       = $_POST['nota2'];
  $nota3       = $_POST['nota3'];

  $nome1       = $_POST["aluno1"];
  $nome2       = $_POST["aluno2"];
  $nome3       = $_POST["aluno3"];

  $matric1     = $_POST["matric1"];
  $matric2     = $_POST["matric2"];
  $matric3     = $_POST["matric3"];


  $matrizAlunos = [$matric1 => [$nome1, $nota1],
                   $matric2 => [$nome2, $nota2],
                   $matric3 => [$nome3, $nota3]];

  //para calcularmos a média da turma em PRW, vamos percorrer a matriz, criar um vetor temporário, armazenando, apenas as notas de PRW de cada aluno e, após o laço, usamos a função do PHP array_sum() sobre o vetor, para termos a soma de notas calculada, automaticamente, pelo PHP. Em seguida, finalizamos com o cálculo da média
 
  $soma = 0;
  
  foreach($matrizAlunos as $matric => $vetorInterno)
   {
    $soma = $soma + $vetorInterno[1];
   }
   
   $media = $soma/count($matrizAlunos);
   $mediaFormatada = number_format($media, 1, ",", ".");
   echo "<p> Média das notas de PRW dos alunos cadastrados na matriz: <span> $mediaFormatada </span> </p>";
 ?>
</body> 
</html> 