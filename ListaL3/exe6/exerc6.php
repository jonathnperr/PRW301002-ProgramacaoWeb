<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
  <h1> ListaL3 - Farmácia </h1>

  <?php
  $nome1 = $_POST['nome1'];
  $nome2 = $_POST['nome2'];
  $nome3 = $_POST['nome3'];

  $cod1 = $_POST['cod1'];
  $cod2 = $_POST['cod2'];
  $cod3 = $_POST['cod3'];

  $preco1 = $_POST['preco1'];
  $preco2 = $_POST['preco2'];
  $preco3 = $_POST['preco3'];

  //a partir das 9 variáveis simples, vamos montar a matriz em PHP
  $matrizMed = [$cod1 => [$nome1, $preco1], $cod2 => [$nome2, $preco2], $cod3 => [$nome3, $preco3]];

  //item b) mostrar em formato tabular
  echo "<table>
  <caption> Relatório dos medicamentos </caption>
  <tr>
   <th> Código </th>
   <th> Nome do medicamento </th>
   <th> Preço </th>
  </tr>";

  foreach($matrizMed as $cod => $vetorInterno)
   {
    echo "<tr>
           <td> $cod </td>
           <td> $vetorInterno[0] </td>
           <td> R$ $vetorInterno[1] </td>
          </tr>";
   }
  echo "</table>";

  //item c) mostrar o menor com a funçao min
  foreach($matrizMed as $cod => $vetorInterno)
  {
       $vetorAux[$cod] = $vetorInterno[1];
  }

  $menorValor = min($vetorAux);
  $codMedMenorValor = array_search($menorValor, $vetorAux);
  $medMenorValor = $matrizMed[$codMedMenorValor][0];

  echo "<p> Dados do medicamento de menor valor: <br>
              Menor valor: R$ $menorValor <br>
              Código: $codMedMenorValor <br>
              Nome do medicamento: $medMenorValor </p>";

  //item d) pesquisa o cod do medicamento
  $codigoprocurado = $_POST["cod-pesquisado"];
  $encontrou = array_key_exists($codigoprocurado, $matrizMed);

  if($encontrou)
  {
    $nomeMed = $matrizMed[$codigoprocurado][0];
    $preco = $matrizMed[$codigoprocurado][1];
    echo "<p> Dados do medicamento procurado: <br>
          Valor: R$ $preco <br>
          Código: $codigoprocurado <br>
          Nome do medicamento: $nomeMed </p>";
  }
  else
  {
    echo "<p> Código de medicamento não encontrado. </p>";
  }

  //item e) mostrar em formato tabular os medicamentos em ordem alfabética crescente
  foreach ($matrizMed as $cod => $vetorInterno)
  {
  $vetorNomes[$cod] = $vetorInterno[0];
  }
  
  asort($vetorNomes);

  echo "<table>
        <caption> Medicamentos tabulados em ordem alfabética crescente </cpation>
        <tr>
         <th> Código </th>
         <th> Nome </th>
         <th> Valor </th>
        </tr>";

 foreach($vetorNomes as $cod => $nome)
  {
  $valor = $matrizMed[$cod][1];
  echo "<tr>
         <td> $cod </td>
         <td> $nome </td>
         <td> R$ $valor </td>
        </tr>";
  }
 echo "</table>";

 ?>
</body>
</html>