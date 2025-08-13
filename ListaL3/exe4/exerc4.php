<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL3 - Busca em matrizes com PHP </h1>

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

  //aluno pesquisado
  $alunoPesquisado = $_POST['aluno-pesquisado'];

  //a partir das 9 variáveis simples, vamos montar a matriz em PHP
  $matrizAlunos = [$matric1 => [$nome1, $media1], $matric2 => [$nome2, $media2], $matric3 => [$nome3, $media3]];
  
  // vetor auxiliar a partir da matriz original armazenando o nome e a matric
  foreach($matrizAlunos as $matric => $vetorInterno)
  {
       $vetorAux[$matric] = $vetorInterno[0];
  }

  // função array search pra achar a matricula do aluno pesquisado
  $matricAlunoPesq = array_search($alunoPesquisado, $vetorAux);

  if($matricAlunoPesq == false)
  {
    echo "<p> O aluno não foi encontrado. </p>";
  }
  else
  {
    $mediaAlunoPesq = $matrizAlunos[$matricAlunoPesq][1];
    echo "<p> Dados do aluno pesquisado: <br>
              Nome: $alunoPesquisado <br>
              Matrícula: $matricAlunoPesq <br>
              Média: $mediaAlunoPesq </p>";
  }
 ?>
</body>
</html>