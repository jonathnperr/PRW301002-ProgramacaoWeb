<?php
 $sql = "SELECT * FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or exit($conexao->error);

 $numeroLinhasRetornadas = $conexao->affected_rows;

 if($numeroLinhasRetornadas == 0)
  {
  echo "<p> Tabela de medicamentos está vazia. </p>";
  }

 else
  {
  echo "<table>
         <caption> Relação de medicamentos cadastrados </caption>
         <tr>
          <th> Id </th>
          <th> Nome do medicamento </th>
          <th> Preço do medicamento </th>
          <th> Data de validade </th>
         </tr>";


  while($registro = $resultado->fetch_array())
   {
   $id           = htmlentities($registro[0], ENT_QUOTES, "UTF-8");
   $Medicamento  = htmlentities($registro[1], ENT_QUOTES, "UTF-8");
   $preco        = htmlentities($registro[2], ENT_QUOTES, "UTF-8");
   $validade     = htmlentities($registro[3], ENT_QUOTES, "UTF-8");

   echo "<tr>
          <td> $id </td>
          <td> $Medicamento </td>
          <td> $preco </td>
          <td> $validade </td>
         </tr>";
   }
  echo "</table>";
  }