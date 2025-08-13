<!DOCTYPE html> 
<html lang="pt-BR"> 

<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css"> 
</head>

<body> 

  <h1> ListaL2 - Exercício: Cálculo de média das notas com nomes e vetores </h1>

<?php
  //receber dados do form e guardamos em variaveis escalares
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];
  $nome1 = $_POST['nome1'];
  $nome2 = $_POST['nome2'];
  $nome3 = $_POST['nome3'];

  //criar o vetor com indice associativo, o nome de cada aluno será o endereço de memoria e a nota do aluno será o conteudo da célula
  $vetornotas = [$nome1 => $nota1, $nome2 => $nota2, $nome3 => $nota3];

  //fazer o php mostrar o vetor
  echo "<pre>";
  print_r($vetornotas);
  echo "</pre>";

  //percorrer o vetor e montar uma tabela na pagina web

  //cabeçalho
  echo "<table>
        <tr>
          <th>Nome</th>
          <th>Nota</th>
        </tr>";

foreach($vetornotas as $nome => $nota)
{
  echo "<tr>
          <td>$nome</td>
          <td>$nota</td>
        </tr>";
}
echo "</table>";
?>

</body>
</html>