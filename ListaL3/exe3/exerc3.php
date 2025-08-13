<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL3 - exercício 1 - Matrizes em PHP </h1>

  <?php
  $nome1 = $_POST['nome1'];
  $nome2 = $_POST['nome2'];
  $nome3 = $_POST['nome3'];

  $matric1 = $_POST['matric1'];
  $matric2 = $_POST['matric2'];
  $matric3 = $_POST['matric3'];

  $media1 = $_POST['media1'];
  $media2 = $_POST['media2'];
  $media3 = $_POST['media3'];

  //a partir das 9 variáveis simples, vamos montar a matriz em PHP
  $matrizAlunos = [$matric1 => [$nome1, $media1], $matric2 => [$nome2, $media2], $matric3 => [$nome3, $media3]];
  
  // vetor auxiliar a partir da matriz original armazenando a matric e a media
  foreach($matrizAlunos as $matric => $vetorInterno)
  {
       $vetorAux[$matric] = $vetorInterno[1];
  }

  // funcao max no vetoraux
  $maiorMedia = max($vetorAux);

  // função array search pra achar a matricula do aluno com maior media
  $matricAlunoMaiorMedia = array_search($maiorMedia, $vetorAux);

  // ir ate a matriz recuperar o nome do aluno com maior media
  $alunoMaiorMedia = $matrizAlunos[$matricAlunoMaiorMedia][0];

  echo "<p> Dados do aluno com a maior média em PRW: <br>
              Maior média: $maiorMedia <br>
              Matrícula: $matricAlunoMaiorMedia <br>
              Nome do aluno: $alunoMaiorMedia </p>"

 ?>
</body>
</html>