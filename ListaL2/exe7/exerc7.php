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
  $idade1 = $_POST['idade1'];
  $idade2 = $_POST['idade2'];
  $idade3 = $_POST['idade3'];

  $nome1 = $_POST['nome1'];
  $nome2 = $_POST['nome2'];
  $nome3 = $_POST['nome3'];

  //criar o vetor com indice associativo

  $vetorpessoas = [$nome1 => $idade1, $nome2 => $idade2, $nome3 => $idade3];

  //ordena o vetor em ordem decrescente mantendo as associações entre chave/valor
  ksort($vetorpessoas);

  //percorrer o vetor e montar uma tabela na pagina web

  //cabeçalho
  echo "<table>
        <tr>
          <th>Nome</th>
          <th>Idade</th>
        </tr>";

foreach($vetorpessoas as $nome => $idade)
{
  echo "<tr>
          <td>$nome</td>
          <td>$idade</td>
        </tr>";
}
echo "</table>";

?>



</body>
</html>