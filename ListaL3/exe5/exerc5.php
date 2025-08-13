<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
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

   $matrizAlunos = [$matric1 => [$nome1, $media1],
                   $matric2 => [$nome2, $media2],
                   $matric3 => [$nome3, $media3]];

   //para ordenarmos a matriz pela nota de PRW de cada aluno, vamos criar um vetor temporário, tendo, como conteúdo, a nota do aluno, e como índice, a sua matrícula, a partir do laço foreach
   foreach ($matrizAlunos as $matric => $vetorInterno)
    {
    $vetorNotas[$matric] = $vetorInterno[1];
    }

   //vamos aplicar a função que ordena o conteúdo deste vetor, pela nota, decrescentemente, mantendo a associação entre índice (matrícula) e o valor (nota) do vetor
   arsort($vetorNotas);

   echo "<table>
          <caption> Rendimento dos alunos cadastrados na matriz, ordenado, decrescentemente, pela nota de PRW </cpation>
          <tr>
           <th> Matrícula </th>
           <th> Nome </th>
           <th> Nota de PRW </th>
          </tr>";

   //vamos percorrer o vetor, já ordenado, com foreach, e retirar os dados, para enviá-los ao navegador, a fim de que sejam mostrados no formato tabular
   foreach($vetorNotas as $matric => $notaPRW)
    {
    $aluno = $matrizAlunos[$matric][0];
    echo "<tr>
           <td> $matric </td>
           <td> $aluno </td>
           <td> $notaPRW </td>
          </tr>";
    }
   echo "</table>";
 ?>
 
</body> 
</html> 