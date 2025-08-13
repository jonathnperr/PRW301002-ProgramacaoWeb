<?php
   $sql = "SELECT id, orcamento FROM $nomeDaTabela";
   $resultado = $conexao->query($sql) or exit($conexao->error);
   
   $numeroLinhasRetornadas = $conexao->affected_rows;
   
   if($numeroLinhasRetornadas == 0)
   {
       echo "<p> Tabela de medicamentos está vazia. </p>";
   }
   else
   {
       echo "<table>
              <tr>
                  <th> ID Projeto </th>
                  <th> Orçamento </th>
              </tr>";

   while ($registro = $resultado->fetch_array())
   {
       $id         = $registro["id"]; //optei por utilizar o nome da coluna por facilidade de identificação
       $orcamento  = $registro["orcamento"];

       $id         = htmlentities($id, ENT_QUOTES, "UTF-8");
       $orcamento  = htmlentities($orcamento, ENT_QUOTES, "UTF-8");

       echo "<tr>
        <td> $id </td>
        <td> R$ $orcamento </td>
      </tr>";
   }    
   }           
?>